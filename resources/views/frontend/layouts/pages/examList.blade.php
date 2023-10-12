@extends('frontend.master')

@section('content')
<section class="container mt-5 p-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header text-center">
                   
                    <strong>Exam Lists</strong></h1>
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
                       
                     
                       @foreach ($examLists->exams as $sl=>$exam)
                           <tr>
                            <td>{{++$sl}}</td>
                            <td>{{$exam->name}}</td>
                            <td>{{$exam->subjects->name}}</td>
                            <td>{{$exam->levels->name}}</td>
                            <td>{{$exam->total_question}}</td>
                            <td>{{$exam->duration}}</td>
                            
                            <td>
                                <a class="btn btn-success text-white" href="">Start Exam</a>
                               
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

@endsection