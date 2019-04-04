<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
function findMin($array){
    $min = $array[0];
    for($index = 0;$index<count($array);$index++){
        if($min>$array[$index]){
            $min = $array[$index];
        }
    }
    return $min;
}
$array =array(4,5,6,3,2,4,3,5,2);
print_r($array);
echo "<br> Min in array is : ".findMin($array);
?>
</body>
</html>