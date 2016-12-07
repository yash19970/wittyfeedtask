<?php
/*echo "<pre>";
print_r($value);
echo "</pre>";*/
$i =0;
foreach ($value as $key) {
	echo $i."    "."<u>Title</u> ".$value[$i]['title']. "<u>   Body</u>  ".$value[$i]['body'];	
	echo br();
	$i = $i+1;
}
?>