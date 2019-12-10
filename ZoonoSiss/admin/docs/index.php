<?php
include_once ('menu.php');
?>
<main class="app-content">
    <?php
    if($_SESSION['bienvenida']==0){
        echo "<script>
iziToast.success({
 position: 'topRight',
    title: 'Inicio:',
    message: 'Bienvenido al Sistema',
});
</script>";
        $_SESSION['bienvenida']=1;
    }
    ?>
    <div class="app-title">
        <div>
            <h1><i class="fa fa-home"></i>Pagina Principal</h1>
            <p>Pagina Principal</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item active"><a href="#">Pagina Principal
                </a></li>
        </ul>
    </div>
    <div class="tile">
    <img src="../../logo/perro.gif" width="220" height="220" style="float:left; margin:10px;">
        <center>
            <b><h1 style="font-family:'Niconne'; font-size: 70px;">Bienvenido al Sistema ZoonosiS</h1> </b>
        </center>
        <p>
        Es un sistema de gestión para el control y registro de mascotas, de modo que el personal pueda verificar el estado de las Mascotas desde su móvil o pc.
        </p>

        <hr align="left" color="#962439" size="2" />
        <center>
            <img src="../../imagenes/plane-loader-slower.gif" style="width: 100%; height: 100%;">
        </center>
        <hr color="#962439">
    </div>
</main>