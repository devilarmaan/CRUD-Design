<?php
///Code..
if(isset($_GET['post_update'])){
    if(isset($_GET['updateId'])){
        $update_id = $_GET['updateId'];
    }

        ///fetching all posts data..
        $all_posts = "SELECT * FROM `crud_posts_data` WHERE `id` = {$update_id}";
        $all_posts_result = mysqli_query($connection, $all_posts);

        //checking query..
        if(!$all_posts_result){
            die("GET ERR! when try to fetch all data from posts update ".mysqli_error($connection));
        }

        //fetching all data..
        while($fetch_posts = mysqli_fetch_assoc($all_posts_result)){
            $authorname = $fetch_posts['authorname'];
            $title = $fetch_posts['title'];
            $addressname = $fetch_posts['addressname'];
            $post = $fetch_posts['post'];
        }
}

//Update Form Submission..
if(isset($_POST['make-update'])){
    //Users Data..
    $user_authorname = $_POST['authorname'];
    $user_title = $_POST['title'];
    $user_address = $_POST['addressname'];
    $user_post = $_POST['post'];

    ///Real Strings..
    $user_authorname = mysqli_real_escape_string($connection, $user_authorname);
    $user_title = mysqli_real_escape_string($connection, $user_title);
    $user_address = mysqli_real_escape_string($connection, $user_address);
    $user_post = mysqli_real_escape_string($connection, $user_post);

    ///Loading Buffer in-page..
    header("Location: index.php?post_update&updateId={$update_id}");

    //make query for update data..
    $update_query = "UPDATE `crud_posts_data` SET ";
    $update_query .= "`authorname` = '{$user_authorname}', ";
    $update_query .= "`title` = '{$user_title}', ";
    $update_query .= "`addressname` = '{$user_address}', ";
    $update_query .= "`post` = '{$user_post}' ";
    $update_query .= "WHERE `id` = {$update_id}";
    $update_result = mysqli_query($connection, $update_query);

    //checking query..
    if(!$all_posts_result){
        die("GET ERR! when try to updates data of post update specific ".mysqli_error($connection));
    }
}