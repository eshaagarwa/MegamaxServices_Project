<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    width: 300px;
    background-color: #ffffff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #ffffff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

a {
    text-decoration: none;
    color: #007bff;
    margin-top: 10px;
    text-align: center;
    display: block;
}

    </style>
</head>
<body>
<?php
// Start session
session_start();

// Include the database connection
include '../../Backend/asset.php';

// Check if form is submitted
if(isset($_POST['login'])) {
    // Retrieve username and password from form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL query to fetch admin record with the given username
    $sql = "SELECT * FROM admin WHERE user = '$username'";
    $result = mysqli_query($conn_max, $sql);

    if(mysqli_num_rows($result) > 0) {
        // Admin with the given username exists, fetch its details
        $admin = mysqli_fetch_assoc($result);

        // Verify password
        if($password == $admin['pass']) {
            // Password is correct, set session variables and redirect to dashboard
            $_SESSION['admin_id'] = $admin['Sno'];
            $_SESSION['username'] = $admin['user'];
            header('Location: index.php');
            exit();
        } else {
            // Invalid password
            echo "<script>alert('Invalid password');</script>";
            echo "<script>window.location.href = 'login.php'</script>";
        }
    } else {
        // Admin with the given username does not exist
        echo "<script>alert('Invalid username');</script>";
        echo "<script>window.location.href = 'login.php'</script>";
    }
}
?>

    
    <br>
    <form   method="post">
        <img src="https://maxservice.digital/img/logo.png" alt="">
        <br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
