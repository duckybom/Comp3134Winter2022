<?php
session_start();
$_SESSION['confirmation'] = "test";
?>

<html>

<head></head>

<body>
    <script>
    var form = document.createElement("form");
    var element1 = document.createElement("input");
    var element2 = document.createElement("input");
    var element3 = document.createElement("input");

    form.method = "POST";
    form.action = "csfr_action.php";

    element1.value = "host";
    element1.name = "username";
    form.appendChild(element1);

    element2.value = "pass";
    element2.name = "password";
    form.appendChild(element2);

    element3.type = "hidden";
    element3.value = "<?php echo $_SESSION['confirmation']; ?>";
    element3.name = "confirmation";
    form.appendChild(element3);

    document.body.appendChild(form);
    form.submit();
    </script>
</body>

</html>