let Container;
let displayBlock;
let buttonOperator;
let table;
let form;
let agregar;
let editarBorrar;
let operacion,confirmacion;

window.onload = function() {
    Container = document.getElementById("container");
    Container.style.display = "none";
    
    editarBorrar = document.getElementById("editar-borrar");
    editarBorrar.style.display = "none";

    table = document.getElementById("container-table");
    table.style.display = "none";

}
function Agregar(){
    
    Container = document.getElementById("container");
    Container.style.display = "flex";

    agregar = document.getElementById("agregar");
    agregar.style.display = "flex";

    let editar = document.getElementById("accion");
    editar.textContent = "Guardar";

    editarBorrar = document.getElementById("editar-borrar");
    editarBorrar.style.display = "none";
    
    table = document.getElementById("container-table");
    table.style.display = "none";
   
    buttonOperator= document.getElementById("boton-operator");
    buttonOperator.value = "Agregar"; 
    buttonOperator.name = "Agregar";
   
}
function Editar(){
    agregar = document.getElementById("agregar");
    agregar.style.display = "none";

    editarBorrar = document.getElementById("editar-borrar");
    editarBorrar.style.display = "block";

    table = document.getElementById("container-table");
    table.style.display = "block";
   
   
    form = document.getElementById("form-container");
    form.style.display = "block";

    let editar = document.getElementById("accion");
    editar.textContent = " Editar";

    operacion = document.getElementById("operacion");
    operacion.textContent = " bebida actual";

    confirmacion = document.getElementById("confirmacion");
    confirmacion.textContent = "confime la bebida nueva";

    buttonOperator= document.getElementById("actualizarEliminar");
    buttonOperator.value = "Editar";  
    buttonOperator.name = "Editar";

    Container = document.getElementById("container");
    Container.style.display = "flex";
    
}
function Eliminar(){
    agregar = document.getElementById("agregar");
    agregar.style.display = "none";

    editarBorrar = document.getElementById("editar-borrar");
    editarBorrar.style.display = "block";

    table = document.getElementById("container-table");
    table.style.display = "block";
   
   
    form = document.getElementById("form-container");
    form.style.display = "block";

    let editar = document.getElementById("accion");
    editar.textContent = "Eliminar";

    operacion = document.getElementById("operacion");
    operacion.textContent = " bebida a borrar";

    confirmacion = document.getElementById("confirmacion");
    confirmacion.textContent = "confirme la bebida";
    
    buttonOperator= document.getElementById("actualizarEliminar");
    buttonOperator.value = "Eliminar";  
    buttonOperator.name = "Eliminar";

    Container = document.getElementById("container");
    Container.style.display = "flex";
}
function Listar(){
    let listar = document.getElementById("accion");
    listar.textContent = "bebidas en inventario";

    
    agregar = document.getElementById("agregar");
    agregar.style.display = "none";

    editarBorrar = document.getElementById("editar-borrar");
    editarBorrar.style.display = "none";
   

    form = document.getElementById("form-container");
    form.style.display = "none";

    Container = document.getElementById("container");
    Container.style.display = "flex";
    table = document.getElementById("container-table");
    table.style.display = "block";

}
