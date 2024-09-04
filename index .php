<?php
// Array of valid usernames and their corresponding passwords and redirect pages
$validCredentials = [
    'mrkenny' => ['password' => 'kenny@ibnu', 'page' => 'Mr_kenny.html'],
    'mrluqman' => ['password' => 'luqman@ibnu', 'page' => 'mr_luqman.html'],
    'mrsanusi' => ['password' => 'sanusi@ibnu', 'page' => 'mr_sanusi.html'],
    'mrabdulrasaq' => ['password' => 'abdulrasaq@ibnu', 'page' => 'mr_abdul_rasaq.html'],
    'mrabdullah' => ['password' => 'abdullah@ibnu', 'page' => 'mr_abdullah.html'],
    'mremiola' => ['password' => 'emiola@ibnu', 'page' => 'mr_emiola.html'],
    'mrmuhydeen' => ['password' => 'muhydeen@ibnu', 'page' => 'mr_muhydeen.html'],
    'mropeyemi' => ['password' => 'opeyemi@ibnu', 'page' => 'mr_opeyemi.html'],
    'mrowolabi' => ['password' => 'owolabi@ibnu', 'page' => 'mr_owolabi.html'],
    'mrqudus' => ['password' => 'qudus@ibnu', 'page' => 'mr_qudus.html'],
    'mrsadepeju' => ['password' => 'adepeju@ibnu', 'page' => 'mrs_adepeju.html'],
    'mremitomo' => ['password' => 'emitomo@ibnu', 'page' => 'mrs_emitomo_fatimo.html'],
    'mrsganiyu' => ['password' => 'ganiyu@ibnu', 'page' => 'mrs_ganiyu.html'],
    'mrsmariyam' => ['password' => 'mariyam@ibnu', 'page' => 'mrs_mariyam.html'],
    'mrsmomboriowo' => ['password' => 'omoboriowo@ibnu', 'page' => 'mrs_omoboriowo.html'],
    'mrsolukemi' => ['password' => 'olukemi@ibnu', 'page' => 'mrs_olukemi.html'],
    'mrszainab' => ['password' => 'zainab@ibnu', 'page' => 'mrs_zainab.html']
];

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if (isset($validCredentials[$username]) && $validCredentials[$username]['password'] === $password) {
        // Redirect to the appropriate page
        header('Location: ' . $validCredentials[$username]['page']);
        exit;
    } else {
        // Invalid credentials
        $error = 'Invalid username or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: black;
            color: yellow;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: black;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin: 10px 0 5px;
        }

        input {
            padding: 10px;
            margin: 5px 0 20px;
            border: 2px solid yellow;
            border-radius: 4px;
            background-color: black;
            color: yellow;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: yellow;
            color: black;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: darkgoldenrod;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
        </form>
        <?php if (!empty($error)): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
