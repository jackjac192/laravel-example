<img class="img-thumbnail" src="{{$message->image}}">
<p class="card-text">
	<div class="text-muted"> 
		Escrito por 
		<a href="/{{ $message->user->username }}">
			<span>{{ $message->user->name }}</span>	
		</a>		
	</div>
	{{$message->content}}
	<a href="/messages/{{ $message->id}}">
		Leer más
	</a>
</p>  