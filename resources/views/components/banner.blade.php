<div class="single-banner">
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
</div>