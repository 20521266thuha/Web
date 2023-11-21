<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['pass'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['pass']);

    if (empty($uname)) {
        header("Location: index.php?error=Username is required");
        exit();
    } elseif (empty($pass)) {
        header("Location: index.php?error=Password is required");
        exit();
    }

    $stmt = $conn->prepare("SELECT * FROM users WHERE user_name=?");
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if (password_verify($pass, $row['password'])) {
            $_SESSION['authenticated'] = true;
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: home-screen.html");
            exit();
        }
    }

    // If execution reaches here, it means either the username is not found
    // or the password verification failed.
    header("Location: index.php?error=Incorrect Username or Password");
    exit();
} else {

		// Before the header() redirect
	echo "Before redirection<br>";

	// Perform the redirection
	header("Location: home-screen.html");
	exit();

	// After the header() redirect
	echo "After redirection<br>";

}
?>
