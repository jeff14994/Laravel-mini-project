<!-- Use this tag to import Header component -->
@if($user == 'jeff1')
<h3>Hi, {{$user}}</h3>
@elseif($user == 'jeff')
<h3>Hi, master {{$user}}</h3>
@else
<h3>Unknown User</h3>
@endif 