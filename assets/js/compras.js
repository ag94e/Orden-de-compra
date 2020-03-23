var valorArticulo = document.getElementById('articulo');
valorArticulo.addEventListener('click',verDescripcion);
function verDescripcion(e){
    e.preventDefault();
    var descripcion = document.getElementById('descripcion');
    var costo = document.getElementById('costo');
    fetch("../Bd/articulo.php", {
        method: "POST",
        body: valorArticulo.value
    })
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
var cantidades = document.getElementById('cantidad');
cantidades.addEventListener('click', costo);
function costo(){
    var costo = document.getElementById('costo');
    var resultado = costo.value * cantidades.value;
    costo.value = resultado;
    var ivaIndividual = document.getElementById('IVA');
    var ivaFinal = costo.value * 0.16;
    ivaIndividual.value = ivaFinal.toFixed(3);
    var iva = document.getElementById('costoIVA');
    var precioFin = costo.value * 1.16;
    iva.value = precioFin.toFixed(3);
}