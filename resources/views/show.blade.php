@extends('master')
@section('content')

<div class="card">
    <div class="card-body p-3">
        <img src="{{ $data['img'] }}" alt="" style="width: 100% !important">

        <h1 class="text-center mt-3" >{{ $data['judul_blog'] }}</h1>

        <div class="text-justify" >
            {!! $data['isi_blog'] !!}
        </div>

        <a href="/blog" class="mt-4 btn btn-primary" >  Kembali</a>

    </div>
</div>
@endsection