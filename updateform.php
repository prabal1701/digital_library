<?php
session_start();
if(!isset($_SESSION['username1']))
header('location:http://localhost/BRM2/admin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>update book records</title>
        <meta name="description" 
        content="This is a open library.">    
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="stylesheet" href="./frontend/home3.css"/>
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
               <td style="width:300px;font-size:20px;"><a href="./insertForm.php">Insert New Book</a></td>
               <td  style="width:300px;"><a href="./home2.php">view Records</a></td>
               <td  style="width:300px;"><a href="./deleteForm.php">Delete Records</a></td>
               <td  style="width:200px;"><a href="./requestform.php">Request List</a></td>
            </tr>
        </table>
    </div>
    <div id="d13">
    <?php
        $con=mysqli_connect('localhost','root');
        mysqli_select_db($con,'brm');
        $q="select * from book";
        $result=mysqli_query($con,$q);
        $num=mysqli_num_rows($result);
        ?>
        <form action="update.php" method="POST">
        <table id="t10">
            <tr id="row1">
                <th style="width:333px;">Book id</th>
                <th style="width:333px;">ISBN NO.</th>
                <th style="width:333px;">Book NAME</th>
                <th style="width:333px;">Author</th>
                <th style="width:333px;">Price</th>
                <th style="width:333px;">link</th>
            </tr>
            <?php
            for($i=1;$i<=$num;$i++)
            {
                $row=mysqli_fetch_array($result);
                ?>
                <tr class="row2">
                <td style="width:333px;height:50px;text-align:center;"><?php echo $row['b_id'] ?> <input class="in"
                 name="b_id<?php echo $i;?>" type="hidden" value="<?php echo $row['b_id'] ?>"/></td>
                <td style="width:333px;height:50px;text-align:center;"><input class="in"
                 name="isbn<?php echo $i;?>" type="text" value="<?php echo $row['ISBN'] ?>"/></td>
                <td style="width:333px;height:50px;text-align:center;"><input class="in"
                 name="name<?php echo $i;?>" type="text" value="<?php echo $row['name'] ?>"/></td>
                <td style="width:333px;height:50px;text-align:center;"><input class="in"
                 name="author<?php echo $i;?>" type="text" value="<?php echo $row['author'] ?>"/></td>
                <td style="width:333px;height:50px;text-align:center;"><input class="in"
                 name="price<?php echo $i;?>" type="number" value="<?php echo $row['price'] ?>"/></td>
                <td style="width:333px;height:50px;text-align:center;"><input class="in"
                 name="link<?php echo $i;?>" type="text" value="<?php echo $row['link'] ?>"/></td>
            </tr>
                <?php
            }
            ?>
             <tr class="row2">
            <td colspan="6"> <input id="update" type="submit" value="Update"/></td>
            </tr>
        </table>
        </form>
        <?php
        mysqli_close($con);
        ?>
    </div>
 </div>
    
</body>
</html>
