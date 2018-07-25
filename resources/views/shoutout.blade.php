<h1> Shoutout to: {{$text}} </h1>


@if($text=="gwapo")
  <h1>Gwapo</h1>

@elseif($text=="gwapa")
  <h1>Gwapa</h1>
@endif


	<table border="1">
		<tr>
			<th> No.</th>
			<th> Color</th>
			<th> Description</th>
		</tr>
		@foreach($colors as $color => $description)
		<tr>
			<td>{{ $loop -> iteration}}</td>
			<td>{{$color}}  </td>
			<td>{{$description}}</td>
		</tr>
		@endforeach
	
	</table>

