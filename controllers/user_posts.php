<?php

if($_SERVER['REQUEST_METHOD']== "GET"){
    require_once "../models/Post.php";
    $user_id = $_GET["id"];

    $post = new Post();
    $posts = $post->userPosts($user_id);
    if($posts){
        include_once "../views/user_posts.php";
        exit;
    }else{
        include_once "../views/404.php";
        exit;
    }
}
