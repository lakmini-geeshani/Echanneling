@extends('layouts.admintemp')


@section('content')
<div class="container">
  <div class="col-md-8">
    <div class="x_panel">
      <div class="x_title">
        Add new doc information
      </div>  
      <div class="x_content">
          <form action="{{ route('adminappoiment.store') }}" class="" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}

          <div class="form-group has-feedback{{ $errors->has('name_items')? 'has-error':''}}">
            <label for="">speciality</label>
            <input type="text" name="speciality" placeholder="Add speciality" class="form-control" value="{{ old('specialities') }}"/>
            @if ($errors->has('speciality'))
            <span class="help-block">
              <p>{{ $errors->first('speciality') }}</p>
            </span>
            @endif
          </div>
         

          <div class="form-group">
            <label for="">doctor</label>
            <input type="text" name="doctor" placeholder="Add doctor name" class="form-control" value="{{ old('doctor') }}"/>
            @if ($errors->has('doctor'))
            <span class="help-block">
              <p>{{ $errors->first('doctor') }}</p>
            </span>
            @endif
          </div>

          <div class="form-group">
          <label for="">date</label>
          <input type="text" name="date" placeholder="Add date" class="form-control" value="{{ old('date') }}"/>
            @if ($errors->has('date'))
            <span class="help-block">
              <p>{{ $errors->first('date') }}</p>
            </span>
            @endif
          
          
          </div>
        





          <div class="form-group">
            <label for="">availability</label>
            <input type="text" name="availability" placeholder="Add availabilty" class="form-control" value="{{ old('availability') }}"/>
            @if ($errors->has('availability'))
            <span class="help-block">
              <p>{{ $errors->first('availability') }}</p>
            </span>
            @endif
         
          </div>

    

          
         

          <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
          </div>
          
        </form>
      </div>
    </div>
  </div>
  
</div>
@endsection