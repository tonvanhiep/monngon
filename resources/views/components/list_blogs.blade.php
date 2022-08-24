@if (isset($type_list_blogs))
    <div class="list-blogs-home">
        <div class="container">
            <div class="title-category">Tin tức</div>
            @switch($type_list_blogs)
                @case(1)
                    <div class="list-blogs">
                        <div class="row">
                            @if (isset($listtintuc))
                                @foreach ($listtintuc as $key => $item)
                                    <div class="col-4">
                                        <div class="item-blog">
                                            <a href="/detail-blog.html">
                                                <div class="img-wrapper">
                                                    <img src="{{asset('assets/images/blogs/hinh-1.jpg')}}" alt="Blog" />
                                                </div>
                                            </a>
                                            <div class="name">{{$item->tieude}}</div>
                                            <div class="desc">
                                                <p>{!!$item->noidung!!}</p>
                                            </div>
                                            <div>
                                                <a class="cta-primary" href="{{route('tintuc.chitiet', ['slug' => $item->tieude, 'id' => $item->id])}}">Xem thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    @break

                @case(2)
                    <div class="list-blogs-2">
                        <div class="row">
                            @if (isset($listtintuc))
                                @foreach ($listtintuc as $key => $item)
                                    <div class="col-md-12">
                                        <div class="item-blog row">
                                            <div class="col-md-6">
                                                <div class="img-wrapper">
                                                    <img src="{{asset('assets/images/blogs/hinh-1.jpg')}}" alt="Blog" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="name">{{$item->tieude}}</div>
                                                <div class="desc">
                                                    <p>{!!$item->noidung!!}</p>
                                                </div>
                                                <div class="cta-wrapper">
                                                <a class="cta-primary" href="{{route('tintuc.chitiet', ['slug' => $item->tieude, 'id' => $item->id])}}">Xem thêm</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    @break
            @endswitch
        </div>
    </div>
@endif