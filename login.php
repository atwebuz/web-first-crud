<?php require('./inc/header.php')?>

<header>
    <div class="container mt-3 w-50">
        <h1 class="text-center mt-4">Login</h1>
        <form method="post" >
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control py-3" id="email" name="email" aria-describedby="emailHelp">
             
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control py-3" id="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary" name="loginForm">Submit</button>
        </form>

        <?php
   
        if(isset($_POST['loginForm'])){
                $new_password= md5($_POST["password"]);
                $query = "SELECT * FROM registration WHERE email = '{$_POST['email']}' and password = '$new_password'";

                $result = mysqli_query($mysqli, $query);

            
                if (mysqli_num_rows($result)!=0) { 
                    echo "<br> Correct password ";
                  
                }else{
                    echo 'error toplmad';
                }
            }
        ?>

    </div>
</header> 

<?php require('./inc/footer.php')?>
