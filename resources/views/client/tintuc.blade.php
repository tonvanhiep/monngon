@extends('client.layout-client')

@section('title')
    Tin tức
@endsection


@section('main')
    <main>
        @php
            $titlebanner = 'Tin tức';
        @endphp
        @include('components.banner')

        <div class="list-products-home mb-20 mt-60">
            <div class="container">
                <div class="list-blogs-2 not-order">
                    <div class="row">
                        @if (isset($listtintuc))
                            @foreach ($listtintuc as $key => $item)
                                <div class="col-md-12">
                                    <div class="item-blog row">
                                        <div class="col-md-6">
                                            <div class="img-wrapper">
                                                <img src="{{($item->anhdaidien == null)?asset('assets\images\logo\favicon.png'):$item->anhdaidien}}" alt="Blog" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="name">{{$item->tieude}}</div>
                                            <div class="desc">
                                                <p>{!!$item->noidung!!}</p>
                                            </div>
                                            <div class="cta-wrapper">
                                                <a class="cta-primary" href="{{route('tintuc.chitiet', ['slug' => $item->slug, 'id' => $item->id])}}">Xem thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                
            </div>
        </div>

        @include('components.pagination')
    </main>
@endsection