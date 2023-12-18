


<section class="fullwidth mt-5">
    <div class="row justify-content-center">
        <h2 class="text-PrimaryColor text-center">
            Events
        </h2>
    </div>

    <div class="row g-3 px-xl-5 px-lg-5 px-md-2 px-sm-2 justify-content-center mb-4">
        @foreach($event as $e)
        <div class="col-lg-2 col-md-10 col-sm-12">
            <a href="{{$e['link']}}" style="text-decoration: none;color:#000000;">
                <div class="card card-newsEvent3 Radius10">
                    <div class="card-body">
                        <img src="{{$e['img']}}" class="Image_Event Radius10 lazy" alt="">
                        <h4>{{$e['title']}}</h4>
                        <p class="tinyText">{{$e['date']}}</p>
                    </div> 
                </div>
            </a>
        </div>
        @endforeach
    </div>


    <div class="row g-3 px-xl-5 px-lg-5 px-md-2 px-sm-2 align-items-center justify-content-center mb-4" style="display:yes;">
        @if ($active_page_events>1)
        <div class="col-auto">
            <div class="pagination" onclick='getPageEvents({{$active_page_events-1}})'>
                <i class="bi bi-arrow-left"></i>
            </div>
        </div>
        @endif
        @foreach ($list_page_number_events as $i)
            @if ($i == "...")
            <div id="pageEventsHidden" class="col-auto">
                <div class="pagination" onclick='openBoxEvents()'>
                    ...
                </div>
            </div>
            <div id="pageEventsBox" class="col-auto" style="display:none;">
                <div class="pagination">
                    <form onsubmit="jumpToPageEvents();return false" style="margin:0;">
                        <input type="text" id="pageEvents" name="pageEvents" size="1">
                    </form>
                </div>
            </div>
            @else
            <div class="col-auto">
                @if ($active_page_events==$i)
                <div class="paginationactive" onclick='getPageEvents({{$i}})'>
                @else
                <div class="pagination" onclick='getPageEvents({{$i}})'>
                @endif
                {{$i}}
                </div>
            </div>
            @endif
        @endforeach
        @if ($active_page_events<$last_page_events)
        <div class="col-auto">
            <div class="pagination next" onclick='getPageEvents({{$active_page_events+1}})'>
                <i class="bi bi-arrow-right"></i>
            </div>
        </div>
        @endif
    </div>
</section>


</section>