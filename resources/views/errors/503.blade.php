<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Service Unavailable</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/image/LogoIOTPlatformkecil.png" />

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{route('file','css/styles.css')}}" rel="stylesheet" />
        <style>
            .image_404{
                width: 100%;
                height: auto;
            }
            .btn-404{
                background-color: var(--primary-light);
                padding-left: 36px;
                padding-right: 36px;
                padding-top: 12px;
                padding-bottom: 12px;
                border-radius: 10px;
                color: white;
                font-weight: 600;
                border: none;
            }
            .btn-404:hover{
                background-color: var(--primary);
            }
            .text-center {
                text-align: center !important;
            }
            .text-PrimaryColor{
                color: #1F2855;
            }
            .text-PrimaryLightColor{
                color: #0093AD;
            }
        </style>
    </head>
    
    <body>
        <section style="margin-top: 96px;margin-bottom: 96px; z-index: 20;"></section>
        <section class="padding48h" style="margin-top: 0px;margin-bottom: 124px; z-index: 20;" >
            <div class="row mb-4 justify-content-center align-items-center">
                <div class="col-4">
                    <img src="{{route('file','assets/image/Service-Unavailabl- Illustration.png')}}" class="image_404" alt="">
                </div>
            </div>
            <div class="row mb-2 justify-content-center">
                <div class="col-auto">
                    <h2 class="text-center text-PrimaryColor">Service Unavailable!</h2>
                </div>
            </div>
            <div class="row mb-4 justify-content-center">
                <div class="col-4">
                    <p class="text-center text-PrimaryColor">Sorry, the page is temporarily unavailable.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <a type="button" class="btn-404" href="{{route('index')}}">Refresh</a>
                </div>
            </div>
        </section>



       

       

        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{route('file','js/scripts.js')}}"></script>
    </body>
</html>
