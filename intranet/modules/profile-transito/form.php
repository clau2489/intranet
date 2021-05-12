

<?php  

if ($_GET['form']=='add') { ?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Agregar Registro
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=profile-transito"><i class="fa fa-home"></i> Inicio </a></li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/profile-transito/proses.php?act=insert" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-2 control-label">Acta N°:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control"  id="acta" name="acta" placeholder="N° de Acta"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Fecha de Acta</label>
                <div class="col-sm-5">
                  <input type="date" class="form-control" id="fecha" name="fecha" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Hora de Acta</label>
                <div class="col-sm-5">
                  <input type="time" class="form-control" id="hora" name="hora" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Lugar (Indique Calle, Altura y Entrecalles)</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Indique Calle, Altura y Entrecalles" required onkeyup="javascript:this.value=this.value.toUpperCase();">
                  </select>
                </div>
              </div>
            
              <div class="form-group">
                <label class="col-sm-2 control-label">Vehículo</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="vehiculo" name="vehiculo" placeholder="Indique Marca y Modelo del vehiculo" required onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 control-label">N° de Motor</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="n_motor" name="n_motor" placeholder="Indique el Numero de Motor del vehículo" required onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">N° de Chasis</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="n_chasis" name="n_chasis" placeholder="Indique el Numero de Chasis del vehículo" required onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Dominio</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="dominio" name="dominio" placeholder="Indique el Numero de Patente del vehículo" required onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Conductor</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="conductor" name="conductor" placeholder="Indique Nombre y Apellido del conductor" required onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Inspector</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="inspector" name="inspector" placeholder="Indique Nombre y Apellido del Inspector" required onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Falta</label>
                <div class="col-sm-5">
                    <textarea type="text" class="form-control" id="falta" name="falta" placeholder="Breve descipcion de la falta cometida" required onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
                </div>
              </div>


              <div class="form-group">
                <label class="col-sm-2 control-label">Observaciones</label>
                <div class="col-sm-5">
                  <textarea type="text" class="form-control" id="observaciones" name="observaciones" placeholder="Breve observacion" required onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Remitido</label>
                <div class="col-sm-5">
                  <select class="form-control" id="remitido" name="remitido" required>
                    <option> Seleccionar</option>
                    <option value="Si"> Si</option>
                    <option value="No"> No</option>
                  </select>
                </div>
              </div>            

              <div class="form-group">
                <label class="col-sm-2 control-label">Acta remitida a faltas</label>
                <div class="col-sm-5">
                  <input type="date" class="form-control" id="acta_remitida_a_faltas" name="acta_remitida_a_faltas">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Fecha de Liberación</label>
                <div class="col-sm-5">
                  <input type="date" class="form-control" id="fecha_liberacion" name="fecha_liberacion">
                </div>
              </div>


            </div>

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=user" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}

elseif ($_GET['form']=='edit') { 
    if (isset($_GET['id'])) {
      $query = mysqli_query($mysqli, "SELECT * FROM transito WHERE id='$_GET[id]'") or die('error: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }   
?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Consulta de Registro
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=profile-transito"><i class="fa fa-home"></i> Inicio</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/profile-transito/proses.php?act=update" enctype="multipart/form-data">
            <div class="box-body">
              
              <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

              <div class="form-group">
                <label class="col-sm-2 control-label">Acta N°:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control"  id="acta" name="acta" value="<?php echo $data['acta']; ?>" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Fecha de Acta</label>
                <div class="col-sm-5">
                  <input type="date" class="form-control" id="fecha" name="fecha" onkeyup="javascript:this.value=this.value.toUpperCase();" required value="<?php echo $data['fecha']; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Hora de Acta</label>
                <div class="col-sm-5">
                  <input type="time" class="form-control" id="hora" name="hora" required value="<?php echo $data['hora']; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Lugar (Indique Calle, Altura y Entrecalles)</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="lugar" name="lugar" value="<?php echo $data['lugar']; ?>" required onkeyup="javascript:this.value=this.value.toUpperCase();">
                  </select>
                </div>
              </div>
            
              <div class="form-group">
                <label class="col-sm-2 control-label">Vehículo</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="vehiculo" name="vehiculo" value="<?php echo $data['vehiculo']; ?>" required onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 control-label">N° de Motor</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="n_motor" name="n_motor" value="<?php echo $data['n_motor']; ?>" required onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">N° de Chasis</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="n_chasis" name="n_chasis" value="<?php echo $data['n_chasis']; ?>" required onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Dominio</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="dominio" name="dominio" value="<?php echo $data['dominio']; ?>" required onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Conductor</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="conductor" name="conductor" value="<?php echo $data['conductor']; ?>" required onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Inspector</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="inspector" name="inspector" value="<?php echo $data['inspector']; ?>" required onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Falta</label>
                <div class="col-sm-5">
                    <textarea type="text" class="form-control" id="falta" name="falta" required onkeyup="javascript:this.value=this.value.toUpperCase();"><?php echo $data['falta']; ?></textarea>
                </div>
              </div>


              <div class="form-group">
                <label class="col-sm-2 control-label">Observaciones</label>
                <div class="col-sm-5">
                  <textarea type="text" class="form-control" id="observaciones" name="observaciones"  required onkeyup="javascript:this.value=this.value.toUpperCase();"><?php echo $data['observaciones']; ?></textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Remitido</label>
                <div class="col-sm-5">
                  <select class="form-control" id="remitido" name="remitido" value="<?php echo $data['remitido']; ?>" required>
                    <option> Seleccionar</option>
                    <option value="Si"> Si</option>
                    <option value="No"> No</option>
                  </select>
                </div>
              </div>            

              <div class="form-group">
                <label class="col-sm-2 control-label">Acta remitida a faltas</label>
                <div class="col-sm-5">
                  <input type="date" class="form-control" id="acta_remitida_a_faltas" name="acta_remitida_a_faltas" value="<?php echo $data['acta_remitida_a_faltas']; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Fecha de Liberación</label>
                <div class="col-sm-5">
                  <input type="date" class="form-control" id="fecha_liberacion" name="fecha_liberacion" value="<?php echo $data['fecha_liberacion']; ?>">
                </div>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="modules/profile-transito/print.php?id='<?php echo $data['id']; ?>'" class="btn btn-default btn-reset">Imprimir</a>
                  <a href="?module=profile-transito" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
?>

























































