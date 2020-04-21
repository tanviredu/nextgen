 @extends('layouts.frontend.app')
 @section('title','NEXTZEN')


@push('css')
{{-- <style>
    table tr td, table tr th{
    background-color:  !important;
    opacity: 0.5;
    }
</style> --}}
@endpush


 @section('content')
 <!-- Banner Starts -->
        <div class="main-banner">
            <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                data-alias="classicslider1">
                <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" data-version="5.0.7">
                    <ul>
                        <!-- SLIDE  -->

                        @foreach ($sliders as $slider)
                            
                        <li data-index="rs-16" data-transition="zoomout" data-slotamount="default"
                            data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"
                            data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"
                            data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('storage/slider/'.$slider->slider_image) }}" alt="First Slide"
                                data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" />
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper layer1 tp-resizeme rs-parallaxlevel-0"
                                id="slide-16-layer-3" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['0','0','0','0']" data-width="full" data-height="full"
                                data-whitespace="normal" data-transform_idle="o:1;"
                                data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                data-transform_out="s:300;s:300;" data-start="1000" data-basealign="slide"
                                data-responsive_offset="on">
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption Newspaper-Title-Centered layer2 tp-resizeme rs-parallaxlevel-0"
                                id="slide-16-layer-1" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['0','0','0','1']" data-fontsize="['50','50','50','30']"
                                data-lineheight="['55','55','55','35']" data-width="['721','721','721','420']"
                                data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                data-transform_out="auto:auto;s:1000;" data-mask_in="x:0px;y:0px;"
                                data-mask_out="x:0;y:0;" data-start="1000" data-splitin="none" data-splitout="none"
                                data-responsive_offset="on">{{ $slider->slider_text }}
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption Newspaper-Subtitle layer3 tp-resizeme rs-parallaxlevel-0"
                                id="slide-16-layer-2" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-82','-82','-82','-58']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                data-transform_out="auto:auto;s:1000;" data-mask_in="x:0px;y:0px;"
                                data-mask_out="x:0;y:0;" data-start="1000" data-splitin="none" data-splitout="none"
                                data-responsive_offset="on">NEXTGEN
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption layer4 rs-parallaxlevel-0" id="slide-16-layer-4"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                                data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                                data-transform_out="y:50px;opacity:0;s:1000;s:1000;" data-start="1000"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                data-responsive="off">
                            </div>
                        </li>

                         @endforeach


                        {{-- <!-- SLIDE  -->
                        <li data-index="rs-17" data-transition="fadetotopfadefrombottom" data-slotamount="default"
                            data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"
                            data-rotate="0" data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('assets/frontend/images/help/slide2.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover"
                                data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper layer1 tp-resizeme rs-parallaxlevel-0"
                                id="slide-17-layer-3" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['0','0','0','0']" data-width="full" data-height="full"
                                data-whitespace="normal" data-transform_idle="o:1;"
                                data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                data-transform_out="s:300;s:300;" data-start="1000" data-basealign="slide"
                                data-responsive_offset="on">
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption Newspaper-Title-Centered layer2 tp-resizeme rs-parallaxlevel-0"
                                id="slide-17-layer-1" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['0','0','0','1']" data-fontsize="['50','50','50','30']"
                                data-lineheight="['55','55','55','35']" data-width="['721','721','721','420']"
                                data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                data-transform_out="auto:auto;s:1000;" data-mask_in="x:0px;y:0px;"
                                data-mask_out="x:0;y:0;" data-start="1000" data-splitin="none" data-splitout="none"
                                data-responsive_offset="on">Easy and Appropriate Way to Join the Community!
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption Newspaper-Subtitle layer3 tp-resizeme rs-parallaxlevel-0"
                                id="slide-17-layer-2" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-82','-82','-82','-58']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                data-transform_out="auto:auto;s:1000;" data-mask_in="x:0px;y:0px;"
                                data-mask_out="x:0;y:0;" data-start="1000" data-splitin="none" data-splitout="none"
                                data-responsive_offset="on">ABOUT THE LIFE OF A LEARNER
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption layer4 rs-parallaxlevel-0" id="slide-17-layer-4"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                                data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                                data-transform_out="y:50px;opacity:0;s:1000;s:1000;" data-start="1000"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                data-responsive="off"><a href="#" class="button primary bordered-light">READ MORE</a>
                            </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-18" data-transition="zoomin" data-slotamount="7"
                            data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"
                            data-rotate="0" data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('assets/frontend/images/help/slide3.jpg') }}" alt="" data-bgposition="center center" data-kenburns="on"
                                data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100"
                                data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0"
                                data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper layer1 tp-resizeme rs-parallaxlevel-0"
                                id="slide-18-layer-3" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['0','0','0','0']" data-width="full" data-height="full"
                                data-whitespace="normal" data-transform_idle="o:1;"
                                data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                data-transform_out="s:300;s:300;" data-start="1000" data-basealign="slide"
                                data-responsive_offset="on">
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption Newspaper-Title-Centered layer2 tp-resizeme rs-parallaxlevel-0"
                                id="slide-18-layer-1" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['0','0','0','1']" data-fontsize="['50','50','50','30']"
                                data-lineheight="['55','55','55','35']" data-width="['721','721','721','420']"
                                data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                data-transform_out="auto:auto;s:1000;" data-mask_in="x:0px;y:0px;"
                                data-mask_out="x:0;y:0;" data-start="1000" data-splitin="none" data-splitout="none"
                                data-responsive_offset="on">Working at the Desk in a Modern Fashion
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption Newspaper-Subtitle layer3 tp-resizeme rs-parallaxlevel-0"
                                id="slide-18-layer-2" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-82','-82','-82','-58']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                data-transform_out="auto:auto;s:1000;" data-mask_in="x:0px;y:0px;"
                                data-mask_out="x:0;y:0;" data-start="1000" data-splitin="none" data-splitout="none"
                                data-responsive_offset="on">ABOUT THE LIFE OF A DESIGNER
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption layer4 rs-parallaxlevel-0" id="slide-18-layer-4"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                                data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                                data-transform_out="y:50px;opacity:0;s:1000;s:1000;" data-start="1000"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                data-responsive="off"><a href="#" class="button primary bordered-light">READ MORE</a>
                            </div>
                        </li> --}}

                    </ul>
                    <div class="tp-static-layers"></div>
                    <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
                </div>
            </div><!-- END REVOLUTION SLIDER -->
        </div>
        <!-- Banner Ends /-->

        <!-- information boxes starts -->
        <div class="information-boxes module">

            @php
            $counter=1;
            @endphp

            @foreach($processWorkflows as $processWorkflow)
            <div class="
            @if($counter==1)
             courses-info medium-4 small-12 columns 
            @elseif($counter==2) 
            faculty-info medium-4 small-12 columns
            @else 

            courses-info medium-4 small-12 columns 

            @endif " 
               
               style="height:200px;">
                <div class="">
                    <h3><i class="
                        @if($counter==1)

                        fa fa-hourglass
                        
                        @elseif($counter==2) 
                        fa fa-line-chart
                        @else 

                        fa fa-bar-chart

                        @endif" aria-hidden="true"></i> {{$processWorkflow->header}}</h3>
                    <p class="text-justify">{{$processWorkflow->text}}</p>
                    
                    <div class="clearfix"></div>
                </div>
            </div><!-- courses column Ends /-->
            @php
            $counter++
            @endphp
            @endforeach
            {{-- <div class="faculty-info medium-4 small-12 columns">
                <div class="">
                    <h3><i class="fa fa-users" aria-hidden="true"></i> Our Teachers</h3>
                    <p>We have got some best teachers available in town who can help you to polish your skills as much
                        as you can ...</p>
                    <ul class="no-bullet">
                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Better designed programs for you
                        </li>
                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Online Availability to sources</li>
                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Helping Board in your learning
                            management</li>
                    </ul>
                    <div class="clearfix"></div>
                    <a href="#" class="primary button bordered-light">Meet Our Teachers!</a>
                </div>
            </div><!-- faculty info ends /-->

            <div class="newadmission-info medium-4 small-12 columns">
                <div class="">
                    <h3><i class="fa fa-sign-in" aria-hidden="true"></i> Admission Proccess</h3>
                    <p>We are happy to tell you that we are accepting new addmissions for new batch so dont delay get
                        enrolled asap ...</p>
                    <ul class="no-bullet">
                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Find a course best suits your skills
                        </li>
                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Attent the seminar related to that
                            course</li>
                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Helping Board in your learning
                            management</li>
                    </ul>
                    <div class="clearfix"></div>
                    <a href="#" class="primary button bordered-light">Get Enrolled!</a>
                </div>
            </div> --}}
            <div class="clearfix"></div>
        </div>
        <!-- information boxes ends /-->

        <!-- Welcome Message -->
        <div class="welcome-message module">
            <div class="row">
                 <center>
                     <h2>Our Future <span> Trainings</span></h2>
                     <h3>We are eager to give you best Education and style.</h3>
                 </center>
                 <hr>
                 <br>
                <div class="medium-6 small-12 columns">
        
                    <div class="table-responsive-sm" >
                        <table class="table">
                            <tbody>
                                @foreach($futureTrainings as $ft)
                                <tr style="background-color:white;">
                                   <td>
                                    <b><span style="color:tomato;font-size:20px;">{{ $ft->month }}</span>
                                     &nbsp;&nbsp;<span style="font-size:20px;">{{ $ft->from_date }}-{{ $ft->to_date }}</span></b>
                                    </td>
                                   <td><b><span style="font-size:20px;">{{ $ft->tropic }}</span></b></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
                    
                </div><!-- Right Column /-->

                  <center><span><b><span style="color: coral;font-size:20px;">*NB:</span>
                              <span style="color:teal; font-size:20px;">The schedule is
                              subjected to changes based on
                              timing,participation and speaker availability</span>.</b></span></center>


                <div class="medium-6 small-12 columns">
                    <img src="{{ asset('assets/frontend/images/help/Benchmarking-SAI-Platform’s-Farm-Sustainability-Assessment-1080x730.jpg') }}"
                        alt="Education Background" style="height:85%;" />
                </div>


             

            </div>

            
            <!-- Row /-->
        </div>
        <!-- Welcome Message Ends /-->

        <!-- Our Courses -->
        <div class="our-courses module grey-bg">
            <div class="row">

                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h2>Our Courses</h2>
                        <p>Find Best Course For Yourself!</p>
                    </div>
                </div> <!-- Title Ends /-->

                <div class="course-wrapper">
                    <ul class="tabs" data-tabs id="course-tabs" role="tablist">
                        <li class="tabs-title is-active"><a href="#graphic_design" aria-selected="true"
                                role="tab">Graphic Design</a></li>
                        <li class="tabs-title"><a href="#programming">Programming</a></li>
                        <li class="tabs-title"><a href="#finance">Finance</a></li>
                        <li class="tabs-title"><a href="#forieng_language">Foreign Language</a></li>
                        <li class="tabs-title"><a href="#mathematics">Mathematics</a></li>
                    </ul><!-- tabs nav /-->

                    <div class="tabs-content" data-tabs-content="course-tabs">

                        <div class="tabs-panel is-active" id="graphic_design">

                            <div class="medium-4 small-12 columns">
                                <div class="course">
                                    <div class="course-thumb">
                                        <img src="{{ asset('assets/frontend/images/help/print.jpg') }}" alt="Graphic Design" />
                                        <img src="{{ asset('assets/frontend/images/help/teacher3.jpg') }}" class="teacher" alt="Michel" />
                                        <div class="teacher-name">John Doe.</div>
                                        <div class="price-tag">$28.55</div>
                                    </div>
                                    <h3>Print Designing</h3>
                                    <p>Suspendisse dictum feugiat nisl ut dapibus. Vivamus hendrerit arcu sed erat
                                        molestie vehicula.</p>
                                    <ul class="no-bullet">
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Timing:
                                            </strong>8:00-9:00 / Wednesday and Sunday only</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> <strong>Starting From:
                                            </strong>November 28, 2013</li>
                                    </ul>
                                    <a href="#" class="secondary button">Register Yourself!</a>
                                </div>
                            </div><!-- First Course /-->

                            <div class="medium-4 small-12 columns">
                                <div class="course">
                                    <div class="course-thumb">
                                        <img src="{{ asset('assets/frontend/images/help/web.jpg') }}" alt="Graphic Design" />
                                        <img src="{{ asset('assets/frontend/images/help/teacher2.jpg') }}" class="teacher" alt="Michel" />
                                        <div class="teacher-name">John Doe.</div>
                                        <div class="price-tag">$28.55</div>
                                    </div>
                                    <h3>Web Designing</h3>
                                    <p>Suspendisse dictum feugiat nisl ut dapibus. Vivamus hendrerit arcu sed erat
                                        molestie vehicula.</p>
                                    <ul class="no-bullet">
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Timing:
                                            </strong>8:00-9:00 / Wednesday and Sunday only</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> <strong>Starting From:
                                            </strong>November 28, 2013</li>
                                    </ul>
                                    <a href="#" class="secondary button">Register Yourself!</a>
                                </div>
                            </div><!-- Second Course /-->

                            <div class="medium-4 small-12 columns">
                                <div class="course">
                                    <div class="course-thumb">
                                        <img src="{{ asset('assets/frontend/images/help/logo.jpg') }}" alt="Graphic Design" />
                                        <img src="{{ asset('assets/frontend/images/help/teacher1.jpg') }}" class="teacher" alt="Michel" />
                                        <div class="teacher-name">John Doe.</div>
                                        <div class="price-tag">$28.55</div>
                                    </div>
                                    <h3>Logo/Icons Designing</h3>
                                    <p>Suspendisse dictum feugiat nisl ut dapibus. Vivamus hendrerit arcu sed erat
                                        molestie vehicula.</p>
                                    <ul class="no-bullet">
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Timing:
                                            </strong>8:00-9:00 / Wednesday and Sunday only</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> <strong>Starting From:
                                            </strong>November 28, 2013</li>
                                    </ul>
                                    <a href="#" class="secondary button">Register Yourself!</a>
                                </div>
                            </div><!-- Third Course /-->

                        </div><!-- Graphic Design /-->

                        <div class="tabs-panel" id="programming">

                            <div class="medium-4 small-12 columns">
                                <div class="course">
                                    <div class="course-thumb">
                                        <img src="{{ asset('assets/frontend/images/help/print.jpg') }}" alt="Graphic Design" />
                                        <img src="{{ asset('assets/frontend/images/help/teacher3.jpg') }}" class="teacher" alt="Michel" />
                                        <div class="teacher-name">John Doe.</div>
                                        <div class="price-tag">$28.55</div>
                                    </div>
                                    <h3>PHP Web Development</h3>
                                    <p>Suspendisse dictum feugiat nisl ut dapibus. Vivamus hendrerit arcu sed erat
                                        molestie vehicula.</p>
                                    <ul class="no-bullet">
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Timing:
                                            </strong>8:00-9:00 / Wednesday and Sunday only</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> <strong>Starting From:
                                            </strong>November 28, 2013</li>
                                    </ul>
                                    <a href="#" class="secondary button">Register Yourself!</a>
                                </div>
                            </div><!-- First Course /-->

                            <div class="medium-4 small-12 columns">
                                <div class="course">
                                    <div class="course-thumb">
                                        <img src="{{ asset('assets/frontend/images/help/web.jpg') }}" alt="Graphic Design" />
                                        <img src="{{ asset('assets/frontend/images/help/teacher2.jpg') }}" class="teacher" alt="Michel" />
                                        <div class="teacher-name">John Doe.</div>
                                        <div class="price-tag">$28.55</div>
                                    </div>
                                    <h3>.NET Programming</h3>
                                    <p>Suspendisse dictum feugiat nisl ut dapibus. Vivamus hendrerit arcu sed erat
                                        molestie vehicula.</p>
                                    <ul class="no-bullet">
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Timing:
                                            </strong>8:00-9:00 / Wednesday and Sunday only</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> <strong>Starting From:
                                            </strong>November 28, 2013</li>
                                    </ul>
                                    <a href="#" class="secondary button">Register Yourself!</a>
                                </div>
                            </div><!-- Second Course /-->

                            <div class="medium-4 small-12 columns">
                                <div class="course">
                                    <div class="course-thumb">
                                        <img src="{{ asset('assets/frontend/images/help/logo.jpg') }}" alt="Graphic Design" />
                                        <img src="{{ asset('assets/frontend/images/help/teacher1.jpg') }}" class="teacher" alt="Michel" />
                                        <div class="teacher-name">John Doe.</div>
                                        <div class="price-tag">$28.55</div>
                                    </div>
                                    <h3>JavaScript/Ajax</h3>
                                    <p>Suspendisse dictum feugiat nisl ut dapibus. Vivamus hendrerit arcu sed erat
                                        molestie vehicula.</p>
                                    <ul class="no-bullet">
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Timing:
                                            </strong>8:00-9:00 / Wednesday and Sunday only</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> <strong>Starting From:
                                            </strong>November 28, 2013</li>
                                    </ul>
                                    <a href="#" class="secondary button">Register Yourself!</a>
                                </div>
                            </div><!-- Third Course /-->

                        </div><!-- Programming /-->

                        <div class="tabs-panel" id="finance">

                            <div class="medium-4 small-12 columns">
                                <div class="course">
                                    <div class="course-thumb">
                                        <img src="{{ asset('assets/frontend/images/help/print.jpg') }}" alt="Graphic Design" />
                                        <img src="{{ asset('assets/frontend/images/help/teacher3.jpg') }}" class="teacher" alt="Michel" />
                                        <div class="teacher-name">John Doe.</div>
                                        <div class="price-tag">$28.55</div>
                                    </div>
                                    <h3>Accounting Software</h3>
                                    <p>Suspendisse dictum feugiat nisl ut dapibus. Vivamus hendrerit arcu sed erat
                                        molestie vehicula.</p>
                                    <ul class="no-bullet">
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Timing:
                                            </strong>8:00-9:00 / Wednesday and Sunday only</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> <strong>Starting From:
                                            </strong>November 28, 2013</li>
                                    </ul>
                                    <a href="#" class="secondary button">Register Yourself!</a>
                                </div>
                            </div><!-- First Course /-->

                            <div class="medium-4 small-12 columns">
                                <div class="course">
                                    <div class="course-thumb">
                                        <img src="{{ asset('assets/frontend/images/help/web.jpg') }}" alt="Graphic Design" />
                                        <img src="{{ asset('assets/frontend/images/help/teacher2.jpg') }}" class="teacher" alt="Michel" />
                                        <div class="teacher-name">John Doe.</div>
                                        <div class="price-tag">$28.55</div>
                                    </div>
                                    <h3>Business Auditing</h3>
                                    <p>Suspendisse dictum feugiat nisl ut dapibus. Vivamus hendrerit arcu sed erat
                                        molestie vehicula.</p>
                                    <ul class="no-bullet">
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Timing:
                                            </strong>8:00-9:00 / Wednesday and Sunday only</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> <strong>Starting From:
                                            </strong>November 28, 2013</li>
                                    </ul>
                                    <a href="#" class="secondary button">Register Yourself!</a>
                                </div>
                            </div><!-- Second Course /-->

                            <div class="medium-4 small-12 columns">
                                <div class="course">
                                    <div class="course-thumb">
                                        <img src="{{ asset('assets/frontend/images/help/logo.jpg') }}" alt="Graphic Design" />
                                        <img src="{{ asset('assets/frontend/images/help/teacher1.jpg') }}" class="teacher" alt="Michel" />
                                        <div class="teacher-name">John Doe.</div>
                                        <div class="price-tag">$28.55</div>
                                    </div>
                                    <h3>Financial Accounting</h3>
                                    <p>Suspendisse dictum feugiat nisl ut dapibus. Vivamus hendrerit arcu sed erat
                                        molestie vehicula.</p>
                                    <ul class="no-bullet">
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Timing:
                                            </strong>8:00-9:00 / Wednesday and Sunday only</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> <strong>Starting From:
                                            </strong>November 28, 2013</li>
                                    </ul>
                                    <a href="#" class="secondary button">Register Yourself!</a>
                                </div>
                            </div><!-- Third Course /-->

                        </div><!-- finance /-->

                        <div class="tabs-panel" id="forieng_language">

                            <div class="medium-4 small-12 columns">
                                <div class="course">
                                    <div class="course-thumb">
                                        <img src="{{ asset('assets/frontend/images/help/print.jpg') }}" alt="Graphic Design" />
                                        <img src="{{ asset('assets/frontend/images/help/teacher3.jpg') }}" class="teacher" alt="Michel" />
                                        <div class="teacher-name">John Doe.</div>
                                        <div class="price-tag">$28.55</div>
                                    </div>
                                    <h3>English</h3>
                                    <p>Suspendisse dictum feugiat nisl ut dapibus. Vivamus hendrerit arcu sed erat
                                        molestie vehicula.</p>
                                    <ul class="no-bullet">
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Timing:
                                            </strong>8:00-9:00 / Wednesday and Sunday only</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> <strong>Starting From:
                                            </strong>November 28, 2013</li>
                                    </ul>
                                    <a href="#" class="secondary button">Register Yourself!</a>
                                </div>
                            </div><!-- First Course /-->

                            <div class="medium-4 small-12 columns">
                                <div class="course">
                                    <div class="course-thumb">
                                        <img src="{{ asset('assets/frontend/images/help/web.jpg') }}" alt="Graphic Design" />
                                        <img src="{{ asset('assets/frontend/images/help/teacher2.jpg') }}" class="teacher" alt="Michel" />
                                        <div class="teacher-name">John Doe.</div>
                                        <div class="price-tag">$28.55</div>
                                    </div>
                                    <h3>French</h3>
                                    <p>Suspendisse dictum feugiat nisl ut dapibus. Vivamus hendrerit arcu sed erat
                                        molestie vehicula.</p>
                                    <ul class="no-bullet">
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Timing:
                                            </strong>8:00-9:00 / Wednesday and Sunday only</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> <strong>Starting From:
                                            </strong>November 28, 2013</li>
                                    </ul>
                                    <a href="#" class="secondary button">Register Yourself!</a>
                                </div>
                            </div><!-- Second Course /-->

                            <div class="medium-4 small-12 columns">
                                <div class="course">
                                    <div class="course-thumb">
                                        <img src="{{ asset('assets/frontend/images/help/logo.jpg') }}" alt="Graphic Design" />
                                        <img src="{{ asset('assets/frontend/images/help/teacher1.jpg') }}" class="teacher" alt="Michel" />
                                        <div class="teacher-name">John Doe.</div>
                                        <div class="price-tag">$28.55</div>
                                    </div>
                                    <h3>German</h3>
                                    <p>Suspendisse dictum feugiat nisl ut dapibus. Vivamus hendrerit arcu sed erat
                                        molestie vehicula.</p>
                                    <ul class="no-bullet">
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Timing:
                                            </strong>8:00-9:00 / Wednesday and Sunday only</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> <strong>Starting From:
                                            </strong>November 28, 2013</li>
                                    </ul>
                                    <a href="#" class="secondary button">Register Yourself!</a>
                                </div>
                            </div><!-- Third Course /-->

                        </div><!-- forieng_language /-->

                        <div class="tabs-panel" id="mathematics">

                            <div class="medium-4 small-12 columns">
                                <div class="course">
                                    <div class="course-thumb">
                                        <img src="{{ asset('assets/frontend/images/help/print.jpg') }}" alt="Graphic Design" />
                                        <img src="{{ asset('assets/frontend/images/help/teacher3.jpg') }}" class="teacher" alt="Michel" />
                                        <div class="teacher-name">John Doe.</div>
                                        <div class="price-tag">$28.55</div>
                                    </div>
                                    <h3>Calculus</h3>
                                    <p>Suspendisse dictum feugiat nisl ut dapibus. Vivamus hendrerit arcu sed erat
                                        molestie vehicula.</p>
                                    <ul class="no-bullet">
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Timing:
                                            </strong>8:00-9:00 / Wednesday and Sunday only</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> <strong>Starting From:
                                            </strong>November 28, 2013</li>
                                    </ul>
                                    <a href="#" class="secondary button">Register Yourself!</a>
                                </div>
                            </div><!-- First Course /-->

                            <div class="medium-4 small-12 columns">
                                <div class="course">
                                    <div class="course-thumb">
                                        <img src="{{ asset('assets/frontend/images/help/web.jpg') }}" alt="Graphic Design" />
                                        <img src="{{ asset('assets/frontend/images/help/teacher2.jpg') }}" class="teacher" alt="Michel" />
                                        <div class="teacher-name">John Doe.</div>
                                        <div class="price-tag">$28.55</div>
                                    </div>
                                    <h3>Trignomentry</h3>
                                    <p>Suspendisse dictum feugiat nisl ut dapibus. Vivamus hendrerit arcu sed erat
                                        molestie vehicula.</p>
                                    <ul class="no-bullet">
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Timing:
                                            </strong>8:00-9:00 / Wednesday and Sunday only</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> <strong>Starting From:
                                            </strong>November 28, 2013</li>
                                    </ul>
                                    <a href="#" class="secondary button">Register Yourself!</a>
                                </div>
                            </div><!-- Second Course /-->

                            <div class="medium-4 small-12 columns">
                                <div class="course">
                                    <div class="course-thumb">
                                        <img src="{{ asset('assets/frontend/images/help/logo.jpg') }}" alt="Graphic Design" />
                                        <img src="{{ asset('assets/frontend/images/help/teacher1.jpg') }}" class="teacher" alt="Michel" />
                                        <div class="teacher-name">John Doe.</div>
                                        <div class="price-tag">$28.55</div>
                                    </div>
                                    <h3>Algebra</h3>
                                    <p>Suspendisse dictum feugiat nisl ut dapibus. Vivamus hendrerit arcu sed erat
                                        molestie vehicula.</p>
                                    <ul class="no-bullet">
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Timing:
                                            </strong>8:00-9:00 / Wednesday and Sunday only</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> <strong>Starting From:
                                            </strong>November 28, 2013</li>
                                    </ul>
                                    <a href="#" class="secondary button">Register Yourself!</a>
                                </div>
                            </div><!-- Third Course /-->

                        </div><!-- Mathematics /-->

                    </div><!-- Tabs content /-->

                </div><!-- course Wrapper ends /-->

            </div><!-- Row /-->
        </div>
        <!-- Our Courses Ends /-->

        <!-- Our Teachers -->
        <div class="our-teachers module">
            <div class="row">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h2>Our Teachers</h2>
                        <p>Some Special Teachers From the Industry!</p>
                    </div>
                </div> <!-- Title Ends /-->

                <div class="teachers-wrapper">

                    <div class="teacher">
                        <div class="teacher-thumb">
                            <img src="{{ asset('assets/frontend/images/help/teacher1.jpg') }}" alt="Teacher Doe" />
                            <div class="teacher-links menu-centered">
                                <ul class="menu">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                                <a href="#" class="small-button">Read More &raquo;</a>
                            </div><!-- teacher links /-->
                        </div><!-- Teacher thumb /-->
                        <div class="teacher-meta">
                            <h3><a href="#">Mr. John Doe</a></h3>
                            <p>Highly Educated Punjab University Professor</p>
                        </div><!-- teacher meta /-->
                    </div><!-- Teacher Ends /-->

                    <div class="teacher">
                        <div class="teacher-thumb">
                            <img src="{{ asset('assets/frontend/images/help/teacher5.jpg') }}" alt="Teacher Doe" />
                            <div class="teacher-links menu-centered">
                                <ul class="menu">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                                <a href="#" class="small-button">Read More &raquo;</a>
                            </div><!-- teacher links /-->
                        </div><!-- Teacher thumb /-->
                        <div class="teacher-meta">
                            <h3><a href="#">Mr. John Doe</a></h3>
                            <p>Highly Educated Punjab University Professor</p>
                        </div><!-- teacher meta /-->
                    </div><!-- Teacher Ends /-->

                    <div class="teacher">
                        <div class="teacher-thumb">
                            <img src="{{ asset('assets/frontend/images/help/teacher3.jpg') }}" alt="Teacher Doe" />
                            <div class="teacher-links menu-centered">
                                <ul class="menu">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                                <a href="#" class="small-button">Read More &raquo;</a>
                            </div><!-- teacher links /-->
                        </div><!-- Teacher thumb /-->
                        <div class="teacher-meta">
                            <h3><a href="#">Mr. John Doe</a></h3>
                            <p>Highly Educated Punjab University Professor</p>
                        </div><!-- teacher meta /-->
                    </div><!-- Teacher Ends /-->

                    <div class="teacher">
                        <div class="teacher-thumb">
                            <img src="{{ asset('assets/frontend/images/help/teacher4.jpg') }}" alt="Teacher Doe" />
                            <div class="teacher-links menu-centered">
                                <ul class="menu">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                                <a href="#" class="small-button">Read More &raquo;</a>
                            </div><!-- teacher links /-->
                        </div><!-- Teacher thumb /-->
                        <div class="teacher-meta">
                            <h3><a href="#">Mr. John Doe</a></h3>
                            <p>Highly Educated Punjab University Professor</p>
                        </div><!-- teacher meta /-->
                    </div><!-- Teacher Ends /-->

                    <div class="teacher">
                        <div class="teacher-thumb">
                            <img src="{{ asset('assets/frontend/images/help/teacher2.jpg') }}" alt="Teacher Doe" />
                            <div class="teacher-links menu-centered">
                                <ul class="menu">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                                <a href="#" class="small-button">Read More &raquo;</a>
                            </div><!-- teacher links /-->
                        </div><!-- Teacher thumb /-->
                        <div class="teacher-meta">
                            <h3><a href="#">Mr. John Doe</a></h3>
                            <p>Highly Educated Punjab University Professor</p>
                        </div><!-- teacher meta /-->
                    </div><!-- Teacher Ends /-->

                </div><!-- Teachers Wrapper /-->

            </div><!-- row /-->
        </div>
        <!-- Our Teachers /-->

        <!-- Price list -->
        <div class="module">
            <div class="row">

                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h2>Our Pricing</h2>
                        <p>Some Special Teachers From the Industry!</p>
                    </div>
                </div> <!-- Title Ends /-->

                <div class="medium-4 small-12 columns">
                    <div class="price-plan">
                        <div class="price-title">
                            <h4 class="title-heading">Bacholars</h4>
                            <strong>$20.20</strong>/Month
                        </div><!-- price title ends /-->
                        <ul class="price-details">
                            <li>
                                <i class="fa fa-check orange" aria-hidden="true"></i>
                                Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <i class="fa fa-check orange" aria-hidden="true"></i>
                                Consectetur adipiscing elit, sed do
                            </li>
                            <li>
                                <i class="fa fa-check orange" aria-hidden="true"></i>
                                <strong>Eiusmod</strong>
                                tempor incididunt
                            </li>
                            <li>
                                <i class="fa fa-times red" aria-hidden="true"></i>
                                Ut labore et dolore magna aliqua
                            </li>
                            <li>
                                <i class="fa fa-times red" aria-hidden="true"></i>
                                Ut enim ad minim veniam
                            </li>
                        </ul><!-- price details /-->
                        <a href="#" class="button secondary">Join Our Institute</a>
                    </div><!-- price-plan /-->
                </div><!-- first column ends /-->

                <div class="medium-4 small-12 columns">
                    <div class="price-plan">
                        <div class="price-title">
                            <h4 class="title-heading">Intermediate</h4>
                            <strong>$20.20</strong>/Month
                        </div><!-- price title ends /-->
                        <ul class="price-details">
                            <li>
                                <i class="fa fa-check orange" aria-hidden="true"></i>
                                Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <i class="fa fa-check orange" aria-hidden="true"></i>
                                Consectetur adipiscing elit, sed do
                            </li>
                            <li>
                                <i class="fa fa-check orange" aria-hidden="true"></i>
                                <strong>Eiusmod</strong>
                                tempor incididunt
                            </li>
                            <li>
                                <i class="fa fa-times red" aria-hidden="true"></i>
                                Ut labore et dolore magna aliqua
                            </li>
                            <li>
                                <i class="fa fa-times red" aria-hidden="true"></i>
                                Ut enim ad minim veniam
                            </li>
                        </ul><!-- price details /-->
                        <a href="#" class="button secondary">Join Our Institute</a>
                    </div><!-- price-plan /-->
                </div><!-- first column ends /-->

                <div class="medium-4 small-12 columns">
                    <div class="price-plan">
                        <div class="price-title">
                            <h4 class="title-heading">Masters</h4>
                            <strong>$20.20</strong>/Month
                        </div><!-- price title ends /-->
                        <ul class="price-details">
                            <li>
                                <i class="fa fa-check orange" aria-hidden="true"></i>
                                Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <i class="fa fa-check orange" aria-hidden="true"></i>
                                Consectetur adipiscing elit, sed do
                            </li>
                            <li>
                                <i class="fa fa-check orange" aria-hidden="true"></i>
                                <strong>Eiusmod</strong>
                                tempor incididunt
                            </li>
                            <li>
                                <i class="fa fa-times red" aria-hidden="true"></i>
                                Ut labore et dolore magna aliqua
                            </li>
                            <li>
                                <i class="fa fa-times red" aria-hidden="true"></i>
                                Ut enim ad minim veniam
                            </li>
                        </ul><!-- price details /-->
                        <a href="#" class="button secondary">Join Our Institute</a>
                    </div><!-- price-plan /-->
                </div><!-- first column ends /-->

            </div><!-- row ends /-->
        </div>
        <!-- Price list Ends /-->

        <!-- Seminar/Events -->
        <div class="seminar-events module">
               <div class="row">
                   <div class="section-title-wrapper light-title">
                       <div class="section-title">
                           <h2>Our Next Training</h2>
                           <p>Our Upcoming Seminars/Events Dont Miss Out!</p>
                       </div>
                   </div> <!-- Title Ends /-->

                   <div class="events-wrapper">

                       <div class="medium-6 small-12 columns">
                           <div class="event">
                               <div class="medium-8 small-12 columns event-data">
                                   <h4><a href="single-event.html">Traininer Information</a></h4>
                                   <p></p>
                                   <p><strong>Timinings:</strong> 17:00 - 18:00
                                       <br><strong>Date:</strong> 24, December 2016</p>
                                   <a href="single-event.html" class="button primary bordered-dark">Join Event</a>
                               </div><!-- Event DAta /-->
                               <div class="medium-4 small-12 columns event-thumb">
                                   <img src="{{ asset('assets/frontend/images/help/phpcourse.jpg') }}"
                                       alt="PHP Course" />
                               </div><!-- Event thumb /-->
                               <div class="clearfix"></div>
                           </div><!-- Event div ends /-->
                       </div><!-- Event Column Ends /-->

                       <div class="medium-6 small-12 columns">
                           <div class="event">
                               <div class="medium-8 small-12 columns event-data">
                                   <h4><a href="#">Graphics Designer December 2016 Seminar</a></h4>
                                   <p>We are happy to announce that our next seminar for PHP classes will be held at our
                                       Lahore campus click link for details and further information...</p>
                                   <p><strong>Timinings:</strong> 17:00 - 18:00
                                       <br><strong>Date:</strong> 24, December 2016</p>
                                   <a href="single-event.html" class="button primary bordered-dark">Join Event</a>
                               </div><!-- Event DAta /-->
                               <div class="medium-4 small-12 columns event-thumb">
                                   <img src="{{ asset('assets/frontend/images/help/graphiccourse.jpg') }}"
                                       alt="PHP Course" />
                               </div><!-- Event thumb /-->
                               <div class="clearfix"></div>
                           </div><!-- Event div ends /-->
                       </div><!-- Event Column Ends /-->

                   </div><!-- Events Wrapper Ends /-->

               </div>
        </div>
        <!-- Seminar Events Ends /-->

        <!-- Gallery Section -->
        <div class="gallery-wrapper module">
            <div class="section-title-wrapper">
                <div class="section-title">
                    <h2>Our Gallery</h2>
                    <p>Some Amazing Stuff from our Camput</p>
                </div>
            </div> <!-- Title Ends /-->

            <div class="gallery-container">

                <a href="{{ asset('assets/frontend/images/help/gallery1.jpg') }}" data-lightbox="campus-gallery"
                    data-title="Great Life in our Campus. Some great moments of life.">
                    <img class="gallery-thumb" src="{{ asset('assets/frontend/images/help/gallery1.jpg') }}" alt="" />
                </a>
                <a href="{{ asset('assets/frontend/images/help/gallery2.jpg') }}" data-lightbox="campus-gallery"
                    data-title="Great Life in our Campus. Some great moments of life.">
                    <img class="gallery-thumb" src="{{ asset('assets/frontend/images/help/gallery2.jpg') }}" alt="" />
                </a>
                <a href="{{ asset('assets/frontend/images/help/gallery3.jpg') }}" data-lightbox="campus-gallery"
                    data-title="Great Life in our Campus. Some great moments of life.">
                    <img class="gallery-thumb" src="{{ asset('assets/frontend/images/help/gallery3.jpg') }}" alt="" />
                </a>
                <a href="{{ asset('assets/frontend/images/help/gallery4.jpg') }}" data-lightbox="campus-gallery"
                    data-title="Great Life in our Campus. Some great moments of life.">
                    <img class="gallery-thumb" src="{{ asset('assets/frontend/images/help/gallery4.jpg') }}" alt="" />
                </a>
                <a href="{{ asset('assets/frontend/images/help/gallery5.jpg') }}" data-lightbox="campus-gallery"
                    data-title="Great Life in our Campus. Some great moments of life.">
                    <img class="gallery-thumb" src="{{ asset('assets/frontend/images/help/gallery5.jpg') }}" alt="" />
                </a>
                <a href="{{ asset('assets/frontend/images/help/gallery6.jpg') }}" data-lightbox="campus-gallery"
                    data-title="Great Life in our Campus. Some great moments of life.">
                    <img class="gallery-thumb" src="{{ asset('assets/frontend/images/help/gallery6.jp') }}g" alt="" />
                </a>
                <a href="{{ asset('assets/frontend/images/help/gallery7.jpg') }}" data-lightbox="campus-gallery"
                    data-title="Great Life in our Campus. Some great moments of life.">
                    <img class="gallery-thumb" src="{{ asset('assets/frontend/images/help/gallery7.jpg') }}" alt="" />
                </a>
                <a href="{{ asset('assets/frontend/images/help/gallery8.jpg') }}" data-lightbox="campus-gallery"
                    data-title="Great Life in our Campus. Some great moments of life.">
                    <img class="gallery-thumb" src="{{ asset('assets/frontend/images/help/gallery8.jpg') }}" alt="" />
                </a>
                <a href="{{ asset('assets/frontend/images/help/gallery9.jpg') }}" data-lightbox="campus-gallery"
                    data-title="Great Life in our Campus. Some great moments of life.">
                    <img class="gallery-thumb" src="{{ asset('assets/frontend/images/help/gallery9.jpg') }}" alt="" />
                </a>
                <a href="{{ asset('assets/frontend/images/help/gallery10.jpg') }}" data-lightbox="campus-gallery"
                    data-title="Great Life in our Campus. Some great moments of life.">
                    <img class="gallery-thumb" src="{{ asset('assets/frontend/images/help/gallery10.jpg') }}" alt="" />
                </a>
                <a href="{{ asset('assets/frontend/images/help/gallery11.jpg') }}" data-lightbox="campus-gallery"
                    data-title="Great Life in our Campus. Some great moments of life.">
                    <img class="gallery-thumb" src="{{ asset('assets/frontend/images/help/gallery11.jpg') }}" alt="" />
                </a>
                <a href="{{ asset('assets/frontend/images/help/gallery12.jpg') }}" data-lightbox="campus-gallery"
                    data-title="Great Life in our Campus. Some great moments of life.">
                    <img class="gallery-thumb" src="{{ asset('assets/frontend/images/help/gallery12.jpg') }}" alt="" />
                </a>

            </div><!-- Gallery Container /-->

        </div>
        <!-- Gallery Section Ends /-->

        <!-- Process/Testimonials -->
        <div class="seminar-events module">
            {{-- <img src="images/help/businesswoman.png" class="upper-background" alt="Business Women" /> --}}
            <div class="row">

                <div class="our-process-wrapper">

                    <div class="medium-8 medium-offset-3 small-12 columns our-process">
                        <h2>Its Easy, Its Brilliant, It Works!</h2>

                        <div class="process">
                            <div class="number">1</div>
                            <div class="right-info">
                                <h3>Select a Course you like and Explore it!</h3>
                                <p>Once upon a time there was a thirsty crow he flew here and there in search of water.
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- process /-->

                        <div class="process">
                            <div class="number">2</div>
                            <div class="right-info">
                                <h3>Join a Seminar To know More about it!</h3>
                                <p>But he could not find water anywhere at last he reached in a garden where he saw a
                                    pitcher.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- process /-->

                        <div class="process">
                            <div class="number">3</div>
                            <div class="right-info">
                                <h3>Get Enrolled and start better future with us!</h3>
                                <p>Thirsty Crow should Call us at: 123-123-1234 to drink water asap before all seats are
                                    reserved.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- process /-->

                         <div class="process">
                             <div class="number">3</div>
                             <div class="right-info">
                                 <h3>Get Enrolled and start better future with us!</h3>
                                 <p>Thirsty Crow should Call us at: 123-123-1234 to drink water asap before all seats
                                     are
                                     reserved.</p>
                             </div>
                             <div class="clearfix"></div>
                         </div>
                         <!-- process /-->
                         
                    </div><!-- Left Process Ends /-->


                </div><!-- Events Wrapper Ends /-->

            </div><!-- Row Ends /-->
        </div>
        <!-- Seminar Events Ends /-->

        <!-- Testimonials Section /-->
        <div class="testimonials-wrapper side-controls module">
            <div class="section-title-wrapper">
                <div class="section-title">
                    <h2>Our Testimonials</h2>
                    <p>What Parent's Say About Us?</p>
                </div>
            </div> <!-- Title Ends /-->

            <div class="row">

                <div class="testimonials">

                    <div class="testimonial">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('assets/frontend/images/help/first_testimonial.jpg') }}" alt="John Doe" />
                        </div><!-- Testimonial Thumb /-->
                        <div class="testimonial-detail">
                            <h4>Very happy to find this institute!</h4>
                            <p>After graduation we were very worried about our children what he will do as he does not
                                have any work experience but when he joined this abc institute this he became so
                                professional!</p>
                            <cite>Maria Doe</cite>
                        </div><!-- Testimonial Detail /-->
                        <div class="clearfix"></div>
                    </div> <!-- Testimonial /-->

                    <div class="testimonial">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('assets/frontend/images/help/first_testimonial2.jpg') }}" alt="John Doe" />
                        </div><!-- Testimonial Thumb /-->
                        <div class="testimonial-detail">
                            <h4>Very happy to find this institute!</h4>
                            <p>After graduation we were very worried about our children what he will do as he does not
                                have any work experience but when he joined this abc institute this he became so
                                professional!</p>
                            <cite>Maria Doe</cite>
                        </div><!-- Testimonial Detail /-->
                        <div class="clearfix"></div>
                    </div> <!-- Testimonial /-->

                </div><!-- Testimonials /-->

            </div><!-- Row /-->

        </div>
        <!-- Testimonials Section Ends /-->

        <!-- Blog Posts -->
        <div class="blog-posts module grey-bg">
            <div class="section-title-wrapper">
                <div class="section-title">
                    <h2>Recent News</h2>
                    <p>What's going on in our Blog?</p>
                </div>
            </div> <!-- Title Ends /-->

            <div class="row">

                <div class="posts-wrapper">

                    <div class="medium-4 small-12 columns">
                        <div class="post">
                            <div class="post-thumb">
                                <a href="#">
                                    <img src="{{ asset('assets/frontend/images/help/gallery3.jpg') }}" alt="My Blog post" />
                                </a>
                            </div><!-- Thumb /-->
                            <div class="post-content">
                                <h4><a href="#">What is good about us?</a></h4>
                                <div class="post-meta"><strong>Date:</strong> 20, Dec, 2016 | <strong>Category:</strong>
                                    <a href="#">Campus</a> | <strong>Author:</strong> <a href="#">Ateeq</a></div>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text ... <a
                                        href="#">Read More &raquo;</a></p>
                            </div><!-- post content /-->
                        </div><!-- Post /-->
                    </div><!-- Post column /-->

                    <div class="medium-4 small-12 columns">
                        <div class="post">
                            <div class="post-thumb">
                                <a href="#">
                                    <img src="{{ asset('assets/frontend/images/help/gallery9.jpg') }}" alt="My Blog post" />
                                </a>
                            </div><!-- Thumb /-->
                            <div class="post-content">
                                <h4><a href="#">Is this your Campus/Home</a></h4>
                                <div class="post-meta"><strong>Date:</strong> 20, Dec, 2016 | <strong>Category:</strong>
                                    <a href="#">Campus</a> | <strong>Author:</strong> <a href="#">Ateeq</a></div>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text ... <a
                                        href="#">Read More &raquo;</a></p>
                            </div><!-- post content /-->
                        </div><!-- Post /-->
                    </div><!-- Post column /-->

                    <div class="medium-4 small-12 columns">
                        <div class="post">
                            <div class="post-thumb">
                                <a href="#">
                                    <img src="{{ asset('assets/frontend/images/help/gallery7.jpg') }}" alt="My Blog post" />
                                </a>
                            </div><!-- Thumb /-->
                            <div class="post-content">
                                <h4><a href="#">What's our next mission?</a></h4>
                                <div class="post-meta"><strong>Date:</strong> 20, Dec, 2016 | <strong>Category:</strong>
                                    <a href="#">Campus</a> | <strong>Author:</strong> <a href="#">Ateeq</a></div>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text ... <a
                                        href="#">Read More &raquo;</a></p>
                            </div><!-- post content /-->
                        </div><!-- Post /-->
                    </div><!-- Post column /-->

                </div><!-- Posts Wrapper /-->

                <div class="load-more text-center">
                    <a href="#" class="button primary bordered-dark">Load More...</a>
                </div><!-- Load more /-->

            </div><!-- Row Ends /-->

        </div>
        <!-- Blog Posts Ends /-->

        <!-- Our PArtners -->
        <div class="brands-wrap side-controls module">
            <div class="section-title-wrapper">
                <div class="section-title">
                    <h2>Our Partners</h2>
                    <p>We are proudly partner with following Companies</p>
                </div>
            </div> <!-- Title Ends /-->

            <div class="row">

                <div class="brand-carousel">

                    <div class="bran-logo"><a href="#"><img alt="" src="{{ asset('assets/frontend/images/help/partner1.jpg') }}"
                                class="thumbnail" /></a></div>
                    <div class="bran-logo"><a href="#"><img alt="" src="{{ asset('assets/frontend/images/help/partner2.jpg') }}"
                                class="thumbnail" /></a></div>
                    <div class="bran-logo"><a href="#"><img alt="" src="{{ asset('assets/frontend/images/help/partner3.jpg') }}"
                                class="thumbnail" /></a></div>
                    <div class="bran-logo"><a href="#"><img alt="" src="{{ asset('assets/frontend/images/help/partner4.jpg') }}"
                                class="thumbnail" /></a></div>
                    <div class="bran-logo"><a href="#"><img alt="" src="{{ asset('assets/frontend/images/help/partner5.jpg') }}"
                                class="thumbnail" /></a></div>
                    <div class="bran-logo"><a href="#"><img alt="" src="{{ asset('assets/frontend/images/help/partner6.jpg') }}"
                                class="thumbnail" /></a></div>

                </div><!-- Brand carousel /-->

            </div><!-- Row /-->

        </div>
        <!-- Our Partners /-->

        <!-- Call to Action box -->
        <div class="call-to-action">
            <div class="row">
                <div class="medium-10 small-12 columns">
                    <h2><i class="fa fa-phone" aria-hidden="true"></i> If you Have Any Questions Call Us On
                        <span>(010)123-456-7890</span></h2>
                </div>
                <div class="medium-2 small-12 columns">
                    <a href="#" class="button secondary">Appointment</a>
                </div>
            </div><!-- row /-->
        </div>
        <!-- Call to Action End /-->

@endsection   

@push('js')
{{-- js --}}
@endpush
