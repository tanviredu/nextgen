@extends('layouts.backend.app')

@section('title','NEXTGEN(add-future trainings)')

@push('css')
{{-- custom css --}}
@endpush





@section('content')
<div class="page-header">
    <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Add Future Trainings</h2>
    </div>
</div>


<div class="row mt-3">
    <div class="col-md-2"></div>
    <div class="col-md-8" style="margin-top:20px">
        <div class="block">
            <div class="title"><strong class="d-block">Create Future and Trainings</strong></div>
            <div class="block-body">
                <form method="post" id="addFutureTraining">
                    <div class="table-responsive">
                    <table class="table table-dark table-sm">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label class="form-control-label">Select Month</label>
                                        <select class="form-control" name="month[]">
                                           <option value="" selected disabled>Please select</option>
                                           <option value="January">January</option>
                                           <option value="Febuary">Febuary</option>
                                           <option value="March">March</option>
                                           <option value="April">April</option>
                                           <option value="May">May</option>
                                           <option value="June">June</option>
                                           <option value="July">July</option>
                                           <option value="August">August</option>
                                           <option value="September">September</option>
                                           <option value="October">October</option>
                                           <option value="November">November</option>
                                           <option value="December">December</option>
                                        </select>
                                    </div>
                                </td>
                                 
                                <td>
                                    <div class="form-group">
                                        <label class="form-control-label">From Date</label>
                                        <input type="number" class="form-control"  name="from_date[]" placeholder="from"
                                            min="1" max="31">
                                    </div>
                                </td>

                                 <td>
                                     <div class="form-group">
                                         <label class="form-control-label">To Date</label>
                                         <input type="number" class="form-control" name="to_date[]"  placeholder="to"
                                             min="1" max="31">
                                     </div>
                                 </td>


                                 <td>
                                     <div class="form-group">
                                         <label class="form-control-label">Tropic</label>
                                         <input type="text" class="form-control" name="tropics[]" placeholder="tropic name" min="1"
                                             max="31">
                                     </div>
                                 </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
                    <div class="form-group">
                         <button type="button" class="badge badge-info" style="border:none,focous:none"
                             onclick="addRow()"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>

                             <button type="button" class="badge badge-danger" style="border:none,focous:none"
                                 id="create"
                                 onclick="lessRow()"><i class="fa fa-minus-circle" aria-hidden="true"></i></button>
                        <center>
                            <button type="button" class="btn btn-primary"  onclick="save()">Save</button>
                            <button type="button" class="btn btn-danger" onclick="cancel()">Cancel</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>

@endsection

@push('js')
<script>

    function addRow(){
        var html ='';
        html += '<tr>';
        html += '<td>';
        html += '<div class="form-group">';
        html += '<select class="form-control" name="month[]">';
        html += '<option value="" selected disabled>Please select</option>';
        html += '<option value="January">January</option>';
        html += '<option value="Febuary">Febuary</option>';
        html += '<option value="March">March</option>';
        html += '<option value="April">April</option>';
        html += '<option value="May">May</option>';
        html += '<option value="June">June</option>';
        html += '<option value="July">July</option>';
        html += '<option value="August">August</option>';
        html += '<option value="September">September</option>';
        html += '<option value="October">October</option>';
        html += '<option value="November">November</option>';
        html += '<option value="December">December</option>';
        html += '</select>';
        html += '</div>';
        html += '</td>';
        html += '<td>';
        html += '<div class="form-group">';
        html += '<input type="number" class="form-control" id="" name="from_date[]" placeholder="from" min="1" max="31">';
        html += '</div>';
        html += '</td>';
        html += '<td>';
        html += '<div class="form-group">';
        html += '<input type="number" class="form-control" name="to_date[]" id="" placeholder="to" min="1" max="31">';
        html += '</div>';
        html += '</td>';
        html += '<td>';
        html += '<div class="form-group">';
        html += '<input type="text" class="form-control" name="tropics[]" placeholder="tropic name" min="1" max="31">';
        html += '</div>';
        html += '</td>';
        html += '</tr>';

        $('table tbody').append(html);
    }




    function lessRow(){

        if ($("table tbody tr").length != 1) {
           $("table tbody tr:last").remove();
        }
    
    }



    function save() {
        event.preventDefault();
        swal({
                title: "Are you sure?",
                text: "To Submit this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-primary",
                confirmButtonText: "Yes",
                cancelButtonClass: "btn-danger",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: false,
                showLoaderOnConfirm: true
            },
            function (isConfirm) {
                if (isConfirm) {

                    var formData = $('#addFutureTraining').serialize();
                    // console.log(formData);

                    $.ajax({
                        type: 'post',
                        url: '{{URL::TO("insertFutureAndTrainingAjax")}}',
                        data: formData+"&_token={{ csrf_token() }}",
                        dataType: 'json',
                        success: function (data) {
                            if (typeof data.errors !== 'undefined') {
                                swal({
                                    title: "please input properly!",
                                    text: "Enter The Value",
                                    type: "warning"
                                });
                            } else {

                                swal(data, "Data Saved!", "success")
                                clearForm('#addFutureTraining');
                                 setTimeout(function(){ 
                                     location.reload();
                                  }, 1000);
                              
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





    function cancel(){

    swal({
    title: "Are you sure?",
    text: "Your will not be able to recover this imaginary file!",
     type: "warning",
     showCancelButton: true,
     confirmButtonClass: "btn-primary",
     confirmButtonText: "Yes",
     cancelButtonClass: "btn-danger",
     cancelButtonText: "Cancel",
    closeOnConfirm: false
    },
    function(){

    clearForm('#addFutureTraining');
    swal("Cancelled!", "", "success");
    $("#addFutureTraining").load(location.href + " #addFutureTraining");
    });
     

    }


    function clearForm(data) {
    $(data).trigger("reset");
    }
</script>
@endpush
