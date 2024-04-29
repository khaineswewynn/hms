@extends('layouts.master')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mt-5 border border-primary">
                        <p >
                            {{$dept->name}}
                        </p>
                        <p >
                            {{$dept->location}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection