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
                $check = false;
            }
            else{
                $check = true;
            }
        }
    }
    else{
        echo ' query false';
    }
    if($check){
        // $email = $_POST['email'];
        // $password = $_POST['password'];

        $addItem = "INSERT INTO user (username, password) VALUES ('$email', '$password')";
        if(mysqli_query($connect, $addItem)){
            echo "Quá trình đăng ký thành công. <a href='todolist.php'>Về Đăng Nhập</a>";
        }
        else{
            echo "Có lỗi xảy ra trong quá trình đăng ký.";
        }
    }
    else{
        echo "Account already exists.  <a href='todolist.php'>Thử lại</a>";

    }
    

    mysqli_close($connect); 
 
?>