<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<?= require './inc/header.php'?>
<main class="container">

<div class="btn_groups d-flex justify-content-between">
    <a href="add.php" class="btn btn-primary my-4">Create</a>
    
    <div class="auth">
        <a href="registration.php" class="btn btn-primary my-4">Registration</a>
        <a href="login.php" class="btn btn-primary my-4">Login</a>
    </div>

</div>

    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile</th>
                <th scope="col">Email</th>
                <th scope="col">Update</th>
            </tr>
        </thead>

        <style>
       
        </style>
     
        <?php  
            while($request = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td>".$request['id']."</td>";
                echo "<td>".$request['name']."</td>";
                echo "<td>".$request['mobile']."</td>";    
                echo "<td>".$request['email']."</td>";    
                echo "<td><a href='edit.php?id=$request[id]'>Edit <i class='fa-solid fa-file-pen '></i></a> | <a href='delete.php?id=$request[id]'>Delete <i class='fa-solid fa-trash'></i></a></td></tr>";        
            }    
        ?>
    
       
    </table>
    </main>

<?= include './inc/footer.php'?>
