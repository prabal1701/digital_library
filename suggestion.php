<?php
            session_start();
            if(!isset($_SESSION['username2']))
            header('location:http://localhost/BRM2/user.php');
                $author=$_POST['author'];
                $book=$_POST['book'];
                $isbn=$_POST['isbn'];
                $price=$_POST['price'];
                $con=mysqli_connect('localhost','root');
                mysqli_select_db($con,'brm');
                    $q="insert into suggestion(ISBN,book,author,price) 
                    values ('$isbn','$book','$author',$price)";
                    $info=mysqli_query($con,$q);
                    if($info==1)
                    {
                        ?>
                        <script> alert("suggestion is sent to the admin");
                         window.location.href="./home1.php"; </script>
                        <?php
                    }
                    if($info==0){
                        ?>
                         <script> alert(" This book is already suggested  ");
                            window.location.href="./home1.php"; </script>
                        <?php
                    }
            
        ?>