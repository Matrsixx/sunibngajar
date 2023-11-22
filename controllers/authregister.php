<?php 
    session_start();
    require_once "./connection.php";

    function doRegister($email, $fullname ,$password){
        global $conn;

        // $query = "SELECT * FROM users WHERE email=? AND password=? AND role='student';";
        $query = "INSERT INTO users(fullname, email, password, role) VALUES (?,?,?, 'student')";

        $stmt = $conn -> prepare($query);
        $stmt -> bind_param("sss", $fullname, $email, $password);

        $stmt -> execute();
        $result = $stmt->get_result();

        $_SESSION['success_register'] = "Success Registered";
        header("Location: ../loginstudent.php?success=1");
        return $result;
    }

    if ($_SERVER['REQUEST_METHOD'] === "POST"){
        $email = $_POST['email'];
        $fullname = $_POST['fullname'];
        $password = $_POST['password'];

        $login_result = doRegister($email, $fullname, $password);
    }


    // $login_result = doLogin($email, $password);

    // if($login_result -> num_rows === 1){

    //     $data = $login_result -> fetch_assoc();

    //     $_SESSION["success_message"] = "welcome, $username";

    //     $_SESSION['is_login'] = true;
    //     $_SESSION['id'] = $data['id'];
    //     $_SESSION['fullname'] = $data['fullname'];
    //     $_SESSION['email'] = $data['email'];
    //     $_SESSION['nim'] = $data['nim'];
    //     $_SESSION['major'] = $data['major'];
    //     $_SESSION['ipk'] = $data['ipk'];
    //     $_SESSION['phonenumber'] = $data['phonenumber'];


    //     header("Location: ../landing.html");
        
    // }else{

    //     $_SESSION['error_message'] = "Invalid Login";
    //     header("Location: ../loginstudent.php?error=1");
    // }
?>