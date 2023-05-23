<?php

# ---Parametros---
$txtInicio = $_REQUEST['txtInicio'];
$txtFin = $_REQUEST['txtFin'];

#-- Salida ----

echo "<html>";
echo "<head>";
echo "<title>Formulario</title>";
echo "</head>";
echo "<body bgcolor='black' text='white'>";
echo "<center>";
echo "<h1>Números Primos</h1>";

echo "<table border='1'>";
$strResultado = "";
$contador = 0;
echo "<tr>";

//--Resultados

for ($n = $txtInicio; $n <= $txtFin; $n++) {
    $thisColor = (fnEsPrimo($n)) ? 'red' : 'green';
    echo "<td align='center' bgcolor='$thisColor'>$n</td>";
    $contador++;
    if ($contador == 40) {
        echo "</tr><tr>";
        $contador = 0;
    }
}
echo "</table>";

//--Botón
echo "<br><a href='form.php'><button>OTRO</button></a>";

//--Resultado
echo substr($strResultado, 0, -2);

#--Funciones -----
function fnEsPrimo($valor)
{
    //variables
    $multiplos = 0;

    //Proceso
    for ($n = 1; $n <= $valor; $n++) {
        if ($valor % $n == 0)
            $multiplos++;

        if ($multiplos > 2)
            break;
    }
    $resultado = ($multiplos == 2) ? true : false;

    //Respuesta
    return $resultado;
}
?>

