<?php
///PHP code here...
//lets connecting the database..
$connection = mysqli_connect('localhost', 'root', '', 'crud_design');

//Check the Connection of Database...
if (!$connection) {
    die("<h3 style='color: red'>Connection ERROR!</h3>".mysqli_errno($connection));
}

//Data Post to Database with Procedurial Way...
if (isset($_POST['send'])){
    $authorname = $_POST['authorname'];
    $title = $_POST['title'];
    $address = $_POST['addressname'];
    $post = $_POST['post'];

    if($authorname !== '' && $title !== '' && $address !== '' && $post !== ''){
        $query = "INSERT INTO `crud_posts_data`(`authorname`, `title`, `addressname`, `post`) ";
        $query .= "VALUES ('$authorname', '$title', '$address', '$post')";

        $result = mysqli_query($connection, $query);

        //checking the query in ok or no...
        if(!$result){
            die("<h3 style='color: red'>Query ERROR!</h3>".mysqli_errno($result));
        }
    }else{
        echo "<h3 style='color: red; text-align: center; margin-top: 1rem'>Please Insert Value!</h3>";
    }
}

///For Showing Data into frontEnd...
    ///Inserting all of data...
    $data_query_all = "SELECT * FROM `crud_posts_data`";
    $query_all_result = mysqli_query($connection, $data_query_all);

    ///The Condition to checking Query
    if(!$query_all_result){
        die("<h3 style='color: red'>Query ERROR! When Goes to showing all data</h3>" . mysqli_errno($query_all_result));
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | Design</title>

    <link rel="stylesheet" href="assets/fontawesome/css/all.main.css">
    <link rel="stylesheet" href="assets/fontawesome/css/fontawesome.min.css">
    <script async defer  src="assets/fontawesome/js/all.main.js"></script>
    <script async defer src="assets/fontawesome/js/fontawesome.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<!-- Body Of this HTML page -->

<body>
    <div class="dark-bg">
        <section id="fansy-form">
            <div class="container">

                <!--------- The Form Section Here ----------->
                <div class="form-section">
                    <!---------********---- form-left ------********----------->
                    <div class="form-left">
                        <h1>Get in Touch</h1>
                        <div class="line"></div>
                        <p>Contact us for a new updates</p>

                        <!--first heading-->
                        <?php
                        while ($row = mysqli_fetch_assoc($query_all_result)) {
                            $id = $row['id'];
                            $authorname = $row['authorname'];
                            $title = $row['title'];
                            $address = $row['addressname'];
                            $post = $row['post'];
                        ?>
                            <div style="border: 1px solid grey;" class="remove">
                                <ul style="list-style-type: none;">
                                <link rel="stylesheet" href="assets/fontawesome/css/all.main.css">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>

                                    <li>
                                        <span>Author Name:- </span>
                                        <span><?php echo $authorname;?></span>
                                    </li>
                                    <li>
                                        <span>Title of Post:- </span>
                                        <span><?php echo $title;?></span>
                                    </li>
                                    <li>
                                        <span>Address Of City:- </span>
                                        <span><?php echo $address;?></span>
                                    </li>
                                    <li>
                                        <span>Post:- </span>
                                        <span><?php echo $post;?></span>
                                    </li>
                                </ul>
                            </div>
                            <br>
                        <?php
                        }
                        ?>
                        <br>

                        <!-------social media icons------>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-youtube"></a>
                        <a href="#" class="linkedin"></a>
                    </div>


                    <!----------*****------ form-right -----*****----------->
                    <div class="form-right">
                        <h1>Contact Us</h1>
                        <div class="line"></div>

                        <!--form-->
                        <form action="index.php" method="post">

                            <!-- Author Input -->
                            <h5>Author</h5>
                            <input type="text" name="authorname" placeholder="Your Name...">
                            <br><br>

                            <!-- Title Input -->
                            <h5>Title</h5>
                            <input type="text" name="title" placeholder="Title..">
                            <br><br>

                            <!-- Address Input -->
                            <h5>Address</h5>
                            <input type="text" name="addressname" placeholder="City...">
                            <br><br>

                            <!-- Post TextArea -->
                            <h5>Your Post</h5>
                            <textarea name="post" placeholder="Post..." id="" cols="30" rows="10"></textarea>

                            <!-- Input Form Submit For -->
                            <button type="submit" name="send">Send</button>
                        </form>
                    </div>
                </div>
            </div>

        </section>
    </div>
</body>

</html>