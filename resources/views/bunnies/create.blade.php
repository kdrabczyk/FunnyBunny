@extends('layout')
@props(['bunny'])

@section('content')
<form action="/bunnies" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Imię</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Wprowadź imię">
    </div>
    <div class="form-group">
        <label for="color">Kolor</label>
        <input type="text" class="form-control" id="color" name="color" placeholder="Wprowadź kolor">
    </div>
    <div class="form-group">
        <label for="age">Wiek</label>
        <input type="number" class="form-control" id="age" name="age" placeholder="Wprowadź wiek">
    </div>
    <div class="form-group">
        <label for="image">Obraz</label>
        <input type="file" class="form-control" id="image" name="image" placeholder="Ścieżka do obrazu">
    
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Wyślij</button>
    <a href="#" class="btn btn-primary">Anuluj</a>
</form>
@endsection