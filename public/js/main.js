/**
 * Created by home on 25.06.2017.
 */
function generatePagination(totalCount,perPage,curPage){
    $cntPage = Math.ceil(totalCount / perPage);
    var list = '';
    for(var cnt = 1; cnt <= $cntPage; cnt++){
        if(cnt ==curPage ){
            list += "<li class='active'><a class='page-link' href='#'>"+cnt+"</a></li>";
        }else{
            list += "<li class='page-number'><a class='page-link'>"+cnt+"</a></li>";
        }
    }
    $('#pagination').html(
        "<nav aria-label='Page navigation'>"+
        "<ul class='pagination'>"+list+"</ul> " +
        "</nav> ");
}
function generateJob(job){
    return "<div class='job row'>" +
        "<h4><a href='/job/details/"+job.id+"'>"+job.name+"</a></h4>" +
        "<div class='content'>"+job.content.substr(0,140)+"...</div>"  +
        "<div class='row'>" +
        "<div class='col-lg-4 col-sm-12'>" +
        "<span class='loc'>Location:"+job.location+"</span> " +
        "</div>"+
        "<div class='col-lg-4 col-sm-12'>" +
        "<span class='categoryspan'>Category:"+job.category.name+"</span> " +
        "</div>"+
        "<div class='col-lg-4 col-sm-12'>" +
        "<span class='pub '>Publication date:"+job.date.date.substr(0,19)+"</span>" +
        "</div>"+
        " </div>"
}
function getJobs(){
    var url = $('.form').attr('action');

    $.ajax({
        url: url, // url where to submit the request
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
            for(var cnt = 0;cnt< result.jobs.length;cnt++){
                $("#job").append(generateJob(result.jobs[cnt]));
            }
            generatePagination(result.count, result.perPage, result.page);
            $('.page-number').on('click', function(){
                var page = parseInt($(this).text());
                $('#curPage').val(page);
                getJobs();
            })
        },
        error: function(xhr, resp, text) {
            console.log(xhr, resp, text);
        }
    });
}

$(document).ready(function(){

    getJobs();
    $('.formChek').on('change', function(){
        $('#curPage').val(1);
        getJobs();
    });
    $('.datepicker').datetimepicker({
        format: 'YYYY-MM-DD'
    }).on('dp.change',getJobs);
});