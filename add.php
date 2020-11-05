<?php 
echo "He";
$item = $_POST['item'];

if(isset($_GET['update_task'])){
    if(empty($_POST['item'])){
        $errors = 'You must fill in the task';
    }
    else{
        $item = $_POST['item'];
        echo $item;
        $id = $_GET['update_task'];
        // $update = "UPDATE list SET task=$item WHERE id=$id";
        mysqli_query($connect, "UPDATE list SET task = $item WHERE id=" .$id);
        // header('location: mytodolist.php');

    }
}

?>