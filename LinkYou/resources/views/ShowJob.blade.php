@extends('template')

@section('content')

<div>


    



<table style="width:100%">
        <tr>
          <th>Compañia</th>
          <th>tiempo</th>
          <th>posicion</th>
        </tr>
        @foreach ($jobs as $job)
        <tr>
          <td>{{$job->company}}</td>
          <td>{{$job->time_type}}</td>
          <td>{{$job->position}}</td>
        </tr>
        @endforeach
      </table>
</div>

 
        @endsection