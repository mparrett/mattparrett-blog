<?php

namespace MPBlog\App;

class Blog {
	private $db;
	private $t;

	function __construct(&$db, &$t)
	{
		$this->db = $db;
		$this->t = $t;
	}

	function getArchivedPosts($yyyy, $mm)
	{
		$yyyy = (int)$yyyy;
		$mm = (int)$mm;

		return $this->db->map(
			"
			SELECT * FROM posts
			WHERE MONTH(`created`) = $mm AND YEAR(`created`) = $yyyy
			ORDER BY `created` DESC
			",
			array($this, 'formatBlogPostRow')
		);
	}

	function getAllPosts()
	{
		return $this->db->map(
			'
			SELECT * FROM posts
			ORDER BY `created` DESC
			',
			array($this, 'formatBlogPostRow')
		);
	}

	function getPostByLink($shortLink)
	{
		$shortLink = $this->db->escape($shortLink);

		$posts = $this->db->map(
			"
			SELECT * FROM posts WHERE shortlink = '$shortLink'
			",
			array($this, 'formatBlogPostRow')
		);

		if (!$posts === false && count($posts) == 0)
			return false;

		return array_pop($posts);
	}

	function getPostById($id)
	{
		$id = (int)$id;

		$posts = $this->db->map(
			"
			SELECT * FROM posts WHERE id = $id
			",
			array($this, 'formatBlogPostRow')
		);

		if (!$posts === false && count($posts) == 0)
			return false;

		return array_pop($posts);
	}

	function getPosts($offset, $count, $orderBy = '')
	{
		if ($orderBy != '')
			$orderBy = 'ORDER BY '.$orderBy;

		$limit = 'LIMIT '.$offset.', '.$count;

		return $this->db->map(
			"
			SELECT * FROM posts
			$orderBy $limit
			",
			array($this, 'formatBlogPostRow')
		);
	}

	function formatBlogPostRow(&$row)
	{
		$row['date'] = date('l, F j, Y', strtotime($row['created']));
		$row['date_short'] = date('F j, Y', strtotime($row['created']));

		if (!is_null($row['body_template'])) {
			$row['body'] = $this->t->render($row['body_template']);
		}

		return $row;
	}

}
