 <!----------****----- Create Posts PHP -----****---------->
 <?php include "includes/crud_ops/create.php"; ?>
 
 <!----------*****------ form-right -----*****----------->
 <div class="form-right">
                        <h1>Create Post</h1>
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
