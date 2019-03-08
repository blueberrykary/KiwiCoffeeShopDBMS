<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysqli_connect("localhost","root","","kcshopp");
    $query=mysqli_query($con, "select * from category where name LIKE '%{$key}%'");
    while($row=mysqli_fetch_assoc($query))
    {
      $array[] = $row['name'];
    }
    echo json_encode($array);
    mysqli_close($con);
?>