@extends('backend.master')

@section('content')
<section class="exam">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header text-center">
                    <a style="float: left;" href="{{route('exam.create')}}" class="btn btn-success">+Add Exam</a><br>
                    <strong>Question Lists</strong></h1>
                <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Exam Name</th>
                        <th scope="col">Suject</th>
                        <th scope="col">Level</th></th>
                        <th scope="col">Total Questions</th>
                        <th scope="col">Durations</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($exams as $id=>$exam)
                           <tr>
                            <td>{{++$id}}</td>
                            <td>{{$exam->name}}</td>
                            <td>{{$exam->subjects->name}}</td>
                            <td>{{$exam->levels->name}}</td>
                            <td><span>Questions: </span>{{$exam->total_question}}</td>
                            <td>{{$exam->duration}} <span>Min.</span></td>
                            <td>
                                <a class="btn btn-info text-white" href="{{route('exam.view',$exam->id)}}">View</a>
                                <a class="btn btn-primary text-white" href="">Edit</a>
                                <a class="btn btn-danger text-white" href="{{route('exam.destroy',$exam->id)}}">Delete</a>
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
{{$exams->links()}}
@endsection