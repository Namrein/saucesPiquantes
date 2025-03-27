<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hot Sauce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #FFF8F0;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #FF5733;
        }
        .navbar-brand {
            color: #FFF;
            font-size: 2rem;
        }
        .navbar-nav .nav-link {
            color: #FFF;
        }
        .navbar-nav .nav-link:hover {
            color: #F1C40F;
        }
        .header-container {
            background-color: #FF5733;
            padding: 30px 0;
            color: white;
            text-align: center;
        }
        .header-container h1 {
            font-size: 3rem;
        }
        .header-container p {
            font-size: 1.2rem;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid text-center">
            <a class="navbar-brand" href="{{ route('listerSauces') }}">ALL SAUCES</a>
        </div>
    </nav>

    <!-- Header Section -->
    <div class="header-container">
        <h1>HOT TAKES</h1>
        <h3>THE WEB'S BEST HOT SAUCE REVIEWS</h3>
    </div>

    <div class="container p-4 mt-5 border border-primary shadow-lg p-3 mb-5 rounded">
        <!-- Contenu spécifique de la page -->
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
