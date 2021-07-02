<?php
session_start();
if(!isset($_SESSION['username2']))
header('location:http://localhost/BRM2/user.php');
?>
<!DOCTYPE html>
<html>
<head>
        <title>Admin home page</title>

        <link rel ="stylesheet" href="./frontend/suggestion.css"/>
        <script src="./js/login.js"></script>
</head>

<body id="bo1">
<div id="d1">
   <div id="p1">
       Digital Library
</div>
    <div id="d6">
    <div id="d16">
<br/>
<br/>
       <span id="b2">Hello    <span id="p11"> <?php echo $_SESSION['username2'];?> <span> </span>
    </div>
    <div id="d17">
    <br/>
    
    <button id="b5" onclick="f10()">Log Out</button>
    </div>
    </div>
   
</div >

<div id="d11">
   
    <div id="d13">
       <h1 style="text-align:center;"> suggest Book and fill all the details </h1><br/>
        <form action="suggestion.php" method="post">
                <table id="t6">
                <tr >
                <td class="c1"><b>  BOOK name</b> <input name="book" class="inp" type="text" required/> </td>
                 <td class="c1"><b> ISBN NO.</b><input class="inp" name="isbn"  type="text" required/> </td>
                </tr>
                <tr >
                <td class="c1"><b> Author</b> <input class="inp" name="author"  type="text" required/> </td>
                <td class="c1"> <b> Price(in RS)</b> <input class="inp" name="price" type="number" step="any" required/> </td>
                </tr>
                <tr >
                    <td > <input id="sp"  type="submit" value="suggest"/></td>
                </tr>
                </table>
        </form>
        
    </div>
 </div>
    
</body>
</html>
