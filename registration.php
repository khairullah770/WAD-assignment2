<?php include("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"type="text/css" href="reg.css"
    <title></title>

</head>
<body>
    <div class="container"> 
        <form action="#" method="post">
        <div class="title">
            Sign up
        </div>
        <div class="form">
            <div class="input_field">
                <label> First Name </label>
                <input type="text" class="input" name="fname" required>
            </div>
            <div class="input_field">
                <label> LastName </label>
                <input type="text" class="input" name="lname" required>
            </div>
            <div class="input_field">
                <label> Phone number </label>
                <input type="text" class="input" name="phone" required>
            </div>
            <div class="input_field">
                <label> Address </label>
                <textarea class="add" name="address" ></textarea required>
            </div>
            <div class="input_field">
                <label> Email </label>
                <input type="Email" class="input" name="email" required>
            </div>
            <div class="input_field">
                <label> Password </label>
                <input type="password" class="input" name="password" required>
            </div>
            <div class="input_field">
                <label> Confirm password </label>
                <input type="password" class="input" name="conpassword" required>
            </div>
            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                 </label>
                 <p> agree terms and condition</p>
            </div>
            <div class="input_field">
                <input type="submit" value="Register" class="btn" name="register">
            </div>         
</div>
        </form>
    </div>
</body>
</html>

<?php
include("connect.php");

if(isset($_POST['register'])) 
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conpassword = $_POST['conpassword'];

    if($fname != "" && $lname!="" && $phone!="" && $address!="" && $email!="" && $password!="" && $conpassword!="" ) 
    {

    $query = "INSERT INTO signup VALUES ('$fname', '$lname', '$phone', '$address', '$email', '$password', '$conpassword')";
    $data = mysqli_query($conn, $query);

    if($data) {
    } else {
        echo "Failed to store data.";
    }
}
else
{
    echo "";

}
}
?>
