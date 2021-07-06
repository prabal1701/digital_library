<?php
session_start();
if(!isset($_SESSION['username1']))
header('location:http://localhost/BRM2/admin.php');
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
    $index="b".$j;
    if(isset($_POST[$index]))
    $b_id[$i]=$_POST[$index];
    else
    $i--;
}
$con=mysqli_connect('localhost','root');
        mysqli_select_db($con,'brm');
        for($k=1;$k<=$size;$k++)
        {
            $q="delete from book where b_id=".$b_id[$k];
            mysqli_query($con,$q);
        }
?>
<script>
alert(" checked records deleted ");
window.location.href="./home2.php";
</script>