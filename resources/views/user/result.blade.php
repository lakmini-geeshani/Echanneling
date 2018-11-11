@extends('layouts.usertemp')

@section('content')
@if (count($results))
<div class="x_panel green white-text">Search Result : <b>{{$query}}</b></div>
    <div class="container">
		<div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                   
                    <th  scope="col">No</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Date</th>
                    <th scope="col">Availability</th>
                    <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                @php
                $no=1;
                @endphp 
                @foreach( $results as $result)
                    <tr>
                    <th scope="row">@php echo $no++ @endphp</th>
                   
                    <td>{{$result->speciality}}</td>
                    <td>{{$result->doctor}}</td>
                    <td>{{$result->date}}</td>
                    <td>{{$result->availability}}</td>
                    
                    <td>

                  <button class="btn btn-info">
                
                  <a href="{{ route('adminappoiment.edit', $result )}}"> Channel</a>
                  
                  </button>
                  
                    </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
                
		</div>
	</div>
	

</div>

{{ $results->render() }}
	
@else
   <div class="card-panel red darken-3 white-text">Oops.. Data <b>{{$query}}</b> can't be deleted</div>
@endif
	

@endsection