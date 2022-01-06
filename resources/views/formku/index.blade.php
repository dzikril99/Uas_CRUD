@extends('layouts.app')
@section('title', 'Formku')
@section('content')
<div class="wrapper">
    <div class="wrapper">
        <h1 style="text-align: center;">Formku</h1>
    </div>
</div>
<form method="POST" action="{{ url('forms') }}">
    @csrf
    <input name="title" type="text" placeholder="Nama"> 
    <input name="body" type="text" placeholder="Nim">
    <button class="btn-blue">Submit</button>
  </form>
@endsection
