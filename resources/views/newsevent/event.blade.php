@extends('layouts.app')
@section('content')


<section class="px-xl-5 px-lg-5 px-md-5 px-sm-4 fullwidth">
    <div class="row align-items-center justify-content-between g-3">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="p-sm-2 p-lg-5 p-md-5" style="padding:0 0.2rem;">
                <h2 class="text-PrimaryColor  text-PrimaryColor">{{$d['title']}}</h2>
                <p><i class="bi bi-calendar-check"></i> {{$d['date']}} </p>
                <p><i class="bi bi-geo-alt-fill"></i> {{$d['location']}}</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <img class="Image_EventDetail" src="{{$d['img']}}" alt="">
        </div>
    </div>

</section>
<section style="margin-bottom: 124px; align-self: center; position: relative; z-index: 20; padding-top: 32px;">
    <div class="row justify-content-center">
        <div class="p-sm-2 p-lg-5 p-md-5" style="padding:0 32px;">
            {!! $d['content'] !!}
        </div>
    </div>
</section>
@endsection