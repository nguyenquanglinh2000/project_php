<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
    }

    body {
        background-color: #dddddd;
    }

    .app {
        width: 40%;
        height: 750px;
        margin: auto;
        position: relative;
        display: block;

    }

    .image_logo {
        margin: auto;
        width: 200px;
        height: 200px;
    }

    .image_logo img {
        max-width: 100%;
        max-height: 100%;
    }

    h2 {
        font-family: 'Times New Roman', Times, serif;
        color: #2c3e50;
        font-size: 40px;
    }

    .listtodo_content {
        width: 100%;
        height: 100%;
    }

    .listtodo_content p {
        font-family: 'Times New Roman', Times, serif;
        font-size: 20px;
    }

    #creat_list {
        padding: 15px;
        width: 95%;
        margin-bottom: 1%;
        margin-top: 1%;
        border-radius: 5px;
        display: inline-block;
        font-size: 15px;
        background-color: #faf2f2;
        color: #1E5F74;

    }

    .check_all {
        width: 100%;
        height: 50px;
        padding-top: 1%;
        border-top: 1px solid #b2acac;
        border-bottom: 1px solid #b2acac;

    }

    .right_txt {
        position: absolute;
        z-index: 1;
        top: 50%;
        right: 0px;
    }

    .log_out {
        height: 50px;
        width: 50%;
        margin: auto;
    }

    .log_out input {
        display: block;
        border: 1px solid rgba(29, 5, 5, 0.46);
        border-radius: 5px;
        padding: 15px;
        outline: none;
        width: 50%;
        margin-bottom: 20px;
        cursor: pointer;
        background-color: #1E5F74;
        color: white;
        position: absolute;
        z-index: 0;
        bottom: 0px;
        margin: auto;
    }

    .log_out input:hover {
        color: black;
        background-color: #a2d5f2;
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
    }

    #num_item {
        float: right;
    }

    .list {
        width: 80%;
        height: 200px;
        margin: auto;
        margin-top: 3%;
        overflow: auto;
        font-size: 25px;
        padding: 0px 60px;
    }

    th {
        font-size: 19px;
        color: #6B8E23;
    }

    th, td{
        border: none;
        height: 30px;
        padding: 2px;
    }
    .task {
	    text-align: center;
    }
    .id {
	    text-align: center;
    }

    .delete{
        text-align: center;
    }
    .delete a{
        color: white;
        background: red;
        padding: 1px 6px;
        border-radius: 3px;
        text-decoration: none;
    }
    table {
        width: 100%;
        border-collapse: collapse;
}
.error{
    color:red;
}
</style>


<?php 

$errors = '';

//connect server
$connect = mysqli_connect('localhost', 'root', '', 'todoList');

// hander
if(isset($_POST['add_btn'])){
    if(empty($_POST['item'])){
        $errors = 'You must fill in the task';
    }
    else{
        $item = $_POST['item'];
        $insert_item = "INSERT INTO list (task) VALUES ('$item')";
        mysqli_query($connect, $insert_item);
        header('location: mytodolist.php');
    }
}

// delete task
if (isset($_GET['del_task'])) {
    $id = $_GET['del_task'];
    
    mysqli_query($connect, "DELETE FROM list WHERE id=".$id);
    header('location: mytodolist.php');
}
// Update task
// if(isset($_POST['update_data'])){
//     if(empty($_POST['item'])){
//         $errors = 'You must fill in the task';
//     }
//     else{
//         $itemup = $_POST['item'];
//         $idup = $_GET['del_task'];
//         mysqli_query($connect, "UPDATE list SET task = $itemup WHERE id=" .$idup);
//         header('location: mytodolist.php');
//     }
// }

// Select database
$sel = 'SELECT * FROM list';
$list = mysqli_query($connect, $sel);


?>

<body>
    <div class="app">
        <div class="image_logo">
            <img src="php.png" alt="">
        </div>

        <div class="listtodo_content">

            <h2>My todo list</h2>

            <p>user: </p>
            <form action="mytodolist.php" method="post" id='form' name="myform">
            <input type="text" name="item" id="creat_list" placeholder="What needs to be done">

            <div class="check_all">
                <div class="error">
                    <?php if(isset($errors)){?>
                    <?php echo $errors; ?>
                    <?php } ?>
                </div>

            </div> <!-- end check all-->
            <div class="list">
                <table>
                    <thead>
                        <th>STT</th>
                        <th>Task</th>
                        <th>Action</th>
                    </thead>

                    <tbody>
                        <?php $i=1; while($row = mysqli_fetch_array($list)){ ?>
                        <tr>
                            <td class='id'> <?php echo $i ?></td>
                            <td class='task'> <?php echo $row['task'] ?></td>
                            <td class='delete'> <a href="mytodolist.php?del_task=<?php echo $row['id'] ?>">x</a>
                                                <!-- <input type="button" name='update_data' value='Update'> -->
                            </td>
                        </tr>
                        <?php $i++; } ?>
                        </tbody>
                </table>
            </div>
            <input type="submit" style="display:none;" value="Add Item" name='add_btn' id="add_btn">

        </form>
            <div class="log_out">
                <!-- <input type="button" value="Log Out"> -->
            </div>
        </div> <!-- end content list-->
    </div> <!-- end app -->
 
</body>


</html>