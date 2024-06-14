@props(['bunny'])

<div class="card m-2" style="width: 18rem;">
    <img src="{{$bunny->image ? asset ('storage/' . $bunny->image) : ''}}" class="card-img-top" alt="{{$bunny->image ? asset ('storage/' . $bunny->image) : ''}}"/>
        <div class="card-body">
            <h5 class="card-title">{{$bunny['name']}}</h5>
            <p class="card-text">Jestem królikem o kolorze {{$bunny['color']}}. Mam lat: {{$bunny['age']}}.</p>
            <a href="/bunnies/{{$bunny->id}}" class="btn btn-primary">Skocz do mnie!</a>
        </div>
</div>