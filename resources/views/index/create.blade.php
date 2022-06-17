<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form action="/create/new" method="post">
        @csrf
        Name::
        <input name="name" type="text"> <br>
        Species:
        <input name="species" type="text"> <br>
        Breed:
        <input name="breed" type="text"> <br>
        Age:
        <input name="age" type="number"><br>
        Weight:
        <input name="weight" type="number"><br>

        <input type="submit" value="Create Record">
    </form>
</body>
</html>