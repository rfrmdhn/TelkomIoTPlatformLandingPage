@extends('layouts.app')
@section('content')
        <section class="NewsHeadSec padding48h fullwidth" style="margin-top: 0px;margin-bottom: 0px; z-index: 20;" >
            <div class="row padding32h fullheight justify-content-center align-items-center mb-4" >
                <div class="col-auto align-middle">
                    <h2 class="text-PrimaryColor text-center text-white">{{$d['title']}}</h2>
                    <p class="body-1 text-center text-white">{{$d['date']}}</p>
                </div>
            </div>
            <img src="{{$d['img']}}" class="image_newsHead lazy" alt="">
        </section>

        <section class="fullwidth" style="margin-bottom: 124px; align-self: center; position: relative; z-index: 20; padding-top: 32px;">
            <div class="row justify-content-center">
                <div class="p-sm-2 p-lg-5 p-md-5" style="padding:0 32px;">
                 
                        {!! $d['content'] !!}
            
                </div>
            </div>
        </section>
@endsection