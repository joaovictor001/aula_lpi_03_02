<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
$_SESSION["nome"] = "joao";
echo "Session variables are set.";
unset($_SESSION['nome']);


?>

</body>
</html>