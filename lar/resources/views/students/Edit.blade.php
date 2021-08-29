@extends('students.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="pull-left">
            <h2>Edit</h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.index') }}">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())

    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>
            @foreach($errors->all() as $error)

            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('students.update',$student->id) }}" method="POST">
    @csrf
    @method('PUT')


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>StudentName:</strong>
                <input type="text" name="name" value="{{ $student->name }}" class="form-control" placeholder="name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course:</strong>
                <input type="text" name="course" value="{{ $student->course }}" class="form-control" placeholder="course">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" value="{{ $student->email}}" class="form-control" placeholder="email">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contact Number:</strong>
                <input type="text" name="phone" value="{{ $student->phone }}" class="form-control" placeholder="phone">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </div>
</form>

@endsection