@extends('layouts.backend.app')

@section('title','NEXTGEN(FUTURE AND TRAININGS VIEW)')

@push('css')
<style>
    .futureAndTrainings {
        margin: 20px;
    }
</style>
@endpush





@section('content')
<div class="page-header">
    <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Future And Trainings View</h2>
    </div>
</div>

<div class="row mt-5 futureAndTrainings">

    <div class="col-md-12">

        <input class="form-control" type="text" name="" placeholder="Search..." id='search' autocomplete="off">

        <div class="table-responsive" id="futureAndTrainings">
            <table class="table table-hover table-sm table-active ">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Month</th>
                        <th class="text-center">From date</th>
                        <th class="text-center">To Date</th>
                        <th class="text-center">Tropics</th>
                        <th class="text-center">Created By</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($futureAndTrainings as $futureAndTraining)
                    <tr>
                        <td class="text-center">{{$loop->iteration }}</td>
                        <td class="text-center">{{$futureAndTraining->month}}</td>
                        <td class="text-center">{{$futureAndTraining->from_date}}</td>
                        <td class="text-center">{{$futureAndTraining->to_date}}</td>
                        <td class="text-center"><b>{{$futureAndTraining->tropic}}</b></td>
                        <td class="text-center">{{$futureAndTraining->created_by}}</td>

                        <td class="text-center">

                            <button style="border: none" class="badge badge-info"
                                onclick="editFun({{$futureAndTraining->id}})">
                                <i data-icon="u"></i></button>

                            <button style="border: none" class="badge badge-danger" 
                                onclick="deleteFun({{$futureAndTraining->id}})">
                                <i class="fa fa-trash" aria-hidden="true"></i></button>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



</div>
</div>



<!-- Modal Form-->
<div id="futureAndTraininsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
    class="modal fade text-left">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Edit Future Traings</strong>
            </div>
            <div class="modal-body">

                <form action="" id="editFutureAndTrainingsForm">
                    @csrf
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label class="form-control-label">Select Month</label>
                        <select class="form-control" name="month" id="month">
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
                         <input type="number" class="form-control" name="from_date" id="from_date" placeholder="from" min="1"
                             max="31">
                     </div>


                     <div class="form-group">
                         <label class="form-control-label">To Date</label>
                         <input type="number" class="form-control" name="to_date" id="to_date" to placeholder="to" min="1" max="31">
                     </div>


                      <div class="form-group">
                          <label class="form-control-label">Tropic</label>
                          {{-- <input type="text" class="form-control" name="tropics[]" placeholder="tropic name"> --}}
                          <textarea class="form-control" id="tropic" name="tropics" rows="3"></textarea>
                      </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                <button type="button" class="btn btn-primary" onclick="updateFun()">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection

@push('js')

<script>
    $(document).ready(function () {

        $("#search").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#futureAndTrainings tbody tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
   });




   function editFun(id){
        $.ajax({
            type: 'post',
            url: '{{URL::TO("futureAndTrainingsEdit")}}',
            data:"&_token={{ csrf_token() }}"+"&id="+id,
            dataType: 'json',
            success: function (data) {
            console.log(data);
            $('#id').val(id);
            $('#month').val(data.ftInfo.month);
            $('#from_date').val(data.ftInfo.from_date);
            $('#to_date').val(data.ftInfo.to_date);
            $('#tropic').val(data.ftInfo.tropic);
            $('#futureAndTraininsModal').modal({show:true});
            },
            error: function (data){
                console.log(data); 
            }
        });
   }




   function updateFun(){

         var formData = $('#editFutureAndTrainingsForm').serialize();
            $.ajax({
                type: 'post',
                url: '{{URL::TO("futureAndTrainingsUpdateAjax")}}',
                data: formData,
                dataType: 'json',
                success: function (data) {
                    if (typeof data.errors !== 'undefined') {
                        $('#futureAndTraininsModal').modal('hide');
                        swal({
                            title: "please input properly!",
                            text: "Enter The Value",
                            type: "warning"
                        });

                          
                    }else {
                         $('#futureAndTraininsModal').modal('hide');
                        swal(data, "Data Saved!", "success")
                        clearForm('#editFutureAndTrainingsForm');
                        $("#futureAndTrainings").load(location.href + " #futureAndTrainings");
                    }
                },
                error: function (data) {

                }
            });

   }


    function clearForm(data) {
        $(data).trigger("reset");
    }





    function deleteFun(id) {

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
                url: '{{URL::TO("futureAndTrainingDeleteAjax")}}',
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
                        $("#futureAndTrainings").load(location.href + " #futureAndTrainings");
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
