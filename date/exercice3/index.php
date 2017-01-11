<?php
date_default_timezone_set('UTC');      
setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<title>Date exercice 3</title>
</head>
<body>

<h1>La date du Jour est <?php echo (strftime("%A %d %B %Y"));
 ?></h1>
</body>
</html>