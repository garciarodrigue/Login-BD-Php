<?php

include("con_db.php");

if(isset($_POST['register'])){
	if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
         $name = trim($_POST['name']);
         $email = trim($_POST['email']);
         $fechareg = date("d/m/y");
         $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
         $resultado = mysql_query($conex,$consulta);
         if ($resultado) {
         	?>
         	<h3 class="ok">logueado exitoso</h3>
         	<?php
         }

     }  else {
     	?>
     	<h2 class="bad">porfavor llene los campos</h2>
     	<?php

    }
}

?>