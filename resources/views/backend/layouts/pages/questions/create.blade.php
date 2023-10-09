@extends('backend.master')

@section('content')
<section class="question">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h4 class="card-header mb-3"><strong> Create Question</strong></h4>
                    <div class="card-body">
                    
                        <form action="{{route('question.store')}}" method="post" >
                            @csrf
                           <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">Select Subject:</label>
                                        <select name="subject_id" class="form-control @error('subject_id') is-invalid @enderror" >
                                            <option value="">Choose One</option>
                                            @forelse ($subjects as $subject)
                                            <option value="{{$subject->id}}">{{$subject->name}}</option>   
                                            @empty
                                                {{ "Subject not found--"}}
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
                                                {{ "Level not found--"}}
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
                                <label for="">Write Question:</label>
                                    <input type="text" name="tittle" class="form-control @error('tittle') is-invalid @enderror" placeholder="write question" value="{{old('tittle')}}">
                                   
                                    @error('tittle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Option 1</label>
                                        <input type="text" name="option1" class="form-control @error('option1') is-invalid @enderror" placeholder="option" value="{{old('option1')}}">
                                    
                                        @error('option1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                    <label for="">Option 2</label>
                                        <input type="text" name="option2" class="form-control @error('option2') is-invalid @enderror" placeholder="option" value="{{old('option2')}}">
                                    
                                        @error('option2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                    <label for="">Option 3</label>
                                        <input type="text" name="option3" class="form-control @error('option3') is-invalid @enderror" placeholder="option" value="{{old('option3')}}">
                                    
                                        @error('option3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                    <label for="">Option 4</label>
                                        <input type="text" name="option4" class="form-control @error('option4') is-invalid @enderror" placeholder="option" value="{{old('option4')}}">
                                    
                                        @error('option4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="">Correct Answer:</label>
                                    <input type="number" name="number" class="form-control @error('number') is-invalid @enderror" placeholder="option number" value="{{old('number')}}">
                                   
                                    @error('number')
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