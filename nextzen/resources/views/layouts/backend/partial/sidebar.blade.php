<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="{{ asset('assets/backend/img/avatar-6.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
            <h1 class="h5">{{ Auth::user()->name }}</h1>
        </div>
    </div>
    <!-- Sidebar Navidation Menus-->
<span class="heading" style="color:azure">Menus</span><br>

    <input class="form-control mt-3 mb-3" type="text" onkeyup="myFunction()" name="" placeholder="Search menu" id='searchMenu'>

    <ul class="list-unstyled">

         <li class="{{Request::is('home')? 'active' : ''}}" style="color:silver;"><a href="{{url('/home')}}"><i class="icon-home" style="border:none"></i> DASHBOARD</a></li>

    </ul>

    <ul class="list-unstyled" id="myMenuUl">
        <center id="ulinfo1" style="border-bottom:1px solid tomato; margin-top:5px; margin-bottom:5px"><span class="" style="color:seagreen;font-size:10px;">HOME PAGE SETUP</span></center>

        <li class="{{Request::is('addSlider')|| Request::is('sliderView') ? 'active' : ''}}"><a href="#sliderDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>SLIDER</a>
            <ul id="sliderDropdown" class="collapse list-unstyled ">
                <li><a href="{{url('addSlider')}}"><i class="icon-light-bulb"></i>Add Slider</a></li>
                <li><a href="{{url('sliderView')}}"><i class="icon-light-bulb"></i>Slider View</a></li>
            </ul>
        </li>


        <li class="{{Request::is('addProcessWorkflow')|| Request::is('processWorkflowView') ? 'active' : ''}}"><a href="#processWorkFlowDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>PROCESS WORKFLOW</a>
            <ul id="processWorkFlowDropdown" class="collapse list-unstyled ">
                <li><a href="{{url('addProcessWorkflow')}}"><i class="icon-light-bulb"></i>Add Process Workflow</a></li>
                <li><a href="{{url('processWorkflowView')}}"><i class="icon-light-bulb"></i>View Process Workflow</a></li>
            </ul>
        </li>


        <li class="{{Request::is('addFutureTrainnings')|| Request::is('futureTrainingsView') ? 'active' : ''}}"><a
                href="#futureTraingingDropdown" aria-expanded="false" data-toggle="collapse"> <i
                    class="icon-windows"></i>FUTURE TRAININGS</a>
            <ul id="futureTraingingDropdown" class="collapse list-unstyled ">
                <li><a href="{{url('addFutureTrainnings')}}"><i class="icon-light-bulb"></i>Add Future Trainings</a>
                </li>
                <li><a href="{{url('futureTrainingsView')}}"><i class="icon-light-bulb"></i>View Future Trainings</a>
                </li>
            </ul>
        </li>

        

        <li class="{{Request::is('addNextTraining')|| Request::is('nextTrainingView') ? 'active' : ''}}"><a
                href="#nextTraining" aria-expanded="false" data-toggle="collapse"> <i
                    class="icon-windows"></i>NEXT TRAININGS</a>
            <ul id="nextTraining" class="collapse list-unstyled ">
                <li><a href="{{url('addNextTraining')}}"><i class="icon-light-bulb"></i>Add Next Training</a>
                </li>
                <li><a href="{{url('nextTrainingView')}}"><i class="icon-light-bulb"></i>View Next Training</a>
                </li>
            </ul>
        </li>


      



        


        

       

       


{{--        <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>--}}
    </ul>
{{--    <span class="heading">Extras</span>--}}
{{--    <ul class="list-unstyled">--}}
{{--        <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>--}}
{{--        <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>--}}
{{--        <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>--}}
{{--    </ul>--}}
</nav>


