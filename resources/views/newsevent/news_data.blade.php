

<section class="fullwidth">
    <div class="row justify-content-center">
        <h2 class="text-PrimaryColor text-center">
            Latest News
        </h2>
    </div>

    <div class="row g-3 px-xl-5 px-lg-5 px-md-2 px-sm-2 justify-content-center mb-4">
        @foreach($data as $d)
        <div class="col-lg-10 col-md-10 col-sm-12">
            <a href="{{$d['link']}}" style="text-decoration: none;">
                <div class="card card-newsEvent2 Radius10">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <img src="{{$d['img']}}" class="Image_News lazy" alt="">
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <h4 class="text-PrimaryColor">{{$d['title']}}</h4>
                                <p class="body-3 text-PrimaryColor">{{$d['description']}}</p>
                                <p class="tinyText" style="color:blue;">{{$d['date']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>


    <div class="row g-3 px-xl-5 px-lg-5 px-md-2 px-sm-2 align-items-center justify-content-center mb-4" >
        @if ($active_page_news>1)
        <div class="col-auto">
            <div class="pagination" onclick='getPageNews({{$active_page_news-1}})'>
                <i class="bi bi-arrow-left"></i>
            </div>
        </div>
        @endif
        @foreach ($list_page_number_news as $i)
            @if ($i == "...")
            <div id="pageNewsHidden" class="col-auto">
                <div class="pagination" onclick='openBoxNews()'>
                    ...
                </div>
            </div>
            <div id="pageNewsBox" class="col-auto" style="display:none;">
                <div class="pagination">
                    <form onsubmit="jumpToPageNews();return false" style="margin:0;">
                        <input type="text" id="pageNews" name="pageNews" size="1">
                    </form>
                </div>
            </div>
            @else
            <div class="col-auto">
                @if ($active_page_news==$i)
                <div class="paginationactive" onclick='getPageNews({{$i}})'>
                @else
                <div class="pagination" onclick='getPageNews({{$i}})'>
                @endif
                {{$i}}
                </div>
            </div>
            @endif
        @endforeach
        @if ($active_page_news<$last_page_news)
        <div class="col-auto">
            <div class="pagination" onclick='getPageNews({{$active_page_news+1}})'>
                <i class="bi bi-arrow-right"></i>
            </div>
        </div>
        @endif
    </div>
</section>
