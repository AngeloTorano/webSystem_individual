    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Define the correct username and password for validation
        $correctUsername = "kingmimo19";
        $correctPassword = "Angelo@123";

        // Retrieve username and password from form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Regular expressions for validation
        $usernamePattern = "/^[A-Za-z][A-Za-z0-9]{4,14}$/"; // Alphanumeric, 5-15 characters
        $passwordPattern = "/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/"; // Min 8 chars, one uppercase, one number, one special character

        // Validate using regex
        if (preg_match($usernamePattern, $username) && preg_match($passwordPattern, $password)) {
            // Check if username and password are correct
            if ($username === $correctUsername && $password === $correctPassword) {
            // Redirect to home page
            header("Location: index.php");
            exit();
            } else {
                echo "<script>alert('Incorrect username or password. Please try again.');</script>";
            }

    } else {
            echo "<script>alert('Invalid format. Ensure username and password meet the required format.');</script>";
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <style>
            body {
                background-image: url("img/bg.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
            .border {
                padding: 100px;
                border-radius: 10px;
                background-color: rgb(223, 87, 87);
            }
            h1 {
                font-family: 'Times New Roman';
                padding-bottom: 50px;
            }
        </style>
    </head>
    <body>

    <!-- login -->
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="border">
            <form id="myForm" method="POST" action="">
                
                <h1>MOVIE LIBRARY</h1>
                
                <div class="form-floating mb-3">
                    <input type="text" maxlength="50" minlength="5" class="form-control" name="username" id="username" placeholder="name@example.com">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="Check1">
                    <label class="form-check-label" for="Check1">Check me out</label>
                </div>
                <button type="submit" id="submit" class="btn btn-primary w-100">Submit</button>
                <center>
                    <p>Don't have an account?
                        <a href="register.php">Register Now</a>
                    </p>
                </center>
            </form>
        </div>
    </div>
    
    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    </body>
    </html>
