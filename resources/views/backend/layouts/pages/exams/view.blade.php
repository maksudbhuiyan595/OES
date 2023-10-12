@extends('backend.master')

@section('content')
<section class="exam">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <h4 class="card-header text-center mb-3"><strong>Exam details</strong></h4>
                <div class="card-body">
                    <h5><span>Exam Name: </span>{{$exam->name}}</h5>
                    <h5><span>Subject: </span>{{$exam->subjects->name}}</h5>
                    <h5><span>Level: </span>{{$exam->levels->name}}</h5>
                    <h5><span>Total Questions: </span>{{$exam->total_question}}</h5>
                    <h5><span>Durations: </span>{{$exam->duration}} <span>Min.</span></h5>

                    
                    
                   
                </div>
            </div>
        </div>
    </div>
</section>
@endsection