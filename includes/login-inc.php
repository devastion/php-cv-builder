<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require("../config.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header("Location: ../login.php?err=empty");
    } elseif (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
        header("Location: ../login.php?err=invalid" . $username);
    } else {
        $sql = "SELECT id,user,pass FROM users WHERE user=?";
        $mysqli->init();
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($id, $usr, $pass);
        $rows = $stmt->num_rows();
        if ($rows > 0) {
            $stmt->fetch();
            $passCheck = password_verify($password, $pass);
            if ($passCheck) {
                session_start();
                $_SESSION['sessionid'] = $id;
                $_SESSION['sessionuser'] = $usr;
                header("Location: ../index.php?success=loggedin");
                $stmt->close();
                exit();
            }
        }
        header("Location: ../login.php?err=notfound");
    }
    exit();

}
