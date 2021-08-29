@extends('students.layout')

@section('content')
<section class="sec">
    <div class="container con">
        <div class="pull-left">
            <h2 style="text-align: center;">View Student Information</h2>
        </div>


<form action="{{ route('students.update',$student->id) }}" method="POST">
    @csrf
    @method('PUT')


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student Name:</strong>
                <input type="text" name="name" value="{{ $student->name }}" class="form-control" placeholder="name" readonly>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course:</strong>
                <input type="text" name="course" value="{{ $student->course }}" class="form-control" placeholder="course" readonly>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" value="{{ $student->email}}" class="form-control" placeholder="email" readonly>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contact Number:</strong>
                <input type="text" name="phone" value="{{ $student->phone }}" class="form-control" placeholder="phone" readonly>
            </div>
        </div>

        <div class="box">
            <a class="btn-return btn-rtn" href="{{ route('students.index') }}">Return</a>
        </div>
        

</form>
</div>
</section>
@endsection