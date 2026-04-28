
@extends("layouts/master")

@section("titolo")
ComicsPage
@endsection

@php
$comics = config('comics');
@endphp

@section('comicscontent')

<div class="container my-5">
<div class="row">

@foreach ($comics as $comic)
<div class="col mt-4 ">
<x-card>
<x-slot:image>{{ $comic[ "thumb"]}}</x-slot:title>
<x-slot:title>{{ $comic["title"]}}</x-slot:title>
<x-slot:saledate>{{ $comic["sale_date"]}}</x-slot:saledate>
<x-slot:price>{{ $comic["price"]}}</x-slot:price>
</x-card>
</div>

@endforeach
</div>
</div>
@endsection

