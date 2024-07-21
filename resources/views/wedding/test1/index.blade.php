@extends('wedding.template-1.index')

@section('title', 'Abdi & Nisa Wedding Invitation')

@section('weddingDate')
<h2>Acara Pernikahan</h2>
          <h3>Diselenggarakan pada 3 Agustus di Balikpapan, Kalimantan Timur.</h3>
          <p>Oleh karena itu, d engan segala hormat, kami bermaksud untuk mengundang Bapak/Ibu, Saudara/i, untuk hadir
            pada acara pernikahan kami. </p>
@endsection

@section('Groom')
<h3>Abdi</h3>
<p>Web Developer</p>
<p>Putra dari <br> Bpk. Harun dan Ibu Agus</p>
@endsection

@section('GroomPhoto')
<img src="{{asset('wedding/dika-nova/img/sandhika.png')}}" alt="Sandhika Galih" class="img-responsive rounded-circle">
@endsection


@section('Bride')
<h3>Nisa</h3>
              <p>Guru Patra Dharma</p>
              <p>Putra dari <br> Bpk. Haris dan Ibu Umming</p>
@endsection

@section('BridePhoto')
<img src="{{asset('wedding/dika-nova/img/nofa.png')}}" alt="Nofariza" class="img-responsive rounded-circle">
@endsection

@section('locationInfo')

<p class="alamat">Alamat: Balai Sudirman. <br> Jl. Jend. Sudirman, Balikpapan Kota, Kota
  Balikpapan</p>

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4076812.9197029844!2d111.83407765!3d-3.7528963500000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df147477eb14e0f%3A0xe186c22ff03b5291!2sGedung%20Pertemuan%20Balai%20Sudirman!5e0!3m2!1sid!2sid!4v1721378901602!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<a href="https://maps.app.goo.gl/vkV8MeuVYaoaYsTL6" target="_blank" class="btn btn-light btn-sm my-3">Klik untuk
  membuka peta</a>

@endsection

@section('akadNikah')
<div class="col-md-5 col-10">
  <div class="card text-center text-bg-light mb-5">
    <div class="card-header">Akad Nikah</div>
    <div class="card-body">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <i class="bi bi-clock d-block"></i>
          <span>08.00 - 10.00</span>
        </div>
        <div class="col-md-6">
          <i class="bi bi-calendar3 d-block"></i>
          <span>Minggu, 20 November 2023</span>
        </div>
      </div>
    </div>
    <div class="card-footer">
      Saat acara akad diharapkan untuk kondusif menjaga kekhidmatan dan kekhusyuan seluruh prosesi.
    </div>
  </div>
</div>
@endsection

@section('resepsi')
<div class="col-md-5 col-10">
  <div class="card text-center text-bg-light">
    <div class="card-header">Resepsi</div>
    <div class="card-body">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <i class="bi bi-clock d-block"></i>
          <span>11.00 - selesai</span>
        </div>
        <div class="col-md-6">
          <i class="bi bi-calendar3 d-block"></i>
          <span>Minggu, 20 November 2023</span>
        </div>
      </div>
    </div>
    <div class="card-footer">
      Saat acara akad diharapkan untuk kondusif menjaga kekhidmatan dan kekhusyuan seluruh prosesi.
    </div>
  </div>
</div>
@endsection

@section('storyintro')


  <div class="row justify-content-center">
    <div class="col-md-8 col-10 text-center">
      <span>Bagaimana Cinta Kami Bersemi</span>
      <h2>Cerita Kami</h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, similique non soluta nulla asperiores
        voluptatem.</p>
    </div>
  </div>

  @endsection

  @section('story')
  <div class="col">
    <ul class="timeline">
      <li>
        <div class="timeline-image" style="background-image: url({{asset('wedding/dika-nova/img/sman23.jpg')}});"></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h3>Pertama Bertemu</h3>
            <span>1 Juni 2000</span>
          </div>
          <div class="timeline-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, modi autem? Commodi autem quo quia?
            </p>
          </div>
        </div>
      </li>
      <li class="timeline-inverted">
        <div class="timeline-image" style="background-image: url(https://picsum.photos/300/300);"></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h3>Mulai Serius</h3>
            <span>1 Januari 2005</span>
          </div>
          <div class="timeline-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto enim eaque obcaecati odit
              itaque explicabo quisquam quos at.
            </p>
          </div>
        </div>

      </li>
      <li>
        <div class="timeline-image" style="background-image: url(https://picsum.photos/301/301);"></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h3>Tunangan</h3>
            <span>7 November 2009</span>
          </div>
          <div class="timeline-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, deleniti distinctio. Esse quas sit
            explicabo corporis magni qui expedita a.
          </div>
        </div>
      </li>
      <li class="timeline-inverted"> 
        <div class="timeline-image" style="background-image: url(https://picsum.photos/301/301);"></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h3>test</h3>
            <span>7 November 2009</span>
          </div>
          <div class="timeline-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, deleniti distinctio. Esse quas sit
            explicabo corporis magni qui expedita a.
          </div>
        </div>
      </li>
    </ul>
  </div>
  @endsection

  @section('gallery')
  <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <span>Memori Kisah Kami</span>
          <h2>Galeri Foto</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, itaque?</p>
        </div>
      </div>

      <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
        <div class="col mt-3">
          <a href="{{asset('wedding/dika-nova/img/gallery/1.png')}}" data-toggle="lightbox" data-caption="Sandhika & Nofa 1" data-gallery="mygallery">
            <img src="{{asset('wedding/dika-nova/img/gallery/1.png')}}" alt="Sandhika & Nofa 1" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="https://picsum.photos/id/300/1200/768" data-toggle="lightbox" data-caption="Sandhika & Nofa 2"
            data-gallery="mygallery">
            <img src="https://picsum.photos/id/300/300/400" alt="Sandhika & Nofa 2" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="https://picsum.photos/id/301/1200/768" data-toggle="lightbox" data-caption="Sandhika & Nofa 3"
            data-gallery="mygallery">
            <img src="https://picsum.photos/id/301/300/400" alt="Sandhika & Nofa 3" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="https://picsum.photos/id/302/1200/768" data-toggle="lightbox" data-caption="Sandhika & Nofa 4"
            data-gallery="mygallery">
            <img src="https://picsum.photos/id/302/300/400" alt="Sandhika & Nofa 4" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="https://picsum.photos/id/304/1200/768" data-toggle="lightbox" data-caption="Sandhika & Nofa 5"
            data-gallery="mygallery">
            <img src="https://picsum.photos/id/304/300/400" alt="Sandhika & Nofa 5" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="https://picsum.photos/id/305/1200/768" data-toggle="lightbox" data-caption="Sandhika & Nofa 6"
            data-gallery="mygallery">
            <img src="https://picsum.photos/id/305/300/400" alt="Sandhika & Nofa 6" class="img-fluid w-100 rounded">
          </a>
        </div>
      </div>
    </div>
  @endsection

  @section('rsvpForm')

  <form class="row row-cols-md-auto g-3 align-items-center justify-content-center" method="POST"
  action="wedding/test/v1/rsvp"
  id="my-form">
  @csrf

  @endsection