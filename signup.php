<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
</head>

<body>
    <form method="POST" action="signup-config.php" enctype="multipart/form-data" id="form">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="signup-email" name="email">

        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="signup-password" name="password">
        </div>
        <div>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password">
        </div>
        <div>
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name">
        </div>
        <div>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name">
        </div>
        <div>
            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div>
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob">
        </div>
        <div>
            <label for="profile_picture">Profile Picture:</label>
            <input type="file" id="profile_picture" name="profile_picture">
        </div>
        <div>
            <input type="submit" value="Submit" id="signup-submit">
        </div>
    </form>
    <div class="error-message">
        <p>Error</p>
    </div>
    <script src="JS/signup.js"></script>
</body>

</html>