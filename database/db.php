<?php
///PHP code here...
//lets connecting the database..
$connection = mysqli_connect('localhost', 'root', '', 'CRUD_Design');

//Check the Connection of Database...
if (!$connection) {
    die("<h3 style='color: red'>Connection ERROR!</h3>" . mysqli_errno($connection));
}
