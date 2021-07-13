
<!DOCTYPE html>
<html lang="en">
<head>
        <title>sign up</title>
        <meta name="description" 
        content="This is a Digital library signup page.">    
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
       <button id="b2" onclick="f3()">Login as Admin</button>
    </div>
    <div id="d3">
        <p id="p3">        For User     </p>
        <form action="signupform.php" method="post">
            <table id="t1" style="border-collapse:separate;
                    border-spacing:0 15px;cellspacing:30px;" >
                <tr id="r1">
                    <td><input type="text" placeholder="Full Name" name="fullname" required /></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="user name" name="username" required /></td>
                    <?php
                        if (isset($_POST["submit"])) 
                        {
                            $name=$_POST['fullname'];
                             $username=$_POST['username'];
                            $password1=$_POST['password1'];
                            $password2=$_POST['password2'];
                            if($password1==$password2)
                            {
                                $con=mysqli_connect('localhost','root');
                                mysqli_select_db($con,'brm');
                                $q="insert into user(username,name,password) values('$username','$name','$password1')";
                                $i=mysqli_query($con,$q);
                                if(!$i)
                                {
                                    ?>
                                    <td id="k7"> already taken </td>
                                    <?php
                                }
                                if($i){
                                    ?>
                                    <script>
                                    alert("account created");
                                    window.location.href="./login.php";
                                    </script>
                                    <?php
                                }
                                mysqli_close($con);
                            }
                        }
                        ?>
                </tr>
                <tr>
                    <td><input type="password" placeholder="password" name="password1"required /></td>
                    <?php
                        if (isset($_POST["submit"])) 
                        {
                            $name=$_POST['fullname'];
                    $username=$_POST['username'];
                    $password1=$_POST['password1'];
                    $password2=$_POST['password2'];
                    if( $password1 != $password2)
                    {
                        ?>
                        
                    <td  id="k8">wrong password</td>
                        
                        <?php
                    }
                        }
                        ?>
                </tr>
                <tr>
                    <td><input type="password" placeholder=" Confirm password"  name="password2"required /></td>
            
                </tr>
                <tr>
                    <td><input id="s1" type="submit" name ="submit" value="Create An Account"/></td>
                </tr>
        </table>
        </form>
       <p id="p10"> already have account? <button id="b9" onclick="f2()">Login</button></p>
    </div>
    <div id="d4">
        <img alt="book" src="./image/3.jpg">
    </div>
    </div>
    
</body>
</html>
