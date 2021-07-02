<?php
session_start();
if(!isset($_SESSION['username2']))
header('location:http://localhost/BRM2/user.php');
?>
<!DOCTYPE html>
<html>
<head>
        <title>User home page</title>

        <link rel ="stylesheet" href="./frontend/home1.css"/>
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
   <h1 style="text-align:center; color:blue;"> Book Records</h1>
    <div id="d13">
    <?php
        $con=mysqli_connect('localhost','root');
        mysqli_select_db($con,'brm');
        $q="select * from book";
        $result=mysqli_query($con,$q);
        $num=mysqli_num_rows($result);
        ?>
        <table id="t10">
            <tr id="row1">
                <th style="width:333px;">Book id</th>
                <th style="width:333px;">ISBN NO.</th>
                <th style="width:333px;">Book NAME</th>
                <th style="width:333px;">Author</th>
                <th style="width:333px;">Price</th>
            </tr>
            <?php
            for($i=1;$i<=$num;$i++)
            {
                $row=mysqli_fetch_array($result);
                ?>
                <tr class="row2">
                <td style="width:333px;height:50px;text-align:center;"><?php echo $row['b_id'] ?></td>
                <td style="width:333px;height:50px;text-align:center;"><?php echo $row['ISBN'] ?></td>
                <td style="width:333px;height:50px;text-align:center;"><?php echo $row['name'] ?></td>
                <td style="width:333px;height:50px;text-align:center;"><?php echo $row['author'] ?></td>
                <td style="width:333px;height:50px;text-align:center;"><?php echo $row['price'] ?></td>
            </tr>
                <?php
            }
            ?>
            
    </div>
        </table>
       
        <?php
        mysqli_close($con);
        ?>
    </div>
    <br/>
    <b>for addition of new book in the list 
        give suggestion to admin here </b><br/>
        <a style="color:blue;" href="./request.php" > Click here</a> 
 </div>
    
</body>
</html>
