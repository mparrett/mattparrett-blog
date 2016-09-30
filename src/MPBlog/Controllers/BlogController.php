<?php

namespace MPBlog\Controllers;

/**
 * mattparrett.com
 * Controller for /blog
 */
class BlogController extends \MP\Framework\Controller
{
    private $blog;

    public function initBlog()
    {
        // Memoize
        if ($this->blog === null) {
            $this->blog = new \MPBlog\App\Blog($this->di->get('db'), $this->di->get('templates'));
        }
    }

    /**
     * Handle markdown page
     */
    public function page_md($req, $resp)
    {
        $t = $this->di->get('templates');
        $config = $this->di->get('app_config');

        $vars = array();
        try {
            $vars['body'] = $t->render($config['project_prefix'].'/pages/'.$req->path_args[0].'.md');
            $vars['_req'] = $req;
            $resp->end($t->render('blog/page.php', $vars));
        } catch (\Exception $e) {
            $resp->end('page not found '.$e->getMessage());
        }

        return $vars;
    }

    /**
     * Handle PHP page
     */
    public function page_php($req, $resp)
    {
        $t = $this->di->get('templates');
        $config = $this->di->get('app_config');

        $vars = array();
        try {
            $vars['body'] = $t->render($config['project_prefix'].'/pages/'.$req->path_args[0].'.php');
            $vars['_req'] = $req;
            $resp->end($t->render('blog/page.php', $vars));
        } catch (\Exception $e) {
            $resp->end('page not found '.$e->getMessage());
        }

        return $vars;
    }

    public function index()
    {
        $this->initBlog();

        $t = $this->di->get('templates');
        $config = $this->di->get('app_config');

        // Get last 5 posts
        $vars['posts'] = $this->blog->getPosts(0, 5, '`created` DESC');
        $vars['about'] = $t->render($config['project_prefix'].'/pages/about.md');

        $this->template = 'front.php';

        return $vars;
    }

    public function archive($req, $resp)
    {
        list($yyyy, $mm) = $req->path_args;

        $this->initBlog();

        $posts = $this->blog->getArchivedPosts($yyyy, $mm);

        $this->template = 'posts-list.php';

        return array('posts' => $posts);
    }

    public function posts()
    {
        $this->initBlog();

        $posts = $this->blog->getAllPosts();

        $this->template = 'posts-list.php';

        return array('posts' => $posts);
    }

    public function post($req, $resp)
    {
        $id = (int)$req->path_args[2];

        $this->initBlog();

        $post = $this->blog->getPostById($id);

        if (!$post) {
            return $this->notFound();
        }

        return array('post' => $post, 'next' => $id + 1, 'prev' => $id - 1);
    }

    public function post_shortlink($req, $resp)
    {
        list($year, $month, $shortlink) = $req->path_args;

        $this->initBlog();
        $post = $this->blog->getPostByLink($shortlink);

        if (!$post) {
            $resp->end('not found');
            return;
        }

        $vars['post'] = $post;
        $vars['_req'] = $req;

        // This produces equivalent output
        //$t = $this->di->get('templates');
        //$resp->end($t->render('blog/post.php', $vars));

        $this->template = 'blog/post.php';

        return $vars;
    }
}
