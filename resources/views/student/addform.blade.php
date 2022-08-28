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
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div style="background: grey; color: white; text-align: center; padding: 5px;">
                    <h2>Add Student</h2>
                </div>
                <form action="" method="POST" 
                style="padding: 20px;
                border-left: 1px solid lightgrey;
                box-shadow: 4px 6px 4px grey;" > 
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required >
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                    <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="number" class="form-control" id="marks" name="marks" required >
                    </div>

                    <div class="row">
                        <div class="col-sm-3">
                            <a  href="{{url()->previous()}}" class="btn btn-danger">Cancel</a>
                        </div>
                        <div class="col-sm-6"></div>
                        <div class="col-sm-3 text-right">
                            <button type="submit" class="btn btn-primary ">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
@endsection