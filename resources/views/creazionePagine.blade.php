<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Custom css -->
    <link rel="stylesheet" href="style.css">
    <title>home page </title>
</head>
<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand text-danger text-bold me-4" href="#"><img src="public/laravel-logo.png"
                    alt="">LARAVEL</a>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <a class="nav-item nav-link active me-4" href="#">Home <span
                            class="sr-only">(current)</span></a>

                    <a class="nav-item nav-link me-4" href="#">Rotta per Homepage</a>

                    <a class="nav-item nav-link" href="#">Creazione Pagine</a>

                </div>
            </div>
        </div>
    </nav>


</header>
<div class="container bg-black vh-100 pt-5">
    <div class="row mb-5">
        <div class="col-3"></div>
        <div class="col-6 text-center bg-danger mt-5 p-5 text-white ">
            <h1 class="mb-5">Creazione di Nuove Pgine</h1>
            <p>Creo altre pagine nella directoy "resources/views" "nomePagina.blade.php" come "about.blade.php" o
                "contact.blade.php". Definisco le rotte corrispondenti per queste pagine nel file "routes/web.php":</p>

            <p>{{ $definizioneRotta }}</p>

        </div>
    </div>


    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 text-center bg-danger mt-5 p-5 text-white ">
            <h3 class="mb-5">Come accedere alle pagine ??</h3>
            <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate quos ipsam officiis,
                mollitia alias dicta porro est placeat voluptatum, harum fugiat tempora a unde rerum quam magni tenetur
                laudantium aliquid.</p>
        </div>
    </div>


</div>

</html>
