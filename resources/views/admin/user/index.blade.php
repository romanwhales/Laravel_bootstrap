<h1>Registered Users</h1>
<ul>
	@forelse ($users as $user)
		<li>{{$user->name}} {{$user->email}}</li>
	@empty
	<li>No registered User</li>
	@endforelse
</ul>