<?php
require __DIR__ . '/../vendor/autoload.php';
use Carbon\Carbon;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>This is a clean PHP environment ready for use!</h3>
    <p>No services and framworks installed</p>
    <p><?php echo Carbon::now('America/Toronto')?></p>
</body>
</html>