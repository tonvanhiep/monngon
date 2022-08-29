<div class="list-products-home mb-40">
    <div class="container">
        <div class="title-category">{{!isset($title_listproducts)?'Tất cả món ăn':$title_listproducts}}</div>
        <div class="list-products">
            <div class="row">
                @if (isset($listmonan))
                    @foreach ($listmonan as $key => $item)
                        <div class="col-4">
                            <div class="item-product">
                                <a href="{{route('monan.chitiet', ['slug' => $item->slug, 'id' => $item->id])}}">
                                    <div class="img-wrapper">
                                        <img src="{{($item->anhdaidien == null)?asset('assets\images\logo\favicon.png'):$item->anhdaidien}}" alt="Product" />
                                    </div>
                                </a>
                                <div class="info-product">
                                    <a href="{{route('monan.chitiet', ['slug' => $item->slug, 'id' => $item->id])}}"><div class="name">{{$item->tenmonan}}</div></a>
                                    <div class="price">
                                        <p class="min-price" style="display: inline;">{{isset($item->gianhonhat)?$item->gianhonhat:0}}</p> VNĐ
                                        @if ((isset($item->gianhonhat) && isset($item->gialonnhat)) && ($item->gianhonhat != $item->gialonnhat))
                                            <p style="display: inline;"> - </p>
                                            <p class="max-price" style="display: inline;">{{$item->gialonnhat}}</p> VNĐ
                                        @endif
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