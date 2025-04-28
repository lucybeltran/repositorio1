<?php

if($_SERVER['REQUEST_METHOD']== "GET"){
    $user_id = $_GET['id'];
    include_once "../views/post_form.php";
    exit;
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    include_once "../models/Post.php";
    $user_id =  $_POST["user_id"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    //dddd
    $post = new Post();
    $post->create($title,$content,$user_id);
    header('Location: user_index.php');
}