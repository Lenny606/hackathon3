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
            <img src="img/vetlogo.png" />
            <h2 class="h2">ST. HECTOR'S VETERINARY CLINIC</h2>
        </div>

        <form action="" method="get">
            <input type="text">
            <input type="submit" value="Search">
        </form>

    </nav>
    <div class="main">
        <ul>
            <?php foreach ($animals as $value): ?>

            <li>name:
                <?=$value->name?>
            </li>

            <?php endforeach; ?>
        </ul>
    </div>
    <footer>
        <p>© St. Hector's Veterinary Clinic 2022</p>
        <footer>
</body>

</html>