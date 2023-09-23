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
  <title>Rotta per Homepage</title>
</head>
<body>
  <header>
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
      <a class="navbar-brand text-danger text-bold me-4" href="#"><img src="public/laravel-logo.png" alt="">LARAVEL</a>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active me-4" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link me-4" href="#">Rotta per Homepage</a>
          <a class="nav-item nav-link" href="#">Pricing</a>
        </div>
      </div>
    </div>
    </nav>
  </header>


  <div class="container bg-black vh-100 pt-5">
    <div class="row mb-5">
      <div class="col-3"></div>
      <div class="col-6 text-center bg-danger mt-5 p-5 text-white ">
        <h1 class="mb-3">Definizione della Rotta per Homepage</h1>
        <p class="mb-2">Apro il file "routes/web.php" e aggiungo la definizione della rotta per la Homepage tramite la funzione "view" specificando il nome del file ("home") cosi ogni volta che l'utente accede a questa rotta Laravel mostra l'HTML del file Homepage.</p>

        <p>{{$routeClass}}</p>

      </div>
    </div>

    <div class="row mb-5">
      <div class="col-3"></div>
      <div class="col-6 text-center bg-danger mt-5 p-5 text-white ">
        <h1 class="mb-3">Passaggio di Dati alla Vista</h1>
        <p class="mb-2">Nel file "routes/web.php", devo modificare la rotta per passare un messaggio o informazione dinamico alla vista "home.blade.php"</p>

        <p>{{$messaggioDinamico}}</p>
        
      </div>
    </div>



  </div>

  
  
</body>
</html>