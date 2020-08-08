@extends('layouts.master')

@section('content')
    <div class= "mt-3 ml-3">
        <h4>{{$question->judul}}</h4>
        <p>{{$question->isi}}</p>
    </div>
@endsection