<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration form</title>
</head>
<body>
<h2>eMobilis student registration form</h2>
<form action="send-to.php"method="post">
    <label for="Fname">Firstname</label>
    <br>
    <input type="text"id="Fname"name="fname"required><br>
    <label for="lname">Lastname</label><br>
    <input type="text"id="lname"name="lname"><br>
    <label for="email">Email address</label><br>
    <input type="email"id="email"name="email"><br>
    <label for="dob">Date of Birth</label><br>
    <input type="date"name="dob"><br>
    <input type="submit"value="Register!!!">
</form>


</body>
</html>
