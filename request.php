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
            $q="select * from suggestion where b_id=".$b_id[$k];
            $result=mysqli_query($con,$q);
            $row=mysqli_fetch_array($result);
            $isbn=$row['ISBN'];
            $name=$row['book'];
            $author=$row['author'];
            $price=$row['price'];
            $q="delete from suggestion where b_id=".$b_id[$k];
            mysqli_query($con,$q);
            $q="insert into book(ISBN,name,author,price) 
            values ('$isbn','$name','$author',$price)";
            mysqli_query($con,$q);
            
        }
       
?>
<script>
alert(" records added to the list ");
window.location.href="./home2.php";
</script>