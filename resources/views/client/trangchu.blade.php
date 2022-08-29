@extends('client.layout-client')

@section('title')
    Trang chủ
@endsection


@section('main')
    <main>
        @php
            $title_listproducts = 'Món ăn nổi bật';
            $type_list_blogs = 2;
        @endphp

        @include('components.banner')

        <div class="intro-home">
            <div class="container">
                <div class="title-about">VỀ CHÚNG TÔI</div>
                <div class="intro-home-inner text-center">
                    <p>Ngày nay, dân tộc Việt vẫn luôn gìn giữ những đặc sắc văn hóa ẩm thực truyền thống mà ông cha ta để lại. Tuy nhiên, không phải vì thế mà nói nền ẩm thực của nước ta đã lỗi thời, lạc hậu. Kế thừa và phát huy truyền thống, người Việt lại tiếp tục sáng tạo và đón nhận những tinh hoa ẩm thực từ các nước để làm nên những món ăn độc đáo.</p>
                </div>
            </div>
        </div>

        @include('components.list_products')

        <div class="hr-line"></div>

        @include('components.list_blogs')

        <div class="review">
            <div class="container">
                <div class="title-review">Đánh giá</div>
                <div class="hr-line"></div>
                <div class="sub-title-review">What said about us</div>
                <div class="review-list">
                    <div class="swiper review-slider">
                        <div class="arrow-wrapper">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <ul class="list-star">
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                </ul>
                                <div class="content">"Sit reprehenderit elit commodo cupidatat cupidatat labore. Laboris ipsum exercitation do dolore sunt anim. Ad irure nostrud ea excepteur ullamco in quis enim occaecat dolore. Nisi in eu exercitation ad deserunt eu voluptate. Quis id nostrud officia anim occaecat culpa sit ipsum ex laborum sit occaecat incididunt deserunt. Id sunt ullamco et duis non nulla tempor id. Aute laboris velit irure reprehenderit tempor irure aliqua. Irure velit cupidatat non sit aliquip labore quis. Minim et amet do incididunt deserunt labore reprehenderit nostrud nulla sit laborum ut reprehenderit laboris."</div>
                                <div class="name">JHGJ KIL IUO</div>
                            </div>
                            <div class="swiper-slide">
                                <ul class="list-star">
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                </ul>
                                <div class="content">"Reprehenderit id esse aliquip sint amet sit deserunt fugiat qui duis ut minim. Sit aute nisi anim dolore officia veniam sit est elit. Ipsum eu incididunt adipisicing dolor elit ad cillum in eu non pariatur. Adipisicing consectetur aliquip dolore d Consectetur amet adipisicing laborum cillum proident incididunt adipisicing nostrud duis. Excepteur irure quis Lorem ullamco sint do commodo. Aliqua consectetur irure exercitation qui.eserunt et Lorem laborum quis. Velit consectetur qui proident occaecat velit commodo sit ex ut dolor laboris eiusmod. Commodo nostrud fugiat adipisicing ullamco aute quis u"llamco consequat cupidatat. Consectetur enim adipisicing incididunt veniam anim adipisicing tempor proident pariatur enim fugiat qui tempor adipisicing."</div>
                                <div class="name">CJG HKY SED</div>
                            </div>
                            <div class="swiper-slide">
                                <ul class="list-star">
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                </ul>
                                <div class="content">"Non nisi et magna tempor ea magna duis non quis eiusmod id Lorem. Aliquip minim veniam laboris enim ut irure sit labore ea eu esse dolore excepteur laborum. Ullamco voluptate aliqua ad id mollit irure Lorem pariatur adipisicing magna consequat. Nulla sit cillum incididunt duis aliquip sint nostrud. Non sunt veniam exercitation mollit et laborum ullamco aliquip incididunt aute esse. Magna nisi ad adipisicing eiusmod aute ipsum dolore ullamco exercitation adipisicing Lorem veniam. Nostrud culpa ut enim laboris fugiat qui laborum. Exercitation eiusmod sint labore laboris id occaecat enim excepteur cillum aliqua dolor eu dolore anim. Sunt sit deserunt in nulla amet minim labore consequat fugiat non. Labore irure deserunt ut non culpa cupidatat esse."</div>
                                <div class="name">KIIK JUU KIK</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @php
            $type_list_blogs = 1;
        @endphp
        @include('components.list_blogs')
    </main>
@endsection