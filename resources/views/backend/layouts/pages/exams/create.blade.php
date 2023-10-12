@extends('backend.master')

@section('content')
<section class="exam">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h4 class="card-header mb-3"><strong> Create Exam</strong></h4>
                    <div class="card-body">
                    
                        <form action="{{route('exam.store')}}" method="post" >
                            @csrf
                            
                            <div class="mb-3">
                                <label for=""> Exam Name:</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="write exam name" value="{{old('name')}}">
                                   
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                           <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">Select Subject:</label>
                                        <select name="subject_id" class="form-control @error('subject_id') is-invalid @enderror" >
                                            <option value="">Choose One</option>
                                            @forelse ($subjects as $subject)
                                            <option value="{{$subject->id}}">{{$subject->name}}</option>   
                                            @empty
                                              <p>no subject --</p>
                                            @endforelse
                                        </select>
                                             @error('subject_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                             @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">Select Level:</label>
                                        <select name="level_id" class="form-control @error('level_id') is-invalid @enderror">
                                        <option value="">Choose One</option>
                                            @forelse ($levels as $level)
                                            <option value="{{$level->id}}">{{$level->name}}</option>   
                                            @empty
                                               <p>no level found--</p>
                                            @endforelse
                                        </select>
                                            @error('level_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                             @enderror
                                    </div>
                                </div>
                           </div>

                            <div class="mb-3">
                                <label for="">Total Questions:</label>
                                    <input type="number" name="number" class="form-control @error('number') is-invalid @enderror" placeholder="total questions" value="{{old('number')}}">
                                   
                                    @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Exam Durations:</label>
                                    <input type="number" name="duration" class="form-control @error('duration') is-invalid @enderror" placeholder="how many times?" value="{{old('duration')}}">
                                   
                                    @error('duration')
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