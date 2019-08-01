<!<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>

<table>
	<th>producto</th>
	<th>precio</th>
	<th>cantidad</th>
	<th>valor</th>
</table>
<form method="POST" action="dinamico.php">
<div class="field_wrapper">
    <div>
    	<input type="text" name="field_name[]" value="1"  />
    	<input type="text" name="field_name[]" value=""/>
    	<input type="text" name="field_name[]" value=""/>
    	<input type="text" name="field_name[]" value=""/>
        
        <input type="text" name="field_name[]" value=""/>
        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="add.jpg" style="width: 20px;height: 20px" /></a>
    </div>
</div>
<button class="alert alert-success" type="submit" name="subir" >Enviar</button>
</form>




<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
   var contador;
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="text" name="field_name[]" value="'+contador+'" /><input type="text" name="field_name[]" value=""/><input type="text" name="field_name[]" value=""/><input type="text" name="field_name[]" value=""/><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="quitar.png" style="width: 20px;height: 20px"/></a></div>'; //New input field html 
    
 var x = 1; //Initial field counter is 1

    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            contador=x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
</body>
</html>