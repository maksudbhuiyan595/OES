@extends('backend.master')

@section('content')
<section class="subject">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center mb-3"><strong>Subject Edit </strong></div>
                    <div class="card-body">
                    
                        <form action="{{route('subject.update',$subject->id)}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">Subject Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="subject name" value="{{$subject->name}}">
                                   
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                             
                            <button type="submit" class="btn btn-md btn-success">Update Form</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection