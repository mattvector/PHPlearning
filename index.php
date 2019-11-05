<html>

<body>

<form method="GET">
      <input type="text" name="person">
      <button>SUBMIT</button>
</form>

<?php
 //this is a comment
     $name = $_GET['person'];
     echo $name." is a biggen";
?>

</body>

</html>