<?php
date_default_timezone_set('Asia/Tokyo');
mb_internal_encoding("UTF-8");

$tommorow = date("Y-m-d 03:07:00");//,strtotime("+1 day")
$unixTommorow = strtotime($tommorow);

$slackApiKey = "xoxp-166232831345-166209035744-266988840611-5b7acc4e2912ff45287909ecb9736934";
$alertText = "あいうえお";
$url = "https://slack.com/api/reminders.add?token=${slackApiKey}&text=${alertText}&time=${unixTommorow}";

file_get_contents($url);