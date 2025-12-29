<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn php Basic</title>
</head>
<body>
   <?php
   
   
   $name = 'Linus';
function myTest2() {
  $GLOBALS['name'] = 'Tobias';
}
myTest2();
echo $name;


   ?>
    
</body>
</html>