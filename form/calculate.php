<?php
	//var_dump($_SERVER);
	//echo $_GET["edad"];
	//$categories = calculate

	function calculate($edad){
		$result="";
		if (empty($edad)){
			$error =  "Error, you must enter a value";
		}else{
			if (is_numeric($edad)){
				if (($edad>=18) && ($edad<=65)){
					$result = "Adulto, tiene $edad";
				} else {
					if ($edad<18){
						$result = "Joven, tiene $edad";
						}else{
						$result = "Jubilado, tiene $edad";
						} }  }
		
			else{
				$error = "Error! You must enter a integer";
				}
		}

		if ($error === null){
			return $result;
			}else{
				return $error;

			}
		
	}
	


	//usage
	if ($_SERVER["REQUEST_METHOD"] === "GET"){
			$value= $_GET["edad"];
			}else {
				$value = $_POST["edad"];
				}
	$res = calculate($value);
	echo $res;


?>