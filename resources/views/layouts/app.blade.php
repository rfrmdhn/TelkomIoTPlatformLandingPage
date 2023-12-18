<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Telkom IoT Platform</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{route('file','assets/image/LogoIOTPlatformkecil.png')}}" />


        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- Splide -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
       

        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{route('file','css/styles.css')}}" rel="stylesheet" />
        
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">

        <style>
           
        </style>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-E6GL2ND9BB"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-E6GL2ND9BB');
		</script>
    </head>
    
    
    <body class="">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
       

        <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top fixed-top w-100 px-5" style="z-index:250;">
            <div class="container-fluid">
                <a href="{{route('index')}}"><img class="nav-barLogo lazy" data-src="{{route('file','assets/image/LogoIOTPlatform.png')}}"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">
                        <li class="nav-item"><a class="nav-link" href="{{route('index')}}">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" style="text-align: left;" href="product-iot-platform">IoT Platform</a></li>
                                <li><a class="dropdown-item" style="text-align: left;" href="product-lora">LoRa Connectivity</a></li>
                                <li><a class="dropdown-item" style="text-align: left;" href="product-b2b">B2B Research & Collaboration</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Use Cases
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" style="text-align: left;" href="usecase-asset-inventory">Assets & Inventory</a></li>
                                <li><a class="dropdown-item" style="text-align: left;" href="usecase-smart-city">Smart City</a></li>
                                <li><a class="dropdown-item" style="text-align: left;" href="usecase-ycc">Health Care</a></li>
                                <li><a class="dropdown-item" style="text-align: left;" href="usecase-utilities">Utilitiess</a></li>
                                <li><a class="dropdown-item" style="text-align: left;" href="usecase-poultry">Poultry</a></li>
                                <li><a class="dropdown-item" style="text-align: left;" href="usecase-agriculture">Agriculture</a></li>
                                <li><a class="dropdown-item" style="text-align: left;" href="usecase-track-trace">Tracking</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="documentation">Documentation</a></li>
                        <li class="nav-item"><a class="nav-link" href="news-event">News & Events</a></li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 justify-content-start">
                        <button type="button" class="btn btn-signIn" onclick=" window.open('https://console.telkomiot.id/','_blank')">Sign In</button>
                        <button type="button" class="btn btn-signUp" onclick=" window.open('https://console.telkomiot.id/register','_blank')">Sign Up </button>
                    </ul>
                </div>
            </div>
        </nav>
        <button type="button" class="btn btn-Support" style="z-index:500;" data-bs-toggle="modal" data-bs-target="#exampleModalHelpDesk">
            <div class="row justify-content-center">
                <img class="lazy" data-src="{{route('file','assets/image/operator 1.png')}}" alt="">
            </div>
        </button>
        <!-- Modal -->
        <div class="modal fade " id="exampleModalHelpDesk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg ">
                <div class="modal-content Radius20">
                    <button type="button" class="btn btnX fit-content"  data-bs-dismiss="modal"><i class="bi bi-x"></i></button>
                    <div class="row align-items-center justify-content-center no-gutters g-0">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="leftModal">
                                <div class="row padding2remh mb-4">
                                    <h3 class="text-white mt-4">Get In Touch</h3>
                                </div>
                                <div class="row padding2remh">
                                    <div class="col-1 ">
                                        <p class="body-3 text-white"><i class="bi bi-geo-alt-fill"></i></p>
                                    </div>
                                    <div class="col-11">
                                        <p class="body-3 text-white text-break">Jl. Gegerkalong Hilir, Sukarasa, <br> Kec. Sukasari,<br>
                                            Kota Bandung, Jawa Barat 40152</p>
                                    </div>
                                </div>
                                <div class="row padding2remh">
                                    <div class="col-1 ">
                                        <p class="body-3 text-white"><i class="bi bi-telephone"></i></p>
                                    </div>
                                    <div class="col-11">
                                        <p class="body-3 text-white">(021) 123 456 789</p>
                                    </div>
                                </div>
                                <div class="row padding2remh mb-4">
                                    <div class="col-1 ">
                                        <p class="body-3 text-white"><i class="bi bi-envelope-fill"></i></p>
                                    </div>
                                    <div class="col-11">
                                        <p class="body-3 text-white">platform@telkomiot.id</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <img data-src="{{route('file','assets/image/Contact Us Illustration')}}.png" class="image_modalContactUs  d-none d-lg-block lazy" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="rightModal">
                                <!-- <div class="row justify-content-end">
                                    
                                </div> -->
                                <h3 class="text-center text-PrimaryColor mb-5">Got a Question?</h3>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Messages</label>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control"  rows="10" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                        <label for="floatingTextarea">Leave a message</label>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-auto">
                                        <button type="button" class="btn btn-SendMessage">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
        
        <!-- Footer-->
        <footer class="footer bg-footer mt-5 w-100" style="z-index:400;">
            <div class="row">
                <div class="col-lg-5 col-sm-12">
                    <div class="containerwhite padding48h">
                        <div class="row">
                            <img data-src="{{route('file','assets/image/LogoIOTPlatform.png')}}" class="logofooter lazy">
                        </div>
                        <div class="row mb-4">
                            <p>We ensure the best Research & Innovation Collaboration to make your academic and business become digital with End-to-End Solutions. </p>
                        </div>
                        <div class="row">
                            <div class="col-auto text-black">
                                <p class="body-3"><i class="bi bi-instagram"></i></p>
                            </div>
                            <div class="col-auto text-black">
                                <p class="body-3"><i class="bi bi-facebook"></i></p>
                            </div>
                            <div class="col-auto text-black">
                                <p class="body-3"><i class="bi bi-twitter"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-12 pt-5">
                    <div class="row justify-content-center padding36">
                        <div class="col-6">
                            <h5 class="text-white mb-4">Contact Us</h5>
                            <div class="row">
                                <div class="col-auto ">
                                    <p class="body-3 text-white"><i class="bi bi-geo-alt-fill"></i></p>
                                </div>
                                <div class="col-auto">
                                    <p class="body-3 text-white">Jl. Gegerkalong Hilir, Sukarasa, Kec. Sukasari,<br>
                                        Kota Bandung, Jawa Barat 40152</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto ">
                                    <p class="body-3 text-white"><i class="bi bi-envelope-fill"></i></p>
                                </div>
                                <div class="col-auto">
                                    <p class="body-3 text-white">platform@telkomiot.id</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <h5 class="text-white mb-4">Company</h5>
                            <div class="row">
                                <div class="col-auto">
                                    <a href="{{route('index')}}/about" >
                                        <p class="body-3 text-white">About</p>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <a href="{{route('index')}}/term-condition">
                                        <p class="body-3 text-white">Terms & Conditions</p>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <a href="{{route('index')}}/privacy-policy">
                                        <p class="body-3 text-white">Privacy Policy</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <p class="body-3 text-center text-white">Copyright © 2022 Telkom IoT Platform. All Right Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <!-- Core theme JS-->
        <script src="{{route('file','js/scripts.js')}}"></script>
        <script src="{{route('file','vendor/jquery.lazy/jquery.lazy.min.js')}}"></script>
        <script>

			if ("serviceWorker" in navigator) {
			    window.addEventListener("load", function() {
			      navigator.serviceWorker
			        .register("/telkom-sw.js")
			        .then(function() {
			          console.log("Pendaftaran ServiceWorker berhasil");
			        })
			        .catch(function() {
			          console.log("Pendaftaran ServiceWorker gagal");
			        });
			    });
			} else {
			    console.log("ServiceWorker belum didukung browser ini.");
			}
		
            $(function() {
                $('.lazy').lazy();
            });
        </script>
        @yield('js')
    </body>
</html>
