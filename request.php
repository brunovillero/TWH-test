<?php
	if(isset($_GET["values"]) && isset($_GET["operation"])){
		
		$data = $_GET;
		$json = array();
		
		//check if the values are numbers
		//then procede to work with them
		
		if(is_numeric($data["values"][0]) && is_numeric($data["values"][1])){
			
			//tipos de operaciones
			
			if($data["operation"] == "sum"){
				$json["result"] = $data["values"][0] + $data["values"][1];
				$json["status"] = "ok";
			}
			
			
			if($data["operation"] == "subtraction"){
				$json["result"] = $data["values"][0] - $data["values"][1];
				$json["status"] = "ok";
			}
			
			
			if($data["operation"] == "division"){
				if($data["values"][1] != 0){
					$json["result"] = $data["values"][0] / $data["values"][1];
					$json["status"] = "ok";
				}
				else{
					$json["result"] = NULL;
					$json["status"] = "error";
				}
				
			}
			
			
			if($data["operation"] == "multiplication"){
				$json["result"] = $data["values"][0] * $data["values"][1];
				$json["status"] = "ok";
			}
			
		}
		else{
			$json["result"] = NULL;
			$json["status"] = "error";
		}
		
		$json["json"] = json_encode($json);
		echo $json["json"];
	}
?>