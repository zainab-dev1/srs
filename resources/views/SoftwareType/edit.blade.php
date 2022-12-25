@extends('layouts')
@section('title','Update Software Type - SRS')
@section('content')
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Add Software Type
        <a href="{{ route('SoftwareType.index')}}" class="float-end btn btn-sm btn-success">View All Software Types</a>
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
            {{ Form::model($SoftwareTypes,['route'=>['SoftwareType.update',$SoftwareTypes->id]]) }}
                <tr>
                    <th>Software Type :</th>
                    <th>{{ Form::text('name',null, ['class'=>'form-control']) }}</th>
                </tr>
                <tr>
                    <th colspan="2"><input type="submit" value="Save Changes" class="btn btn-info btn-sm"></th>      
                </tr>
            {{ Form::close() }}
            </table>
    </div>
</div> 
@endsection