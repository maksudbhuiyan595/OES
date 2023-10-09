@extends('backend.master')

@section('content')
<section class="question">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <h4 class="card-header text-center mb-3"><strong>Question View</strong></h4>
                <div class="card-body">
                    <h5><span>Subject: </span>{{$question->subjects->name}}</h5>
                    <h5><span>Levels: </span>{{$question->levels->name}}</h5>
                    <h5><span>Tittle: </span>{{$question->tittle}}</h5>
                    <h5><span>Option 1: </span>{{$question->option1}}</h5>
                    <h5><span>Option 2: </span>{{$question->option2}}</h5>
                    <h5><span>Option 3: </span>{{$question->option3}}</h5>
                    <h5><span>Option 4: </span>{{$question->option4}}</h5>
                    <h5><span>Correct Answer: </span>{{$question->answer}}</h5>
                    
                   
                </div>
            </div>
        </div>
    </div>
</section>
@endsection