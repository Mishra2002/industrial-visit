<?php

$conn = mysqli_connect('localhost','root','','ivproj',3306);
if($conn){
    echo "<script> alert('DB connected') </script>";
}
else{
    echo "<script> alert('DB connection Failed') </script>";
}

?>