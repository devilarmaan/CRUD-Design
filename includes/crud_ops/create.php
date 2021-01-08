<?php
//Data Post to Database with Procedurial Way...
if (isset($_POST['send'])) {
    $authorname = $_POST['authorname'];
    $title = $_POST['title'];
    $address = $_POST['addressname'];
    $post = $_POST['post'];

    ///Real Strings..
    $authorname = mysqli_real_escape_string($connection, $authorname);
    $title = mysqli_real_escape_string($connection, $title);
    $address = mysqli_real_escape_string($connection, $address);
    $post = mysqli_real_escape_string($connection, $address);

    //On-page buffer..
    header("Location: index.php");

    if ($authorname !== '' && $title !== '' && $address !== '' && $post !== '') {
        $query = "INSERT INTO `crud_posts_data`(`authorname`, `title`, `addressname`, `post`) ";
        $query .= "VALUES ('$authorname', '$title', '$address', '$post')";

        $result = mysqli_query($connection, $query);

        //checking the query in ok or no...
        if (!$result) {
            die("<h3 style='color: red'>Query ERROR!</h3>" . mysqli_errno($result));
        }
    } else {
        echo "<h3 style='color: red; text-align: center; margin-top: 1rem'>Please Insert Value!</h3>";
    }
}
