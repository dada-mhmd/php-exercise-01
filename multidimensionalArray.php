<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php



$arr= 
array( "musicals" => array(0=>"Oklahoma", 1=>"The Music Man", 2=>"South Pacific"),
"dramas" => array(0=>"Lawrence of Arabia", 1=>"To Kill a Mockingbird", 2=>"Casablanca"),
"mysteries" => array(0=>"The Maltese Falcon", 1=>"Rear Window", 2=>"North by Northwest"));


foreach($arr as $phrase => $value){
    echo $phrase."<br>";
foreach($value as $index=>$values){
    echo "----> ".$index." = ".$values;
    echo"<br>";
}
}


krsort($arr);
echo "sorting the array in decreasing order by genre <br>";
foreach($arr as $phrase => $value){
    echo $phrase."<br>";
foreach($value as $index=>$values){
    echo "----> ".$index." = ".$values;
    echo"<br>";
}
}

?>



</body>
</html>