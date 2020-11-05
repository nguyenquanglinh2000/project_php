<?php 

include 'connect.php';

$del = "DELETE FROM list";
if(mysqli_query($connect, $del)){
    echo " delete successful";
}
else{
    echo "nope";
}

?>

