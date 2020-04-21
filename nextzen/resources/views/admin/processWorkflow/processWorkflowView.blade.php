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


<div id='pw_view'>
<div class="row mt-3" style="margin-left:90px">

    @foreach ($processWorkflows as $processWorkflow)
    <div class="col-md-4" >
    <div class="card" style="width: 18rem;">

        <div class="card-body">
            <center><h4>{{ $processWorkflow->header }}</h4></center>
            <p class="card-text">{{ $processWorkflow->text }}</p>
            
            <center>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
            
                <button type='button' class="badge badge-danger" onclick='deletePwAjax({{ $processWorkflow->id }})'><i
                        class="fa fa-trash"></i></button>

                <button  type='button' class="badge badge-info ml-3" onclick="processWorkflowEdit({{ $processWorkflow->id }},'#image{{ $loop->iteration }}')" ><i data-icon="u"></i></button>
            
            </div>
           </center>
        </div>
    </div>
    </div>

    @endforeach


</div>
</div>


<!-- Modal -->
<div class="modal fade" id="process-workflow-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Process Workflow Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
             <form id='processWorkflowUpdate'>
                 @csrf
                 <input type="hidden" class="form-control" id="pw_id" name='pw_id'>
                 <div class="form-group">
                     <label for="exampleInputEmail1">Header - </label>
                     <input type="text" class="form-control" id="header" name='header'>
                     
                 </div>

                 <div class="form-group">
                        <label class="form-control-label">Text</label>
                        <textarea class="form-control" id="text" rows="3" style="resize: none;" name='text'></textarea>
                    </div>
                 
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-primary" onclick="updateProcessWorkflow()">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </form> 
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script>


function processWorkflowEdit(pwfId){

                $.ajax({
                        type: 'post',
                        url: '{{URL::TO("processWorkflowEditAjax")}}',
                        data:"&_token={{ csrf_token() }}"+"&pwfId="+pwfId,
                        dataType: 'json',
                        success: function (data) {
                        //    console.log(data);
                             $('#pw_id').val(pwfId);
                             $('#header').val(data.pWinfo.header);
                             $('#text').val(data.pWinfo.text);
                             $('#process-workflow-edit').modal({show:true});

                        },
                        error: function (data) {

                        }

                    });
            }


function updateProcessWorkflow(){
        var formData = $('#processWorkflowUpdate').serialize();
            $.ajax({
                type: 'post',
                url: '{{URL::TO("processWorkflowUpdateAjax")}}',
                data: formData,
                dataType: 'json',
                success: function (data) {
                    if (typeof data.errors !== 'undefined') {
                        swal({
                            title: "please input properly!",
                            text: "Enter The Value",
                            type: "warning"
                        });

                          $('#process-workflow-edit').modal('hide');
                    }else {
                         $('#process-workflow-edit').modal('hide');
                        swal(data, "Data Saved!", "success")
                        clearForm('#addProcessWorkflowForm');
                        $("#pw_view").load(location.href + " #pw_view");
                    }
                },
                error: function (data) {

                }
            });

}



function deletePwAjax(id){

      event.preventDefault();
      swal({
      title: "Are you sure?",
      text: "To Delete this!",
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
                url: '{{URL::TO("processWorkflowDeleteAjax")}}',
                data:"_token={{ csrf_token() }}"+"&id="+id,
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
                        $("#pw_view").load(location.href + " #pw_view");
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
