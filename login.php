
<!DOCTYPE html>
<html lang="en">
<head>
        <title>BOOK RECORD MANAGEMENT SYSTEM</title>
        <meta name="description" 
        content="This is a open library.">    
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="stylesheet" href="./frontend/login.css"/>
        <script src="./js/login.js"></script>
</head>

<body id="bo1">
<div id="d1">
    
    <div id="d2">
        <div id="child1-d2">
            <h1 id="p1">Digital Library</h1>
        </div>
       <div id="child2-d2">
            <button id="b1" onclick="f1()">Sign Up</button>
       </div>
    </div>
    <div id="content_div">
        <div id="d3">
            <p id="p2"> all book related<br/> details are here.</p>
            <table id="t1" style="border-collapse:separate;
                    border-spacing:0 20px;cellspacing:30px;" >
                <tr id="r1">
                    <th id="hea1" >For User</th>
                    <th id="hea2" >For Admin</th>
                </tr>
                <tr>
                    <td class="td" >user can view list of books
                    available and suggest new books and to update some details of
                    the book available by sending request</td>
                    <td class="td"> admin can update delete also accept 
                    the suggestion given by user for updating and putting new book in the list</td> 
                </tr>
                <tr>
                    <td style="text-align:center;"><button class="b2" onclick="f2()">Login as User</button></td>
                    <td  style="text-align:center;"><button class="b2" onclick="f3()">Login as Admin</button></td>
                </tr>
            </table>
            dont have account? <a id="anchor" href="./signupform.php">create account</a>
        </div>
        <div id="d4">
            <img alt="library" src="https://source.unsplash.com/1600x900/?library">
        </div>
    </div>
    
</div>
</body>
</html>