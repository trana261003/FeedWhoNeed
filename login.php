<?php
// $insert = false;
if(isset($_POST['Full_Name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname']; 
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $sql= "INSERT INTO `login`.`login` (`no`, `Firstname`, `Lastname`, `Email`, `Password`, `Date`) VALUES (NULL, '$Firstname', '$Lastname', '$Email', '$Password', current_timestamp());";
    // echo $sql;

    // Execute the query
    if(mysqli_query($con, $sql)){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br>" . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
    error_reporting(E_ALL);
ini_set('display_errors', 1);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <!-- for icons  --> 
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
     <!-- bootstrap  -->
     <link rel="stylesheet" href="bootstrap.min.css">
     <!-- for swiper slider  -->
     <link rel="stylesheet" href="swiper-bundle.min.css">
 
     <!-- fancy box  -->
     <link rel="stylesheet" href="jquery.fancybox.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <title>Form-FeedWhoNeed</title>
</head>
<body>
    <section style="background-image: url(menu-bg.png);" class="wrapper"></div>


<!-- --------------------------- Form box ---------------------------------     -->
    <!-- <div class="form-box"> -->
        <!--  -->
        <!-- ----------------- login form ------------------------ -->
        <!-- <form action="Detail.php" method="post"> -->
        <!-- <div class="login-container" id="login"> -->
            <!-- <div class="top"> -->
                <!-- <span><a href="#" onclick="register()"></a></span> -->
                <!-- <header>Details</header> -->
            <!-- </div> -->
            <!-- <div class="input-box"> -->
                <!-- <input type="text" class="input-field" id="Full_Name" placeholder="Full Name"> -->
                <!-- <i class="bx bx-user"></i> -->
            <!-- </div> -->
            <!-- <div class="input-box"> -->
                <!-- <input type="text" class="input-field" id="Email" placeholder="Email"> -->
                <!-- <i class="bx bx-user"></i> -->
            <!-- </div> -->
            <!-- <div class="input-box"> -->
                <!-- <input type="text" class="input-field" id="Contact_Number" placeholder="Contact Number"> -->
                <!-- <i class="bx bx-user"></i> -->
            <!-- </div> -->
            <!-- <div class="input-box"> -->
                <!-- <input type="text" class="input-field" id="Address" placeholder="Address"> -->
                <!-- <i class="bx bx-user"></i> -->
            <!-- </div> -->
            <!-- <div class="input-box"> -->
                <!-- <input type="password" class="input-field" id="Description" placeholder="Description"> -->
                <!-- <i class="bx bx-lock-alt"></i> -->
            <!-- </div> -->
            <!-- <div class="input-box"> -->
                <!-- <input type="submit" class="submit" id="SUBMIT" value="SUBMIT"> -->
            <!-- </div> -->
            <!--  -->
        <!-- </div> -->
    <!-- </form> -->

        ----------------- registration form ------------------------
        <form action="Detail.php" method="post">
        <div class="register-container" id="register">
            <div class="top">
                <span>Have an account? <a href="#"  onclick="login()">Login</a></span>
                <header>Sign Up</header>
            </div>
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" id="Firstname" placeholder="Firstname">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" id="Lastname" placeholder="Lastname">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" id="Email" placeholder="Email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" id="Password" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Register">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Terms & conditions</a></label>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>   



<script>
   
   function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
}
 
</script>

<script>

    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");

    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }

</script>


</body>
</html>
