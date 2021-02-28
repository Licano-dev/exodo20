
<?php
include('index.html');
$destino = "atencion@exodo20fibraoptica.com";

if(isset($_POST['formulario'])){
    
    
    $nombre= $_POST['name'];
    $telefono= $_POST['tel'];
    $correo= $_POST['email'];
    $mensaje= $_POST['message'];
    $asunto ="Contacto desde la Web, Solicitud de Información";
    
    if($telefono){
        $contenido = 'Nombre: '.$nombre."\nTeléfono: ".$telefono."\nCorreo: ".$correo."\nMensaje: ".$mensaje;
    }else{
        $contenido = 'Nombre: '.$nombre."\nCorreo: ".$correo."\nMensaje: ".$mensaje;
    }
   
    $mail= mail($destino, $asunto,$contenido);
    
    echo '<script>swal({
        title: "Información Enviada",
        text: "Gracias '."$nombre".' por Tú Información nos Pondremos en Contacto",
        icon: "success",
        
      });</script>';
    echo "<script>
    setTimeout(()=>{window.open('index.html','_self')},4000)
    </script>";
        
}
if(isset($_POST['Suscribe'])){
    $subscripcion = $_POST['emailSubs'];
    $asuntoS ="Suscriptor de Pagina Web Exodo20 Fibra Óptica";
    $mail= mail($destino, $asuntoS,$subscripcion);
    
    echo '<script>swal({
        title: "Suscripción Enviada",
        text: "Gracias por Suscribirte",
        icon: "success",
        
      });</script>';
    echo "<script>
    setTimeout(()=>{window.open('index.html','_self')},3000)
    </script>";
    
    
}

        
?>