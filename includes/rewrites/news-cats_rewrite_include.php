<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| File Category: Core Rewrite Modules
| Author: Hien (Frederick MC Chan)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) { die("Access Denied"); }

$regex = array(
	"%news_cat_id%" => "([0-9]+)", 
	"%news_cat_name%" => "([0-9a-zA-Z._\W]+)",
);

$pattern = array(
    "news/category/uncategorized"                 => "infusions/news/news.php?cat_id=0&amp;filter=false",
    "news/category/%news_cat_id%/%news_cat_name%" => "infusions/news/news.php?cat_id=%news_cat_id%"
);

$dir_path = ROOT;
$dbname = DB_NEWS_CATS;
$dbid = array("%news_cat_id%" => "news_cat_id");
$dbinfo = array("%news_cat_name%" => "news_cat_name");
