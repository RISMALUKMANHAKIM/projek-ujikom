@extends('layouts.master')
@section('content')
<main id="main">

    <!-- ======= Resume Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kegiatan Kami</h2>
          <p>Anak adalah Amanah Tuhan yang seharusnya dibesarkan dengan layak, penuh kasih sayang dan diberikan masa depan penuh harapan.
              Program Layanan yang kami laksanakan dalam upaya mewujudkan kesejahteraan Anak. </p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($kegiatan as $data)
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ $data->image()}}" style="width:420px; height:320px;" alt="gambar">
                        <div class="portfolio-info">
                            <h4>{{ $data->judul }}</h4>
                            <p>{!! $data->isi !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </section>
    <!-- End Resume Section -->

  </main><!-- End #main -->
@endsection
