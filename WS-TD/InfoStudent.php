<?php
class InfoStudent {

//function to be exposed must be public
public function getInfoStudent($cin) {
$info = array("CIN:".$cin , "Hatem", "Riahi","20/07/1996", 
"Level: 3", "Result:reussi"); 
return $info;
}
}
?>