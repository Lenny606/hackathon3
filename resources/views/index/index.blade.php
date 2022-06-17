<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>St. Hector's Veterinary Clinic - Home</title>

    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="nav">

        <div class=logo>
            <a href="http://www.clinic.pets/home"><img src="/img/vetlogo.png"></a>
            <a href="http://www.clinic.pets/home">
                <h2 class="h2">ST. HECTOR'S VETERINARY CLINIC</h2>
            </a>

        </div>

        <form action="/home/search" method="get">
            <input name="search" type="text">
            <input type="submit" value="Search">
            <a href="/create">
                <input type="button"  value="New Record" />
                </a>
        </form>

    </nav>
    <div class="main">
        <div class="h1">

<<<<<<< HEAD
            <h1><strong>"AT ST. HECTOR'S, WE CARE."</strong></h1>
            <br>
        </div>
=======
<<<<<<< HEAD
 
        <h1 class="h2">"AT ST. HECTOR'S, WE CARE."</h1>
        <br>
=======
            <h1><strong>"AT ST. HECTOR'S, WE CARE."</strong></h1>
            <br>
        </div>
>>>>>>> main

        <div>
            @if (Session::has('success_message'))
     
        <div class="alert alert-success">
            {{ Session::get('success_message') }}
        </div>
     
    @endif
>>>>>>> feat/form

    </div>
    <footer>
        <p>© St. Hector's Veterinary Clinic 2022</p>
    </footer>


</body>

</html>