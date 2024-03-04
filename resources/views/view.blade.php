@extends('index')
@section('content')
<div class="container">
    <div class="row">
          <div class="col-3">

          </div>
          <div class="col-4">
            <table class="table table-danger">
                <tr>
                    <th>name</th>
                    <th>email</th>
                    <th>password</th>
                    <th>number</th>
                    <th colspan="2">Action</th>
                </tr>
                @foreach($data as $datas)
                <tr>
                    <td>{{$datas->name}}</td>
                    <td>{{$datas->email}}</td>
                    <td>{{$datas->password}}</td>
                    <td>{{$datas->number}}</td>
                   
                       <td><a href="{{route('delete',$datas->id)}}" class="btn btn-danger">delete</a></td>
                       <td><a href="{{route('edit',$datas->id)}}" class="btn btn-success">edit</a></td>
                
                </tr>
                @endforeach
            </table>
          </div>
    </div>
</div>

@endsection