@extends('layout')
@props(['bunny'])

@section('content')
<div class="align-content-center">
    <h1>Edit bunny: {{$bunny->name}}</h1>
</div>
<form action="/bunnies/{{$bunny->id}}/edit" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Imię</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$bunny->name}}">
    </div>
    <div class="form-group">
        <label for="color">Kolor</label>
        <input type="text" class="form-control" id="color" name="color" value="{{$bunny->color}}">
    </div>
    <div class="form-group">
        <label for="age">Wiek</label>
        <input type="number" class="form-control" id="age" name="age" value="{{$bunny->age}}">
    </div>
    <div class="form-group">
        <label for="image">Obraz</label>
        <input type="file" class="form-control" id="image" name="image" placeholder="Image path">
    
        <img src="{{$bunny->image ? asset ('storage/' . $bunny->image) : ''}}" class="card-img-top" alt="{{$bunny->image ? asset ('storage/' . $bunny->image) : ''}}"/>
        
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Edytuj</button>
    <a href="/" class="btn btn-primary">Anuluj</a>
</form>
@endsection