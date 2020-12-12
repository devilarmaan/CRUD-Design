
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | Design</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->

    <link rel="stylesheet" href="assets/fontawesome/css/all.main.css">
    <link rel="stylesheet" href="assets/fontawesome/css/fontawesome.min.css">
    <script async defer src="assets/fontawesome/js/all.main.js"></script>
    <script async defer src="assets/fontawesome/js/fontawesome.min.js"></script>

</head>

<!-- Body Of this HTML page -->

<body>
    <div class="dark-bg">
        <section id="fansy-form">
            <div class="container">
                
                <!--------- The Form Section Here ----------->
                <div class="form-section">

                <!-- Left Side View Section Of Posts -->
                <?php include "includes/common/view_post.php"; ?>

                <!-- Create Section Posts -->
                <?php 
                    if(isset($_GET['post_update'])){
                        include "includes/common/update_post.php";
                        
                    }else{
                        include "includes/common/create_post.php";
                    }
                ?>
                <?php  ?>

                </div>
            </div>

        </section>
    </div>
</body>

</html>