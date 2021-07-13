<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>sign up</title>
        <meta name="description" 
        content="This is a open library.">    
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="stylesheet" href="./frontend/signup.css"/>
        <script src="./js/login.js"></script>
</head>

<body id="bo1">
<div id="d1">
    <h1 id="p1">Digital Library</h1>
    <div id="d6">
<br/>
<br/>
       <button id="b2" onclick="f1()">Sign Up</button>
    </div>
    <div id="d3">
        <p id="p3">        For Admin     </p>
        <form action="admin.php" method="post">
            <table id="t1" style="border-collapse:separate;
                    border-spacing:0 15px;cellspacing:30px;" >
                <tr id="r1">
                    <td><input type="text" placeholder="User Name" name="username" required /></td>
                </tr>               
                <tr>
                    <td><input type="password" placeholder="password" name="password" required /></td>
                    
                </tr>
                <tr>
                
                <?php
                        if (isset($_POST["submit"])) 
                        {
                           
                        $username=$_POST['username'];
                        $password=$_POST['password'];
                         $con=mysqli_connect('localhost','root')   ;
                         mysqli_select_db($con,'brm');
                         $q="select * from admin
                         where username='$username'&& password='$password'";
                         $result=mysqli_query($con,$q);
                         $num=mysqli_num_rows($result);
                         if($num==1)
                         {
                             $_SESSION['username1']=$username;
                             header('location:http://localhost/BRM2/home2.php');
                         }else{
                            ?>
                            <td id="k8" style="text-align:center;font-size:25px;">password/username is wrong</td>
                            <?php
                         }
                        }
                        
                        ?>
                </tr>
                 <tr>
                    <td><input id="s1" type="submit" name ="submit" value="Log in"/></td> 
                </tr>
        </table>
        </form>
       <p id="p10"> dont have account? <button id="b9" onclick="f1()">signup</button></p>
    </div>
    <div id="d4">
        <img alt="book" src="./image/3.jpg">
    </div>
    </div>
    
</body>
</html>

