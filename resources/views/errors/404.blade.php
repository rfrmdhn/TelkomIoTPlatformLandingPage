@extends('layouts.app')
@section('content')
<section style="margin-top: 96px;margin-bottom: 0px; z-index: 20;"></section>
        <section class="padding48h" style="margin-top: 0px;margin-bottom: 124px; z-index: 20;" >
            <div class="row mb-4 justify-content-center align-items-center">
                <div class="col-4">
                    <img src="{{route('file','assets/image/404 Illustration.png')}}" class="image_404" alt="">
                </div>
            </div>
            <div class="row mb-2 justify-content-center">
                <div class="col-auto">
                    <h2 class="text-center text-PrimaryColor">Page Not Found!</h2>
                </div>
            </div>
            <div class="row mb-4 justify-content-center">
                <div class="col-4">
                    <p class="text-center text-PrimaryColor">We’re sorry, the page you requested could not be found
                        Please go back to home page</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <a type="button" class="btn-404" href="{{route('index')}}">Go Home</a>
                </div>
            </div>
        </section>
@endsection