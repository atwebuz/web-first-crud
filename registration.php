<?php 
require_once('./inc/header.php');
require_once './config.php';
error_reporting(E_ALL); ?>

<header>

    <div class="container">
    <h1 class="text-center mt-4">Registration</h1>


        <form class="mt-4 w-50 m-auto" class="form" action="registration.php" method="post" enctype="multipart/form-data">

            Name: <input class="form-control py-3" type="text" name="name">
            Email: <input class="form-control py-3" type="email" name="email">
            Password: <input class="form-control py-3" type="password" name="password">
            Address: <input class="form-control py-3" type="text" name="address">
            Image <input class="form-control py-3" type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" class="form-control bg-dark text-white mt-2 py-3" value="submit" name="submit">


            <?php
            if (isset($_POST['submit'])) {
                // validation
                if (empty($_POST["name"])) {
                    $errMsgs[] = "Error! You didn't enter the Name.";

                } else {
                    $name = $_POST["name"];
                }
                if (empty($_POST["email"])) {
                    $errMsgs[] = "Error! You didn't enter the email.";

                } else {
                    $name = $_POST["email"];
                }
                if (empty($_POST["password"])) {
                    $errMsgs[] = "Error! You didn't enter the password.";

                } else {
                    $name = $_POST["password"];
                }
                if (empty($_POST["address"])) {
                    $errMsgs[] = "Error! You didn't enter the address.";

                } else {
                    $name = $_POST["address"];
                }

                

            }
            ?>

            <div class="alert alert-warning" role="alert">
                <?php foreach ($errMsgs as $errMsg): ?>
                    <li>
                        <?= $errMsg ?>
                    </li>
                <?php endforeach; ?>
            </div>

            <!-- anservs echo -->
            <div class="ansewers container bg-info p-4 my-3">
                Your name is :
                <?php echo $_POST["name"]; ?> <br>
                Your email is :
                <?php echo $_POST["email"]; ?> <br>
                Your password is :
                <?php echo $_POST["password"]; ?> <br>
                Your address is :
                <?php echo $_POST["address"]; ?>
                Your image is :
                <?php echo basename($_FILES["fileToUpload"]["name"]); ?>
            </div>

        </form>
    </div>
</header>


<?php if (isset($_POST['submit'])): ?>
    

    <!-- file uploading -->

    <?php
//     print_r($_FILES);
//     $target_dir = "/images/";
//     $target_file = __DIR__ . $target_dir . basename($_FILES["fileToUpload"]["name"]);
//     $uploadOk = 1;
//     $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
//         $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//         echo "============== $check";
//         if ($check !== false) {
//             echo "File is an image - " . $check["mime"] . ".";
//             $uploadOk = 1;
//             if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
//                 echo "Faylyuklandi.\n";
//             } else {
//                 echo "Fayl yuklanmadi!\n";
//             }
//         } else {
//             echo "File is not an image.";
//             $uploadOk = 0;
//         }
// echo 123;
?>

    <!-- file uploading end -->

    <?php
echo 123;
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $address = $_POST["address"];
    $image = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    $query = "INSERT INTO registration  VALUES ('$name',null, '$email','$password','$address','$image')";

    echo $query;
    $result = mysqli_query($mysqli, $query) or

        die("So'rov ishlamadi : " . mysqli_error($mysqli));
        echo 123;


    mysqli_free_result($result);
    mysqli_close($mysqli);


    ?>


<?php endif ?>

<!-- anservs echo end -->






<?php require('./inc/footer.php') ?>