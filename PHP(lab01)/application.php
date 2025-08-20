<form action="application.php" method="POST">
    <input type="text" name="name" placeholder="Your Name">
    <input type="password" name="password">
    <input type="submit" value="Submit">
</form>


<?php
echo "<h3>Form  Recived Data:</h3>";

print_r($_POST);

?>