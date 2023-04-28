<?php
  function Agregar($conn){
    if(!empty($_POST["Agregar"])){
        if(empty($_POST["nombre"]) 
          and empty($_POST["tamaño"]) 
          and empty($_POST["precio"]) 
          and empty($_POST["fecha"])){
           
        }else{

          $nombre = $_POST["nombre"];
          $tamaño = $_POST["tamaño"];
          $precio = $_POST["precio"];
          $fecha = $_POST["fecha"];

          $sql = "INSERT INTO cafes (nombre,Tamaño,precio,fecha_registro,stock) 
          VALUES ('$nombre','$tamaño','$precio','$fecha',1)";

          if (mysqli_query($conn, $sql)) {
            echo "<script>alert('registro creado correctamente')</script>";
          }else{  
            echo "<script>alert('Error al guardar la bebida')</script>";
          }
        }   
    }
  }
  function Editar($conn){
    if(!empty($_POST["Editar"])){
      if(empty($_POST["nombre"]) 
        and empty($_POST["tamaño"]) 
        and empty($_POST["precio"])
        and empty($_POST["nombreOld"])
        and empty($_POST["tamañoOld"]) 
        and empty($_POST["precioOld"])){
         
      }else{

        $nombre = $_POST["nombre"];
        $tamaño = $_POST["tamaño"];
        $precio = $_POST["precio"]; 

        $nombreOld = $_POST["nombreOld"];
        $tamañoOld = $_POST["tamañoOld"];
        $precioOld = $_POST["precioOld"]; 
        
        $sql = "UPDATE cafes SET nombre = '$nombre',Tamaño = '$tamaño',precio = '$precio'
                WHERE nombre = '$nombreOld' AND Tamaño = '$tamañoOld' AND precio = '$precioOld'";

        if (mysqli_query($conn, $sql)) {
          echo "<script>alert('registro actualizado correctamente')</script>";
        }else{  
          echo "<script>alert('Error al actualizar la bebida')</script>";
        }
      }   
  }
  }
  function Eliminar($conn){
    if(!empty($_POST["Eliminar"])){
      if(empty($_POST["nombre"]) 
        and empty($_POST["tamaño"]) 
        and empty($_POST["precio"])
        and empty($_POST["nombreOld"])
        and empty($_POST["tamañoOld"]) 
        and empty($_POST["precioOld"])){
         
      }else{

        $nombreOld = $_POST["nombreOld"];
        $tamañoOld = $_POST["tamañoOld"];
        $precioOld = $_POST["precioOld"]; 

        $nombre = $_POST["nombre"];
        $tamaño = $_POST["tamaño"];
        $precio = $_POST["precio"]; 

        $sql = "UPDATE cafes SET nombre = '$nombre',Tamaño = '$tamaño',precio = '$precio', stock = 0
                WHERE nombre = '$nombreOld' AND Tamaño = '$tamañoOld' AND precio = '$precioOld' AND stock = 1";

        if (mysqli_query($conn, $sql)) {
          echo "<script>alert('registro eliminado correctamente')</script>";
        }else{  
          echo "<script>alert('error al eliminar la bebida')</script>";
        }
      }   
    }
  }
   
    if ($_POST["Agregar"]) {
        Agregar($conn);
      }elseif ($_POST["Editar"]) {
        Editar($conn);
      }elseif ($_POST["Eliminar"]) {
        Eliminar($conn);
      }else {
      
    }
      
                        
?>
