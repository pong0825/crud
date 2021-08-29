@extends('students.layout')

@section('content')
<div class="container con-in">
    <div class="pull-left">
        <h2 class="crud-title">Student Information System</h2>
    </div>


    <div class="pull-right btn-stud">
        <a class="btn btn-success" href="{{ route('students.create') }}">Add Student</a>
    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Course</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th width="280px">Action</th>
        </tr>

        @foreach($students as $student)

        <tr>
            <td>{{++$i}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->course}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->phone}}</td>
            <td> 
                <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
                    
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
        <div class="pagination-block">
            {{ $students->links('students.paginationlinks') }}
        </div>
</div>