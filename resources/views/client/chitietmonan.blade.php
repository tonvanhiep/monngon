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
      width: 100%;
      border-radius: 5px;
    }
    #tuychon:focus {
      outline: none;
      /* border-radius: 5px 5px 0px 0px; */
    }

    #tuychon option {
      height: 35px;
      border-radius: 0px;
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

    .item > h2{
      display: inline;
    }
    .item {
      margin-top: 30px;
    }
    .item > p {
      display: inline;
      margin-right: 30px;
      vertical-align: bottom;
    }

    #inp-sl{
      width: 50px;
    }
  </style>
@endsection

@section('main')
  <div class="alert alert-success text-center" id="alert-cart-sucess" style="display: none;"><strong>Đã thêm vào giỏ hàng thành công!!!</strong></div>

  <main>
    @php
      
    @endphp

    <div class="mb-40 content">
      <div class="container">
        <div class="col-md-12 row">
          <div class="col-sm-7">
            <img style="width: 100%" id="anh-mon-an" src="{{($chitiet[0]->anhdaidien==null)?asset('assets\images\logo\favicon.png'):$chitiet[0]->anhdaidien}}" alt="{{$chitiet[0]->tenmonan}}">
          </div>

          <div class="col-sm-5">
            <span id="id-monan" style="display: none;">{{$chitiet[0]->id}}</span>
            <h1 id="ten-mon-an">{{$chitiet[0]->tenmonan}}</h1>

            <div class="item">
              <p for="tuychon">Tùy chọn</p>
              <select id="tuychon">
                @if (isset($listtuychon) && count($listtuychon) > 0)
                  @php
                      $i = 1;
                  @endphp
                  @foreach ($listtuychon as $key=>$item)
                    <option value="{{$item->dongia + $item->id}}">{{$item->tentuychon}}</option>
                  @endforeach
                @else
                  <option value="-1">-- Không có tùy chọn nào --</option>
                @endif
              </select>
            </div>

            <div class="item giaban">
              <p>Giá bán</p>
              <h2 id="h-gb" onload="khoitao()">0 VNĐ</h2>
            </div>

            <div class="item soluong">
              <p>Số lượng</p>
              <div class="buttons_added">
                <input id="inp-gm" class="minus is-form" type="button" value="-">
                <input id="inp-sl" aria-label="quantity" class="input-qty" max="100" min="1" name="soluong" type="number" value="1" disabled>
                <input id="inp-tg" class="plus is-form" type="button" value="+">
              </div>
            </div>

            <button id="btn-tvgh" class="btn btn-outline-success btn-block item">Thêm vào giỏ hàng</button>
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

    let tb_tvgh_tc = document.getElementById('alert-cart-sucess');
    let tong_mn = document.getElementById('total-items');
    let sp_anh = document.getElementById('anh-mon-an').src;
    let sp_ten = document.getElementById('ten-mon-an').textContent;
    let btn_tvgh = document.getElementById('btn-tvgh');
    let inp_giam = document.getElementById('inp-gm');
    let inp_soluong = document.getElementById('inp-sl');
    let inp_tang = document.getElementById('inp-tg');
    let h_giaban = document.getElementById('h-gb');
    let tuychon = document.getElementById('tuychon');
    let sp_id = document.getElementById('id-monan').textContent;
    let sp_gia = 0, sp_tc = -1, ten_tc = '';
    let arr_giohang = new Array();


    function hienthigiasp() {
      let sl = inp_soluong.value;
      let gia = sp_gia * sl;
      gia = themdauphay(gia);
      h_giaban.innerHTML = gia + ' VNĐ';
    }

    function hienthislgiohang() {
      if(arr_giohang.length == 0) {
        tong_mn.setAttribute('style', 'display:none;');
      }
      else {
        tong_mn.setAttribute('style', 'display:block;');
        tong_mn.innerHTML = arr_giohang.length;
      }
    }

    function ktragiohangtontai(arr) {
      for (let index = 0; index < arr_giohang.length; index++) {
        if(arr[0] == arr_giohang[index][0] && arr[3] == arr_giohang[index][3]) {
          return index;
        }
      }
      return -1;
    }

    inp_tang.onclick = function() {
      hienthigiasp();
    }
    inp_giam.onclick = function() {
      hienthigiasp();
    }
    tuychon.onchange = function() {
      var value = tuychon.value;
      sp_gia = value - (value % 100);
      sp_tc = (value % 100);
      ten_tc = tuychon.options[tuychon.selectedIndex].text;
      hienthigiasp();
    }

    btn_tvgh.onclick = function() {
      let add_sp = new Array(sp_id, sp_anh, sp_ten, sp_tc, ten_tc, inp_soluong.value, sp_gia, parseInt(inp_soluong.value) * parseInt(sp_gia));
      let i = ktragiohangtontai(add_sp);
      if(i != -1) {
        arr_giohang[i][5] = parseInt(arr_giohang[i][5]) + parseInt(add_sp[5]);
        arr_giohang[i][6] = add_sp[6];
        arr_giohang[i][7] = parseInt(arr_giohang[i][5]) * parseInt(arr_giohang[i][6]);
      }
      else arr_giohang.push(add_sp);

      tb_tvgh_tc.setAttribute('style', 'display:block;');
      setTimeout(tatthongbaotvghtc, 1500);
      
      hienthislgiohang();
      localStorage.setItem('giohang', JSON.stringify(arr_giohang));
    }
    function tatthongbaotvghtc() {
      tb_tvgh_tc.setAttribute('style', 'display:none;');
    }

    
    window.onload = function khoitao() {
      var value = tuychon.value;
      sp_gia = value - (value % 100);
      sp_tc = (value==-1)?-1:(value % 100);
      ten_tc = tuychon.options[tuychon.selectedIndex].text;
      if(sp_tc == -1) {
        btn_tvgh.setAttribute('disabled', '');
      }
      hienthigiasp();
      if(localStorage.giohang == null) {
        localStorage.setItem('giohang', JSON.stringify(arr_giohang));
      }
      else arr_giohang = JSON.parse(localStorage.getItem('giohang'));
      hienthislgiohang();
    }
  </script>
@endsection