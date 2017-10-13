@extends('layouts.app')

@section('content')
<div class="jumbotrop text-center"> 
    <h1>Laravel</h1>
    <nav>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>            
        </ul>
    </nav>
</div>
<div class="row">
    <form action="/messages/create" method="post">
        <div class="form-group @if($errors->has('message')) has-danger @endif">
            {{ csrf_field()}}
            <input type="text" name="message" class="form-control" placeholder="Qué estás pensando?">  
            @if($errors->has('message'))          
                @foreach($errors->get('message') as $error)
                <div>
                    <div class="form-control-feedback">{{ $error}}</div>
                </div>
                @endforeach
            @endif
        </div>
    </form>
</div>
<div class="row">
    @forelse($messages as $message)
    <div class="col-6">
        <img class="img-thumbnail" src="{{$message->image}}">
        <p class="card-text">
            {{$message->content}}
            <a href="/messages/{{ $message->id}}">
                Leer más
            </a>
        </p>
    </div>
    @empty
        <p> No hay mensaje destacados </p>
    @endforelse
    
</div>
@endsection