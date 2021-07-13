<?php
session_start();
if(!isset($_SESSION['username1']))
header('location:http://localhost/BRM2/admin.php');
$con=mysqli_connect('localhost','root');
        mysqli_select_db($con,'brm');
$size=sizeof($_POST);
$records=$size/6;
for($i=1;$i<=$records;$i++)
{
    $index1="b_id".$i;
    $b_id[$i]=$_POST[$index1];

    $index2="isbn".$i;
    $isbn[$i]=$_POST[$index2];

    $index3="name".$i;
    $name[$i]=$_POST[$index3];

    $index4="author".$i;
    $author[$i]=$_POST[$index4];

    $index5="price".$i;
    $price[$i]=$_POST[$index5];

    $index6="link".$i;
    $link[$i]=$_POST[$index6];
}

$con=mysqli_connect('localhost','root');
        mysqli_select_db($con,'brm');

for($i=1;$i<=$records;$i++)
{
    $q="update book
    SET ISBN='$isbn[$i]', name='$name[$i]',
     author='$author[$i]', price=$price[$i],link='$link[$i]'
     where b_id=$b_id[$i]
    ";
   $info= mysqli_query($con,$q);
}

mysqli_close($con);



?>
<script> alert("Record Updated");
                         window.location.href="./home2.php"; </script>