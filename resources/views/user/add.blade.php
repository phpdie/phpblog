@extends('base')

@section('title', 'Page Title')



@section('sidebar')
    @parent
    <p>我是sidebar新内容，parent调用了原来的内容.</p>
@endsection

@section('content')
	@parent
    <p>This is my body content.我继承了base.blade.php的内容</p>

    <form action="{{ action('UserController@store') }}" method="POST">
	@csrf
		<input type="text" name="username" value='{{ $username }}' />
		<input type="password" name="password" value='{{ $password }}' />
		<input type="submit">
	</form>
@endsection