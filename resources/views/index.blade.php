@extends('master')
@section('content')
@if ($message = Session::get('message'))
	  <div class="alert alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>	
		  <strong>{{ $message }}</strong>
	  </div>
	@endif
<div class="accordion" id="accordionExample">

    <div class="card">
      <div class="card-header" style="background-color: white !important" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <i class="fa fa-plus" ></i> Tambah Data Blog
          </button>
        </h2>
      </div>
      <div id="collapseTwo" style="background-color: white !important" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <form action="/blog" method="post" enctype="multipart/form-data" >
            @csrf
 
        <div class="card-body">
            <div class="form-group">
                <label for="judul_blog">Judul Blog</label>
                <input type="text" class="form-control" id="judul_blog" name="judul_blog" required >
            </div>

            <div class="form-group">
                <label for="isi_blog">Isi Blog</label>
                <textarea name="isi_blog" id="isi_blog" required></textarea>
            </div>

            <div class="form-group">
                <label for="kategori">kategori</label>
          
                <select class="form-control" id="kategori" name="kategori">
                        <option value="Umum">Umum</option>
                </select>
            </div>

            <div class="form-group">
                <label for="file">Img Blog</label>
                <input type="file" class="form-control" id="file" name="file" required >
            </div>

            <button class="btn btn-primary" type="submit" >Simpan</button>
        </form>
        </div>
      </div>
    </div>

  </div>

<div class="row">
    @foreach ($data as $item)
    <div class="col-md-4">
        <div class="card card-post card-round">
            <img class="card-img-top" src="{{ $item['img'] }}" alt="Card image cap">
            <div class="card-body">
                <div class="d-flex">
                    <div class="info-post ml-2">
                        <p class="username">Status : {{ ($item['status'] == "1") ? "Aktif" : "Tidak Aktif" }}</p>
       
                    </div>
                </div>
                <div class="separator-solid"></div>
                <p class="card-category text-info mb-1"><a href="#">{{ $item['kategori'] }}</a></p>
                <h3 class="card-title pb-2">
                    <a href="detail_acara.html">
                        {{ $item['judul_blog'] }}
                    </a>


                </h3>
                <p class="card-text">{!! substr($item['isi_blog'],0,200) !!}...</p>
                <a href="/blog/{{ $item['id'] }}" class="btn btn-primary btn-rounded btn-sm">Read More</a>
                <a href="/blog/{{ $item['id'] }}/edit" class="btn btn-warning btn-rounded btn-sm">Edit</a>
                <a href="/blogHapus/{{ $item['id'] }}" class="btn btn-danger btn-rounded btn-sm ml-5">Hapus</a>
            </div>
        </div>
    </div> 
    @endforeach

</div>
@endsection

@section('js')
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'isi_blog' );
    </script>
@endsection