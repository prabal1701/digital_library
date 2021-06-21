
!DOCTYPE html>
<html>
<head>
        <title>sign up</title>

        <link rel ="stylesheet" href="./frontend/signup.css"/>
        <script src="./js/login.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js">

        </script>
</head>
<?php
$name=$_POST['fullname'];
$username=$_POST['username'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
if( $password1!=$password2)
{
    ?>
    <script>
    f1();
    </script>
    <?php
}
?>
<body>
<?php

?>
</body>
</html>