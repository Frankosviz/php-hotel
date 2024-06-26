<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link grity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/script.js" type="text/javascript" defer></script>
    <title>php-hotel</title>

</head>

<body>
    <header>
        <div class="container  d-flex justify-content-center align-items-center">
            <h1 class="mb-0 text-center">
                <img src="./bookingLogo.svg" alt="logo">
            </h1>
            <form action="index.php" method="GET" class="d-flex">

                <select class="form-control me-2" name="stats">
                    <option value="all">All</option>
                    <option value="0">With parking</option>
                </select>

                <button type="submit" class="btn btn-outline-success">Search</button>
            </form>
            <form action="index.php" method="GET">
                <input type="number" name="stars" placeholder="Stars" class="form-control me-2">

            </form>
        </div>

    </header>