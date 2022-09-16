@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <h1>スレッドを投稿</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            <ul>
        <div>
        @endif
        <div class="col-md-6">
            <form action="{{url('/threads/check)}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">議題</lavel>
                    <input type="text" name="title" class="form-control" placeholder="議題を入力して下さい">
                </div>
                <div class="form-group">
                    <label for= "left">左派</label>
                    <input type="text" name="left" placeholder="左派を記入して下さい"></textarea>
                </div>
                <label for= "right">右派</label>
                    <input type="text" name="right" placeholder="右派を記入して下さい"></textarea>
                </div>
                <!-- <div class="form-group">
                    <input class="form-control" name="published_at" type="date">
                </div> -->
                <div class="form-group">
                    <input type="submit" value="議論開始!!" class="form-control btn-info">
                </div>
            </form>
        </div>
    </div>    
</div>
@endsection