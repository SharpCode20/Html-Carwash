<!DOCTYPE html>
<html>
    <head>
        <title>Sharp Car Wash - Employee</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1>Sharp Car Wash - Employee Login</h1>
        <div id="login">   
            <h3>Log in below:</h3>
            <label for="empid">Employee ID:</label>
            <input for="text" id="empID" name="empID"><br>
            <label for="pswrd">Password:</label>
            <input type="password" id="pass" name="password"><br>
            <div>

                <a href="C:\xampp\htdocs\CS221\custlog.html"><button>Login</button></a>
            </div>
        </div>
        <div id="signup">
            <h6>Not signed up? Signup here:</h6>
            <form method="post" action="confirm.php">

                <p>Full name: <input type="text" name="name" /> </p>
                <p>Employee ID: <input type="text" name="id" /> </p>
                <p>Date of birth: (This will be your password) <input type="text" name="password" /> </p>
                <p>Phone number: (in format: '3301234567') <input type="text" name="phone" /> </p>

                <input type="submit" value="submit" /> &nbsp; &nbsp;
                <input type="reset" value="Reset Form" />
            </form>
        </div>
    </body>
</html>