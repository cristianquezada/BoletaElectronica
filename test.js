function myFunction() {
 
    var oi=0;  //Objeto indicie
    var text;
    var result;
    var flag=true;
  
    for (oi=0;oi<document.getElementsByName("field_name[]").length;oi++) {  

        if(flag){
            text=document.getElementsByName("field_name[]")[oi].value;
              result="{\"NroLinDet\":1,\"NmbItem\":\""+text+"\",\"QtyItem\":1,\"PrcItem\":5000,\"MontoItem\":5000}";
             flag=false;
        }else{
            text=document.getElementsByName("field_name[]")[oi].value;
            result=result+",{\"NroLinDet\":1,\"NmbItem\":\""+text+"\",\"QtyItem\":1,\"PrcItem\":5000,\"MontoItem\":5000}";
        }
       
     
    }

    // alert(result);
   console.log(result);



$("#contenedor").load("result.php",{miCadena:result});
    //este ajax, llama a result.php y le pasa el contenido de la variable



     var nombreItem="Coca cola";
     var nombreItem2="Papas fritas";
     var settings = {
        "url": "https://dev-api.haulmer.com/v2/dte/document",
        "method": "POST",
        "timeout": 0,
        "headers": {
          "apikey": "928e15a2d14d4a6292345f04960f4bd3"
        },
        //"data": "{\"response\":[\"XML\",\"\",\"TIMBRE\",\"LOGO\",\"FOLIO\",\"RESOLUCION\"],\"dte\":{\"Encabezado\":{\"IdDoc\":{\"TipoDTE\":39,\"Folio\":0,\"FchEmis\":\"2019-07-17\",\"IndServicio\":\"3\"},\"Emisor\":{\"RUTEmisor\":\"76795561-8\",\"RznSocEmisor\":\"HAULMERSPA\",\"GiroEmisor\":\"EMPRESA DE PRUEBA\",\"CdgSIISucur\":\"81303347\",\"DirOrigen\":\"ARTUROPRAT527CURICO\",\"CmnaOrigen\":\"Curicó\"},\"Receptor\":{\"RUTRecep\":\"66666666-6\"},\"Totales\":{\"MntTotal\":5000,\"TotalPeriodo\":5000,\"VlrPagar\":5000}},\"Detalle\":[{\"NroLinDet\":1,\"NmbItem\":\""+nombreItem+"\",\"QtyItem\":1,\"PrcItem\":5000,\"MontoItem\":5000}]}}",
      // "data": "{\"response\":[\"XML\",\"PDF\",\"TIMBRE\",\"LOGO\",\"FOLIO\",\"RESOLUCION\"],\"dte\":{\"Encabezado\":{\"IdDoc\":{\"TipoDTE\":39,\"Folio\":0,\"FchEmis\":\"2019-07-17\",\"IndServicio\":\"3\"},\"Emisor\":{\"RUTEmisor\":\"76795561-8\",\"RznSocEmisor\":\"HAULMERSPA\",\"GiroEmisor\":\"EMPRESA DE PRUEBA;COMERCIOELEC\",\"CdgSIISucur\":\"81303347\",\"DirOrigen\":\"ARTUROPRAT527CURICO\",\"CmnaOrigen\":\"Curicó\"},\"Receptor\":{\"RUTRecep\":\"66666666-6\"},\"Totales\":{\"MntTotal\":2000,\"TotalPeriodo\":2000,\"VlrPagar\":2000}},\"Detalle\":[{\"NroLinDet\":1,\"NmbItem\":\"Bebida\",\"QtyItem\":1,\"PrcItem\":2000,\"MontoItem\":2000}]}}",
      
      
     // "data": "{\"response\":[\"XML\",\"\",\"TIMBRE\",\"LOGO\",\"FOLIO\",\"RESOLUCION\"],\"dte\":{\"Encabezado\":{\"IdDoc\":{\"TipoDTE\":39,\"Folio\":0,\"FchEmis\":\"2019-08-02\",\"IndServicio\":\"3\"},\"Emisor\":{\"RUTEmisor\":\"76795561-8\",\"RznSocEmisor\":\"HAULMERSPA\",\"GiroEmisor\":\"EMPRESA DE PRUEBA\",\"CdgSIISucur\":\"81303347\",\"DirOrigen\":\"ARTUROPRAT527CURICO\",\"CmnaOrigen\":\"Curicó\"},\"Receptor\":{\"RUTRecep\":\"66666666-6\"},\"Totales\":{\"MntTotal\":10000,\"TotalPeriodo\":10000,\"VlrPagar\":10000}},\"Detalle\":[{\"NroLinDet\":1,\"NmbItem\":\""+nombreItem+"\",\"QtyItem\":1,\"PrcItem\":5000,\"MontoItem\":5000},{\"NroLinDet\":2,\"NmbItem\":\""+nombreItem2+"\",\"QtyItem\":1,\"PrcItem\":5000,\"MontoItem\":5000}]}}",
      
     "data": "{\"response\":[\"XML\",\"\",\"TIMBRE\",\"LOGO\",\"FOLIO\",\"RESOLUCION\"],\"dte\":{\"Encabezado\":{\"IdDoc\":{\"TipoDTE\":39,\"Folio\":0,\"FchEmis\":\"2019-08-02\",\"IndServicio\":\"3\"},\"Emisor\":{\"RUTEmisor\":\"76795561-8\",\"RznSocEmisor\":\"HAULMERSPA\",\"GiroEmisor\":\"EMPRESA DE PRUEBA\",\"CdgSIISucur\":\"81303347\",\"DirOrigen\":\"ARTUROPRAT527CURICO\",\"CmnaOrigen\":\"Curicó\"},\"Receptor\":{\"RUTRecep\":\"66666666-6\"},\"Totales\":{\"MntTotal\":5000,\"TotalPeriodo\":5000,\"VlrPagar\":5000}},\"Detalle\":["+result+"]}}"

      ,
      
      };
      
      $.ajax(settings).done(function (response) {
        console.log(response);
      });
   
  }

  


