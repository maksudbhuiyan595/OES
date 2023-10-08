@extends('backend.master')

@section('content')
<section class="subject">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header text-center">
                    <a style="float: left;" href="{{route('subject.create')}}" class="btn btn-success">+Add Subject</a><br>
                    <strong>Subject Lists</strong></h1>
                <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Subject Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subjects as $id=>$subject)
                            <tr>
                                <td>{{++$id}}</td>
                                <td>{{++$subject->name}}</td>
                                <td>
                                    <img  style="height: 60px; width: 60px; ;"
                                    src="{{url('/uploads/subjects/',$subject->image)}}" alt="image">
                                </td>
                                <td>
                                    <a class="btn btn-info text-white" href="{{route('subject.view',$subject->id)}}">View</a>
                                    <a class="btn btn-primary text-white" href="{{route('subject.edit',$subject->id)}}">Edit</a>
                                    <a class="btn btn-danger text-white" href="{{route('subject.destroy',$subject->id)}}">Delete</a>
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