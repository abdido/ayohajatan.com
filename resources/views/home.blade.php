<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AYO HAJATAN | WEBSITE INVITATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <!-- NAVBAR -->
    @include('layout.navbar')
    <!-- END NAVBAR -->

    <!-- Jumbotron -->
    <div class="container-fluid jumbotron">
      <div class="row">
        <div class="col-md-12 my-auto text-container text-white">
          <h1 class="text-center mt-5">Selamat Datang di Ayo Hajatan</h1>
          <p class="text-center">Website undangan digital yang memudahkan anda dalam membuat undangan</p>
        </div>
        <div class="col-md-12 my-auto image-container">
          <img src="{{asset('img/test-jumbotron.jpg')}}" alt="">
        </div>
      </div>
    </div>
    <!-- END Jumbotron -->

    @include('layout.whyus')




    {{-- jenis undangan --}}
    @include('layout.jenisUndangan')
    {{-- end jenis undangan --}}

    {{-- <img src="{{ asset('img/test-jumbotron.jpg')}}" alt=""> --}}

    {{-- fitur --}}
    @include('layout.feature')
    {{-- end fitur --}}

    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>