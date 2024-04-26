<!-- Include the php file which can load the templates -->
<?php include 'load.template.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>SQL_INJECTION EXAM</title>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      </head>
</head>
<body> 

      <!-- In this case we are calling the funcion in the class of load for find the template -->
<?php load::template('_header');
      load::template('_content')?>

</body>
</html>
