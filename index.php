<?php
$submitted = ($_SERVER["REQUEST_METHOD"] === "POST");
$name = $birthdate = $color = $place = $nickname = "";

if ($submitted) {
    $name = trim($_POST["name"] ?? "");
    $birthdate = trim($_POST["birthdate"] ?? "");
    $color = trim($_POST["color"] ?? "");
    $place = trim($_POST["place"] ?? "");
    $nickname = trim($_POST["nickname"] ?? "");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Torren Moore Wk 2 Performance Assessment</title>
</head>

<body>
    <h1>Torren Moore Wk 2 Performance Assessment</h1>

    <form method="post" action="">
        <p><b>Enter your name:</b> <input type="text" name="name"></p>
        <p><b>Enter your date of birth:</b> <input type="text" name="birthdate"></p>
        <p><b>Enter your favorite color:</b> <input type="text" name="color"></p>
        <p><b>Enter your favorite place to visit:</b> <input type="text" name="place"></p>
        <p><b>Enter your nickname:</b> <input type="text" name="nickname"></p>
        <input type="submit" value="Submit Values">
    </form>

    <?php if ($submitted) { ?>
        <p><b><?php echo $name !== "" ? "Your name is: " . htmlspecialchars($name) : "You didn't enter a name!"; ?></b></p>
        <p><b><?php echo $birthdate !== "" ? "Your date of birth is: " . htmlspecialchars($birthdate) : "You didn't enter a date of birth!"; ?></b></p>
        <p><b><?php echo $color !== "" ? "Your favorite color is: " . htmlspecialchars($color) : "You didn't enter a favorite color!"; ?></b></p>
        <p><b><?php echo $place !== "" ? "Your favorite place to visit is: " . htmlspecialchars($place) : "You didn't enter a favorite place!"; ?></b></p>
        <p><b><?php echo $nickname !== "" ? "Your nickname is: " . htmlspecialchars($nickname) : "You didn't enter a nickname!"; ?></b></p>
    <?php } ?>
</body>

</html>