@extends('master')
@section('content')

<form action="/blog/{{ $data['id'] }}" method="post" enctype="multipart/form-data" >
    @method("PUT")
    @csrf

<div class="card-body">
    <div class="form-group">
        <label for="judul_blog">Judul Blog</label>
        <input type="text" class="form-control" id="judul_blog" name="judul_blog" value="{{ $data['judul_blog'] }}"  required >
    </div>

    <div class="form-group">
        <label for="isi_blog">Isi Blog</label>
        <textarea name="isi_blog" id="isi_blog" required>
            {!! $data['isi_blog'] !!}
        </textarea>
    </div>

    <div class="form-group">
        <label for="kategori">kategori</label>
  
        <select class="form-control" id="kategori" name="kategori">
                <option {{ ($data['kategori'] == "Umum")? "selected" : "" }} value="Umum">Umum</option>
        </select>
    </div>

    <div class="form-group">
        <label for="file">Img Blog</label>
        <input type="file" class="form-control" id="file" name="file"  >
        <a href="{{ $data['img'] }}" target="_blank" >
        <i class="fa fa-eye" ></i>
        Lihat
        </a>
    </div>

    <button class="btn btn-primary" type="submit" >Simpan</button>
</form>
@endsection

@section('js')
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'isi_blog' );
    </script>
@endsection