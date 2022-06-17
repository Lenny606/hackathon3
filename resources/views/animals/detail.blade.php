<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="animal_detail">
       <ul>
        <img src={{"/images/pets/".$animal_img}} alt="img">
        <li>Name: {{$animal_detail->name}}</li>
        <li>Breed: {{$animal_detail->breed}}</li>
        <li>Age: {{$animal_detail->age}}</li>
        <li>Weight: {{$animal_detail->weight}}</li>
           
        </ul> 

    </div>

   
</body>
</html>