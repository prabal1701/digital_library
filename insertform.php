<?php
session_start();
if(!isset($_SESSION['username1']))
header('location:http://localhost/BRM2/admin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>Admin home page</title>
        <meta name="description" 
        content="This is a open library.">    
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="stylesheet" href="./frontend/insert.css"/>
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
       <span id="b2">Hello    <span id="p11"> <?php echo $_SESSION['username1'];?> <span> </span>
    </div>
    <div id="d17">
    <br/>
    
    <button id="b5" onclick="f10()">Log Out</button>
    </div>
    </div>
   
</div >

<div id="d11">
   <div id="d12">
   <table cellspacing="1px"> 
           <tr style="position:relative;top:-10px;">
               <td style="width:300px;font-size:20px;"><a href="./home2.php">view book</a></td>
               <td  style="width:300px;"><a href="./updateForm.php">Update Records</a></td>
               <td  style="width:300px;"><a href="./deleteForm.php">Delete Records</a></td>
               <td  style="width:200px;"><a href="./request.php">suggestion table</a></td>
            </tr>
        </table>
    </div>
    <div id="d13">
       <h1 style="text-align:center;"> Insert Book Details </h1><br/>
        <form action="insert.php" method="post">
                <table id="t6">
                <tr >
                <td class="c1"><label>  BOOK name<input name="book" class="inp" type="text" required/></label>  </td>
                 <td class="c1"><label> ISBN NO.<input class="inp" name="isbn"  type="text" required/></label> </td>
                </tr>
                <tr >
                <td class="c1"><label> Author <input class="inp" name="author"  type="text" required/></label> </td>
                <td class="c1"> <label> Price(in RS)</b> <input class="inp" name="price" type="number" step="any" required/></label> </td>
                </tr>
                <tr >
                    <td class="c1"><label> Link to read <input class="inp" name="link"  type="text" required/></label> </td>
                    <td > <input id="sp"  type="submit" value="INSERT"/></td>
                </tr>
                </table>
        </form>
        
    </div>
 </div>
    
</body>
</html>
