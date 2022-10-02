<?php
require_once(__DIR__ . '/vendor/autoload.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
  <b><a href="http://localhost:5000/engine.php?clear-session">Clear Session</a></b>
  <h2>Call APIs</h2>
  <ul>
      <li><a href="http://localhost:5000/engine.php?api=extension">Read Extension Info</a></li>
      <li><a href="http://localhost:5000/engine.php?api=extension-call-log">Read Extension Call Log</a></li>
      <li><a href="http://localhost:5000/engine.php?api=account-call-log">Read Account Call Log</a></li>
  </ul>
</body>
</html>
