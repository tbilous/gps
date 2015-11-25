<?php

$recepient = "tbilous@gmail.com";
$sitename = "Unitrack";


$comment = trim($_POST["comment"]);
$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$head = trim($_POST["head"]);
$message = "Name: $name \nPhone: $phone \nComment: $comment\nTitle: $head";

$pagetitle = "New request from \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
