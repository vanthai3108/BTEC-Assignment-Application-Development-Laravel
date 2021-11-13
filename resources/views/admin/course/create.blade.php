@extends('adminlte::page')

@section('title', 'Admin | Create course')

@section('content_header')
    <h1>Create new course</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create new course</h3>
                      </div>
                    <form action="{{route('admin.courses.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="courseName">Name:</label>
                                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" 
                                    id="courseName" name="name" value="{{ old('name') }}" placeholder="Course name">
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="courseDescription">Description:</label>
                                <input type="text" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" 
                                    id="courseDescription" name="description" value="{{ old('description') }}" placeholder="Description">
                                @if ($errors->has('description'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="coursesessions">Number of sessions:</label>
                                <input type="text" class="form-control {{ $errors->has('numberOfSessions') ? 'is-invalid' : '' }}" 
                                    id="coursesessions" name="numberOfSessions" value="{{ old('numberOfSessions') }}" placeholder="Number of sessions">
                                @if ($errors->has('numberOfSessions'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('numberOfSessions') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="courseShift">Shift:</label>
                                <input type="text" class="form-control {{ $errors->has('shift') ? 'is-invalid' : '' }}" 
                                    id="courseShift" name="shift" value="{{ old('shift') }}" placeholder="Shift">
                                @if ($errors->has('shift'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('shift') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Start Date:</label>
                                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                                      <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                <label>End Date:</label>
                                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                                      <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group" data-select2-id="67">
                                <label>Category:</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                  <option selected="selected" data-select2-id="3">Alabama</option>
                                  <option data-select2-id="70">Alaska</option>
                                  <option data-select2-id="71">California</option>
                                  <option data-select2-id="72">Delaware</option>
                                  <option data-select2-id="73">Tennessee</option>
                                  <option data-select2-id="74">Texas</option>
                                  <option data-select2-id="75">Washington</option>
                                </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-y7wi-container"><span class="select2-selection__rendered" id="select2-y7wi-container" role="textbox" aria-readonly="true" title="Alaska">Alaska</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                              </div>
                            <div class="form-group">
                                <label for="customFile">Choose image:</label>
                                <div class="input-group {{ $errors->has('image') ? 'is-invalid' : '' }}">
                                    <div class="custom-file">
                                        <input type="file" ref="input" class="custom-file-input {{ $errors->has('image') ? 'is-invalid' : '' }}" id="customFile" name="image">
                                        <label class="custom-file-label" for="customFile">Choose image</label>
                                    </div>
                                </div>
                                @if($errors->has('image'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </div>
                                @endif
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary col col-12">Save</button>
                        </div>
                    </form>
                </div>                
            </div>
        </div>        
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop