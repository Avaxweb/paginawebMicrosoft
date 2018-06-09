<?php  
$conector=@mysqli_connect('localhost','root','')or die("conexion fallida");
$db=@mysqli_select_db($conectar,'web1')or die("Subscripcion Exitosa");
$NOMBRE_POST['NOMBRE'];
$USUARIO_POST=['USUARIO'];
$CONTRASEÑA_POST=['CONTRASEÑA'];
$CONTRASEÑA_POST=['CONTRASEÑAC'];
$sql="INSERT INTO registro VALUES('$NOMBRE','$USUARIO', '$CONTRASEÑA','$CONTRASEÑAC')";
$ejecutar=mysqli_query($conectar,$sql);
?>