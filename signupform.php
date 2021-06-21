
<!DOCTYPE html>
<html>
<head>
        <title>sign up</title>

        <link rel ="stylesheet" href="./frontend/signup.css"/>
        <script src="./js/login.js"></script>
</head>

<body id="bo1">
<div id="d1">
    <p id="p1">Digital Library</p>
    <div id="d6">
<br/>
<br/>
       <button id="b2" onclick="f3()">Login as Admin</button>
    </div>
    <div id="d3">
        <p id="p3">        For User     </p>
        <form action="signup.php" method="post">
            <table id="t1" style="border-collapse:separate;
                    border-spacing:0 15px;cellspacing:30px;" >
                <tr id="r1">
                    <td><input type="text" placeholder="Full Name" name="fullname" required /></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="user name" name="username" required /></td>
                    <td id="k7"></td>
                </tr>
                <tr>
                    <td><input type="password" placeholder="password" name="password1"required /></td>
                    
                </tr>
                <tr>
                    <td><input type="password" placeholder=" Confirm password"  name="password2"required /></td>
                    <td id="k8">wrong password</td>
                </tr>
                <tr>
                    <td><input id="s1" type="submit" value="Create An Account"/></td>
                </tr>
        </table>
        </form>
       <p id="p10"> already have account? <button id="b9" onclick="f2()">Login</button></p>
    </div>
    <div id="d4">
        <img src="./image/3.jpg">
    </div>
    
</div>
</body>
</html>
