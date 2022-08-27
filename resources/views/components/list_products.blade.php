<div class="list-products-home mb-40">
    <div class="container">
        <div class="title-category">{{!isset($title_listproducts)?'Tất cả món ăn':$title_listproducts}}</div>
        <div class="list-products">
            <div class="row">
                @if (isset($listmonan))
                    @foreach ($listmonan as $key => $item)
                        <div class="col-4">
                            <div class="item-product">
                                <a href="/detail-blog.html">
                                    <div class="img-wrapper">
                                        <img src="{{($item->anhdaidien == null)?asset('assets\images\logo\favicon.png'):$item->anhdaidien}}" alt="Product" />
                                    </div>
                                </a>
                                <div class="info-product">
                                    <a href="/detail-blog.html"><div class="name">{{$item->tenmonan}}</div></a>
                                    <div class="price">25.000 VNĐ</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>