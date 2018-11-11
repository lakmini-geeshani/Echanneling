@extends('layouts.usertemp')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
        <div class="form-group pull-right">
            <div class="input-group">
            <form action="{{ route('user.search') }}" method="GET">
                <input type="text" class="form-control" name="q" style="width:250px">
                <span class="input-group-btn">
                <button type="submit" class="btn btn-medium btn-primary pull-right">Search</button>
                </span>
            </form>
            </div>
        </div>
       
        
        <table class="table table-bordered">
            <thead>
                <tr class="heading black">
                <th  scope="col">No</th>
                <th scope="col">Speciality</th>
                <th scope="col">Doctor</th>
                <th scope="col">Date</th>
                <th scope="col">Availability</th>
                
             
                </tr>
            </thead>
            <tbody>
    
            <!-- @if(is_array($adminapps)||is_object($adminapps)) -->
            @php
            $no = 1;
            @endphp
            @foreach( $adminapps as $adminapp)
                <tr>
                <th scope="row">@php echo $no++ @endphp</th>
             
                <td>{{$adminapp->speciality}}</td>
                <td>{{$adminapp->doctor}}</td>
                <td>{{$adminapp->date}}</td>
                <td>{{$adminapp->availability}}</td>
                
            

                </tr>
            @endforeach
          
            </tbody>
        </table>
      
        <!-- @endif -->
        </div>
    </div>
</div>

@endsection