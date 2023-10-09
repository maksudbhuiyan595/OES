@extends('backend.master')

@section('content')
<section class="level">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <h4 class="card-header text-center mb-3"><strong>Level View</strong></h4>
                <div class="card-body">
                    <h5><span>Level Name: </span>{{$level->name}}</h5>
                   
                </div>
            </div>
        </div>
    </div>
</section>
@endsection