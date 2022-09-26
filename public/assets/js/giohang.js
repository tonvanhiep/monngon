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


let inp_soluong = document.getElementsByClassName('inp-sl');
let gia_sp = document.getElementsByClassName('gia-sp');
let tongtien = document.getElementById('tong-tien');
let arr_giohang = new Array();

let ht_gh = document.getElementById('ht-gio-hang');




function hienthigiohang() {
    if(localStorage.giohang == null) {
        localStorage.setItem('giohang', JSON.stringify(arr_giohang));
    }
    else arr_giohang = JSON.parse(localStorage.getItem('giohang'));
    //[anh_sp, ten_sp, opt_sp, s_luong, d_gia]
    let item_gh = '';
    for(let i = 0; i < arr_giohang.length; i++) {
        item_gh += '<tr>' +
            '<td data-th="Image">'  +
                '<div class="row">'  +
                    '<div class="col-sm-2 hidden-xs">' +
                        '<img src="'+ arr_giohang[i][1] +'" alt="'+ arr_giohang[i][2] +'" class="img-responsive" width="100">' +
                    '</div>' +
                '</div>'  +
            '</td>' +
            '<td data-th="Info">' +
                '<div class="col-sm-10">' +
                    '<h4 class="nomargin">'+ arr_giohang[i][2] +'</h4>' +
                    '<p>'+ arr_giohang[i][4] +'</p>' +
                '</div>' +
            '</td>' +
            '<td data-th="Categorize">' +
                '<select>' +
                    '<option value="0">Danh sách 01</option>' +
                    '<option value="0">Danh sách 02</option>' +
                    '<option value="0">Danh sách 03</option>' +
                '</select>' +
            '</td> ' +
            '<td data-th="Amount">' +
                '<input onclick="giamsl('+ i +')" class="inp-gm minus is-form" type="button" value="-">' +
                '<input  aria-label="quantity" class="inp-sl input-qty" max="100" min="1" name="soluong" type="number" value="'+ arr_giohang[i][5] +'" disabled>' +
                '<input onclick="tangsl('+ i +')" class="inp-tg plus is-form" type="button" value="+">' +
            '</td> ' +
            '<td data-th="Subtotal" class="gia-sp text-center">'+ themdauphay(arr_giohang[i][7]) + '</td> ' +
            '<td class="actions" data-th="Delete">' +
                '<button class="btn btn-danger btn-sm" onclick="xoasanpham(this)">' +
                    '<i class="fa fa-trash-o"></i>' +
            '</button>' +
            '</td> ' +
        '</tr>'
    }
    ht_gh.innerHTML = item_gh;
    hienthitongtien();
}


function hienthitongtien() {
    let tong = 0;
    for (let index = 0; index < gia_sp.length; index++) {
        tong += parseInt(gia_sp[index].textContent);
    }
    tong *= 1000;
    tongtien.innerHTML = themdauphay(tong);
}


function ktragiohangtontai(arr) {
    for (let index = 0; index < arr_giohang.length; index++) {
        if(arr[0] == arr_giohang[index][0] && arr[3] == arr_giohang[index][3]) {
            return index;
        }
    }
    return -1;
}

function luugiohang() {
    localStorage.setItem('giohang', JSON.stringify(arr_giohang));
}

function tatthongbaotvghtc() {
    tb_tvgh_tc.setAttribute('style', 'display:none;');
}

function tangsl(i) {
    arr_giohang[i][5]++;
    inp_soluong[i].value = arr_giohang[i][5];
    gia_sp[i].innerHTML = themdauphay(parseInt(inp_soluong[i].value) * parseInt(arr_giohang[i][6]));
    hienthitongtien();
    luugiohang();
}
function giamsl(i) {
    if(arr_giohang[i][5] - 1 > 0) {
        arr_giohang[i][5]--;
        inp_soluong[i].value = arr_giohang[i][5];
        gia_sp[i].innerHTML = themdauphay(parseInt(inp_soluong[i].value) * parseInt(arr_giohang[i][6]));
        hienthitongtien();
        luugiohang();
    }
}

function xoasanpham(x) {
    let tr = x.parentElement.parentElement;
    let sp_xoa_ten = tr.children[1].children[0].children[0].innerHTML;
    let sp_xoa_tc = tr.children[2].children[0].value;
    let sp_xoa_sl = tr.children[3].children[1].value;
    tr.remove();
    let index = -1;
    for (let i = 0; i < arr_giohang.length; i++) {
        if(sp_xoa_ten == arr_giohang[i][2] && sp_xoa_sl == arr_giohang[i][5]) {
            index = i;
            const arr_giohang1 = arr_giohang.slice(0, index);
            const arr_giohang2 = arr_giohang.slice(index + 1, arr_giohang.length);
            arr_giohang = arr_giohang1.concat(arr_giohang2);
            luugiohang();
            hienthislgiohang();
            hienthitongtien();
        }
    }
    // hienthislgiohang();
}


window.onload = function khoitao() {
    if(localStorage.giohang == null) {
        localStorage.setItem('giohang', JSON.stringify(arr_giohang));
    }
    else arr_giohang = JSON.parse(localStorage.getItem('giohang'));
    hienthislgiohang();
    hienthigiohang();
}

