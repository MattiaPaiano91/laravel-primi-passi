<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">
    <title>Home</title>
</head>

<body>
    <header>
        <nav class="d-flex justify-content-between ">
            <h1 class="p-5">
                Il mio primo progetto in laravel!
            </h1>
            <ul class="d-flex p-5 ">
                <li class="me-3 list-unstyled">
                    <a class="text-decoration-none  text-dark" href="{{ url('/contacts') }}">Contacts</a>
                </li>
                <li class="me-3 list-unstyled">
                    <a class="text-decoration-none text-dark" href="{{ url('/aboutUs') }}">About us</a>
                </li>
                <li class="me-3 list-unstyled">
                    <a class="text-decoration-none text-dark" href="{{ url('/shop') }}">Shop</a>
                </li>
            </ul>
        </nav>
    </header>
</body>

</html>