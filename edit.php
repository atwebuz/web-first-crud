<?php
include_once("config.php");

if(isset($_POST['update'])){	
	$id = $_POST['id'];
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];

	$result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");
	header("location: index.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($request = mysqli_fetch_array($result))
{
	$name = $request['name'];
	$email = $request['email'];
	$mobile = $request['mobile'];
}
?>

<?= require_once './inc/header.php'?>
<main class="container">

	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table class="table table-success table-striped">
			<tr> 
				<td>Name</td>
				<td><input class="p-2 rounded" type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input class="p-2 rounded" type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input class="p-2 rounded" type="text" name="mobile" value=<?php echo $mobile;?>></td>
			</tr>
			<tr>
				<td><input class="p-2 rounded" type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>

</main>
	<?php echo require_once './inc/header.php'?>

