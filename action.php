<?php 


include 'connect.php';
if(!empty($_POST['email'])){
    die('');
}

$email = $_POST['email'];
$password = $_POST['password'];

$select_data = 'SELECT username, password FROM user';
$sel_query = mysqli_query($connect, $select_data);


if(mysqli_num_rows($sel_query) > 0){    
    while($row = mysqli_fetch_assoc($sel_query)){
        // echo 'Name: ' . $row['username'] . ', Password: ' . $row['password'] . '<br/>';
        if($row['username'] == $email && $row['password'] == $password){
            echo $action = false;
        }
        else{
            echo $action = true ;
        }
    }
}
else{
    echo 'false';
}

?>