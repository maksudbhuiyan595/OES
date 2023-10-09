@extends('frontend.master')
@section('content')
    <div class="container">
        <h1 class="text-center mt-3"><strong>All Subject</strong></h1>
            <hr>
                <div class="row">
                    @foreach($subjects as $subject)
                        <div class="col-md-2">
                            <div class="card">
                                <div class="card-body">
                                    <img  style="height: 60px; width: 60px; ;"
                                    src="{{url('/uploads/subjects/',$subject->image)}}" alt="image">
                                    <hr>
                                    <span>{{$subject->name}}</span>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        

    </div>
@endsection