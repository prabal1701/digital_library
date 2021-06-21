
<!DOCTYPE html>
<html>
<head>
        <title>BOOK RECORD MANAGEMENT SYSTEM</title>

        <link rel ="stylesheet" href="./frontend/login.css"/>
        <script src="./js/login.js"></script>
</head>

<body id="bo1">
<div id="d1">
    <p id="p1">Digital Library</p>
    <div id="d2">
<br/>
<br/>
       <button id="b1" onclick="f1()">Sign Up</button>
    </div>
    <div id="d3">
        <p id="p2"> all book related<br/> details are here.</p>
        <table id="t1" style="border-collapse:separate;
                border-spacing:0 20px;cellspacing:30px;" >
            <tr id="r1">
                <th id="hea1" style="width:310px;height:30px;text-align:left;">For User</th>
                <th id="hea2" style="text-align:left;">For Admin</th>
            </tr>
            <tr>
                <td style="text-align:left;font-size:20px; color:black;">user can view list of books
                 available and suggest new books and to update some details of
                  the book available by sending request</td>
                 <td style="text-align:left;font-size:20px;color:black;"> admin can update delete also accept 
                 the suggestion given by user for updating and putting new book in the list</td> 
            </tr>
            <tr>
                <td style="text-align:center;"><button class="b2" onclick="f2()">Login as User</button></td>
                <td  style="text-align:center;"><button class="b2" onclick="f3()">Login as Admin</button></td>
            </tr>
        </table>
        dont have account? <a href="./signupform.php">create account</a>
    </div>
    <div id="d4">
        <img src="./image/3.jpg">
    </div>
    
</div>
</body>
</html>