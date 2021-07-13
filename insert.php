<?php
session_start();
if(!isset($_SESSION['username1']))
header('location:http://localhost/BRM2/admin.php');
            
                $author=$_POST['author'];
                $book=$_POST['book'];
                $isbn=$_POST['isbn'];
                $price=$_POST['price'];
                $link=$_POST['link'];
                $con=mysqli_connect('localhost','root');
                mysqli_select_db($con,'brm');
                    $q="insert into book(ISBN,name,author,price,link) 
                    values ('$isbn','$book','$author',$price,'$link')";
                    $info=mysqli_query($con,$q);
                    if($info==1)
                    {
                        ?>
                        <script> alert("record inserted");
                         window.location.href="./home2.php"; </script>
                        <?php
                    }
                    if($info==0){
                        ?>
                         <script> alert(" This book is available in the list ");
                            window.location.href="./home2.php"; </script>
                        <?php
                    }
            
        ?>