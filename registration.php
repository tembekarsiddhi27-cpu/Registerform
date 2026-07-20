<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f2f2f2;
        }
        .container{
            width:400px;
            margin:50px auto;
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px gray;
        }
        h2{
            text-align:center;
        }
        input, textarea{
            width:100%;
            padding:10px;
            margin-top:5px;
            margin-bottom:15px;
        }
        input[type=submit]{
            background:green;
            color:white;
            border:none;
            cursor:pointer;
        }
        input[type=submit]:hover{
            background:darkgreen;
        }
        .success{
            text-align:center;
            color:green;
            font-size:20px;
            font-weight:bold;
        }
    </style>
</head>
<body>

<?php
if(isset($_POST['register']))
{
    echo "<p class='success'>Registration Done Successfully!</p>";
}
?>

<div class="container">
    <h2>Registration Form</h2>

    <form method="post">

        <label>Full Name</label>
        <input type="text" name="name" required>

        <label>Mobile Number</label>
        <input type="tel" name="mobile" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Address</label>
        <textarea name="address" required></textarea>

        <label>Age</label>
        <input type="number" name="age" required>

        <label>Gender</label><br>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <br><br>

        <input type="submit" name="register" value="Register">

    </form>

</div>

</body>
</html>
