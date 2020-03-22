window.onload = load;
var contenido = document.querySelector('#datos');
var alerta = document.getElementById('alerta');
function load() {
    contenido.innerHTML = ''
    fetch("../Bd/articulo.php") 
        .then(data => data.json())
        .then(data => {
            var numeros = Object.keys(data).length
            for(var n=0;n<=numeros;n++){
                contenido.innerHTML += `
                <tr>
                    <th scope="row">${data[n].id}</th>
                    <td>${data[n].nombre}</td>
                    <td>${data[n].descripcion}</td>
                    <td>${data[n].costo}</td>
                    <td>${data[n].giro}</td>
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
    fetch("../controller/send_article.php", {
        method: "POST",
        body: valores
    })
        .then( res => res.json())
        .then( data => {
            if (data === 'error'){
                alerta.innerHTML = `
                    <div class="alert alert-danger" role="alert">
                        Porfavor no dejes los campos vacios.
                    </div>
                `;
            }else if(data === 'error2'){
                alerta.innerHTML = `
                <div class="alert alert-danger" role="alert">
                    No puedes agregar el mismo articulo, favor de ingresar uno correcto.
                </div>
                `;
            }else{
                return fetch("../Bd/articulo.php"); 
            }
        })
        .then(data => data.json())
        .then(data => {
                alerta.innerHTML = `
                <div class="alert alert-success" role="alert">
                    Se agregó correctamente el articulo.
                </div>
                `;
                contenido.innerHTML = ''
                var numeros = Object.keys(data).length
                for(var n=0;n<=numeros;n++){
                    contenido.innerHTML += `
                    <tr>
                        <th scope="row">${data[n].id}</th>
                        <td>${data[n].nombre}</td>
                        <td>${data[n].descripcion}</td>
                        <td>${data[n].costo}</td>
                        <td>${data[n].giro}</td>
                    </tr>
                    `
                }
        })
}