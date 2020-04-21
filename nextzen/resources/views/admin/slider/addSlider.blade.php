@extends('layouts.backend.app')

@section('title','NEXTGEN(Add-slider)')

@push('css')
{{-- custom css --}}
@endpush





@section('content')
<div class="page-header">
    <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Add Slider</h2>
    </div>
</div>


<div class="row mt-3">
    <div class="col-md-3"></div>
    <div class="col-md-6" style="margin-top:100px">
        <div class="block">
            <div class="title"><strong class="d-block">Create Slider</strong></div>
            <div class="block-body">
                <form method="post" id="addSlider">
                    @csrf
                    <div class="form-group">
                        <label class="form-control-label">Slider Text</label>
                        <input type="text" placeholder="Write here.." autocomplete="off" class="form-control"
                            name="slider_text" id="slider_text">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Chose an Image</label>
                        <input type="file"  class="form-control" name="image" id="image" accept="image/*" onchange="imageValidation(this)">
                        
                       
                        
                     <div id="imagePriview" style="display:none"  class="mt-3">
                         <img id="imagePriviewTag" style="" class="img-fluid" src="" alt="">
                     </div>
                    </div>

                    

                    <div class="form-group">
                         <center> 
                            <button type="button" class="btn btn-primary" id="create" onclick="saveSlider()">Save</button>
                            <button type="button" class="btn btn-danger" id="cancel">Cancel</button>
                         </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>

@endsection












@push('js')
<script>

 function imageValidation(input) {
        $("#imagePriview").show();
        $("#imagePriviewTag").show();

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $("#imagePriview img").attr("src", e.target.result);
                $("#imagePriview").css({
                    'width': '150px',
                    'height': '150px'
                });
                $("#imagePriview #imagePriviewTag").css({
                    'width': '150px',
                    'height': '150px'
                });
            };
            reader.readAsDataURL(input.files[0]);
        }

        var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
        if ($.inArray($(input).val().split('.').pop().toLowerCase(), fileExtension) == -1) {

            $("#imagePriview").css({
                'width': '',
                'height': ''
            });
            $("#imagePriview #imagePriviewTag").css({
                'width': '',
                'height': ''
            });
            $("#imagePriview").hide();
            $("#imagePriview #imagePriviewTag").hide();
            // alert("Only '.jpeg','.jpg', '.png', '.gif' formats are allowed.");
            swal({
                title: "Wrong File Format",
                text: "Only '.jpeg','.jpg', '.png', '.gif' formats are allowed.",
                type: "warning"
            });
            $("#file").val('');


        }
    }




function saveSlider(){
    event.preventDefault();
    swal({
    title: "Are you sure?",
    text: "To Submit this!",
    type: "warning",
    showCancelButton: true,
    confirmButtonClass: "btn-primary",
    confirmButtonText: "Yes",
    cancelButtonClass:"btn-danger",
    cancelButtonText: "Cancel",
    closeOnConfirm: false,
    closeOnCancel: false,
    showLoaderOnConfirm: true
    },
    function(isConfirm) {
    if (isConfirm) {

        var formData = new FormData($("#addSlider")[0]);
         $.ajax({
                type: 'post',
                url: '{{URL::TO("sliderInsertAjax")}}',
                data: formData,
                enctype: 'multipart/form-data',
                contentType: false,
                cache: false,
                processData: false,
                dataType: 'json',
                success: function (data) {
                    if (typeof data.errors !== 'undefined') {
                        swal({
                            title: data,
                            text: "Enter The Value",
                            type: "warning"
                        });
                    } else {
                        swal(data, "Data Saved!", "success")
                        clearForm('#addSlider');
                        $("#imagePriview").hide();
                        $("#imagePriview #imagePriviewTag").hide();
                        $("#file").val('');
                    }
                },
                error: function (data) {

                }

            });
    } else {
    swal("Cancelled", "Your imaginary file is safe :)", "error");
    }
    
    });
}


 function clearForm(data) {
        $(data).trigger("reset");
    }

</script>
@endpush
