@extends('template')
@section('content')
<table style="width:100%">
    <tr>
      <th>Compañia</th>
      <th>tiempo</th>
      <th>posicion</th>
    </tr>
    @foreach ($jobs as $job)
    <tr>
      <td>{{$job->position}}</td>
      <td>{{$job->time_type}}</td>
      <td>{{$job->position}}</td>
    </tr>
    @endforeach
  </table>
</div>


    @endsection