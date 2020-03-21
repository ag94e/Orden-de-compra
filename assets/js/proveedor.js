<<<<<<< HEAD


var contenido = document.querySelector('#datos');
var boton = document.querySelector('#enviar');
boton.addEventListener("click",enviar);
// var valores = new FormData(document.getElementById('formulario'))


// function enviar(){
//     fetch("../controller/send_proveedor.php", {
//         method: "POST",
//         body: data
        
//         // JSON.stringify(valores),
//         // headers: {
//         //     'Content-Type': 'application/json'
//         // }
//     })
//         .then(function(response){
//             if(response.ok){
//                 return response.text()
//             }else{
//                 throw "Error"
//             }
//         })
//         .then(function(texto) {
//             console.log(texto);
//          })
//          .catch(function(err) {
//             console.log(err);
//          });
// }

=======
>>>>>>> d3d703d7a317ea1a659b0eae26943251fcca3ace
window.onload = () => {
    var contenido = document.querySelector('#datos');
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
            console.log(data);
        })
         .catch(function(err) {
            console.log(err);
         });
}