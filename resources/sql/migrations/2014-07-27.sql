ALTER TABLE `posts` ADD `status` ENUM('published','pending','deprecated') NOT NULL AFTER `created`;