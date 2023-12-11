<?php
$cookie_name = "usuario";
$cookie_value = "PepeXarli";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "La cookie llamada '" . $cookie_name . "' no está establecida!";
} else {
  echo "Cookie '" . $cookie_name . "' está establecida!<br>";
  echo "Su valor es: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>