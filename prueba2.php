<?php
 include './prueba.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>falopa</title>
</head>
<body>
<h1 style="color:red"> HOLA MI PAGINA </h1>



<?php

foreach (devolverUsuarios() as $users){
    echo ' ' . $users;
}

?>

</h1>


</body>
</html>


<script>
    let hola = "PEDRO";
    console.log(hola);
</script>