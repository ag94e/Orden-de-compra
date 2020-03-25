var valorArticulo = document.getElementById('articulo');
valorArticulo.addEventListener('click',verDescripcion);

function verDescripcion(e){
    e.preventDefault();
    var descripcion = document.getElementById('descripcion');
    var costo = document.getElementById('costo');
    fetch("../Bd/articulo.php")
        .then( res => res.json())
        .then( data => {
            var descArt = valorArticulo.value;
            var numeros = Object.keys(data).length;
            for(var n=0; n<=numeros; n++){
                if(data[n].nombre == descArt){
                    var descrip = data[n].descripcion;
                    var cost = data[n].costo;
                    descripcion.value = descrip;
                    costo.value = cost;
                }
            }
        })
}
var proveedor = document.getElementById('provedor');
proveedor.addEventListener('click',addId);
function addId(){
    fetch("../Bd/proveedor.php")
    .then(res => res.json())
    .then(data => {
        var numeros = Object.keys(data).length;
        var idDiv = document.getElementById('id');
        idDiv.value ='';
        for(var i = 0; i <= numeros; i++ ){
            var nombre = data[i].Nombre;
            var neu = nombre;
            if(neu == proveedor.value){
                idDiv.value += data[i].id;
            }
        }
    })
}
var cantidades = document.getElementById('cantidad');
cantidades.addEventListener('click', costo);
function costo(e){
    e.preventDefault();
    var costo = document.getElementById('costo');
    fetch("../Bd/articulo.php")
        .then( res => res.json())
        .then( data => {
            var descArt = valorArticulo.value;
            var numeros = Object.keys(data).length;
            for(var n=0; n<=numeros; n++){
                if(data[n].nombre == descArt){
                    var cost = data[n].costo;
                    var result = cantidades.value * cost;
                    costo.value = result.toFixed(3);
                    var ivaIndividual = document.getElementById('IVA');
                    var ivaFinal = costo.value * 0.16;
                    ivaIndividual.value = ivaFinal.toFixed(3);
                    var iva = document.getElementById('costoIVA');
                    var precioFin = costo.value * 1.16;
                    iva.value = precioFin.toFixed(3);
                }
            }
        })
}
window.onload = () => {
    var text = document.getElementById("fecha");
    var f = new Date();
    var fecha = f.getDate() + "-" + (f.getMonth() +1) + "-" + f.getFullYear();
    text.value += fecha;
}

var formulario = document.getElementById('formulario');
var alerta = document.getElementById('alerta');
formulario.addEventListener('submit',sendCompra);
function sendCompra(e){
    e.preventDefault();
    var valores = new FormData(formulario);
    fetch("../controller/registrarCompra.php", {
        method: "POST",
        body: valores
    })
    .then(res => res.json())
    // .then(data => console.log(data))
    .then(data => {
        if (data == 'error'){
            alerta.innerHTML = `
                <div class="alert alert-danger" role="alert">
                    Ha resultado un error, verifica la información.
                </div>
            `;
        }else{
            alerta.innerHTML = `
            <div class="alert alert-success" role="alert">
                Compra generada correctamente.
            </div>
            `;
        }
    })
    .catch(err => console.log(err))
}