@extends('layouts.app')
@section('content')


        <section class="UsecaseHead padding48h fullwidth" style="margin-top: 0px;margin-bottom: 0px; z-index: 20;" >
            <!-- <img src="{{route('file','assets/image/white-pixel-background 5.webp')}}" style="z-index: 21;" class="image_background" alt=""> -->
            <div class="row padding32h fullheight justify-content-start align-items-center mb-4" >
                <div class="col-auto align-middle">
                    <h2 class="text-PrimaryColor">Latest News <br>& Events</h2>
                </div>
            </div>
            <img src="{{route('file','assets/image/NewsEventBG.webp')}}" class="image_usecaseHead lazy" alt="">
        </section>

        <div class="fullwidth" id="news_data">
            @include('newsevent.news_data')
        </div>

        <div class="fullwidth" id="events_data">
            @include('newsevent.events_data')
        </div>
        
@endsection

<script>

    function getPageNews(page){
        fetch_data_news(page);
    }

    function openBoxNews(){
        document.getElementById("pageNewsHidden").style.display = "none";
        document.getElementById("pageNewsBox").style.display = "";
    }

    function jumpToPageNews(){
        var page=document.getElementById("pageNews").value;
        fetch_data_news(page);
    }
    
    function fetch_data_news(page){
        $.ajax({
            type: "GET",
            url: "/fetchnews",
            data: { 
                page: page
            },
            success: function(response){
                $('#news_data').html(response);
            }
        })
    }

    function getPageEvents(page){
        fetch_data_events(page);
    }

    function openBoxEvents(){
        document.getElementById("pageEventsHidden").style.display = "none";
        document.getElementById("pageEventsBox").style.display = "";
    }

    function jumpToPageEvents(){
        var page=document.getElementById("pageEvents").value;
        fetch_data_events(page);
    }

    function fetch_data_events(page){
        $.ajax({
            type: "GET",
            url: "/fetchevents",
            data: { 
                page: page
            },
            success: function(response){
                $('#events_data').html(response);
            }
        })
    }

</script>