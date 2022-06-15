<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form validation</title>
</head>
<body>
<h2>FORM VALIDATION</h2>
<form action="">
    <label for="name">Name:</label>
    <input type="text"id="name"required >
    <span class="error">*</span>
    <br>
    <br>
    <label for="email">E-mail:</label>
    <input type="email"id="email"required>
    <span>*</span>
    <br>
    <br>
    <label for="website">Website:</label>
    <input type="text"id="website"><br>
    <br>
    <label for="comment">Comment:</label>
    <textarea name="comment" id="comment" cols="40" rows="5"></textarea><br>
    <br>
    <label for="gender">Gender:</label>
    <input type="radio"name="gender"value="Male">Male
    <input type="radio"name="gender"value="Female">Female
    <br><br>
    <input type="submit"value="Submit">




</form>
</body>
</html>
