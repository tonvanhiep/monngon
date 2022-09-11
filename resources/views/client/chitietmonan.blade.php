@extends('client.layout-client')

@section('title')
{{$chitiet[0]->tenmonan}}
@endsection


@section('css')
  <style>
    .content {
      margin-top: 50px;
    }

    #tuychon {
      height: 35px;
      width: 90%;
      border-radius: 5px;
    }
    #tuychon:focus {
      outline: none;
      border-radius: 5px 5px 0px 0px;
    }

    #tuychon option {
      height: 35px;
      border-radius: 0px;
    }

    #tuychon option:hover {
      background-color: azure;
    }
    #tuychon:active {
      
    }


    .buttons_added {
      opacity:1;
      display:inline-block;
      display:-ms-inline-flexbox;
      display:inline-flex;
      white-space:nowrap;
      vertical-align:top;
    }
    .is-form {
      overflow:hidden;
      position:relative;
      background-color:#f9f9f9;
      height:2.2rem;
      width:1.9rem;
      padding:0;
      text-shadow:1px 1px 1px #fff;
      border:1px solid #ddd;
    }
    .is-form:focus,.input-text:focus {
      outline:none;
    }
    .is-form.minus {
      border-radius:4px 0 0 4px;
    }
    .is-form.plus {
      border-radius:0 4px 4px 0;
    }
    .input-qty {
      background-color:#fff;
      height:2.2rem;
      text-align:center;
      font-size:1rem;
      display:inline-block;
      vertical-align:top;
      margin:0;
      border-top:1px solid #ddd;
      border-bottom:1px solid #ddd;
      border-left:0;
      border-right:0;
      padding:0;
    }
    .input-qty::-webkit-outer-spin-button,.input-qty::-webkit-inner-spin-button {
      -webkit-appearance:none;
      margin:0;
    }
  </style>
@endsection

@section('main')
  <main>
    @php
      
    @endphp

    <div class="mb-40 content">
      <div class="container">
        <div class="col-md-12 row">
          <div class="col-sm-7">
            <img style="width: 100%" src="{{($chitiet[0]->anhdaidien==null)?asset('assets\images\logo\favicon.png'):$chitiet[0]->anhdaidien}}" alt="{{$chitiet[0]->tenmonan}}">
          </div>

          <div class="col-sm-5">
            <h1>{{$chitiet[0]->tenmonan}}</h1>
            <label for="tuychon" class="mt-20">Tùy chọn</label>
            <select id="tuychon">
              @if (isset($listtuychon))
                @foreach ($listtuychon as $key=>$item)
                  <option>{{$item->tentuychon}}</option>
                @endforeach
              @else
                <option>-- Mặc định --</option>
              @endif
            </select>

          <h3 class="mt-20">25.000 VNĐ</h3>
          <div class="buttons_added">
            <input class="minus is-form" type="button" value="-">
            <input aria-label="quantity" class="input-qty" max="100" min="1" name="soluong" type="number" value="1">
            <input class="plus is-form" type="button" value="+">
          </div>
          <button class="btn btn-outline-success btn-block mt-30">Thêm vào giỏ hàng</button>
          </div>
        </div>

        <div class="detail-wrapper">
          <h2 class="title-category">Chi tiết món ăn</h2>
          {!!$chitiet[0]->noidung!!}
        </div>
        

        @include('components.list_comments')
      </div>
    </div>
  </main>
@endsection




@section('js')
  <script>
    $('input.input-qty').each(function() {
      var $this = $(this),
        qty = $this.parent().find('.is-form'),
        min = Number($this.attr('min')),
        max = Number($this.attr('max'))
      if (min == 0) {
        var d = 0
      } else d = min
      $(qty).on('click', function() {
        if ($(this).hasClass('minus')) {
          if (d > min) d += -1
        } else if ($(this).hasClass('plus')) {
          var x = Number($this.val()) + 1
          if (x <= max) d += 1
        }
        $this.attr('value', d).val(d)
      })
    })
  </script>
@endsection