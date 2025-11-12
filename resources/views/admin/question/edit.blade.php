
@extends('layout.master-admin')
@section('admin_kuis', 'active')

@section('content')

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">

            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Ubah Pertanyaan</h6>
                    <form action="{{ route('admin.q.update', [$quiz_id, $question->id]) }}" method="POST">
                        @csrf
                          <textarea placeholder="Question" class="form-control mb-3" name="question">{{ old('question', $question->question) }}</textarea>
                          @error('question')
                            <small class="text-danger">{{ $message }}</small>    
                          @enderror

                          @php
                            $options = json_decode($question->options);
                          @endphp
  
                          <div class="input-list mb-3 d-flex" style="align-items: center">
                            <label for="" class="col-1">A</label>
                            <div class="col-10">
                              <input type="text" style="width: 100%" class="mb-0" name="a" value="{{ old('a', $options->a) }}" class="form-control">
                              @error('a')
                                <small class="text-danger">{{ $message }}</small>    
                              @enderror
                            </div>
                          </div>
  
                          <div class="input-list mb-3 d-flex" style="align-items: center">
                            <label for="" class="col-1">B</label>
                            <div class="col-10">
                              <input type="text" style="width: 100%" class="mb-0" name="b" value="{{ old('b', $options->b) }}" class="form-control">
                              @error('b')
                                <small class="text-danger">{{ $message }}</small>    
                              @enderror
                            </div>
                          </div>
  
                          <div class="input-list mb-3 d-flex" style="align-items: center">
                            <label for="" class="col-1">C</label>
                            <div class="col-10" value="{{ old('c') }}">
                              <input type="text" style="width: 100%" class="mb-0" name="c" value="{{ old('c', $options->c) }}" class="form-control">
                              @error('c')
                                <small class="text-danger">{{ $message }}</small>    
                              @enderror
                            </div>
                          </div>
  
                          <div class="input-list mb-3 d-flex" style="align-items: center">
                            <label for="" class="col-1">D</label>
                            <div class="col-10">
                              <input type="text" style="width: 100%" class="mb-0" name="d" value="{{ old('d', $options->d) }}" class="form-control" >
                              @error('d')
                                <small class="text-danger">{{ $message }}</small>    
                              @enderror
                            </div>
                          </div>
  
                          <div class="input-list mb-3 d-flex" style="align-items: center">
                            <label for="" class="col-1">Answer</label>
                            <div class="col-10">
                              <select name="answer" id="">
                                <option value="a" {{ $question->answer == "a" ? "selected" : "" }}>A</option>
                                <option value="b" {{ $question->answer == "b" ? "selected" : "" }}>B</option>
                                <option value="c" {{ $question->answer == "c" ? "selected" : "" }}>C</option>
                                <option value="d" {{ $question->answer == "d" ? "selected" : "" }}>D</option>
                              </select>
                              @error('answer')
                                <small class="text-danger">{{ $message }}</small>    
                              @enderror
                            </div>
                          </div>
  
                          <button type="submit" class="btn btn-primary  border-0">Kirim</button>
                      </form>
                    
                </div>
            </div>
            
        </div>
    </div>
    <!-- Form End -->
@endsection
