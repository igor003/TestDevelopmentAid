@extends('layout.layout')

@yield('navbar')

@section('content')
    <div class="container">
        <div class="row">
            <div class=" details-name col-xs-12 text-center">
              <h1>{{$job->getName()}}</h1>
            </div>

            <div class="details-record col-xs-12">
                Location: {{$job->getLocation()}}
            </div>
            <div class="details-record col-xs-12">
                Date: {{$job->getDate()->format('d-m-Y H:i:s')}}
            </div>
            <div class=" details-record col-xs-12">
                Category: {{$job->getCategory()->getName()}}
            </div>
            <div class=" details-content col-xs-10 col-xs-offset-1 text-center">
                {{$job->getContent()}}
            </div>


        </div>
    </div>
@endsection