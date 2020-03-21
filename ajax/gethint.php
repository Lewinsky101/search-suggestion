<?php
		// Array with names
	$a[] = "Anna";
	$a[] = "Brittany";
	$a[] = "Cinderella";
	$a[] = "Diana";
	$a[] = "Eva";
	$a[] = "Fiona";
	$a[] = "Gunda";
	$a[] = "Hege";
	$a[] = "Inga";
	$a[] = "Johanna";
	$a[] = "Kitty";
	$a[] = "Linda";
	$a[] = "Nancy";
	$a[] = "Nina";
	$a[] = "Monica";
	$a[] = "Ophelia";
	$a[] = "Petunia";
	$a[] = "Amanda";
	$a[] = "Raquel";
	$a[] = "Cindy";
	$a[] = "Doris";
	$a[] = "Eve";
	$a[] = "Evita";
	$a[] = "Sam";
	$a[] = "Sunniva";
	$a[] = "Tove";
	$a[] = "Trevor";
	$a[] = "Unni";
	$a[] = "Violet";
	$a[] = "Liza";
	$a[] = "Elizabeth";
	$a[] = "Ellen";
	$a[] = "Wenche";
	$a[] = "Vicky";

	//get parameter qdom_error
	$q = $_REQUEST["q"];
	
	$hint ="";
	
	//lookup all hints from array if $q is different from ""
	if($q !==""){
		$q=strtolower($q);
		$len=strlen($q);
		foreach($a as $name){
		  if(stristr($q, substr($name, 0 , $len))){
			if($hint === ""){
				$hint = $name;
			}else{
				$hint .= ", $name";
			}
		}
		}
	}
	//Output no suggestion if no hint is found
	echo $hint==="" ? "no suggestion" : $hint;

?>