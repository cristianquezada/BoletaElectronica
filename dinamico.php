<?php
print '<pre>';
print_r($_REQUEST['field_name']);
print '</pre>';
//output
Array
(
	/*
    [0] => value1
    [1] => value2
    [2] => value3
    [3] => value4
    */
)
?>



<?php
$field_values_array = $_REQUEST['field_name'];
foreach($field_values_array as $value){
	//hacer lo q uno quiera con los valores
    //echo $value." ";

    echo "{\"NroLinDet\":1,\"NmbItem\":\"".$value."\",\"QtyItem\":1,\"PrcItem\":5000,\"MontoItem\":5000}";

    echo "<br> ";
}

for ($i=0; $i <sizeof($field_values_array) ; $i++) { 
	echo $i."<br>";
}



?>