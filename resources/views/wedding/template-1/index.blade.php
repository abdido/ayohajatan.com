<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:wght@100;300;400;600;700&display=swap"
    rel="stylesheet">

  <!-- simplyCountdown -->
  <link rel="stylesheet" href="{{asset('wedding/dika-nova/countdown/simplyCountdown.theme.default.css')}}" />
  <script src="{{asset('wedding/dika-nova/countdown/simplyCountdown.min.js')}}"></script>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <link rel="stylesheet" href="{{asset('wedding/dika-nova/css/style.css')}}">
</head>

<body>
<form action="/wedding/test/v2/rsvp" method="POST">
  @csrf
  <button>
    <input type="submit">
  </button>
</form>

  <section id="hero"
    class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
    <main>
      <h4>Kepada <span>Bapak/Ibu/Saudara/i, </span></h4>
      <h1>{{ $guestName }}</h1>
      <p>Akan melangsungkan resepsi pernikahan dalam:</p>
      <div class="simply-countdown"></div>
      <a href="#home" class="btn btn-lg mt-4" onClick="enableScroll()">Lihat Undangan</a>
    </main>
  </section>

  {{-- not needed right now --}}
  <nav class="navbar navbar-expand-md bg-transparent sticky-top mynavbar">
    <div class="container">
      <a class="navbar-brand" href="#">AyoHajatan</a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Dino</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="#home">Home</a>
            <a class="nav-link" href="#info">Info</a>
            <a class="nav-link" href="#story">Story</a>
            <a class="nav-link" href="#gallery">Gallery</a>
            <a class="nav-link" href="#rsvp">RSVP</a>
            <a class="nav-link" href="#gifts">Gifts</a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <section id="home" class="home">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          @yield('weddingDate')
        </div>
      </div>

      <div class="row couple">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-8 text-end">
              @yield('Groom')
            </div>
            <div class="col-4">
              @yield('GroomPhoto')
            </div>
          </div>
        </div>

        <span class="heart"><i class="bi bi-heart-fill"></i></span>

        <div class="col-lg-6">
          <div class="row">
            <div class="col-4">
              @yield('BridePhoto')
            </div>
            <div class="col-8">
              @yield('Bride')
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="info" class="info">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <h2>Informasi Acara</h2>
          @yield('locationInfo')
          <p class="description">Diharapkan untuk tidak salah alamat dan tanggal. Manakala tiba di tujuan namun tidak
            ada tanda-tanda sedang dilangsungkan pernikahan, boleh jadi Anda salah jadwal, atau salah tempat.</p>
        </div>
      </div>

      <div class="row justify-content-center mt-4">
        @yield('akadNikah')
        @yield('resepsi')
      </div>
    </div>
  </section>

  <section id="story" class="story">
    <div class="container">
      @yield('storyintro')

      <div class="row">
        @yield('story')
      </div>
    </div>
  </section>

  <section id="gallery" class="gallery">
    @yield('gallery')
  </section>

  <section id="rsvp" class="rsvp">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <h2>Konfirmasi Kehadiran</h2>
          <p>Isi form di bawah ini untuk melakukan konfirmasi kehadiran.</p>
        </div>
      </div>

      @yield('rsvpForm')
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

  <section id="gifts" class="gifts">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <span>ungkapan tanda kasih</span>
          <h2>Kirim Hadiah</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam iure perferendis provident ab aliquam nemo.
          </p>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-6">
          <ul class="list-group">
            <li class="list-group-item">
              <div class="fw-bold">BCA</div>
              123456789 - SANDHIKA GALIH
            </li>
            <li class="list-group-item">
              <div class="fw-bold">MANDIRI</div>
              987654321 - SANDHIKA GALIH
            </li>
            <li class="list-group-item">
              <div class="fw-bold">Saweria</div>
              <img src="{{asset('wedding/dika-nova/img/saweria.png')}}" alt="Saweria QR" class="img-thumbnail" width="150">
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <small class="block">&copy; 2023 DiNo Wedding. All Rights Reserved.</small>
          <small class="block">Design by <a href="https://instagram.com/sandhikagalih">@sandhikagalih</a>.</small>

          <ul class="mt-3">
            <li><a href="#"><i class="bi bi-instagram"></i></a></li>
            <li><a href="#"><i class="bi bi-youtube"></i></a></li>
            <li><a href="#"><i class="bi bi-twitter"></i></a></li>
            <li><a href="#"><i class="bi bi-facebook"></i></a></li>
            <li><a href="#"><i class="bi bi-tiktok"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <div id="audio-container">
    <audio id="song" autoplay loop>
      <source src="{{asset('/wedding/dika-nova/audio/song.mp3')}}" type="audio/mp3">
    </audio>

    <div class="audio-icon-wrapper" style="display: none;">
      <i class="bi bi-disc"></i>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

  <script>
    simplyCountdown('.simply-countdown', {
      year: 2024, // required
      month: 10, // required
      day: 4, // required
      hours: 10, // Default is 0 [0-23] integer
      words: { //words displayed into the countdown
        days: { singular: 'hari', plural: 'hari' },
        hours: { singular: 'jam', plural: 'jam' },
        minutes: { singular: 'menit', plural: 'menit' },
        seconds: { singular: 'detik', plural: 'detik' }
      },
    });
  </script>

  <script>
    const stickyTop = document.querySelector('.sticky-top');
    const offcanvas = document.querySelector('.offcanvas');

    offcanvas.addEventListener('show.bs.offcanvas', function () {
      stickyTop.style.overflow = 'visible';
    });

    offcanvas.addEventListener('hidden.bs.offcanvas', function () {
      stickyTop.style.overflow = 'hidden';
    });

  </script>

  <script>
    const rootElement = document.querySelector(":root");
    const audioIconWrapper = document.querySelector('.audio-icon-wrapper');
    const audioIcon = document.querySelector('.audio-icon-wrapper i');
    const song = document.querySelector('#song');
    let isPlaying = false;

    function disableScroll() {
      scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

      window.onscroll = function () {
        window.scrollTo(scrollTop, scrollLeft);
      }

      rootElement.style.scrollBehavior = 'auto';
    }

    function enableScroll() {
      window.onscroll = function () { }
      rootElement.style.scrollBehavior = 'smooth';
      // localStorage.setItem('opened', 'true');
      playAudio();
    }

    function playAudio() {
      song.volume = 0.1;
      audioIconWrapper.style.display = 'flex';
      song.play();
      isPlaying = true;
    }

    audioIconWrapper.onclick = function () {
      if (isPlaying) {
        song.pause();
        audioIcon.classList.remove('bi-disc');
        audioIcon.classList.add('bi-pause-circle');
      } else {
        song.play();
        audioIcon.classList.add('bi-disc');
        audioIcon.classList.remove('bi-pause-circle');
      }

      isPlaying = !isPlaying;
    }

    // if (!localStorage.getItem('opened')) {
    //   disableScroll();
    // }
    disableScroll();
  </script>
  <script>
    window.addEventListener("load", function () {
      const form = document.getElementById('my-form');
      form.addEventListener("submit", function (e) {
        e.preventDefault();
        const data = new FormData(form);
        const action = e.target.action;
        fetch(action, {
          method: 'POST',
          body: data,
        })
          .then(() => {
            alert("Konfirmasi kehadiran berhasil terkirim!");
          })
      });
    });

  </script>
  <script>
    const urlParams = new URLSearchParams(window.location.search);
    const nama = urlParams.get('n') || '';
    const pronoun = urlParams.get('p') || 'Bapak/Ibu/Saudara/i';
    const namaContainer = document.querySelector('.hero h4 span');
    namaContainer.innerText = `${pronoun} ${nama},`.replace(/ ,$/, ',');

    document.querySelector('#nama').value = nama;
  </script>
</body>

</html>