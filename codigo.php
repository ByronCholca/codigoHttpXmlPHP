<div style="height:1px;border-width:0;color:gray;background-color:gray"></div>
<div class="has-text-align-center">
	<h3>UNIVERSIDAD NACIONAL DE LOJA</h3>
	<h4>MAESTRIA EN INGENIERIA DE SOFTWARE</h4>
	<h4>Desarrollo de Software en Ambientes Cloud</h4>
</div>
<div style="height:1px;border-width:0;color:gray;background-color:gray"></div>

<?php

echo('<div style="width:100%;">  <table align="left" border=1 style="width:100%; background: #f3f3f3;">');
echo '<tr>';
echo '<th>Dato</th>';
echo '<th>Descripción</th>';
echo '</tr>';

if (file_exists('InfoPersonal.xml')) {
	$xml = simplexml_load_file('InfoPersonal.xml');
		
	//acceder individualmente

	echo '<tr>';   
	echo "<td> Cédula </td>";
	echo '<td>'.$xml->persona[0]->cedula.'</td>';
	echo '</tr>';
	echo '<tr>';   
	echo "<td> Nombre </td>";
	echo '<td>'.$xml->persona[0]->nombre.'</td>';
	echo '</tr>';
	echo '<tr>';   
	echo "<td> Título </td>";
	echo '<td>'.$xml->persona[0]->titulo.'</td>';
	echo '</tr>';
	echo '<tr>';   
	echo "<td> Asignatura </td>";
	echo '<td>'.$xml->persona[0]->asignatura.'</td>';
	echo '</tr>';
	echo '<tr>';   
	echo "<td> Ciudad </td>";
	echo '<td>'.$xml->persona[0]->ciudad.'</td>';
	echo '</tr>';
	echo '<tr>';   
	echo "<td> Maestria </td>";
	echo '<td>'.$xml->persona[0]->maestria.'</td>';
	echo '</tr>';
	echo '<tr>';   
	echo "<td> Fecha </td>";
	echo '<td>'.$xml->persona[0]->fecha.'</td>';
	echo '</tr>';
	echo '<tr>';   
	echo "<td> Docente </td>";
	echo '<td>'.$xml->persona[0]->docente.'</td>';
	echo '</tr>';

} else {
	exit('No se puede abrir XML');
}
	echo '</table>  </div>';  
?>

</br>

<?php
$navegador = $_SERVER['HTTP_USER_AGENT'];
$nameBrouser = get_browser_name($navegador);
$nameSO = $_SERVER['HTTP_SEC_CH_UA_PLATFORM'];
$serverNumPort = $_SERVER['SERVER_PORT'];
$nameServer = $_SERVER['SERVER_SOFTWARE'];
$serverNumPort = $_SERVER['SERVER_PORT'];

echo ("<b>Navegador utilizado: </b> $nameBrouser<br>" );
echo "<br>"; 
echo "<b>Status code: </b>"; 
var_dump(http_response_code());
echo "<br>"; 
echo "<br><b>Nombre SO utilizado:</b> $nameSO <br>"; 
echo "<br>"; 
echo "<b>REFERENCIA es:</b> {$_SERVER['HTTP_REFERER']}<br>";  
echo "<br><b>Servidor web usado:</b> $nameServer <br>"; 
echo "<br><b>Número puerto del server:</b> $serverNumPort <br>"; 
echo "<br>"; 
echo "<b>El servidor es:</b> {$_SERVER['SERVER_NAME']}<br>"; 
echo "<br>";
function get_browser_name($navegador)
{
if (strpos($navegador, 'Opera')) return 'Opera';
elseif (strpos($navegador, 'Edge')) return 'Edge';
elseif (strpos($navegador, 'Chrome')) return 'Chrome';
elseif (strpos($navegador, 'Safari')) return 'Safari';
elseif (strpos($navegador, 'Firefox')) return 'Firefox';
elseif (strpos($navegador, 'MSIE')) return 'Internet Explorer';
return 'Other';
}

?>
<div style="height:1px;border-width:0;color:gray;background-color:gray"></div>
