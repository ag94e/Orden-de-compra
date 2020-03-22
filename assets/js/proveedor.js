window.onload = load;
var contenido = document.querySelector('#datos');
var alerta = document.getElementById('alerta');
function load() {
    contenido.innerHTML = ''
    fetch("../Bd/proveedor.php") 
        .then(data => data.json())
        .then(data => {
            var numeros = Object.keys(data).length
            for(var n=0;n<=numeros;n++){
                contenido.innerHTML += `
                <tr>
                    <th scope="row">`+data[n].id+`</th>
                    <td>`+data[n].Nombre+`</td>
                    <td>`+data[n].Direccion+`</td>
                    <td>`+data[n].Correo+`</td>
                    <td>`+data[n].Telefono+`</td>
                    <td>`+data[n].RFC+`</td>
                    <td>`+data[n].Contacto+`</td>
                    <td>`+data[n].Estatus+`</td>
                    <td>`+data[n].giro1+`</td>
                    <td>`+data[n].giro2+`</td>
                    <td>`+data[n].giro3+`</td>
                    <td>`+data[n].giro4+`</td>
                </tr>
                `
            }
        })
}
var form = document.getElementById('formulario');
form.addEventListener('submit', enviar);
function enviar(e){
    e.preventDefault();
    var valores = new FormData(form);
    fetch("../controller/send_proveedor.php", {
        method: "POST",
        body: valores
    })
        .then( res => res.json())
        .then( data => {
            if (data === 'error'){
                alerta.innerHTML = `
                    <div class="alert alert-danger" role="alert">
                        No dejes campos vacios, al menos el giro 1 debe tener datos.
                    </div>
                `;
            }else if(data === 'error2'){
                alerta.innerHTML = `
                <div class="alert alert-danger" role="alert">
                    No puedes agregar el mismo proveedor, favor de ingresar uno nuevo.
                </div>
                `;
            }else{
                return fetch("../Bd/proveedor.php"); 
            }
        })
        .then(data => data.json())
        .then(data => {
                alerta.innerHTML = `
                <div class="alert alert-success" role="alert">
                    Se agregó de manera correcta el proveedor.
                </div>
                `;
                contenido.innerHTML = ''
                var numeros = Object.keys(data).length
                for(var n=0;n<=numeros;n++){
                    contenido.innerHTML += `
                    <tr>
                        <th scope="row">`+data[n].id+`</th>
                        <td>`+data[n].Nombre+`</td>
                        <td>`+data[n].Direccion+`</td>
                        <td>`+data[n].Correo+`</td>
                        <td>`+data[n].Telefono+`</td>
                        <td>`+data[n].RFC+`</td>
                        <td>`+data[n].Contacto+`</td>
                        <td>`+data[n].Estatus+`</td>
                        <td>`+data[n].giro1+`</td>
                        <td>`+data[n].giro2+`</td>
                        <td>`+data[n].giro3+`</td>
                        <td>`+data[n].giro4+`</td>
                    </tr>
                    `
                }
        })
}