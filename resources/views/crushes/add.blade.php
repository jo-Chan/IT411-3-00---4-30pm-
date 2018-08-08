
@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li> {{ $error }} </li>
			@endforeach
		</ul>
	</div>
@endif

<form action="{{ $action }}" method="POST"> {{ csrf_field() }}
<center>
	<label>Add Quality:</label>
	<input type="text" name="quality" />
	<br/>
	<button type="submit"> {{ $submit_text }} </button>

</form>
