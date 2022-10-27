@extends('layouts')
@section('title','Add New License - SRS')
@section('content')
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Add New License
        <a href="{{ route('license.index')}}" class="float-end btn btn-sm btn-success">View All Licenses</a>
    </div>
    <div class="card-body">
    @if($errors->any())
            @foreach($errors->all() as $error)
                <p class="text-danger">{{$error}}</p>
            @endforeach
        @endif
        
    @if(Session::has('msg'))
        <p class="text-success">{{session('msg')}}</p>
        @endif
            @csrf
            <table class="table table-bordered">
            {{ Form::open(['route'=>'license.save']) }} 
                <tr>
                    <th>License Name</th>
                    <th>{{ Form::text('name',null, ['class'=>'form-control']) }}</th>
                </tr>
                <tr>
                    <th colspan="2"><input type="submit" value="Add License" class="btn btn-info btn-sm"></th>
                </tr>
            {{ Form::close() }}
            </table>
    </div>
</div> 
@endsection