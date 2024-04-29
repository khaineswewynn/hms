@extends('layouts.master')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-8">
                    <form action="{{ route('department.store')}}" method="post">
                        @csrf
                        <div class="mt-3">
                            <label for="" class="form-label">Dept Name</label>
                            <input type="text" name="name" id="" placeholder="Department Name" class="form-control">
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div>
                            <label for="" class="form-label">Description</label>
                            <input type="text" name="description" id="" placeholder="Description" class="form-control">
                            <span class="text-danger">
                                @error('description')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div>
                            <label for="" class="form-label">Phone Number</label>
                            <input type="text" name="phone" id="" placeholder="Phone Number" class="form-control">
                            <span class="text-danger">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div>
                            <label for="" class="form-label">Location</label>
                            <input type="text" name="location" id="" placeholder="Location" class="form-control">
                            <span class="text-danger">
                                @error('location')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-dark">Add Department</button>
                            <a href="" class="btn btn-warning">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection