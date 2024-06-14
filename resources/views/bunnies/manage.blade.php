@extends('layout')
@props(['bunnies'])

@section('content')
@unless ($bunnies->isEmpty())
<div class="d-flex flex-wrap justify-content-center">
@foreach($bunnies as $bunny)
<x-bunny-card-component :bunny="$bunny"/>
@endforeach
</div>
@else
<p>There are no bunnies yet.</p>
@endunless
<div class="text-center p-3" style="background-color: blue);">
    <a href="/bunnies/create"><button type="button" class="btn btn-primary">Dodaj królika</button></a>
</div>
@endsection

