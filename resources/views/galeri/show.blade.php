@extends('landingpage.layouts.main')

@section('content')
    <style>
        .cid-u4ayil9zqi {
            overflow: hidden;

            background-image: url('{{ asset('storage/' . $galeri->photo) }}');
        }
    </style>
    <section class="image02 cid-u4ayil9zqi mbr-fullscreen mbr-parallax-background" id="image-20-u4ayil9zqi">
        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);"></div>
        <div class="container">
            <div class="row"></div>
            <div class="row justify-content-center">
                <div class="col-12 content-head">
                    <div class="mbr-section-head mb-5">
                        <h4 class="mbr-section-title mbr-fonts-style mbr-white align-center mb-7 display-2">
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .cid-u4ayil9cBT {
            padding-top: 6rem;
            padding-bottom: 4rem;
            background-color: #ffffff;
        }

        @media (max-width: 767px) {
            .cid-u4ayil9cBT {
                padding-bottom: 5rem;
            }
        }

        .cid-u4ayil9cBT img,
        .cid-u4ayil9cBT .item-img {
            width: 100%;
            height: 100%;
            height: 400px;
            object-fit: cover;
        }

        @media (max-width: 1200px) {

            .cid-u4ayil9cBT img,
            .cid-u4ayil9cBT .item-img {
                height: 300px;
                object-fit: cover;
            }
        }

        .cid-u4ayil9cBT .mbr-text {
            color: #000000;
        }

        .cid-u4ayil9cBT .mbr-section-subtitle {
            color: #ffffff;
            text-align: left;
        }

        .cid-u4ayil9cBT .main-button {
            margin-bottom: 2rem;
        }

        @media (max-width: 767px) {
            .cid-u4ayil9cBT .main-button {
                margin-bottom: 2rem;
            }
        }

        .cid-u4ayil9cBT .mbr-text UL {
            text-align: left;
        }

        .cid-u4ayil9cBT .mbr-section-subtitle,
        .cid-u4ayil9cBT .main-button {
            color: #000000;
        }

        .cid-u4ayil9cBT .side-features {
            display: -webkit-flex;
            -webkit-flex-wrap: wrap;
            padding-left: 0px;
            padding-right: 0px;
        }

        .cid-u4ayil9cBT .side-features .item {
            padding-left: 16px;
            padding-right: 16px;
        }

        .cid-u4ayil9cBT .item-wrapper {
            position: relative;
            display: flex;
            flex-flow: column nowrap;
            margin-bottom: 2rem;
        }

        @media (max-width: 767px) {
            .cid-u4ayil9cBT .item-wrapper {
                margin-bottom: 1rem;
            }
        }

        .cid-u4ayil9cBT .item-title {
            text-align: center;
        }

        .cid-u4ayil9cBT .item-subtitle {
            text-align: center;
        }

        @media (min-width: 992px) {
            .cid-u4ayil9cBT .main-text {
                padding-left: 0;
                padding-right: 32px;
            }
        }
    </style>
    <section class="gallery09 cid-u4ayil9cBT" id="gallery-9-u4ayil9cBT">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-18 main-text">
                    <h5 class="mbr-section-title mbr-fonts-style mt-0 mb-4 display-6">
                        <strong>{{ $galeri->judul }}</strong>
                    </h5>
                    <p>Dibuat : {{ $galeri->created_at }}</p>
                    @php
                        $paragraphs = explode('<br>', $galeri->body);
                    @endphp

                    @foreach ($paragraphs as $paragraph)
                        @php
                            $paragraph = strip_tags($paragraph, '<p><a><span><strong><em><ul><li><ol>');
                        @endphp
                        <h6 class="mbr-section-title mbr-fonts-style align-left mb-4 display-7">
                            { $paragraph }}
                        </h6>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
@endsection
