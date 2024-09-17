
<!-- Exemple simple input fonctionnels -->

<form method="get">
    <input type='text' name="name" value="myName" />
    <input type="submit" name="go" value="Submit" />
</form>

<?php


$name = $_GET['name'];



echo $name;


?>