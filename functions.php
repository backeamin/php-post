<?php

$today = date("d.M.Y");

$title = isset($_POST['title']) ? $_POST['title'] : null;
$p_ditails = isset($_POST['p_ditails']) ? $_POST['p_ditails'] : null;
$author = isset($_POST['author']) ? $_POST['author'] : null;
$date = empty($_POST['date']) ? $today : $_POST['date'];
$read_time = isset($_POST['read_time']) ? $_POST['read_time'] : null;
$r_post1 = isset($_POST['r_post1']) ? $_POST['r_post1'] : null;
$r_post2 = isset($_POST['r_post2']) ? $_POST['r_post2'] : null;
$r_post3 = isset($_POST['r_post3']) ? $_POST['r_post3'] : null;
$r_post4 = isset($_POST['r_post4']) ? $_POST['r_post4'] : null;
$r_post5 = isset($_POST['r_post5']) ? $_POST['r_post5'] : null;



