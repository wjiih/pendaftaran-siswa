<?php 
$login_message = "";
if(isset($_GET['status'])){
    $error = $_GET['status'];
    if($error == 'gagal'){
        $login_message = "Login gagal, Pastikan memasukan username dan password yang benar";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <style>

        body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

.login-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
    border-color: green;
}

button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: green;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color:#C0C0C0;
}

    </style>
</head>
<body>
    
    <form action="dasboard-admin.php" method='GET'>
    <p><?= $login_message; ?></p>
    
       <h1>Fromulir login</h1><br><br>
    <table>
        <tr>
       <input type="text" name='username' placeholder='Username'><br><br>
    </tr>
       <tr>
       <input type="password" name="password" placeholder='Password'><br><br>
    </tr>
    </table><br><br>
       <button type="submit" name="isLoginAdmin">Login</button>

   </form>
    
</body>
</html>