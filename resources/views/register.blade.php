@extends('index')
@section('content')

<div class="container">
    <div class="row">
        @if(session()->has('success'));
        <div class="alert alert-dark" role="alert">
            <strong>{{ session()->get('success')}}</strong>
        </div>
        @endif
        <div class="col-4">

        </div>
        <div class="col-5">
            <form action="{{route('do_register')}}" method="post">
                @csrf
                <label>name</label>
                <input type="text" name="name" class="form-control">
                <label>email</label>
                <input type="email" name="email" class="form-control">

                <label>password</label>
                <input type="text" name="password" class="form-control">

                <label>number</label>
                <input type="text" name="number" class="form-control">

                <button type="submit" name="submit" class="btn btn-success">submit</button>
            </form>
        </div>
    </div>
</div>
@endsection