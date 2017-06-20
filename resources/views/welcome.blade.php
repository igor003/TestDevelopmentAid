@extends('layout.layout')

@yield('navbar')

@section('content')
    <script>
        function getJobs(){
            $.ajax({
                url:'{{route('get_jobs')}}', // url where to submit the request
                type : "POST", // type of action POST || GET
                dataType : 'json', // data type
                data : $(".form").serialize(),
                beforeSend: function() {
                    $('.loader').show();
                },
                complete: function() {
                    $('.loader').hide();
                },
                success : function(result) {
                    console.log(result);
                    // you can see the result from the console
                    // tab of the developer tools
                    $("#job").html('');
                    for($cnt = 0;$cnt< result.length;$cnt++){
                        $("#job").append(
                                "<div class='job row'>" +
                                "<h4><a href=''>"+result[$cnt].name+"</a></h4>" +
                                "<div class='content'>"+result[$cnt].content.substr(0,140)+"...</div>"  +
                                "<span class='loc pull-left'>Location:"+result[$cnt].location+"</span> " +
                                "<span class='categoryspan pull-left'>Category:"+result[$cnt].category.name+"</span> " +
                                "<span class='pub pull-right'>Publication date:"+result[$cnt].date.date+"</span>" +
                                " </div>"
                        )
                    }
                },
                error: function(xhr, resp, text) {
                    console.log(xhr, resp, text);
                }
            });
        }
        $(document).ready(function(){
            getJobs();
            $('.formChek').change(getJobs);
            $('.datepicker').datetimepicker({
                format: 'YYYY-MM-DD'
            }).on('dp.change',getJobs);
        });

    </script>


    <div class="container">
        <div class="loader"></div>
        <div class="row">
            <div id="job" class="col-xs-9 ">

            </div>
            <div class="col-xs-3">
                <form action="" class="form">
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
                </form>
            </div>
        </div>
    </div>
    <script>

    </script>
@endsection
