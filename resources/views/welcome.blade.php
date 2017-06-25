@extends('layout.layout')

@yield('navbar')

@section('content')
    <div class="container">
        <div class="loader"></div>
        <div class="row">
            <div id="job" class="col-xs-9 ">

            </div>
            <div class="col-xs-3">
                <form action="{{route('get_jobs')}}" class="form">
                    {{ csrf_field() }}
                    <div class="search">
                        <div class="form-group">
                            <input name="search" type="text" class=" formChek form-control" placeholder="Search">
                        </div>
                    </div>
                    <div class="category">
                        <h4>Category</h4>
                        @foreach($categories as $key=>$category)
                            <div class="[ form-group ]">
                                <input class="formChek" type="checkbox" name="categories[]" value="{{$category['id']}}" id="category{{$key}}" autocomplete="off" />
                                <div class="[ btn-group ]">
                                    <label for="category{{$key}}" class="[ btn btn-default ]">
                                        <span class="[ glyphicon glyphicon-ok ]"></span>
                                        <span> </span>
                                    </label>
                                    <label for="category{{$key}}" class="[ btn btn-default active ]">
                                        {{$category['name']}}
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="Locate">
                        <h4>Locate</h4>
                            @foreach($locations as $key=>$location )
                            <div class="[ form-group ]">
                                <input class="formChek" type="checkbox" name="locations[]" value="{{$location['location']}}" id="location{{$key}}" autocomplete="off" />
                                <div class="[ btn-group ]">
                                    <label for="location{{$key}}" class="[ btn btn-default ]">
                                        <span class="[ glyphicon glyphicon-ok ]"></span>
                                        <span> </span>
                                    </label>
                                    <label for="location{{$key}}" class="[ btn btn-default active ]">
                                        {{$location['location']}}
                                    </label>
                                </div>
                            </div>
                            @endforeach
                    </div>
                    <div class="Date">
                        <h4>Date</h4>
                        <label for="ot">From</label>
                        <input name="dateFrom" class="formChek datepicker form-control" id="from" type="text">
                        <label for="do">Until</label>
                        <input name="dateUntil" class="formChek datepicker form-control" id="before" type="text">

                    </div>
                    <input id="curPage" value="1" name="curPage" type="hidden">
                </form>
            </div>
            <div id="pagination" class=" text-center">

            </div>
        </div>
    </div>
@endsection
