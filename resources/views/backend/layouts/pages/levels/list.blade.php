@extends('backend.master')

@section('content')
<section class="level">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header text-center">
                    <a style="float: left;" href="{{route('level.create')}}" class="btn btn-success">+Add Level</a><br>
                    <strong>Level Lists</strong></h1>
                <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Level Name</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($levels as $id=>$level)
                            <tr>
                                <td>{{++$id}}</td>
                                <td>{{$level->name}}</td>
                               
                                <td>
                                    <a class="btn btn-info text-white" href="{{route('level.view',$level->id)}}">View</a>
                                    <a class="btn btn-primary text-white" href="{{route('level.edit',$level->id)}}">Edit</a>
                                    <a class="btn btn-danger text-white" href="{{route('level.destroy',$level->id)}}">Delete</a>
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
{{$levels->links()}}
@endsection