@extends('layouts.master')
@section('content')
    <main id="main">

        <!-- ======= Hero Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Daftar Kebutuhan</h2>
                    <p>Jika anda ingin membantu dengan menyiapkan kebutuhan-kebutuhan, anda dapat mempersiapkan sesuai
                        dengan daftar kebutuhan masing-masing</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="resume-item pb-0">
                            <h4>Kebutuhan Harian</h4>
                            @foreach ($kebutuhan as $data)
                                <li>{!! $data->kebutuhan_harian !!}</li>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="resume-item">
                            <h4>Kebutuhan Obat-obatan</h4>
                            @foreach ($kebutuhan as $data)
                                <li>{!! $data->kebutuhan_obat !!}</li>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Hero -->

    @endsection
