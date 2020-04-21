@extends('layouts.backend.app')

@section('title','NEXTGEN(Next Trainings)')

@push('css')
{{-- custom css --}}
@endpush





@section('content')
<div class="page-header">
    <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Add Next Training</h2>
    </div>
</div>


<div class="row mt-1">
    <div class="col-md-1"></div>
    <div class="col-md-10" style="margin-top:20px">
        <div class="block">
            <div class="title text-center" ><strong class="d-block">Create Next Training</strong></div>
            <div class="block-body">
                <form method="post" id="addProcessWorkflowForm">
                       @csrf
                    <div class="row">
                        <div class="col-md-6" style=" border-right:1px solid teal">
                            <h5 class="text-center">Trainer Information</h5>

                            <div class="form-group">
                                <label class="form-control-label">Name Of Trainer</label>
                                <input type="text" placeholder="Name of trainer.." autocomplete="off" class="form-control"
                                    name="trainer_name" >
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Trainer Designation and Degree</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"
                                    placeholder='designation and degree..' name='designation_and_degree' style="resize:none"></textarea>
                            </div>


                            <div class="form-group">
                                <label class="form-control-label">Name Of Co Trainer</label>
                                <input type="text" placeholder="Name of trainer.." autocomplete="off"
                                    class="form-control" name="cotrainer_name">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Co Trainer Designation and Degree</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"
                                    placeholder='designation and degree..' name='co_designation_and_degree'
                                    style="resize:none"></textarea>
                            </div>

                        </div>





                        {{-- course information --}}

                        <div class="col-md-6">

                             <h5 class="text-center">Registration Time Information</h5>


                            <p style="color:tomato;border-bottom:1px solid black" class="text-center">Vanue Time And Date</p>

                             <div class="form-group">
                                 <label class="form-control-label">Select Month</label>
                                 <select class="form-control" name="s_month[]">
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


                             <div class="form-group">
                                 <label class="form-control-label">From Date</label>
                                 <input type="number" autocomplete="off" min="1" max="31" class="form-control"
                                     name="from_date" placeholder="starting date.." id="header">
                             </div>

                            <div class="form-group">

                                   <label class="form-control-label">To Date</label>
                                   <input type="number" autocomplete="off" min="1" max="31" class="form-control" name="to_date"
                                       id="header" placeholder="ending date..">
                            </div>


                            <div class="form-group">

                                <label class="form-control-label">Year</label>
                                <input type="number" autocomplete="off" min="2020" class="form-control" name="year" id="header" placeholder="venue year..">

                            </div>



                            <p style="color:tomato;border-bottom:1px solid black" class="text-center">Deadline</p>

                            <div class="form-group">
                                <label class="form-control-label">Select Month</label>
                                <select class="form-control" name="d_month[]">
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


                            <div class="form-group">

                                <label class="form-control-label">date</label>
                                <input type="number" autocomplete="off" min="1" max="31" class="form-control"
                                    name="d_date" id="header" placeholder="Deadline..">
                            </div>


                            <div class="form-group">

                                <label class="form-control-label">Year</label>
                                <input type="number" autocomplete="off" min="2020" class="form-control" name="d_year"
                                    id="header" placeholder="year..">

                            </div>

                            
                        </div>

                        
                    </div>


                    <hr>

                    <div class="row">
                        
                        <div class="col-md-6" style="border-right:1px solid teal">
                            <h5 class="text-center">Contact Information</h5>
                             <div class="form-group">
                                 <label class="form-control-label">Registration Fee</label>
                                 <input type="number" autocomplete="off" class="form-control" name="registration_fee"
                                     placeholder="registration fee..">
                             </div>

                             <div class="form-group">
                                 <label class="form-control-label">Mobile Number</label>
                                 <input type="number" autocomplete="off" class="form-control" name="phone"
                                     placeholder="contact number..">
                             </div>


                             <div class="form-group">
                                 <label class="form-control-label">Email Address</label>
                                 <input type="email" autocomplete="off" class="form-control" name="email"
                                     placeholder="email address..">
                             </div>


                             <div class="form-group">
                                 <label class="form-control-label">Facebook link</label>
                                 <input type="text" autocomplete="off" class="form-control" name="facebook_link"
                                     placeholder="facebook link..">
                             </div>
                        </div>



                        <div class="col-md-6">

                            <h5 class="text-center">Address and Payment Info</h5>
                            <div class="form-group">
                                <label class="form-control-label">Venue To Be Announced</label>
                                <input type="text" autocomplete="off" class="form-control" name="venue"
                                    placeholder="announced place..">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Bikash Payment Number</label>
                                <input type="number" autocomplete="off" class="form-control" name="payment_number"
                                    placeholder="announced place..">
                            </div>

                            <div class="form-group">
                                  <label class="form-control-label">Payment Type</label>
                                  <input type="text" autocomplete="off" class="form-control" name="payment_type"
                                      placeholder="Agent/Personal/payment/anything else">
                            </div>

                        </div>
                    </div>

                    <hr>
                        <div class="row">

                            <div class="col-md-6" style="border-right:1px solid teal">
                                 <h5 class="text-center">Tropic Information</h5>

                            <div class="form-group">
                                <label class="form-control-label">Course Header</label>
                                <input type="text" placeholder="Course header.." autocomplete="off" class="form-control"
                                    name="course_header" id="header">
                            </div>


                            <div class="form-group">
                                <label class="form-control-label">Other Information </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    placeholder='write here..' name='other_information'></textarea>
                            </div>


                            </div>

                            <div class="col-md-6">
                                   <h5 class="text-center">Topic Information</h5>

                                   <div class="table-responsive">
                                       <table class="table table-dark table-sm" id="topic">
                                           <tbody>
                                               <tr>
                                                   <td>
                                                       <div class="form-group">
                                                           <label class="form-control-label">name</label>
                                                           <input type="text" class="form-control" name="topics[]"
                                                               placeholder="topic name">
                                                       </div>
                                                   </td>
                                                   
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                                   <div class="form-group">
                                       <button type="button" class="badge badge-info" style="border:none,focous:none"
                                           onclick="addRow()"><i class="fa fa-plus-circle"
                                               aria-hidden="true"></i></button>

                                       <button type="button" class="badge badge-danger" style="border:none,focous:none"
                                           id="create" onclick="lessRow()"><i class="fa fa-minus-circle"
                                               aria-hidden="true"></i></button>
                                   </div>

                            </div>

                        </div>
                  

                 
                    



                    <div class="form-group" style="margin-top:20px">
                        <center>
                            <button type="button" class="btn btn-primary" id="create" onclick="save()">Save</button>
                            <button type="button" class="btn btn-danger" id="cancel">Cancel</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>

@endsection












@push('js')
<script>




function addRow(){
var html ='';
html += '<tr>';
    html += '<td>';
        html += '<div class="form-group">';
            html += '<input type="text" class="form-control" name="topics[]" placeholder="topics name">';
            html += '</div>';
        html += '</td>';
    html += '</tr>';

$('#topic tbody').append(html);
}




function lessRow(){

if ($("table tbody tr").length != 1) {
$("#topic tbody tr:last").remove();
}

}




    // function save() {
    //     event.preventDefault();
    //     swal({
    //             title: "Are you sure?",
    //             text: "To Submit this!",
    //             type: "warning",
    //             showCancelButton: true,
    //             confirmButtonClass: "btn-primary",
    //             confirmButtonText: "Yes",
    //             cancelButtonClass: "btn-danger",
    //             cancelButtonText: "Cancel",
    //             closeOnConfirm: false,
    //             closeOnCancel: false,
    //             showLoaderOnConfirm: true
    //         },
    //         function (isConfirm) {
    //             if (isConfirm) {

    //                 var formData = $('#addProcessWorkflowForm').serialize();

    //                 $.ajax({
    //                     type: 'post',
    //                     url: '{{URL::TO("insertProcessWorkflowAjax")}}',
    //                     data: formData,
    //                     dataType: 'json',
    //                     success: function (data) {
    //                         if (typeof data.errors !== 'undefined') {
    //                             swal({
    //                                 title: "please input properly!",
    //                                 text: "Enter The Value",
    //                                 type: "warning"
    //                             });
    //                         } else if (data === 'alreadyThree') {

    //                             swal('Sorry!!', "you have already three Post for this coloumn!",
    //                                 "warning")
    //                             clearForm('#addProcessWorkflowForm');
    //                         } else {
    //                             swal(data, "Data Saved!", "success")
    //                             clearForm('#addProcessWorkflowForm');
    //                         }
    //                     },
    //                     error: function (data) {

    //                     }

    //                 });
    //             } else {
    //                 swal("Cancelled", "Your imaginary file is safe :)", "error");
    //             }

    //         });
    // }


    // function clearForm(data) {
    //     $(data).trigger("reset");
    // }




</script>
@endpush
