@extends('backend.master')

@section('content')
<section class="level">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h4 class="card-header mb-3"><strong> Create Level</strong></h4>
                    <div class="card-body">
                    
                        <form action="{{route('level.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">Level Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="level name" value="{{old('name')}}">
                                   
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                           
                            
                            <button type="submit" class="btn btn-md btn-success">Submit Form</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection