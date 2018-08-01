<table border="1">
	<thead>
		<tr>
			<td>First Name </td>
			<td>Last Name </td>
			<td>FB Profile </td>
			<td>Contact Number </td>
		</tr>
	</thead>
	<tbody>
		@foreach($crushes as $crush)
		<tr>
			<td> {{ $crush->first_name}} </td>
			<td> {{ $crush->last_name}} </td>
			<td> <a href="https://www.facebook.com/joChan07">{{ $crush->fb_profile_link}} </a> </td> 
			<td> {{ $crush->contact_number}} </td>
		</tr>
		@endforeach
	</tbody>
</table>