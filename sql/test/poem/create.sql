CREATE TABLE `poem` (
    `poem_id` int(10) unsigned auto_increment,
    `user_id` int(10) unsigned not null,
    `title` varchar(255) not null,
    `body` text,
    `views` int(10) unsigned NOT NULL DEFAULT '0',
    `created` datetime not null,
    PRIMARY KEY (`poem_id`),
    INDEX `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
