<?php
date_default_timezone_set('UTC');      
setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
$timestamp = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
$date = date_create();
echo date_format($date, 'U = Y-m-d H:i:s') . "\n";
echo date_format($timestamp, 'U = Y-m-d H:i:s') . "\n";

date_timestamp_set($date, 1171502725);
echo date_format($date, 'U = Y-m-d H:i:s') . "\n";

$date = new DateTime("02/08/2016");
echo $date->format('U = Y-m-d H:i:s'). "\n";

?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<title>Date exercice 4</title>
</head>
<body>

<h1>La date du Jour est <?php echo date_format($date, 'U = Y-m-d H:i:s') . "\n";

 ?></h1>

</body>
</html>