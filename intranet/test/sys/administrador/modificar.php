<!DOCTYPE html>
<?php
session_start();
if (empty($_SESSION["usuario"])) {
    header("Location: index.php");
    exit();
}?>

<html lang="es">
<?php include 'header.php';?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.2.1/jquery.quicksearch.js"></script>

<body>  
  <div class="container-fluid mt-4">

    <!-- Titulo -->
    <div class="row">
      <div class="col-md-6">
        <h5 style="color: white;"><i class="fa fa-book" style="font-size: 20px;"></i>  Modificacion de Comercio </h5>
      </div>
      <div class="col-md-6">

      </div>       
    </div>
    <hr class="bg-white">
    <!-- Panel de botones -->
    <div class="row">
      <div class="col-md-6">
      </div>
      <div class="col-md-6 text-right">       
        <a class="btn btn-info btn-sm" href="home.php" ><i class="fa fa-arrow-left"></i> Volver</a>
        <a class="btn btn-warning btn-sm" href="logout.php"><i class="fa fa-power-off"></i> Cerrar sesión</a>  
      </div>
        <form action="procesos/process.php" method="post" target="_blank" id="formExport">
          <input type="hidden" id="data_to_send" name="data_to_send" />
        </form>          
    </div>
    <div class="row mt-2">
      <div class="col-md-6 offset-md-3 p-2">
        <div class="formulario">
          <h5>Modificar Comercio</h5>
          <hr>
          <br>
          <?php
          require 'conexion/db.php';
          require 'conexion/conexion.php';
          //ID de la pagina anterior
          $id= $_GET['id'];      

          //Datos a modificar           
          $query_datos=mysqli_query($conn,"select * from comercios where id_comercio='$id'");          
          while($rw=mysqli_fetch_array($query_datos))          
          {
          ?>          
          <form action="procesos/modificar.php?id=<?php echo $rw['id_comercio']; ?>" method="post">


            <div class="form-row">
              <label>Rubro Actual</label> 
                <?php
                $categoria = $rw['id_rubro'];
                //select con rubro
                $query_categoria=mysqli_query($conn,"select * from comercios_rubro where id_rubro = '$categoria'");
                $categoria=mysqli_fetch_array($query_categoria);
                ?>                
                <input class="form-control" value="<?php echo utf8_encode($categoria['tipo']); ?>" disabled></input>    
            </div>


            <div class="form-row">
              <label>Modificar el rubro por:</label> 
              <select class="form-control" value="<?php echo $nombre_rubro['tipo'];?>" name="dato_uno" id="dato_uno" required>
                <?php
                $categoria = $rw['id_rubro'];
                //select con rubro
                $query_rubro=mysqli_query($conn,"select * from comercios_rubro");
                while($rubro=mysqli_fetch_array($query_rubro))
                {
                ?>                
                <option value="<?php echo ($rubro['id_rubro']); ?>" selected><?php echo utf8_encode($rubro['tipo']); ?></option>          
                <?php
                }
                ?>
              </select>      
            </div>

            <div class="form-row">
                <label>Titular del Comercio:</label>
                <input type="text" class="form-control" name="dato_dos" id="dato_dos" value="<?php echo $rw['titular']; ?>" required onkeyup="javascript:this.value=this.value.toUpperCase();">      
            </div>

            <div class="form-row">
                <label>DNI: (Ingresar el Documento sin espacios ni puntos)</label>
                <input type="text" class="form-control" name="dato_tres" id="dato_tres" value="<?php echo $rw['dni']; ?>" onkeyup="javascript:this.value=this.value.toUpperCase();">      
            </div> 

            <div class="form-row">
                <label>Nombre de Fantasia:</label>
                <input type="text" class="form-control" name="dato_cuatro" id="dato_cuatro" value="<?php echo $rw['nombre_fantasia']; ?>" required onkeyup="javascript:this.value=this.value.toUpperCase();">      
            </div>

            <div class="form-row">
                <label>Direccion: (Nombre de Calle y Altura)</label>
                <input type="text" class="form-control" name="dato_cinco" id="dato_cinco" value="<?php echo $rw['direccion']; ?>" required onkeyup="javascript:this.value=this.value.toUpperCase();">      
            </div>

            <div class="form-row">
                <label>Barrio:</label>
                <input type="text" class="form-control" name="dato_seis" id="dato_seis" value="<?php echo $rw['barrio']; ?>" required onkeyup="javascript:this.value=this.value.toUpperCase();">      
            </div>

            <div class="form-row">
                <label>Whatsapp: (Sin espacios ni guiones, 0 ni 15. Ejemplo: 11########)</label>
                <input type="text" class="form-control" name="dato_siete" id="dato_siete" value="<?php echo $rw['whatsapp']; ?>" onkeyup="javascript:this.value=this.value.toUpperCase();">      
            </div>

            <div class="form-row">
                <label>Telefono de Linea: (Sin 0220, sin espacios ni guiones)</label>
                <input type="text" class="form-control" name="dato_ocho" id="dato_ocho" value="<?php echo $rw['tel_linea']; ?>" onkeyup="javascript:this.value=this.value.toUpperCase();">      
            </div>

            <div class="form-row">
                <label>Correo Electrónico:</label>
                <input type="text" class="form-control" name="dato_nueve" id="dato_nueve" value="<?php echo $rw['email']; ?>">      
            </div>

            <div class="form-row">
                <label>Dirección Web: (Copie aquí una dirección de Facebook, Instagram, o sitio Web)</label>
                <input type="text" class="form-control" name="dato_diez" id="dato_diez" value="<?php echo $rw['web']; ?>">      
            </div>

            <div class="form-row">
                <label>Horario: (Elija un patrón para tener el mismo)</label>
                <input type="text" class="form-control" name="dato_once" id="dato_once" value="<?php echo $rw['horario']; ?>">      
            </div>

            <br>
            <div class="form-row">
              <button type="submit" class="btn btn-primary btn-block">Modificar datos del Comercio</button>
            </div>            
          </form>
          <?php
          }
          ?>          
        </div>

      </div>           
    </div>


  </div>
  <?php include 'footer.php';?>
</body>
<script type="text/javascript">

function sumar() {
  var precio = document.getElementById("dato_tres").value;
  var porcentaje = document.getElementById("dato_cuatro").value;
  var ganancia = precio * porcentaje / 100;
  var total = parseFloat(precio) + parseFloat(ganancia);
  document.getElementById('dato_cinco').value = ganancia;
  document.getElementById('dato_seis').value = total;
}

// script de reemplazo de punto por coma
function Remplaza(entry) {
  out = "."; // reemplazar el .
  add = ","; // por ,
  temp = "" + entry;
  while (temp.indexOf(out)>-1) {
  pos= temp.indexOf(out);
  temp = "" + (temp.substring(0, pos) + add + 
  temp.substring((pos + out.length), temp.length));
  }
  document.subform.texto.value = temp;
}


// script de busqueda rapida en tabla
$("#search").keyup(function(){
    _this = this;
    // Muestra los tr que concuerdan con la busqueda, y oculta los demás.
    $.each($("#table tbody tr"), function() {
        if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
           $(this).hide();
        else
           $(this).show();                
    });
});

document.getElementById('submitExport').addEventListener('click', function(e) {
    e.preventDefault();
    let export_to_excel = document.getElementById('table');
    let data_to_send = document.getElementById('data_to_send');
    data_to_send.value = export_to_excel.outerHTML;
    document.getElementById('formExport').submit();
});


</script> 
</html>

