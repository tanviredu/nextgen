@extends('layouts.backend.app')

@section('title','NEXTGEN(Add-Process Workflow)')

@push('css')
{{-- custom css --}}
@endpush





@section('content')
<div class="page-header">
    <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Add Process Workflow</h2>
    </div>
</div>


<div class="row mt-3">
    <div class="col-md-3"></div>
    <div class="col-md-6" style="margin-top:100px">
        <div class="block">
            <div class="title"><strong class="d-block">Create Process Workflow</strong></div>
            <div class="block-body">
                <form method="post" id="addProcessWorkflowForm">
                    @csrf
                    <div class="form-group">
                        <label class="form-control-label">Header</label>
                        <input type="text" placeholder="Write here.." autocomplete="off" class="form-control"
                            name="header" id="header">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Text</label>
                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder='write here..' name='text'></textarea>
                    </div>

                    

                    <div class="form-group">
                         <center> 
                            <button type="button" class="btn btn-primary" id="create" onclick="save()">Save</button>
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
       
function save(){
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

        var formData = $('#addProcessWorkflowForm').serialize();

         $.ajax({
                type: 'post',
                url: '{{URL::TO("insertProcessWorkflowAjax")}}',
                data: formData,
                dataType: 'json',
                success: function (data) {
                    if (typeof data.errors !== 'undefined') {
                        swal({
                            title: "please input properly!",
                            text: "Enter The Value",
                            type: "warning"
                        });
                    }else if (data==='alreadyThree') {

                         swal('Sorry!!', "you have already three Post for this coloumn!", "warning")
                         clearForm('#addProcessWorkflowForm');
                    }else {
                        swal(data, "Data Saved!", "success")
                        clearForm('#addProcessWorkflowForm');
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
