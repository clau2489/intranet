<?php
session_start();
ob_start();
require_once "../../config/database.php";
include "../../config/fungsi_tanggal.php";
include "../../config/fungsi_rupiah.php";
$hari_ini = date("d-m-Y");

$id = $_GET['id'];

$query = mysqli_query($mysqli, "SELECT acta, fecha, hora, lugar, vehiculo, n_motor, n_chasis, dominio, conductor, inspector, falta, observaciones, remitido, acta_remitida_a_faltas, fecha_liberacion FROM transito WHERE id=$id") or die('Error '.mysqli_error($mysqli));

?>
<html xmlns="http://www.w3.org/1999/xhtml"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Sistema de Transito - Municipio de Marcos Paz</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/laporan.css" />
    </head>
    <body>
        <div id="title">
           Registro de Faltas - Municipalidad de Marcos Paz
        </div>
        
        <hr><br>

        <div id="isi">

        <?php
       
        while ($data = mysqli_fetch_assoc($query)) {
            echo "
            <h4>Acta Numero: $data[acta]</h4><br>
            <h4>Fecha: $data[fecha]</h4><br>
            <h4>Hora: $data[hora]</h4><br>
            <h4>Lugar: $data[lugar]</h4><br>
            <h4>Vehiculo: $data[vehiculo]</h4><br>
            <h4>Numero de Motor: $data[n_motor]</h4><br>
            <h4>Numero de Chasis: $data[n_chasis]</h4><br>
            <h4>Dominio: $data[dominio]</h4><br>
            <h4>Conductor: $data[conductor]</h4><br>
            <h4>Inspector: $data[inspector]</h4><br>
            <h4>Falta cometida: $data[falta]</h4><br>
            <h4>Observaciones: $data[observaciones]</h4><br>
            <h4>Remitido: $data[remitido]</h4><br>
            <h4>Acta remitida a Faltas: $data[acta_remitida_a_faltas]</h4><br>
            <h4>Fecha de Liberacion: $data[fecha_liberacion]</h4><br>";                                
        }
        ?>  


            
        </div>
    </body>
</html>
<?php
$filename="Transito.pdf"; 
//==========================================================================================================
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">'.($content).'</page>';

require_once('../../assets/plugins/html2pdf_v4.03/html2pdf.class.php');
try
{
    $html2pdf = new HTML2PDF('P','F4','en', false, 'ISO-8859-15',array(10, 10, 10, 10));
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    $html2pdf->Output($filename);
}
catch(HTML2PDF_exception $e) { echo $e; }
?>