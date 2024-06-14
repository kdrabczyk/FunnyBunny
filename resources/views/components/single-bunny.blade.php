@extends('layout')
@props(['bunny'])

@section('content')
<div class="container" style="width: 18rem;">

    <div class="container">
        <div class="row">
           <div class="row">
            
            <img src="{{$bunny->image ? asset ('storage/' . $bunny->image) : ''}}" class="card-img-top" alt="{{$bunny->image ? asset ('storage/' . $bunny->image) : ''}}"/>
        
             <div class="card-body">
            <h5>{{$bunny['name']}}</h5>
            <p>Jestem królikiem a mój kolor to {{$bunny['color']}}. Mój wiek to:  {{$bunny['age']}} lata.</p>
            @if(auth()->check() && auth()->user()->id == $bunny->user_id)
            <a href="/bunnies/{{$bunny->id}}/edit" class="btn btn-primary">Edytuj</a>
            @endif
            @if(auth()->check() && auth()->user()->id == $bunny->user_id)
            <form action="/bunnies/{{$bunny->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Usuń</button>
            </form>
            @endif
            </div>
            </div>

        </div>
    </div>
</div>
@endsection