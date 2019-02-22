<?php 
session_start();

if (isset($_POST['submit'])) {
    include 'dbh.inc.php';
    $uid = $_POST['uid'];
    $pwd = $_POST['password'];
    
    if(empty($uid) || empty($pwd)) {
         header("Location: ../index.php?login=empty");
         exit();
    } else {
    	try {
		    $sql    = "SELECT * FROM users WHERE user_uid = :uid";
		    $result = $conn->prepare($sql);
		    $result->bindParam(':uid', $uid, PDO::PARAM_STR );
		    $result->execute();
	    } catch (Exception $e) {
    		echo"Bad Query";
	    }
        $resultCheck = $result->rowCount();
        if ($resultCheck < 1 )  {
            header("Location: ../index.php?login_not_good");
            exit();
        } else {
	        $row = $result->fetch(PDO::FETCH_ASSOC);
            if($row) {
                //De-hashing the password
                $hashedPwdCheck = password_verify($pwd,$row['user_password']);
                if ($hashedPwdCheck == false) {
                    header("Location: ../index.php?login=error");
                    exit();
                } elseif ($hashedPwdCheck == true) {
                    //Log in the user here
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_first'] = $row['user_first'];
                    $_SESSION['u_last'] = $row['user_last'];
                    $_SESSION['u_email'] = $row['user_email'];
                    $_SESSION['u_uid'] = $row['user_uid'];  
                    header("Location: ../index.php?login=login_success");
                    exit();
                   }
                }
            }
        }
} else {
        header("Location: ../index.php?login=error");
        exit();
}