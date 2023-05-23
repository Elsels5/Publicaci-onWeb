<?php

#--Encabezado----

echo "<html>";
echo "<head>";
	echo "<title>Formulario</title>";
echo "</head>";
echo "<body bgcolor='black' text='white'>";

#-- Tabla ----

echo "<h1 align='center'>Formulario</h1>";
echo "<hr color='orange' width='40%' size='10' align='center'>";

echo "<h2 align='center'>Cálculo de Numeros Primos</h2>";

#-- Formulario ----

echo "<form action=action.php method=post>";
echo "<p>";
	echo "<table border='0' width='32%' align='center'>";
	echo "<tr>";
   	 echo "<td>Rango de valores</td>";
    	echo "<td><input type='text' name='txtInicio'></td>";
	echo "</tr>";

	echo "<tr>";
		echo "<td>Inicio</td>";
		echo "<td><input type='text' name='txtInicio'></td>";
	echo "</tr>";
	echo "<tr>";
		#--Botones--
		echo "<td colspan='2'>";
		echo "<input type='submit' value='ENVIAR'>";
		echo "<input type='reset' value='CANCELAR'>";
		echo "</td>";
	echo "</tr>";
	echo "</table>";
echo "</p>";
echo "</form>";

echo "</body>";
echo "</html>";

?>
