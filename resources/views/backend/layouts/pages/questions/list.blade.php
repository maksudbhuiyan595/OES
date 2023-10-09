@extends('backend.master')

@section('content')
<section class="question">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header text-center">
                    <a style="float: left;" href="{{route('question.create')}}" class="btn btn-success">+Add Question</a><br>
                    <strong>Question Lists</strong></h1>
                <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tittle</th>
                        <th scope="col">Option1</th>
                        <th scope="col">Option2</th>
                        <th scope="col">Option3</th>
                        <th scope="col">Option4</th>
                        <th scope="col">Answer</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Level</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($questions as $id=>$question)
                           <tr>
                            <td>{{++$id}}</td>
                            <td>{{$question->tittle}}</td>
                            <td>{{$question->option1}}</td>
                            <td>{{$question->option2}}</td>
                            <td>{{$question->option3}}</td>
                            <td>{{$question->option4}}</td>
                            <td>{{$question->answer}}</td>
                            <td>{{$question->subjects->name}}</td>
                            <td>{{$question->levels->name}}</td>
                            <td>
                                <a class="btn btn-info text-white" href="{{route('question.view',$question->id)}}">View</a>
                                <a class="btn btn-primary text-white" href="">Edit</a>
                                <a class="btn btn-danger text-white" href="{{route('question.destroy',$question->id)}}">Delete</a>
                            </td>
                           </tr>
                       @endforeach
                       
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
{{$questions->links()}}
@endsection