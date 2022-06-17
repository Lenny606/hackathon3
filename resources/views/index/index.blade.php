<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME PAGE</title>
</head>
<body>
    <form action="/home/search" method="get">
        <input name="search"type="text">
        <input type="submit" value="Search">
    </form>
    

       
    
    
    <ul>



    <?php foreach ($animals as $value): ?>
     
    <li><strong>NAME: <?=$value->name?> </strong></li>
    <li>Species: <?=$value->species?> </li>
    <li>Breed: <?=$value->breed?> </li>
    <li>Age: <?=$value->age?> </li>
    <li>Weight: <?=$value->weight?> </li>
    <?php endforeach; ?>

  

 </ul>
</body>
</html>