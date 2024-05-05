@extends('landingpage.layouts.main')

@section('content')
    <style>
        .cid-u4ayil9cBT {
            padding-top: 6rem;
            padding-bottom: 4rem;
            background-color: transparent;
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
                <div class="col-12 col-md-12 col-lg-4 main-text">
                    <div class="">
                        <h5 class="mbr-section-title mbr-fonts-style mt-0 mb-4 display-2">
                            <strong>{{ $umkm->nama_tempat }}</strong>
                        </h5>
                        <h6 class="mbr-section-subtitle mbr-fonts-style mt-0 mb-4 display-7">
                            {{ $umkm->keterangan }}
                        </h6>
                        <h6 class="mbr-section-subtitle mbr-fonts-style mt-0 mb-4 display-7">
                            <strong>Harga</strong>
                        </h6>
                        <h6 class="mbr-section-subtitle mbr-fonts-style mt-0 mb-4 display-7">
                            {{ $umkm->harga }}
                        </h6>
                        <div class="mbr-section-btn">
                            <a href="https://wa.me/{{ $umkm->no_wa }}" class="btn btn-primary display-4">Chat via WhatsApp</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 side-features row">
                    @isset($umkm->thumbnail)
                        <div class="item features-image col-12 col-md-6 col-lg-6 active">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="{{ asset('storage/' . $umkm->thumbnail) }}">
                                </div>
                            </div>
                        </div>
                    @endisset
                    @isset($umkm->photo1)
                        <div class="item features-image col-12 col-md-6 col-lg-6 active">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="{{ asset('storage/' . $umkm->photo1) }}">
                                </div>
                            </div>
                        </div>
                    @endisset
                    @isset($umkm->photo2)
                        <div class="item features-image col-12 col-md-6 col-lg-6 active">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="{{ asset('storage/' . $umkm->photo2) }}">
                                </div>
                            </div>
                        </div>
                    @endisset
                    @isset($umkm->photo3)
                        <div class="item features-image col-12 col-md-6 col-lg-6 active">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="{{ asset('storage/' . $umkm->photo3) }}">
                                </div>
                            </div>
                        </div>
                    @endisset
                </div>
            </div>
        </div>
        </div>
    </section>


    <style>
        .cid-u4ayilaI3V {
            padding-top: 6rem;
            padding-bottom: 6rem;
            background-color: #ffffff;
        }

        .cid-u4ayilaI3V .item-subtitle {
            line-height: 1.2;
            color: #000000;
        }

        .cid-u4ayilaI3V img,
        .cid-u4ayilaI3V .item-img {
            width: 100%;
            height: 100%;
            height: 400px;
            object-fit: cover;
        }

        .cid-u4ayilaI3V .item:focus,
        .cid-u4ayilaI3V span:focus {
            outline: none;
        }

        .cid-u4ayilaI3V .item {
            margin-bottom: 2rem;
        }

        @media (max-width: 767px) {
            .cid-u4ayilaI3V .item {
                margin-bottom: 1rem;
            }
        }

        .cid-u4ayilaI3V .item-wrapper {
            position: relative;
            border-radius: 4px;
            height: 100%;
            display: flex;
            flex-flow: column nowrap;
        }

        .cid-u4ayilaI3V .mbr-section-title {
            color: #232323;
        }

        .cid-u4ayilaI3V .mbr-text,
        .cid-u4ayilaI3V .mbr-section-btn {
            color: #232323;
        }

        .cid-u4ayilaI3V .item-title {
            color: #232323;
        }

        .cid-u4ayilaI3V .content-head {
            max-width: 800px;
        }
    </style>
@endsection
