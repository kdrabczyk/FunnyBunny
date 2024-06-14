{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <img src="{{asset('images/logo.jpg')}}" class="rounded-5" alt="logo" width="50" height="50">
        <a class="navbar-brand" href="#">Funny Bunny</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">Strona główna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">O nas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('bunnies')}}">Nasze króliczki</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Kontakt</a>
                </li>
            </ul>
                <ul class="navbar-nav">
                    @auth
                    <li class="nav-item">
                        <span>Witaj {{auth()->user()->name}}</span>
                    </li>
                    <li class="nav-item">
                        <a href="/bunnies/manage" class="nav-link">Zarządzaj swoimi królikami</a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link">Wyloguj się</button>
                        </form>
                    </li >
                    @else
                    <li class="nav-item">
                        <a href="/register" class="nav-link">Zarejestruj się</a>
                    </li>
    
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Zaloguj się</a>
                    </li>
                    @endauth
                </ul>
            
            
        </div>
        
    </div>
</nav> --}}
<div class="container justify-content-center">
    
    <div class="row justify-content-center">
        
        <div class="col-4 text-center">
            @auth
            <h2>Witaj {{auth()->user()->name}}
            </h2>
            @endauth
        </div>
        
    </div>        
    
<div class="d-flex row">
    <nav class="row navbar navbar-expand-lg navbar-light bg-light rounded border border-secondary">
        <div class="container-fluid">
            <img src="{{asset('images/logo.jpg')}}" class="rounded-5" alt="logo" width="50" height="50">
            <a class="navbar-brand" href="#">Funny Bunny</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Strona główna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">O nas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('bunnies')}}">Nasze króliczki</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a href="/bunnies/manage" class="nav-link">Zarządzaj swoimi królikami</a>
                    </li>
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Kontakt</a>
                    </li>
                </ul>

                    <ul class="navbar-nav">
                        @auth                    
                        <li class="nav-item">
                            <form action="/logout" method="POST" class="inline">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link">Wyloguj się</button>
                            </form>
                        </li >
                        @else
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Zarejestruj się</a>
                        </li>
        
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Zaloguj się</a>
                        </li>
                        @endauth
                    </ul>
                
                
            </div>
            
        </div>
    </nav>
</div>
</div>