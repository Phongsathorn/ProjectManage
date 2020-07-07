
<?php 
    
    require('dbconnect.php');
    session_start();
    $user_log = $_POST['username'];
    // echo $username;
    $pass_log = $_POST['password'];
    $chackuser = "SELECT * FROM users WHERE username = '$user_log' and password = '$pass_log'";
    // echo $chackuser;
    
    $condb = mysqli_query($conn,$chackuser);
    
    
    $datauser = mysqli_fetch_assoc($condb);

    $_SESSION['usernameguest'] = $datauser['username'];
    $_SESSION['nameuser'] = $datauser['name'];
    $_SESSION['emailuser'] = $datauser['email'];
    $_SESSION['status'] = $datauser['status'];

    // echo $_SESSION['usernameguest'];
    // echo $status;
  
   
    header( "refresh: 0; url=/homeBD" );
    exit(0);

    // echo $_SESSION['datausername'];
?>