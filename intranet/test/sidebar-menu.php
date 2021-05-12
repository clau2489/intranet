<?php

//Sesion SuperUsuario 
if ($_SESSION['permisos_acceso']=='Superusuario') { ?>
  <ul class="sidebar-menu">
    <li class="header">MENU</li>
    <?php  
    if ($_GET["module"]=="profile-superuser") { 
      $active_home="active";
    } else {
      $active_home="";
    }
    ?>
    <li class="<?php echo $active_home;?>">
      <a href="?module=profile-superuser"><i class="fa fa-home"></i> Panel de Aplicaciones </a>
    </li>    
    <li class="<?php echo $active_home;?>">
      <a href="http://127.0.0.1/phpmyadmin" target="_blank"><i class="fa fa-home"></i> PhpMyAdmin </a>
    </li>
    <?php
    if ($_GET["module"]=="user" || $_GET["module"]=="form_user") { ?>
      <li class="active">
        <a href="?module=user"><i class="fa fa-user"></i> Administrar usuarios</a>
      </li>
      <?php
    }
    else { ?>
      <li>
        <a href="?module=user"><i class="fa fa-user"></i> Administrar usuarios</a>
      </li>
      <?php
    }
    if ($_GET["module"]=="password") { ?>
      <li class="active">
        <a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
      </li>
      <?php
    }
    else { ?>
      <li>
        <a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
      </li>
      <?php
    }
    ?>
  </ul>
  <?php
}

//Sesion Administrador Normal
elseif ($_SESSION['permisos_acceso']=='Administrador') { ?>
  <!-- sidebar menu start -->
  <ul class="sidebar-menu">
    <li class="header">MENU</li>
    <?php 
    if ($_GET["module"]=="start") { ?>
      <li class="active">
        <a href="?module=profile-administrator"><i class="fa fa-home"></i> Aplicaciones Disponibles </a>
      </li>
      <?php
    }
    else { ?>
      <li>
        <a href="?module=profile-administrator"><i class="fa fa-home"></i> Aplicaciones Disponibles </a>
      </li>
      <?php
    }

    if ($_GET["module"]=="password") { ?>
      <li class="active">
        <a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
      </li>
      <?php
    }
    else { ?>
      <li>
        <a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
      </li>
      <?php
    }
    ?>
  </ul>
  <?php
}

//COPIAR PARA CREAR UN NUEVO PERFIL DE USUARIO
if ($_SESSION['permisos_acceso']=='Usuario') { ?>
  <ul class="sidebar-menu">
    <li class="header">MENU</li>
    <?php 
    if ($_GET["module"]=="admin") { ?>
      <li class="<?php echo $active_home;?>">
        <a href="?module=profile-user"><i class="fa fa-home"></i>Panel de Aplicaciones </a>
      </li>
      <?php
    }
    else { ?>
      <li>
        <a href="?module=profile-user"><i class="fa fa-home"></i>Panel de Aplicaciones </a>
      </li>
      <?php
    }
    if ($_GET["module"]=="password") { ?>
      <li class="active">
        <a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
      </li>
      <?php
    }
    else { ?>
      <li>
        <a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
      </li>
      <?php
    }
    ?>
  </ul>
  <?php
}
//HASTA AQUI

//Sidebar Usuario Transito
if ($_SESSION['permisos_acceso']=='UsuarioTransito') { ?>
  <ul class="sidebar-menu">
    <li class="header">MENU</li>
    <!-- Items del menu-->
    <li>
      <a class="nav-link" type="button" data-toggle="modal" data-target="#exampleModal" ><i class="fa fa-plus-square"></i> Crear registro  </a>
    </li>
  </ul>
  <?php
}

?>