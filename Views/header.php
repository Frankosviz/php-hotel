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
    <title>php - Hotel</title>

</head>

<body>
    <header>
        <div class="container">
            <h1 class="text-center text-primary mb-5">
                Book a hotel
            </h1>

            <form action="index.php" method="GET" class="d-flex justify-content-between align-items-center mb-3" >
                <div>
                    <select class="form-control me-2" name="choices">
                        <option value="all">All</option>
                        <option value="0">With parking</option>
                        <option value="1">Without parking</option>
                        <input class="form-control" name="stars" placeholder="Search 1 - 5 stars"></option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-outline-success">Search</button>
                </div>
            </form>
        </div>

    </header>