@extends('layouts.app')
@section('content')

        <!-- <section style="margin-top: 0px;margin-bottom: 48px; z-index: 20;"></section> -->
        <section class="padding48h" style="z-index: 20;" >
            <img src="{{route('file','assets/image/white-pixel-background 5.webp')}}" style="z-index: 1;" class="image_background" alt="">
            <div class="row justify-content-between mt-5">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h2 class="text-PrimaryColor">B2B Research & Collaboration</h2>
                    <!-- <div class="divider mb-4"></div> -->
                    <p class="body-1">
                        End-to-End IoT Solutions is a basic components to bring you the kind of IoT technology result you need. With our successful living labs we have demonstrated our capability to support your academics and business with IoT technology components. 
                    </p>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="parent" style="position: relatives;">
                        <img src="{{route('file','assets/image/B2B Illustration.webp')}}" class="image_banner2" alt="">
                        <div class="child">
                            <!-- <img src="{{route('file','assets/image/Animation-IoT.gif')}}" class="image_banneranimation" alt=""> -->
                        </div>
                    <div>
                </div>
            </div>
            <div class="containerImageBackground">
                <img data-src="{{route('file','assets/image/Bg Gradient')}}.png" class="image_background2 lazy" alt="">
            </div>
        </section>
        





        <section class="p-xl-5 p-lg-5 p-md-2 p-sm-2 mt-2 fullwidth" style="margin-top: 0px;margin-bottom: 64px; z-index: 20;" >
            <div class="row justify-content-center mb-4">
                <h3 class="text-PrimaryColor text-center">B2B Research & Collaboration Architechture</h3>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-auto">
                    <img src="{{route('file','assets/image/Diagram end to end_isometric no backgrd.webp')}}" class="Image_ProductBig" alt="">
                </div>
            </div>
        </section>
@endsection