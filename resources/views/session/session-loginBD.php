
<?php 
    
    require('dbconnect.php');
    session_start();
    $user_log = $_POST['username'];
    // echo $username;
    $pass_log = $_POST['password'];

    if(substr($user_log,0) == "A"){
        $chackadmin = "SELECT * FROM admin_company WHERE admin_company_user = '$user_log' and admin_company_pass = '$pass_log'";
        $condb = mysqli_query($conn,$chackadmin);
        $dataadmin = mysqli_fetch_assoc($condb);
        $_SESSION['adminauser'] = $dataadmin['admin_company_user'];
        $_SESSION['adminname'] = $dataadmin['admin_company_name'];
        header( "refresh: 0; url=/admin" );
        exit(0);
    }

    else {
        $chackuser = "SELECT * FROM users WHERE username = '$user_log' and password = '$pass_log'";
        // echo $chackuser;
        
        $condb = mysqli_query($conn,$chackuser);

        $datauser = mysqli_fetch_assoc($condb);

        $_SESSION['usersid'] = $datauser['id'];
        $_SESSION['usernameguest'] = $datauser['username'];
        $_SESSION['nameuser'] = $datauser['name'];
        $_SESSION['emailuser'] = $datauser['email'];
        

        // echo $_SESSION['usernameguest'];
        // echo $status;
    
        header( "refresh: 0; url=/homeBD" );
        exit(0);

        // echo $_SESSION['datausername'];

    }
    
    
?>