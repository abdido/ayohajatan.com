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
    <section id="rsvp" class="rsvp">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-10 text-center">
            <h2>Konfirmasi Kehadiran</h2>
            <p>Isi form di bawah ini untuk melakukan konfirmasi kehadiran.</p>
          </div>
        </div>

        <form method="POST"
    action="{{ url('wedding/confirm/v1') }}"
    id="my-form">
      @csrf
      <div class="row row-cols-md-auto h-3 align-items-center justify-content-center">
      <div class="col-12">
          <div class="mb-3">
              <label for="guest_name" class="form-label">Nama Tamu</label>
              <input type="text" class="form-control" id="guest_name" name="guest_name">
          </div>
      </div>
      <div class="col-12">
          <div class="mb-3">
              <label for="participants" class="form-label">Jumlah Kehadiran</label>
              <input type="number" class="form-control" id="participants" name="participants" min="1" max="5" value="1">
          </div>
      </div>
      <div class="col-12">
          <div class="mb-3">
              <label for="attendance" class="form-label">Konfirmasi Kehadiran</label>
              <select name="attendance" id="attendance" class="form-select">
                  <option selected disabled>Pilih salah satu</option>
                  <option value="1">Hadir</option>
                  <option value="0">Tidak Hadir</option>
              </select>
          </div>
      </div>
    </div>
    <div class="row row-cols-md-auto align-items-center justify-content-center">
      <div class="col-12">
        <div class="mb-8">
          <label for="message" class="form-label">Pesan</label>
          <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>
      </div>
    </div>
      <button type="submit" class="btn btn-primary">Kirim</button>
  </form> 
    
      </div>
    </section>
    
    
    
    <!-- NAVBAR -->
    {{-- @include('layout.navbar') --}}
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