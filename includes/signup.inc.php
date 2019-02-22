<?php
if (isset($_POST['submit'])) {
    include_once 'dbh.inc.php';
    
    $first = trim(filter_input(INPUT_POST,"first",FILTER_SANITIZE_STRING));
    $last = trim(filter_input(INPUT_POST,"last",FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
    $uid = trim(filter_input(INPUT_POST,"uid",FILTER_SANITIZE_STRING));
    $pwd = trim(filter_input(INPUT_POST,"password",FILTER_SANITIZE_STRING));
    
    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
         $error_message = "Please fill in the required fields: FirstName,LastName, Email, Username and Password";
    }
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error_message = "Please fill in an Valid Email!";
    } else {
        $sql = "SELECT * FROM users";
		$result = $conn->prepare (
		$sql
			." WHERE user_uid= ? "
		);
		$result->bindParam(1,$uid,PDO::PARAM_STR);
        $result->execute();
        $resultCheck = $result->rowCount();
        
        if($resultCheck > 0) {
            header("Location: ../sign_up.php?sign_up=user_taken");
            exit();
        } else {
            //Hashing the password
            $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
            //Insert the user into the database
            $sql = "INSERT INTO users(user_first,user_last,user_email,user_uid,user_password) 
                    VALUES(:first1,:last1,:email,:uid,:password);";
            $result = $conn->prepare($sql);
	        $result->bindParam(':first1',$first,PDO::PARAM_STR);
	        $result->bindParam(':last1',$last,PDO::PARAM_STR);
	        $result->bindParam(':email',$email,PDO::PARAM_STR);
	        $result->bindParam(':uid',$uid,PDO::PARAM_STR);
	        $result->bindParam(':password',$hashedPwd,PDO::PARAM_STR);
	        $result->execute();

            header("Location: ../index.php?sign_up=success");
            exit();
            
        }
        
    }
} else {
    header("Location: ../sign_up.php");
    exit();
}

