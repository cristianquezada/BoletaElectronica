<html>
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<!-- FORM -->
<form id="dataForm">
    <div class="form-group">
        <label for="data" class="">Dato</label>
        <div class="col-10">
            <input id="numeroProducto" name="numeroProducto" class="form-control" type="text" value="1" disabled>
        </div>
        <div class="col-10">
            <input id="nombreProducto" name="nombreProducto" class="form-control" type="text" value="">
        </div>
        <div class="col-10">
            <input id="precioProducto" name="precioProducto" class="form-control" type="text" value="">
        </div>
        <div class="col-10">
            <input id="cantidadProducto" name="cantidadProducto" class="form-control" type="text" value="">
        </div>
        <div class="col-10">
            <input id="montoProducto" name="montoProducto" class="form-control" type="text" value="">
        </div>
    </div>
    <input class="btn btn-large btn-primary" value="Save" type="submit">
</form>

<button onclick="processData()">Post-process</button>



 <script>
    // Variable to hold request
    var data = [];
    $("#dataForm").submit(function(event) {
        event.preventDefault();
        data.push($(this).find('input[name="nombreProducto"]').val());
        data.push($(this).find('input[name="precioProducto"]').val());
        data.push($(this).find('input[name="cantidadProducto"]').val());
        data.push($(this).find('input[name="montoProducto"]').val());
     console.log("Datos agregados");
        //alert("Dato Añadida");
    });

    function processData() {
     //   var x="hola "+data[0];
    //    console.log(data);
        //console.log(x);



var nombreItem=data[0];
var nombreItem2=data[1];
var settings = {
  "url": "https://dev-api.haulmer.com/v2/dte/document",
  "method": "POST",
  "timeout": 0,
  "headers": {
    "apikey": "928e15a2d14d4a6292345f04960f4bd3"
  },

"data": "{\"response\":[\"XML\",\"\",\"TIMBRE\",\"LOGO\",\"FOLIO\",\"RESOLUCION\"],\"dte\":{\"Encabezado\":{\"IdDoc\":{\"TipoDTE\":39,\"Folio\":0,\"FchEmis\":\"2019-07-17\",\"IndServicio\":\"3\"},\"Emisor\":{\"RUTEmisor\":\"76795561-8\",\"RznSocEmisor\":\"HAULMERSPA\",\"GiroEmisor\":\"EMPRESA DE PRUEBA\",\"CdgSIISucur\":\"81303347\",\"DirOrigen\":\"ARTUROPRAT527CURICO\",\"CmnaOrigen\":\"Curicó\"},\"Receptor\":{\"RUTRecep\":\"66666666-6\"},\"Totales\":{\"MntTotal\":10000,\"TotalPeriodo\":10000,\"VlrPagar\":10000}},\"Detalle\":[{\"NroLinDet\":1,\"NmbItem\":\""+nombreItem+"\",\"QtyItem\":1,\"PrcItem\":5000,\"MontoItem\":5000},{\"NroLinDet\":2,\"NmbItem\":\""+nombreItem2+"\",\"QtyItem\":1,\"PrcItem\":5000,\"MontoItem\":5000}]}}",


};

$.ajax(settings).done(function (response) {
 // console.log(response);
});


    }
</script>
</body>
</html>