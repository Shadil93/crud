@extends('index')
@section('content')
<div class="container">
    <div class="row">
    @if(session()->has('success'));
        <div class="alert alert-dark" role="alert">
            <strong>{{ session()->get('success')}}</strong>
        </div>
        @endif
        <div class="col-3"></div>
        <div class="col-4">
            <form action="{{route('update',$data->id)}}" method="post">
                @csrf
            <label>name</label>
            <input type="name" name="name" class="form-control" value="{{$data->name}}">
            <label>email</label>
            <input type="text" name="email" class="form-control" value="{{$data->email}}">
            <label >passwrod</label>
            <input type="text" name="password" class="form-control" value="{{$data->password}}">
            <label>number</label>
            <input type="number" name="number" class="form-control" value="{{$data->number}}">
            <button type="submit" name="submit" class="btn btn-danger">submit</button>
            </form>
        </div>
    </div>
</div>

@endsection