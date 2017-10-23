@extends('layouts.app')

@section('title')
<h3> Mensajes del usuario: </h3>
@endsection

@section('content')
	<div class="row">
		<div class="col-12">
			<h3 align="center">
			Mensajes de {{ $user->name }}
			</h3>
		</div>		
	</div>
	<br>
	<div class="row">
	@if(isset($user))		
		 @forelse($user->messages as $message)
	    <div class="col-6">
	        @include('messages.message')
	    </div>
	    @empty
	        <p> No hay mensaje destacados </p>
	    @endforelse
	@else
		<p>
			Este usuario no existe. 
		</p>
	@endif
	</div>
@endsection
-