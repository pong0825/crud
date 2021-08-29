@extends('students.layout')

@section('content')
<section class="sec sec-create">
    <div class="container con con-create">
        <div class="pull-left">
            <h2 style="text-align: center;">Create Student Information</h2>
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

<form action="{{ route('students.store') }}" method="POST">
    @csrf

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="name" autocomplete="off">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course:</strong>
                <input type="text" name="course" class="form-control" placeholder="course" autocomplete="off">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="email" autocomplete="off">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contact Number:</strong>
                <input type="text" name="phone" class="form-control" placeholder="Contact Number" autocomplete="off">
            </div>
        </div>

        <div class="box">
                <a class="btn-return" href="{{ route('students.index') }}">Return</a>
                <button type="submit" class="btn-submit">Submit</button>
        </div>
    </div>
</form>
</div>
</section>
@endsection