@extends('layouts.app')
@section('content')

        <!-- <section style="margin-top: 0px;margin-bottom: 48px; z-index: 20;"></section> -->
        <section class="padding48h" style="z-index: 20;" >
            <img src="{{route('file','assets/image/white-pixel-background 5.webp')}}" style="z-index: 1;" class="image_background" alt="">
            <div class="row justify-content-between mt-5">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <h2 class="text-PrimaryColor">LoRa Connectivity</h2>
                    <!-- <div class="divider mb-4"></div> -->
                    <p class="body-1">
                        LoRa (Long Range) - is a radio communication protocol that is fit for IoT solution. It is based on physical proprietary radio technique called chirp spread spectrum (CSS) technology. 
                    </p>
                    <p class="body-1">
                        LoRaWAN (Long Range Wide Area Network) - The LoRaWAN is a application layer of LoRa that will manage LoRa for massive deployment. This Protocol will manage the frequency, data rate, and other network configuration that will make LoRaWAN fit into massive network provider.
                    </p>
                    <!-- <button type="button" class=" btn-startJourney">Start Your Journey With Us</button> -->
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="parent" style="position: relatives;">
                            <img src="{{route('file','assets/image/LoRa-Connectivity Illustration 1.webp')}}" class="image_banner2" alt="">
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
                <h3 class="text-PrimaryColor text-center">LoRa Connectivity Architecture</h3>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-auto">
                    <img src="{{route('file','assets/image/Architecture LoRa_isometric no backgrd.webp')}}" class="Image_ProductBig" alt="">
                </div>
            </div>
        </section>

@endsection