@extends ('layouts.master')

@section ('content')
<div class="ml-3 mt-3">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Membuat Pertanyaan Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action='/pertanyaan' method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul">
                  </div>
                  @error('judul')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="isi">isi</label>
                    <input type="text" class="form-control" id="isi" name="isi" placeholder="isi">
                  </div>
                  @error('isi')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">create</button>
                </div>
              </form>
    </div>
</div>
@endsection