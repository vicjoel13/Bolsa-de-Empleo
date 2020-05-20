@extends('template')

@section('content')

<div>
@foreach ($jobs as $job)
    
<h1>{{$job->logo}}</h1>
@endforeach
</div>

 
        @endsection