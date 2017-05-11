<link rel="stylesheet" href="styles/GetFormDataStyles.css" media="screen">
<form id="formId" method="GET">
    <input type="text" name="name" required placeholder="Name"><br>
    <input type="number" name="age" required placeholder="Age"><br>
    <input type="radio" name="gender" value="male"> Male<br>
    <input type="radio" name="gender" value="female"> Female <br>
    <input type="submit" value="Submit">
</form>

<?php
    if (isset($_GET) &&
        !empty($_GET) &&
        sizeof($_GET) === 3
    ) {
        $name = $_GET['name'];
        $age = $_GET['age'];
        $gender = $_GET['gender'];
        echo "My name is {$name}. I am {$age} years old. I am {$gender}.";
    }
?>

