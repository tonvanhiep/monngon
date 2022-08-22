@extends('client.layout-client')

@section('title')
    Tất cả món ăn
@endsection


@section('main')
    <main>
        @php
        @endphp



        @include('components.banner')

        @include('components.list_products')

        @include('components.pagination')
    </main>
@endsection