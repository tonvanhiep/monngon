{{-- <div class="single-banner">
    <div class="banner-wrapper">
    <div class="container">
        <div class="content-banner">
        <h1 class="title-banner">{{!isset($titlebanner)?'Banner':$titlebanner}}</h1>
        <div class="hr-line line-white"></div>
            <div class="desc">
                {{!isset($subtitlebanner)?'':$subtitlebanner}}
            </div>
        </div>
    </div>
    <img src="{{asset(!isset($imgbanner)?'assets/images/banner-1.jpg':$imgbanner)}}" alt="Banner" />
    </div>
</div> --}}

<div class="home-slider single-banner">
    <div class="swiper home-swiper banner-wrapper">
        @if (isset($listbannerimg))
            <div class="swiper-wrapper">
                @foreach ($listbannerimg as $key=>$item)
                    <div class="swiper-slide">
                        <img src="{{asset($item->anh)}}" alt="banner">
                    </div>
                @endforeach
            </div>

            @if (count($listbannerimg) > 1)
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            @endif
        @endif
        
        @if (isset($titlebanner) || isset($subtitlebanner))
            <div class="container container-content-banner">
                <div class="content-banner">
                    <h1 class="title-banner">{{!isset($titlebanner)?'Banner':$titlebanner}}</h1>
                    <div class="hr-line line-white"></div>
                    <div class="desc">
                        {{!isset($subtitlebanner)?'':$subtitlebanner}}
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>