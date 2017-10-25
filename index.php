

<html>
<body>

<form action="" method="GET">
Zoeken naar <input type="text" name="zoekOpdracht"><br>
<input name="formSent" type="submit" value="verzenden">
</form>

<?php
$formSent = isset($_REQUEST['formSent']);
if ($formSent) {
 echo 'Dit zijn de resultaten voor ' . $_GET['zoekOpdracht'];
}



?>

</body>
</html>