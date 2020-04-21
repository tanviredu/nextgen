@extends('layouts.backend.app')

@section('title','NEXTGEN(Slider-view)')

@push('css')
{{-- custom css --}}
@endpush





@section('content')
<div class="page-header">
    <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Slider View</h2>
    </div>
</div>


<div id='slider_view'>
<div class="row mt-3" style="margin-left:90px">

    @foreach ($sliders as $slider)
    <div class="col-md-4" >
    <div class="card" style="width: 18rem;">
        <div id="image{{ $loop->iteration }}">
        <img class="card-img-top" src="{{ asset('storage/slider/'.$slider->slider_image) }}" alt="Card image cap">
        </div>
        <div class="card-body">
            <p class="card-text">{{ $slider->slider_text }}</p>
            

            <div class="btn-group btn-group-toggle" data-toggle="buttons">
            
                <button type='button' class="badge badge-danger" onclick='deleteSlider({{ $slider->id }})'><i class="fa fa-trash"></i></button>

                <button  type='button' class="badge badge-info ml-3" onclick="editSlider({{ $slider->id }},'#image{{ $loop->iteration }}')" ><i data-icon="u"></i></button>
            
            </div>
        </div>
    </div>
    </div>

    @endforeach


</div>
</div>


<!-- Modal -->
<div class="modal fade" id="slider-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Slider Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
            <h6>Current Slider Image -</h6>
             <div id="currentImage">

            </div>   
              <hr>  
             <form id='update_slider'>
                 @csrf
                 <input type="hidden" class="form-control" id="slider_id" name='slider_id'>
                 <div class="form-group">
                     <label for="exampleInputEmail1">Slider Text - </label>
                     <input type="text" class="form-control" id="slider-text" name='slider_text'>
                     
                 </div>

                 <div class="form-group">
                        <label class="form-control-label">Chose an Image</label>
                        <input type="file"  class="form-control" name="image" id="image" accept="image/*" onchange="imageValidation(this)">
                        
                        
                     <div id="imagePriview" style="display:none"  class="mt-3">
                         <img id="imagePriviewTag" style="" class="img-fluid" src="" alt="">
                     </div>
                    </div>
                 
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-primary" onclick='updateSlider()'>Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </form> 
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script>


function editSlider(sliderId,divId){

                $.ajax({
                        type: 'post',
                        url: '{{URL::TO("sliderEditAjax")}}',
                        data:"&_token={{ csrf_token() }}"+"&sliderId="+sliderId,
                        dataType: 'json',
                        success: function (data) {
                        //    console.log(data);

                             $('#currentImage').empty();
                             $(jQuery(divId).html()).appendTo('.modal-body #currentImage');
                             $('#slider_id').val(sliderId);
                             $('#slider-text').val(data.slider.slider_text);
                             $('#slider-edit').modal({show:true});

                        },
                        error: function (data) {

                        }

                    });
}




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



    function updateSlider(){
        event.preventDefault();
               var formData = new FormData($("#update_slider")[0]);

             $.ajax({
                type: 'post',
                url: '{{URL::TO("sliderUpdateAjax")}}',
                data:formData,
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
                        $('#update_slider').trigger("reset");
                        $("#imagePriview").hide();
                        $("#imagePriview #imagePriviewTag").hide();
                        $("#file").val('');
                        $('#slider-edit').modal('hide');
                        $("#slider_view").load(location.href + " #slider_view");
                    }
                },
                error: function (data) {

                }

            });

    }



    function deleteSlider(sliderId){
        swal({
        title: "Are you sure to delete this slider?",
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



            $.ajax({
                type: 'post',
                url: '{{URL::TO("sliderDeleteAjax")}}',
                data:"_token={{ csrf_token() }}"+"&sliderId="+sliderId,
                dataType: 'json',
                success: function (data) {
                    if (typeof data.errors !== 'undefined') {
                        swal({
                            title: data,
                            text: "Enter The Value",
                            type: "warning"
                        });
                    } else {
                        swal(data, "Data Deleted!", "success")
                        $("#slider_view").load(location.href + " #slider_view");
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
    


 </script>
@endpush
