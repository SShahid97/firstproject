@extends('layout')
@section('content')

    <div class="container mt-5">
        @if(session()->has('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('status')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <div class="row">
                <div class="mb-3">
                   <a href="{{url('/create')}}" class="btn btn-success"> Add New Student </a>
                </div>
                <hr/>
                <div>
                    <h2>Student List</h2>
                </div>
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">City</th>
                            <th scope="col">Marks</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <th>{{$student->id}}</th>
                            <td>{{$student->name}}</td>
                            <td>{{$student->city}}</td>
                            <td>{{$student->marks}}</td>
                            <td>
                                <a href="{{url('/edit',$student->id)}}" class="btn btn-info btn-sm">Edit</a>
                                <a href="{{url('/delete',$student->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            <!-- </div> -->
        </div>
    </div>
@endsection