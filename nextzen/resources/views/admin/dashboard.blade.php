@extends('layouts.backend.app')

@section('title','NEXTGEN')

@push('css')
    {{-- css --}}
@endpush





@section('content')
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
        </div>
    </div>




    {{-- <script>
    	$(document).ready(function(){
    		swal("Good job!", "You clicked the button!", "success");
    	});
    </script> --}}

@endsection








@push('js')
    <script src="{{asset('assets/backend/js/charts-home.js')}}"></script>
@endpush
