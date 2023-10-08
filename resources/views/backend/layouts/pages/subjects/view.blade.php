@extends('backend.master')

@section('content')
<section class="subject">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <h4 class="card-header text-center mb-3"><strong>Subject View</strong></h4>
                <div class="card-body">
                    <h5><span>Subject Name: </span>{{$subject->name}}</h5>
                    <h5><span>Subject Image: </span>
                        <img  style="height: 80px; width: 80px; ;"
                             src="{{url('/uploads/subjects/',$subject->image)}}" alt="image">
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection