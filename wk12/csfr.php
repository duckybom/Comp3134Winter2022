<?php
$message = "";
if (isset($_POST['username']) and isset($_POST['password'])) {
    if ($_POST['username'] == "host" and $_POST['password'] == "pass") {
        $message = "Login Success";
    } else {
        $message = "Login failed";
    }
}
?>

<form method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Submit</button>
</form>

<div>
    <?php echo $message ?? ""; ?>
</div>