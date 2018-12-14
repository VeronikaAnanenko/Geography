<ul>
@foreach($cities as $one)
<li>
	<a href="{{asset('city/'.$one->id)}}">
	{{$one->name}}
	</a>
	</li>
@endforeach
</ul>