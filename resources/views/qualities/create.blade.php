<form action="{{route('crushes.id.qualities.store', array('id'=>$crush->id))}}" method="POST"> {{ csrf_field() }}

<label> Quality </label>
<br> 
<input type="text" name="quality_name" /> 
<br>

<button type ="submit"> Add Quality </a>
</button>

</form>