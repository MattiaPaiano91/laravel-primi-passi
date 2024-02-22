<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
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
                <li class="me-3 list-unstyled">
                    <a class="text-decoration-none text-dark" href="{{ url('/') }}">Home</a>
                </li>
            </ul>
        </nav>
    </header>
</body>

</html>