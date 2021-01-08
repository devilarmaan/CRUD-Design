<?php
///Code...
if(isset($_GET['deleteId'])){
    $delete_id = $_GET['deleteId'];

    ///Set Header On Load Page Buffer..
    header("Location: index.php");

    //Make Delete Query..
    $delete_query = "DELETE FROM `crud_posts_data` WHERE `id` = {$delete_id}";
    $delete_result = mysqli_query($connection, $delete_query);

    //checking query..
    if(!$delete_result){
        die("ERR! when try to delete post ".mysqli_error($connection));
    }
}