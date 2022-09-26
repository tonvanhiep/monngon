$(document).ready(function() {
    var swiper = new Swiper('.home-swiper', {
      loop: true,
      pagination: {
        el: '.swiper-pagination',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });

    var reviewSlider = new Swiper('.review-slider', {
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });
});


function themdauphay(number) {
  number = '' + number;
  if (number.length > 3) {
    var mod = number.length % 3;
    var output = (mod > 0 ? (number.substring(0,mod)) : '');
    for (i=0 ; i < Math.floor(number.length / 3); i++) {
    if ((mod == 0) && (i == 0))
      output += number.substring(mod+ 3 * i, mod + 3 * i + 3);
    else
      output+= ',' + number.substring(mod + 3 * i, mod + 3 * i + 3);
    }
    return (output);
  }
  else return number;
}


function xoadauphay(number) {
  number = '' + number;
  if (number.length > 3) {
    var mod = number.length % 3;
    var output = (mod > 0 ? (number.substring(0,mod)) : '');
    for (i=0 ; i < Math.floor(number.length / 3); i++) {
    if ((mod == 0) && (i == 0))
      output += number.substring(mod+ 3 * i, mod + 3 * i + 3);
    else
      output+= ',' + number.substring(mod + 3 * i, mod + 3 * i + 3);
    }
    return (output);
  }
  else return number;
}


function hienthislgiohang() {
  let tong_mn = document.getElementById('total-items');
  let arr_giohang = new Array();
  if(localStorage.giohang != null) {
    arr_giohang = JSON.parse(localStorage.getItem('giohang'));
  }
  if(arr_giohang.length == 0) {
    tong_mn.setAttribute('style', 'display:none;');
  }
  else {
    tong_mn.setAttribute('style', 'display:block;');
    tong_mn.innerHTML = arr_giohang.length;
  }
}





hienthislgiohang();