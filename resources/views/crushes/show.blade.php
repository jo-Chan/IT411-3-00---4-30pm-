
<center>
	<p>First Name: &nbsp;{{ $crush->first_name }} </p>
	<p>Last Name: &nbsp;{{ $crush->last_name }} </p>
	<p>FB Profile Link: &nbsp;{{ $crush->fb_profile_link }} </p>
	<p>Contact Number: &nbsp;{{ $crush->contact_number }} </p>
    <br>
	<label>Qualities:</label>
	<br><br>
	<button type="submit"> <a href="{{ $add }}"> Add Qualities </a> </button>
	<button type="back"> <a href="{{ $back }}"> Back </a> </button>

	<br/>
	

</form>
