@props(['name'])

<div class="row">
    <div class="col d-flex justify-content-center">
        <img  src="{{ asset('images/funnybunny.jpg') }}" class="rounded-5" alt="Funny Bunny" class="img-fluid">
    
    </div>
</div>
<div class="row">
<h3 class="text-center">Króliczek, {{$name}} wita Cię!</h3>
</div>