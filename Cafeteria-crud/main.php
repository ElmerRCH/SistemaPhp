<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Cafe</title>
        <link href="../Cafeteria-crud/src/style/main.css" rel="stylesheet"/>
        <script src="../Cafeteria-crud/src/js/controllers.js"></script>
    </head>
    <body>
        <?php
            include("connection.php");
            include("Operations-crud.php");
        ?>
        <nav class="bar">
            <div>   
                <button value="Agregar" onclick="Agregar();">Agregar</button>
                <button value="Editar" onclick="Editar();">Editar</button>
                <button value="Eliminar" onclick="Eliminar();">Eliminar</button>
                <button value="Listar" onclick="Listar();">Listar</button>
            </div>
        </nav>
        <div class="menu" id="container">
            <main>
                <h1 id="accion"></h1>
                <hr>
                <section>
                    <h2>Coffee</h2>
                    <img src="https://cdn.freecodecamp.org/curriculum/css-cafe/coffee.jpg" alt="coffee icon"/>
                </section>
<!------------------SECTION FORM AGREGAR---------------------------------------------------------------->
                    <section id="agregar">
                        <form action="" method="post"id="form-agregar">
                            <div class="inputs">
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombre" class="input-text" placeholder="Escriba el nombre:" required>
                            </div>
                            <div class="inputs">
                                <label for="tamaño">tamaño:</label>
                                <select name="tamaño" class="input-text"  required>
                                    <option value="Grande">Grande</option>
                                    <option value="Mediano">Mediano</option>
                                    <option value="Chico">Chico</option>
                                </select>
                            </div>
                            <div class="inputs">
                                <label for="precio">Precio:</label>
                                <input type="number" name="precio" class="input-text" placeholder="Escriba el precio:" required>
                            </div>
                            <div class="inputs">
                                <label for="fecha">Fecha:</label>
                                <input type="date" name="fecha" class="input-text" required>
                            </div>
                            <input type="submit" id="boton-operator" value="" name="">
                        </form>
                    </section>   
<!-----------------SECTION FORM EDITAR Y BORRAR---------------------------------------------------------------->
                    <section id="editar-borrar">
                        <h3 id="operacion">bebida actual</h3>
                        <form action="" method="post" id="form-container">
                            <div class="inputs">
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombreOld" class="input-text" required>
                            </div>
                            <div class="inputs">
                                <label for="tamaño">tamaño:</label>
                                <select name="tamañoOld" class="input-text" required>
                                    <option value="Grande">Grande</option>
                                    <option value="Mediano">Mediano</option>
                                    <option value="Chico">Chico</option>
                                </select>
                            </div>
                            <div class="inputs">
                                <label for="precio">Precio:</label>
                                <input type="number" name="precioOld" class="input-text" required>
                            </div>
                            <h3 id="confirmacion">bebida nueva</h3>
                            <div class="inputs">
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombre" class="input-text" required>
                            </div>
                            <div class="inputs">
                                <label for="tamaño">tamaño:</label>
                                <select name="tamaño" class="input-text" required>
                                    <option value="Grande">Grande</option>
                                    <option value="Mediano">Mediano</option>
                                    <option value="Chico">Chico</option>
                                </select>
                            </div>
                            <div class="inputs">
                                <label for="precio">Precio:</label>
                                <input type="number" name="precio" class="input-text" required>
                            </div>
                            
                            <input type="submit" id="actualizarEliminar" value="" name="">
                        </form>
                    </section>
            </main>
            <div id="container-table">
                <form action="" method="get" class="buscar">
                    <div class="Div-buscar">
                        <input type="text" name="busqueda" class="input-text" placeholder="buscar bebida:" >
                        <input type="submit" value="buscar" name="buscar">
                    </div>
                </form>
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Tamaño</th>
                            <th>Precio</th>
                            <th>Fecha</th>
                        </tr>
                </thead>
                        <?php 
                            if(isset($_GET['buscar'])){
                                $busqueda = $_GET['busqueda'];

                                $sql = "SELECT * FROM cafes 
                                WHERE nombre='$busqueda' 
                                AND stock > 0 OR fecha_registro='$busqueda' OR precio='$busqueda';";
                                $result = mysqli_query($conn, $sql);

                                while($i = mysqli_fetch_array($result)){
                                     
                        ?>
                        <tr>
                            <td><?php echo $i['nombre']?></td>
                            <td><?php echo $i['Tamaño']?></td>
                            <td><?php echo $i['precio']?></td>
                            <td><?php echo $i['fecha_registro']?></td>
                        </tr>
                        <?php
                                }
                                "<script>alert('Bebida encontrada')</script>";
                            }
                        ?>
                </table>
            </div>
        </div>  
    </body>
</html>