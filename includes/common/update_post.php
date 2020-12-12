<!-- Update PHP -->
<?php include "includes/crud_ops/update.php"; ?>

 <!----------*****------ form-right -----*****----------->
 <div class="form-right">
                        <h1>Update Post</h1>
                        <div class="line"></div>

                        <!--form-->
                        <form method="post">

                            <!-- Author Input -->
                            <h5>Author</h5>
                            <input type="text" name="authorname" value="<?php echo $authorname ;?>">
                            <br><br>

                            <!-- Title Input -->
                            <h5>Title</h5>
                            <input type="text" name="title" value="<?php echo $title ;?>">
                            <br><br>

                            <!-- Address Input -->
                            <h5>Address</h5>
                            <input type="text" name="addressname" value="<?php echo $addressname; ?>">
                            <br><br>

                            <!-- Post TextArea -->
                            <h5>Your Post</h5>
                            <textarea name="post" id="" cols="30" rows="10"><?php echo $post; ?></textarea>

                            <!-- Input Form Submit For -->
                            <button type="submit" name="make-update">Update!</button>
                        </form>
                    </div>