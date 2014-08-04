<div class="container">
	<nav class="blog-nav">
		<a class="blog-nav-item<?php if ($_req->getPath() == '/') { echo ' active'; } ?>" href="/">Home</a>
		<a class="blog-nav-item<?php if ($_req->getPath() == '/blog') { echo ' active'; } ?>" href="/blog">Blog</a>
		<a class="blog-nav-item<?php if ($_req->getPath() == '/photos') { echo ' active'; } ?>" href="/photos">Photos</a>
		<a class="blog-nav-item<?php if ($_req->getPath() == '/experiments') { echo ' active'; } ?>" href="/experiments">Experiments</a>
		<a class="blog-nav-item<?php if ($_req->getPath() == '/projects') { echo ' projects'; } ?>" href="/projects">Projects</a>
		<a class="blog-nav-item<?php if ($_req->getPath() == '/resume') { echo ' active'; } ?>" href="/resume">Hire me!</a>
	</nav>
</div>