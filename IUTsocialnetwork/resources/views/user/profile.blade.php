@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-defaul">
			<div class="panel-body text-center">
				//<img src="c:\xprojects\IUTsocialnetwork\resources\views\user\menu.png">
				<img src="menu.png">
				<h1>{{$user->name}}</h1>
				<h5>{{$user->email}}</h5>
				<h5>{{$user->dob}} ({{ $user->created_at->age}} years old)</h5>
				<button class="btn bnt-success">Follow</button>
				
			</div>
			
		</div>
		
	</div>
</div>

@endsection