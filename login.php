<?php


session_start();
$con = mysqli_connect('localhost', 'root', "", 'logistic');

if (isset($_POST['email']) && isset($_POST['password'])) {

    $empty = 0;
    $error = "";



    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if(strlen($email) == $empty && strlen($password) == $empty) {
        $error = "email  or password must not be empty";
        // header("Location: signup.html?error=empty password or email");
    }else{
        header("Location: ./now.php");
    }

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="signin.css" />
        <title>Sign in</title>
    </head>
    <body>
        <div class="container">
            <div class="details">
                <h1> Your Logistics Partner For Seamless Delivery. </h1>
                <p>
                    We provide services for all your nationwide shipping needs.
                </p>
            </div>

            <div class="form-section">
                <form action="./login.php" method="post">
                    <h2>Welcome Back!</h2>
                    <p>
                        Track your logistics with <strong>SpruceXpress</strong>
                    </p>
                    <?php if (!empty($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>
                    <label for="">Email</label>
                    <input
                        type="email"
                        id="email"
                        placeholder="Enter your email"
                        name="email"
                    />
                    <label for="">Password</label>
                    <input
                        type="password"
                        id="password"
                        placeholder="Enter Password"
                        name="password"
                    />


                    <div class="password-checker" >
                        <div>
                            <input type="checkbox" id="checkbox" />
                            <p>Remember me</p>
                        </div>

                        <p class="forgot-password">Forgot Password?</p>
                    </div>
                    <button>Sign In</button>
<button class="google-btn" ><img class="google-logo" src="./public/images/google.png" alt="google">
Or continue with Google
</button>
                    
                   
                    <p class="cta-text"
                    >New to SpruceXpress?  <span><a href="signup.html">Create an account</a></span></p
                    >
                </form>
            </div>
        </div>
    </body>
</html>

