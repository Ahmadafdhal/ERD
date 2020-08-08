@extends ('layouts.master')

@section ('content')
<div class="ml-3 mt-3">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Pertanyaan {{ $question->id}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action='/pertanyaan/{{ $question->id}}' method="POST">
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{old('judul', $question->judul)}}" placeholder="Masukkan Judul">
                  </div>
                  @error('judul')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="isi">isi</label>
                    <input type="text" class="form-control" id="isi" name="isi" value="{{old('isi', $question->isi)}}" placeholder="Masukkan isi">
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