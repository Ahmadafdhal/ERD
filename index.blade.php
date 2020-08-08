@extends('layouts.master')

@section('content')
    <div class='mt=4 ml=3'>
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
              @endif
              <a class="btn btn-info mb-3" href="/pertanyaan/create"> Create New Question </a>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Judul</th>
                      <th>isi</th>
                      <th style="width: 40px">action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($questions as $key => $question)
                    <tr>
                        <td> {{ $key + 1 }} </td>
                        <td> {{ $question->judul }} </td>
                        <td> {{ $question->isi }} </td>
                        <td style="display: flex;">
                            <a href="/pertanyaan/{{$question->id}}" class="btn btn-primary ">Show</a>
                            <a href="/pertanyaan/{{$question->id}}/edit" class="btn btn-default ">Edit</a>
                            <form action="/pertanyaan/{{$question->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class='btn btn-danger'></form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" align="center"> No Question </td>
                    </tr>
                    @endforelse

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>
    </div>

@endsection