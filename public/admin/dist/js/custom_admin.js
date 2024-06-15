/***********************************************Print Validation Messages Start*****************************************************/
function printErrorMsg(msg)
{
    $.each(msg, function (key, value) {
        document.getElementById(key+ '_err').innerHTML = value;
    });
}
/***********************************************Print Validation Messages End*****************************************************/
/***********************************************Hide Validation Messages Start****************************************************/
function hide_error_msg(key)
{
    document.getElementById(key+ '_err').innerHTML = '';
}
/***********************************************Hide Validation Messages End****************************************************/
/***********************************************Select2 Start****************************************************/
function select2() {
    /*For Single*/
    $('.js-example-basic-single').select2();
    /*For Multipal*/
    $('.js-example-basic-multiple').select2();
}
/***********************************************Select2 End****************************************************/
/*********************************************** Data Table Start *************************************************/
$(function () {
    $("#example1").DataTable({
        "order":false,
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});
/*********************************************** Data Table End *************************************************/
/*** Base 64 Image Start***/
function base64Img(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('show_image_div').style.display = 'block';
            $('#image_show')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
/*** Base 64 Image End***/

/*************************************************Delete Start****************************************************************/
function getDeleteRoute($route)
{
    $('#confirm_del').attr('href',$route);
}
/*************************************************Delete End****************************************************************/


/*************************************************Sweetalert Delete Start****************************************************************/
    function deleteItem(url){
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        closeOnConfirm: false,
        closeOnCancel: true
    }).then((result) => {
        if (result.isConfirmed === true) {
            $.ajax({
                url: url,
                type: "GET",
                success: function (res) {
                    if (res.status === 200) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success',
                            {confirmButtonText: 'ok',})
                            .then((result) => {
                                location.reload()
                            })
                    } else {
                        toastr.error('Error')
                    }
                }
            })
        }
    })
}
/*************************************************Sweetalert Delete End****************************************************************/

/*************************************************Ajax Model Start****************************************************************/
var FailedFetchHtmlModel = '<div class="modal-body"><div class="callout callout-danger"><p><i class="fa fa-times"></i> Failed to fetch the data</p></div></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Close</button></div>';
$("body").on("click", "[data-act=ajax-modal]", function () {
    var url = $(this).attr("data-action-url");
    var title =  $(this).attr("data-title");
    var appendID = $(this).attr("data-append-id");

    $('#AjaxModelTitle').html(title);
    $('#AjaxModel').modal({
        backdrop: 'static'
    });
    $.ajax
    ({
        type: "GET",
        url: url,
        data: '',
        success: function(data)
        {
            $('#'+appendID).html(data);

            $(function () {
                bsCustomFileInput.init();
            });

            $(function() {
                $('.summernote').summernote({
                    height: "200px",
                })
            })
        },
        error: function() {
            $('#'+appendID).html(FailedFetchHtmlModel);
        }
    });
});

/*************************************************Ajax Model End****************************************************************/


/*************************************************Message Hide Start****************************************************************/

$("document").ready(function(){
    setTimeout(function(){
        $("#message").remove();
    }, 3000 );
});

/*************************************************Message Hide End****************************************************************/
