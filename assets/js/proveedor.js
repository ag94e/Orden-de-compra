

var contenido = document.querySelector('#datos');
var boton = document.querySelector('#enviar');
boton.addEventListener("click",enviar);
function enviar() {
    var valores = new FormData(document.getElementById('formulario'))
    console.log(valores)
}

// function enviar(){
//     fetch("../controller/send_proveedores.php", {
//         method: "POST",
//         body: valores
//     })
//         .then()
// }

window.onload = () => {
    contenido.innerHTML = ''
    fetch("../model/proveedor.php")
        .then(data => data.json())
        .then(data => {
            var numeros = Object.keys(data).length
            for($n=0;$n<=numeros;$n++){
                contenido.innerHTML += `
                <tr>
                    <th scope="row">`+data[$n].id+`</th>
                    <td>`+data[$n].Nombre+`</td>
                    <td>`+data[$n].Direccion+`</td>
                    <td>`+data[$n].Correo+`</td>
                    <td>`+data[$n].Telefono+`</td>
                    <td>`+data[$n].RFC+`</td>
                    <td>`+data[$n].Contacto+`</td>
                    <td>`+data[$n].Estatus+`</td>
                    <td>`+data[$n].giro1+`</td>
                    <td>`+data[$n].giro2+`</td>
                    <td>`+data[$n].giro3+`</td>
                    <td>`+data[$n].giro4+`</td>
                </tr>
                `
            }
        })
}