<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
    <?php
    echo "hello" .$_SESSION['name'].".<br>";
    echo "address".$_SESSION['address'];
    ?>
</body>
</html>
