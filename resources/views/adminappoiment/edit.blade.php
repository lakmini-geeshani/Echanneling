@extends('layouts.admintemp')

@section('content')
<div class="container">
  <div class="col-md-8">
    <div class="x_panel">
      <div class="x_title">
        Edit Doc info {{ $adminapp->id }}
      </div>
      <div class="x_content">
      <form action="{{ route('adminappoiment.update',$adminapp) }}" class="" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{ method_field('PATCH') }}
          


          <div class="form-group has-feedback{{ $errors->has('name_items')? 'has-error':''}}">
            <label for="">speciality</label>
            <input type="text" name="speciality" placeholder="Add speciality" class="form-control" value="{{ $adminapp->speciality }}"/>
            @if ($errors->has('speciality'))
            <span class="help-block">
              <p>{{ $errors->first('speciality') }}</p>
            </span>
            @endif
          </div>
         

          <div class="form-group">
            <label for="">doctor</label>
            <input type="text" name="doctor" placeholder="Add doctor name" class="form-control" value="{{$adminapp->doctor }}"/>
            @if ($errors->has('doctor'))
            <span class="help-block">
              <p>{{ $errors->first('doctor') }}</p>
            </span>
            @endif
          </div>

          <div class="form-group">
          <label for="">date</label>
          <input type="text" name="date" placeholder="Add date" class="form-control" value="{{ $adminapp->date }}"/>
            @if ($errors->has('date'))
            <span class="help-block">
              <p>{{ $errors->first('date') }}</p>
            </span>
            @endif
          
          
          </div>
        





          <div class="form-group">
            <label for="">availability</label>
            <input type="text" name="availability" placeholder="Add availabilty" class="form-control" value="{{ $adminapp->availability }}"/>
            @if ($errors->has('availability'))
            <span class="help-block">
              <p>{{ $errors->first('availability') }}</p>
            </span>
            @endif
         
          </div>




        
          <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
            <button type="submit" class="btn btn-info"><a href="{{ route('adminappoiment.index') }}">Back</a></button>
          </div>
          
        </form>
        
      </div>
    </div>

  </div>
  
</div>
@endsection