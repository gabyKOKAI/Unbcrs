@extends('_master')

@section ('content')
	<link rel="stylesheet" href="{{URL::asset('/css/blog.css')}}" type="text/css"> 
	
	@if ( !$posts->count() )
		No hay ningun post, ingresa y escribe un post
	@else
		<div class="divContainer">
			<div class="divBlogIzq">
				<div class="espaciosBlog">
				</div>
				<div class="logoBlogIzq">
				</div>
				<div class="espaciosBlog">
				</div>
				<div class="whatsBlogIzq">
				</div>
				<div class="espaciosBlog">
				</div>
				<a href="mailto:susana@unibecarios.mx?Subject=Contacto Página Web">
					<div class="mailBlogIzq">					
					</div>
				</a>
				<div class="espaciosBlog">
				</div>
				<div class="telefonoBlogIzq">
				</div>
				<div class="espaciosBlog">
				</div>
			</div>
			<div class="divBlogDer">
  				<div class="list-group">
				@foreach( $posts as $post )
					<div class="list-group-item">
							<h3 class="tituloBlog"><a class="tituloBlog" href="{{ url('/'.$post->slug) }}">{{ $post->title }}</a>
								@if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin()))
									@if($post->active == '1')
										<button class="btn" style="float: right"><a href="{{ url('edit/'.$post->slug)}}">Edit Post</a></button>
									@else
										<button class="btn" style="float: right"><a href="{{ url('edit/'.$post->slug)}}">Edit Draft</a></button>
									@endif
								@endif
							</h3>
							<!--p>{{ $post->created_at->format('M d,Y \a\t h:i a') }} por <a href="{{ url('/user/'.$post->author_id)}}">{{ $post->author->name }}</a></p-->
							<hr>
							<article>
								{!! str_limit($post->body, $limit = 500, $end = '....... <a href='.url("/".$post->slug).'>Leer Mas ></a>') !!}
							</article>
					</div>
					<!--div class="list-group-space">
					</div-->
				@endforeach
			</div>
			</div>
  			{!! $posts->render() !!}
		</div>
	@endif	
	
@stop

