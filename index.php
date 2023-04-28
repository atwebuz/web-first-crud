<?php
include_once("config.php");

$s_id="";
$s_name="";

if (isset($_POST['name'] ) && strlen($_POST['name'])){

    $s_name = " and name = '{$_POST['name']}' "; 
} 

if (isset($_POST['id'])){
    $s_name = " and id = {$_POST['id']} "; 
}

// echo "SELECT * FROM users where 1 = 1 $s_name $s_id ORDER BY id DESC" ;

$result = mysqli_query($mysqli, "SELECT * FROM users where 1 = 1 $s_name $s_id ORDER BY id DESC");

?>

<?php require_once './inc/header.php'?>
<main class="container">

<div class="btn_groups d-flex justify-content-between">
    <a href="add.php" class="btn btn-primary my-4">Create</a>
    
    <div class="auth">
        <a href="registration.php" class="btn btn-primary my-4">Registration</a>
        <a href="login.php" class="btn btn-primary my-4">Login</a>
    </div>

</div>
<form class="form-inline" method="POST" action="index.php">
				<div class="input-group col-md-12">
					<input type="text" class="form-control" placeholder="Search here..." name="name"  value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"/>
					<span class="input-group-btn">
						<button class="btn btn-primary" name="search">click</button>
					</span>
		</div>
			</form>
			<br />


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

<?php require_once './inc/footer.php'?>
