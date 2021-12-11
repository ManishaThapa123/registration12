<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reg.css" type="text/css">
    <title>Registration form</title>
</head>
<body>
    <div class="main">
       
        <!-- <h1 class="heading">Register here</h1> -->
        
        <h2>Register here</h2>
        <form id="register" action="process.php" method="post" required>
            <div class="formgroup">

                <input type="text" placeholder="Username" required>
            </div>
            <div class="formgroup">
                <input type="text" placeholder="Email" required>
            </div>
            <div class="formgroup">
                <input type="text" placeholder="Password" required>
            </div>
            <div class="formgroup">
                <input type="text" placeholder="Confirm Password" required>
            </div>
            <button class="btn">Create account</button>
            <div class="text">
            <h3> Already have a account? <a href="login.php"> Click here! </a></h3>
            </div>
        </form>
    
    </div>
</body>
</html>