<?php

// Processes a wordpress XML dump, downloading attachments if necessary
// Render result as markdown
if ($argc < 2) {
    echo "Please provide a filename\n";
    die;
}

require '../vendor/autoload.php';
$md = new HTML_To_Markdown();

$md->set_option('strip_tags', true);
$md->set_option('suppress_errors', false);

$xml = simplexml_load_string(file_get_contents($argv[1]));
$ns = $xml->getNamespaces(true);

mkdir('/tmp/wp-export/images', true);

// Just require the console initializer
require_once __DIR__.'/console.php';

$db = $di->get('db');
$db->query_all("TRUNCATE TABLE posts");

foreach ($xml->channel->item as $item) {
    $creator = $item->children('dc', true);

    // $item->link
    $content = $item->children($ns['content']);
    $content = (string) trim($content->encoded);

    $wp = $item->children($ns['wp']);

    // Download the attachments
    if ($wp->attachment_url) {
        exec("cd /tmp/wp-export/images && wget {$wp->attachment_url}");
    }

    if (preg_match('/png|jpg$/', $wp->post_name)) {
        continue;
    }

    if (strlen($content) == 0) {
        continue;
    }

    $date = date("Y-m-d H:i:s", strtotime($item->pubDate));
    $author = "Matt";

    return;
    $query = "INSERT INTO posts (title, shortlink, body_template, author_name, created) VALUES ( ?, ?, ?, ?, ? )";

    $db->exec_stmt(
        $query,
        'sssss',
        array(
            (string)$item->title,
            (string)$wp->post_name,
            (string)'mp-blog/posts/wp-export/'.$wp->post_name.'.md',
            (string)$author,
            (string)$date
        ));

    echo $wp->post_name.' '.strlen($content)."\n";
    continue;

    file_put_contents('/tmp/wp-export/'.$wp->post_name.'.html', $content);
    //file_put_contents('/tmp/wp-export/'.$wp->post_name.'.md', $md->convert($content));
    file_put_contents('/tmp/wp-export/'.$wp->post_name.'.md', strip_tags($content));

    echo $wp->post_name.' '.strlen($content)."\n";
}
