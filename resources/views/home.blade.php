@extends('layouts.app')
@section('content')
        <img data-src="{{route('file','assets/image/white-pixel')}}-background 5.png" style="z-index: 1;" class="image_background lazy" alt="">
        
        
        <section class="fullwidth px-5" style="margin-bottom: 64px; z-index: 20;">
            <div class="row align-items-center mt-5" style="background:none;">
                <div class="col-lg-7 col-sm-12 " style="background:none;">
                    <h1 class="text-PrimaryColor">The Future of Technology <br> <h1 class="text-WarnaKedua">Starts Here</h1></h1>
                    <div class="divider mb-4"></div>
                    <p class="body-1Bold">Bring you the IoT Data Solution and LoRa connectivity to your hands in easy steps.</p>
                    <button type="button" class=" btn-startJourney" onclick=" window.open('https://console.telkomiot.id/','_blank')">Start Your Journey With Us</button>
                </div>
                <div class="col-lg-5 col-sm-12" style="background:none;">
                    <div class="parent" style="position: relatives;">
                        <img data-src="{{route('file','assets/image/SmartCityIlllustration.webp')}}" class="image_banner lazy" alt="">
                        <div class="child">
                            <img src="" class="image_banneranimation" alt="" id="gif_iot">
                        </div>
                    </div>
                </div>
                <div class="containerImageBackground">
                    <img data-src="{{route('file','assets/image/Bg Gradient')}}.png" class="image_background2 lazy" alt="">
                </div>
            </div>
            
        </section>

        <section class="padding48h" style="align-self: center; margin-top:164px;">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-sm-12 mb-5">
                    <img class="heroImage1" src="images/WhatIoTHeroImg1.png" alt="">
                </div>
                <div class="col-lg-6 col-sm-12 mb-5">
                    <h3 class="text-PrimaryColor text-lg-left">What is IoT Platform ?</h3>
                    <p class="text-lg-left text-sm-justify">IoT platform is an essential component in the IoT value chain. IoT Platform has a crucial role to collect the data sent from IoT devices to be processed by IoT application through secure and reliable protocols like MQTT. Formed by microservices, the IoT platform enables to create IoT applications for monitoring and control. IoT platform offers unique features like device management, interoperability from various device brands, agnostic to any connectivity, and personal dashboard.</p>
                </div>
            </div>
        </section>



        <section class="fullwidth px-5 mt-5">
            <div class="row no-gutters align-items-center justify-content-between mb-4" >
                <div class="col-lg-6 col-md-12 col-sm-12 mb-5">
                    <h3 class="text-PrimaryColor text-lg-left">Why We Must Use <b class="text-PrimaryLightColor">IoT Platform</b></h3>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <iframe style="width:100%; height:424px;" src="https://www.youtube.com/embed/YxzCiOyT9gI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </section>



        <section class="p-xl-5 p-lg-5 p-md-2 p-sm-2 mt-5 fullwidth">
            <div class="row no-gutters justify-content-center align-items-center mb-4" >
                <div class="col-auto">
                    <h3 class="text-whie">Products</h3>
                </div>
            </div>
            <div class="container-product fullwidth">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-lg-4 col-sm-12">
                            <div class="card card-product">
                                <div class="card-body padding24 text-Black">
                                    <div class="row justify-content-center">
                                        <img data-src="{{route('file','assets/image/IoT Illustration')}}.webp" class="image_products lazy" alt="">
                                    </div>
                                    <div class="row justify-content-center">
                                        <h4 class="text-center text-PrimaryColor">IoT<br>Platform</h4>
                                    </div>
                                    <div class="row justify-content-center">
                                        <p class="body-2 text-center">An IoT technology service that <br> can easily connect, manage, <br> automate various devices...</p>
                                    </div>
                                    <div class="row">
                                        <a type="button" class="btn btn-seedetail" href="{{route('index')}}/product-iot-platform" >See Details <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="card card-product">
                                <div class="card-body padding24 text-Black">
                                    <div class="row justify-content-center">
                                        <img data-src="{{route('file','assets/image/LoRa-Connectivity')}} Illustration 1.webp" class="image_products lazy" alt="">
                                    </div>
                                    <div class="row justify-content-center">
                                        <h4 class="text-center text-PrimaryColor">LoRa<br>Connectivity</h4>
                                    </div>
                                    <div class="row justify-content-center">
                                        <p class="body-2 text-center">A radio communication <br> protocol that is fit for IoT<br> solution.</p>
                                    </div>
                                    <div class="row">
                                        <a type="button" class="btn btn-seedetail" href="product-lora">See Details <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="card card-product">
                                <div class="card-body padding24 text-Black">
                                    <div class="row justify-content-center">
                                        <img data-src="{{route('file','assets/image/B2B Illustration')}}.webp" class="image_products lazy" alt="">
                                    </div>
                                    <div class="row justify-content-center">
                                        <h4 class="text-center text-PrimaryColor">B2B Research <br> & Collaboration</h4>
                                    </div>
                                    <div class="row justify-content-center">
                                        <p class="body-2 text-center">Basic components to bring <br> you the kind of IoT technology <br> result you need. </p>
                                    </div>
                                    <div class="row">
                                        <a type="button" class="btn btn-seedetail" href="{{route('index')}}/product-b2b" >See Details <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="p-xl-5 p-lg-5 p-md-2 p-sm-5 mt-5 fullwidth">
            <div class="row justify-content-center">
                <h3 class="text-center text-PrimaryColor">Successful Use Cases</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <div class="row justify-content-center mb-4">
                                <div class="image-container">
                                    <img data-src="{{route('file','assets/image/Asset Protection')}}.webp" style="border-radius: 20px;" class="image_cardflip lazy" alt="">
                                </div>
                            </div>
                            <div class="row justify-content-center mb-4">
                                <h4 class="text-center text-PrimaryColor">Asset & Inventory</h4>      
                            </div>
                          </div>
                          <div class="flip-card-back">
                            <div class="card-body">
                                <div class="row justify-content-center mb-2">
                                    <h4 class="text-center text-PrimaryColor">Assets & Inventory</h4>      
                                </div>
                                <div class="row justify-content-center mb-2">
                                    <div class="text-container">
                                        <p class="body-1">IoT technology is used to display asset data related to the type, number, position, etc. It can also update the company's inventory data automatically and in real-time through a personal dashboard.</p>
                                    </div>
                                </div>
                                <div class="row justify-content-end mb-2">
                                    <a type="button" class="btn btn-seedetailsLL" href="{{route('index')}}/usecase-asset-inventory" >See details<i class="bi bi-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <div class="row justify-content-center mb-4">
                                <div class="image-container">
                                    <img data-src="{{route('file','assets/image/smart controller')}}.webp" style="border-radius: 20px;" class="image_cardflip lazy" alt="">
                                </div>
                            </div>
                            <div class="row justify-content-center mb-4">
                                <h4 class="text-center text-PrimaryColor">Smart City</h4>      
                            </div>
                          </div>
                          <div class="flip-card-back">
                            <div class="card-body">
                                <div class="row justify-content-center mb-2">
                                    <h4 class="text-center text-PrimaryColor">Smart City</h4>      
                                </div>
                                <div class="row justify-content-center mb-2">
                                    <div class="text-container">
                                        <p class="body-1">As the name implies, Smart City, IoT technology is applied centrally to various aspects of urban life. With the IoT ecosystem, digitalization of devices that are used daily can be implemented easily, such as home and street lighting, household appliances, and other various types of devices</p>
                                    </div>
                                </div>
                                <div class="row justify-content-end mb-2">
                                    <a type="button" class="btn btn-seedetailsLL" href="{{route('index')}}/usecase-smart-city"  >See details<i class="bi bi-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <div class="row justify-content-center mb-4">
                                <div class="image-container">
                                    <img data-src="{{route('file','assets/image/Health Care')}}.webp" style="border-radius: 20px;" class="image_cardflip lazy" alt="">
                                </div>
                            </div>
                            <div class="row justify-content-center mb-4">
                                <h4 class="text-center text-PrimaryColor">Health Care</h4>      
                            </div>
                          </div>
                          <div class="flip-card-back">
                            <div class="card-body">
                                <div class="row justify-content-center mb-2">
                                    <h4 class="text-center text-PrimaryColor">Health Care</h4>      
                                </div>
                                <div class="row justify-content-center mb-2">
                                    <div class="text-container">
                                        <p class="body-1">IoT technology is also very much needed in the Healthcare industry category, with digitizing systems and devices to support medical services, procuring drugs for patients, and other health aspects</p>
                                    </div>
                                </div>
                                <div class="row justify-content-end mb-2">
                                    <a type="button" class="btn btn-seedetailsLL" href="{{route('index')}}/usecase-ycc" >See details<i class="bi bi-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <div class="row justify-content-center mb-4">
                                <div class="image-container">
                                    <img data-src="{{route('file','assets/image/Utilities')}}.png" style="border-radius: 20px;" class="image_cardflip lazy" alt="">
                                </div>
                            </div>
                            <div class="row justify-content-center mb-4">
                                <h4 class="text-center text-PrimaryColor">Utilities</h4>      
                            </div>
                          </div>
                          <div class="flip-card-back">
                            <div class="card-body">
                                <div class="row justify-content-center mb-2">
                                    <h4 class="text-center text-PrimaryColor">Utilities</h4>      
                                </div>
                                <div class="row justify-content-center mb-2">
                                    <div class="text-container">
                                        <p class="body-1">The application of IoT technology in the infrastructure sector that used by many people and managed by large companies such as electricity, water, and gas.</p>
                                    </div>
                                </div>
                                <div class="row justify-content-end mb-2">
                                    <a type="button" class="btn btn-seedetailsLL" href="{{route('index')}}/usecase-utilities" >See details<i class="bi bi-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <div class="row justify-content-center mb-4">
                                <div class="image-container">
                                    <img data-src="{{route('file','assets/image/poultry')}}.png" style="border-radius: 20px;" class="image_cardflip lazy" alt="">
                                </div>
                            </div>
                            <div class="row justify-content-center mb-4">
                                <h4 class="text-center text-PrimaryColor">Poultry</h4>      
                            </div>
                          </div>
                          <div class="flip-card-back">
                            <div class="card-body">
                                <div class="row justify-content-center mb-2">
                                    <h4 class="text-center text-PrimaryColor">Poultry</h4>      
                                </div>
                                <div class="row justify-content-center mb-2">
                                    <div class="text-container">
                                        <p class="body-1">IoT solutions are implemented in the poultry farming industry to help entrepreneurs and breeders to minimize costs and get the best livestock yields.</p>
                                    </div>
                                </div>
                                <div class="row justify-content-end mb-2">
                                    <a type="button" class="btn btn-seedetailsLL" href="{{route('index')}}/usecase-poultry" >See details<i class="bi bi-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <div class="row justify-content-center mb-4">
                                <div class="image-container">
                                    <img data-src="{{route('file','assets/image/agriculture')}}.png" style="border-radius: 20px;" class="image_cardflip lazy" alt="">
                                </div>
                            </div>
                            <div class="row justify-content-center mb-4">
                                <h4 class="text-center text-PrimaryColor">Agriculture</h4>      
                            </div>
                          </div>
                          <div class="flip-card-back">
                            <div class="card-body">
                                <div class="row justify-content-center mb-2">
                                    <h4 class="text-center text-PrimaryColor">Agriculture</h4>      
                                </div>
                                <div class="row justify-content-center mb-2">
                                    <div class="text-container">
                                        <p class="body-1">Digitizing systems and devices by building an IoT ecosystem for the agricultural and plantation sectors as one of the largest business sectors in an agrarian country like Indonesia. This includes all kinds of business related to soil nutrients and plantation.</p>
                                    </div>
                                </div>
                                <div class="row justify-content-end mb-2">
                                    <a type="button" class="btn btn-seedetailsLL" href="{{route('index')}}/usecase-agriculture" >See details<i class="bi bi-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <div class="row justify-content-center mb-4">
                                <div class="image-container">
                                    <img data-src="{{route('file','assets/image/sajadi.webp')}}" style="border-radius: 20px;" class="image_cardflip lazy" alt="">
                                </div>
                            </div>
                            <div class="row justify-content-center mb-4">
                                <h4 class="text-center text-PrimaryColor">Track & Trace</h4>      
                            </div>
                          </div>
                          <div class="flip-card-back">
                            <div class="card-body">
                                <div class="row justify-content-center mb-2">
                                    <h4 class="text-center text-PrimaryColor">Track & Trace</h4>      
                                </div>
                                <div class="row justify-content-center mb-2">
                                    <div class="text-container">
                                        <p class="body-1">Automation of goods distribution data process from upstream to downstream or supply chain, product authentication, to real-time tracking of related data through a personal dashboard.</p>
                                    </div>
                                </div>
                                <div class="row justify-content-end mb-2">
                                    <a type="button" class="btn btn-seedetailsLL" href="{{route('index')}}/usecase-track-trace">See details<i class="bi bi-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>


        <section class="p-xl-5 p-lg-5 p-md-2 p-sm-5 mt-5 fullwidth" style="position:relative;">
            <div class="row mb-4 no-gutters justify-content-center" style="z-index: 20;">
                <h3 class="text-center text-white" style="z-index: 20;">News & Events</h3>
            </div>
            <div class="container fullwidth" style="z-index:20;">
                <div class="row fullwidth" style="width:100% !important;">
                    <div class="splide">
                        <div class="splide__track">
                            <div class="splide__list">
                                @foreach($data as $d)
                                <div class="col-sm-4 splide__slide m-2">
                                    <div class="card card-newsEvent">
                                        <div class="card-body">
                                            <a href="{{$d['link']}}" style="text-decoration: none;">
                                            <div class="row mb-2">
                                                <div class="image-container">
                                                    <img src="{{$d['img']}}" class="Image_News" style="border-radius: 20px;" class="image_cardflip lazy" alt="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <h4 class="text-PrimaryColor">{{$d['title']}}</h4>
                                            </div>
                                            <div class="row">
                                                <p class="body-3 text-PrimaryGreyColor">{{$d['date']}}</p>
                                            </div>
                                            <div class="row" style="z-index: 20;">
                                                <p class="body-2 text-black" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">{{$d['description']}}</p>
                                            </div>
                                            <div class="row justify-content-start">
                                                <button type="button" class="btn btn-readmore" style="display:none;">Read more...</button>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
            <script>
                var splide = new Splide('.splide', {
                    type: 'loop',
                    perPage: 4,
                    rewind: true,
                    breakpoints: {
                        2560: {
                            perPage: 5,
                            gap: '.7rem',
                            height: '30rem',
                        },
                        1920: {
                            perPage: 4,
                            gap: '.7rem',
                            height: '30rem',
                        },
                        1400: {
                            perPage: 3,
                            gap: '.7rem',
                            height: '30rem',
                        },
                        1200: {
                            perPage: 3,
                            gap: '.7rem',
                            height: '30rem',
                        },
                        800: {
                            perPage: 3,
                            gap: '.7rem',
                            height: '35rem',
                        },
                        640: {
                            perPage: 2,
                            gap: '.7rem',
                            height: '35rem',
                        },
                        480: {
                            perPage: 1,
                            gap: '.7rem',
                            height: '35rem',
                        },
                        300: {
                            perPage: 1,
                            gap: '.7rem',
                            height: '35rem',
                        },
                    },
                });
                splide.on( 'pagination:mounted', function ( data ) {
                // You can add your class to the UL element
                data.list.classList.add( 'splide__pagination--custom' );

                // `items` contains all dot items
                data.items.forEach( function ( item ) {
                    item.button.textContent = String( item.page + 1 );
                } );
                } );
                splide.mount();
            </script>
            <div class="backgroundwarnanewsevent">
            </div>
        </section>


       

        <section class="p-xl-5 p-lg-5 p-md-2 p-sm-5 mt-5 fullwidth" style=" margin-bottom: 124px; align-self: center; position: relative; z-index: 20; padding-top: 48px;">
            <div class="row justify-content-center mb-4">
                <h3 class="text-center text-PrimaryColor">Frequently Asked Questions</h3>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-12">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                What should I do when Free Trial Packages ended?
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <p>At Telkom IoT Platform you can buy IoT Platform and LoRa Connectivity type packages. Please check it on Packages Menu to choose which package type meet your needs.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                In what languages is Telkom IoT Platform operating?
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <p>Telkom IoT Platform has 2 languages option, English and Bahasa.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapse4">
                                Can Telkom IoT Platform provide other IoT services?
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading4">
                            <div class="accordion-body">
                                <p>Other than IoT Platform and LoRa Connectivity services, Telkom IoT Platform also has B2B Research & Collaboration which can provide your end-to-end IoT solutions both cloud and on-premises based.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-heading5">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse5" aria-expanded="false" aria-controls="panelsStayOpen-collapse5">
                                Am I billed for inactive devices?
                              </button>
                            </h2>
                            <div id="panelsStayOpen-collapse5" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading5">
                              <div class="accordion-body">
                                <p>You will not be charged for inactive devices. Notification will be sent to you once your current package close to expiration date.</p>
                            </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-heading6">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse6" aria-expanded="false" aria-controls="panelsStayOpen-collapse6">
                                How to upgrade my packages?
                              </button>
                            </h2>
                            <div id="panelsStayOpen-collapse6" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading6">
                              <div class="accordion-body">
                                <p>To upgrade Telkom IoT Platform package, you need to deactivate your current package first. Then you can buy another type of package. To upgrade it to B2B end-to-end solutions, you can click contact us button and submit form, then wait for our sales representative to follow up your request. </p>
                            </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-heading7">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse7" aria-expanded="false" aria-controls="panelsStayOpen-collapse7">
                                How can I check my billing statement?
                              </button>
                            </h2>
                            <div id="panelsStayOpen-collapse7" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading7">
                              <div class="accordion-body">
                                <p>
                                    Everytime you buy package and do transaction at Telkom IoT Platform, the billing statement will be sent to your email. 
                                </p>
                            </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-heading8">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse8" aria-expanded="false" aria-controls="panelsStayOpen-collapse8">
                                How long can I keep my data in Telkom IoT Platform?
                              </button>
                            </h2>
                            <div id="panelsStayOpen-collapse8" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading8">
                              <div class="accordion-body">
                                <p>
                                    You can save your data at Telkom IoT Platform for 3 months (Data Retention).
                                </p>
                            </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-heading9">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse9" aria-expanded="false" aria-controls="panelsStayOpen-collapse9">
                                Is there any different users category?
                              </button>
                            </h2>
                            <div id="panelsStayOpen-collapse9" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading9">
                              <div class="accordion-body">
                                <p>
                                    Users can register and make their account as Regular or B2B Collaboration category.
                                </p>
                            </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <h4 class="text-center">Still have a questions?</h4>
            </div>
            <div class="row ">
                <p class="text-center">If you cannot find answer to your question in our FAQ, you can always <br> <a href="" class="contactus"data-bs-toggle="modal" data-bs-target="#exampleModalHelpDesk">Contact us</a>. We will answer shortly! </p>
            </div>
        </section>
@endsection
@section('js')
<script>
    $(function() {
        
    });

    $( window ).on( "load", function() {
        setTimeout(
        function() 
        {
            $("#gif_iot").delay( 800 ).attr("src","{{route('file','assets/image/Animation-IoT')}}.gif");
        }, 5000);
    });
</script>
@endsection