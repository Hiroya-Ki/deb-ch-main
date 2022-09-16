@extends('layout')

@section('content')

<h1>
    スレ
</h1>
<div class="container">
	<div class="row">
	    <!-- <input type="button" class="btn btn-default" value="default"> 
	    <input type="button" class="btn btn-success" value="success"> 
	    <input type="button" class="btn btn-primary" value="primary"> 
	    <input type="button" class="btn btn-info" value="info"> 
	    <input type="button" class="btn btn-warning" value="warning"> 
	    <input type="button" class="btn btn-danger" value="danger"> 
	    <input type="button" class="btn btn-link" value="link">  -->
		<!-- <input type="button" class="btn btn-link" value="スレッドを立てる" href="{{url('/threads/create')}}">  -->
		<button type="button" onclick="location.href='{{ url('/threads/create') }}' ">スレ立てる</button>
	</div>
</div>
@endsection