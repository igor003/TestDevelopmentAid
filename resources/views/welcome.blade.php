@extends('layout.layout')
@yield('navbar')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-8">
                <ul>
                    {{--{{dd($jobs)}}--}}
                {{--@foreach($jobs as $job)--}}
                        {{--<li>{{$job}}</li>--}}
                {{--@endforeach--}}
                </ul>
            </div>

            <div class="col-xs-4">
                <div class="category">
                    <h4>Category</h4>
                    <form action="">
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox">
                    </form>
                </div>
                <div class="Locate">
                    <h4>Locate</h4>
                    <form action="">
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox">
                    </form>
                </div>
                <div class="Date">
                    <h4>Date</h4>
                    <form action="">
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection