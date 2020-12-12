<?php
///For Showing Data into frontEnd...
///Inserting all of data...
$data_query_all = "SELECT * FROM `crud_posts_data`";
$query_all_result = mysqli_query($connection, $data_query_all);

///The Condition to checking Query
if (!$query_all_result) {
    die("<h3 style='color: red'>Query ERROR! When Goes to showing all data</h3>" . mysqli_errno($query_all_result));
}
