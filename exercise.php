<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $monthDays = array ('Splorch' => 23, 'Sploo' => 28,  'Splat' => 2, 'Splatt' => 3,  'Spleen' => 44, 'Splune' => 30,   'Spling' => 61, 'Slendo' => 61, 'Sploctember' => 31, 'Splictember' => 31, 
    'Splanet' => 30, 'TheRest' => 22);
   // shortest days 
   echo "MINIMUM DAYS :";
$min = min(array_values($monthDays));
print_r($min);
echo "<br>";
echo "<br>";
echo "MONTH HAVING MINIMUM DAYS :";
$min_month = array_search ($min, $monthDays);
print_r($min_month);

?>
</body>
</html>