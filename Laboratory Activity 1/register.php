<?php
$usernameError = $emailError = $phoneError = $passwordError = $confirm_passwordError = "";
$username = $email = $phone = $password = $confirm_password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirmPassword"];

    // Username validation
    if (empty($username)) {
        $usernameError = "Username is required";
    } elseif (!preg_match("/^[A-Za-z][A-Za-z0-9]{4,14}$/", $username)) {
        $usernameError = "Username must be 5-15 characters long, start with a letter, and contain only letters and numbers";
    }


    // Email validation
    if (empty($email)) {
        $emailError = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email format";
    }

    // Phone validation
    if (empty($phone)) {
        $phoneError = "Phone number is required";
    } elseif (!preg_match("/^[0-9]{10,}$/", $phone)) {
        $phoneError = "Phone number must contain at least 10 digits";
    }

    // Password validation
    if (empty($password)) {
        $passwordError = "Password is required";
    } elseif (!preg_match("/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
        $passwordError = "Password must be at least 8 characters long, including an uppercase letter, a number, and a special character";
    }

    // Confirm password validation
    if (empty($confirm_password)) {
        $confirm_passwordError = "Confirm Password is required";
    } elseif ($password !== $confirm_password) {
        $confirm_passwordError = "Passwords do not match";
    }

    // If no errors, redirect to the success page
    if (empty($usernameError) && empty($emailError) && empty($phoneError) &&
        empty($passwordError) && empty($confirm_passwordError)) {
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Register</title>
    <style>
        body {
            background-image: url('img/bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
        }
        h3 {
            font-family: 'Lucida Sans', Geneva, Verdana, sans-serif;
        }
        .register-form {
            background-color: rgb(223, 87, 87);
            padding: 30px;
            border-radius: 10px;
            max-width: 400px;
            width: 100%;
        }
        .form-container {
            height: 100vh;
            color: #070707;
        }
        .error {
            color: white;
            font-size: 0.875em;
        }
    </style>
</head>
<body>
    <center>
        <section>
            <div class="container-fluid  h-100">
                <div class="row h-100 d-flex align-items-center justify-content-center form-container">
                    <div class="col-md-4 d-flex align-items-center justify-content-center form-container">
                        <div class="register-form w-200 p-4 shadow-lg">
                            <h3 class="text-center mb-4">Register</h3>
                            <form method="POST" action="">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" 
                                        value="<?= htmlspecialchars($username) ?>">
                                    <span class="error"><?= $usernameError ?></span>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" 
                                        value="<?= htmlspecialchars($email) ?>">
                                    <span class="error"><?= $emailError ?></span>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" name="phone" class="form-control" 
                                        value="<?= htmlspecialchars($phone) ?>" >
                                    <span class="error"><?= $phoneError ?></span>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" >
                                    <span class="error"><?= $passwordError ?></span>
                                </div>
                                <div class="mb-3">
                                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                                    <input type="password" name="confirmPassword" class="form-control" >
                                    <span class="error"><?= $confirm_passwordError ?></span>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Register</button>
                                <p class="mt-3 text-center">Already have an account? <a href="login.php">Login Here.</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
