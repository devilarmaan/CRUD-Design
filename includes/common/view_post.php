<!-- Read PHP -->
<?php include "includes/crud_ops/read.php"; ?>

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


                                <ul style="list-style-type: none; text-align: right;">
                                    <li class="up">
                                        <a href="#"><i class="fa fa-trash-o" style="color: white;"></i></a>
                                        <a href="#"><i class="fa fa-wrench" style="color: white;"></i></a>
                                    </li>

                                </ul>


                                <ul style="list-style-type: none;">

                                    <!-- <link rel="stylesheet" href="assets/fontawesome/css/all.main.css"> -->



                                    <!-- <li style="text-align: right;"><a href="#"><i class="fas fa-marker" style="color: white;"></i></a> -->

                                    <li>
                                        <span>Author Name:- </span>
                                        <span><?php echo $authorname; ?></span>
                                    </li>
                                    <li>
                                        <span>Title of Post:- </span>
                                        <span><?php echo $title; ?></span>
                                    </li>
                                    <li>
                                        <span>Address Of City:- </span>
                                        <span><?php echo $address; ?></span>
                                    <li>
                                        <span>Post:- </span>
                                        <span><?php echo $post; ?></span>
                                    </li>
                                    </li>
                                    <!-- </li> -->
                                </ul>

                            </div>
                            <br>
                        <?php
                        }
                        ?>
                        <br>

                        <!-------social media icons------>
                        <!-- <link rel="stylesheet" href="assets/fontawesome/css/all.main.css"> -->
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-youtube"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                    </div>