@extends('layout.layout')

@yield('navbar')

@section('content')
    <script>
        $(document).ready(function(){
            $.ajax({
                url:'{{route('get_jobs')}}', // url where to submit the request
                type : "POST", // type of action POST || GET
                dataType : 'json', // data type
                success : function(result) {
                    console.log(result);
                    // you can see the result from the console
                    // tab of the developer tools
                    for($cnt = 0;$cnt< result.length;$cnt++){
//                        $("#job").append("<li>"+result[$cnt].name+"</li>");
                        $("#job").append(
                            "<div class='job row'>" +
                                "<h4><a href=''>"+result[$cnt].name+"</a></h4>" +
                                "<div class='content'>"+result[$cnt].content.substr(0,140)+"...</div>"  +
                                "<span class='loc pull-left'>Location:"+result[$cnt].location+"</span> " +
                                "<span class='pub pull-right'>Publication date:"+result[$cnt].date.date+"</span>" +
                            " </div>"
                        )
                    }
                },
                error: function(xhr, resp, text) {
                    console.log(xhr, resp, text);
                }
            });
        })
    </script>
    <div class="container">
        <div class="row">
            <div id="job" class="col-xs-9 ">

            </div>
            <div class="col-xs-3">
                <form action="" class="form">
                    {{ csrf_field() }}
                    <div class="category">
                        <h4>Category</h4>
              
                    </div>
                    <div class="Locate">
                        <h4>Locate</h4>
                            @foreach($locations as $location)
                            <div class="[ form-group ]">
                                <input type="checkbox" name="fancy-checkbox-default" id="fancy-checkbox-default" autocomplete="off" />
                                <div class="[ btn-group ]">
                                    <label for="fancy-checkbox-default" class="[ btn btn-default ]">
                                        <span class="[ glyphicon glyphicon-ok ]"></span>
                                        <span> </span>
                                    </label>
                                    <label for="fancy-checkbox-default" class="[ btn btn-default active ]">
                                        {{$location['location']}}
                                    </label>
                                </div>
                            </div>
                            @endforeach
                    </div>
                    <div class="Date">
                        <h4>Date</h4>

                            {{--@if($jobs)--}}
                                {{--@foreach($jobs as $job)--}}
                                    {{--<li>{{$job->getDate()->format('Y-m-d')}}</li>--}}
                                {{--@endforeach--}}
                            {{--@endif--}}
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection