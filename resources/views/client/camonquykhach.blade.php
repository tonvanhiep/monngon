@extends('client.layout-client')

@section('title')
    Đặt hàng thành công
@endsection


@section('main')
    <main>
        @php
            $titlebanner = 'Đặt hàng thành công';
            $subtitlebanner = "Đơn hàng $id_dh của bạn đã được đặt thành công. Chúng tôi sẽ liên hệ để xác nhận đơn hàng trong thời gian sớm nhất. Cảm ơn bạn đã tin tưởng và đặt hàng của Món ngon.<br/><br/><br/>Chúc quý khách ngon miệng ạ!!!";
        @endphp
        @include('components.banner')
    </main>
@endsection

@section('js')
    <script>
        let arr_giohang = new Array();
        localStorage.setItem('giohang', JSON.stringify(arr_giohang))

        hienthislgiohang();
    </script>
@endsection