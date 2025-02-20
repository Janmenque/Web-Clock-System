@extends('layouts.personal')

    @section('meta')
        <title>My Settings  </title>
        <meta name="description" content="Workday my settings">
    @endsection

    @section('styles')
        <script>var admin = false;</script>
    @endsection

    @section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">{{ __("General Settings") }}</h2>
            </div>    
        </div>

        <div class="row">
            <div class="col-md-12">

            <div class="box box-success">
                <div class="box-body">
                    <div class="ui secondary blue pointing tabular menu">
                        <a class="item active" data-tab="about">{{ __("About") }}</a>
                       
                    </div>
                    <div class="ui tab active" data-tab="about">
                        <div class="col-md-12">
                            <div class="tab-content">
                                <p class="license col-md-6" style="margin-bottom:0">
                                    <h3 style="margin-top:0" class="ui header">Workday a time clock application for employees</h3>
                                    <p>Easily track and manage employee work hours on jobs, improve your payroll process and collaborate with your timekeeping employees like never before😊.</p>
                                    <h4 class="ui header">Features</h4>
                                    <ul>
                                        <li>Cics Faculty Attendnace System</li>
                                        <li>Time and Attendance </li>
                                        <li>Employee Time Tracking</li>
                                        <li>Shift </li>
                                        <li>Leave </li>
                                        <li>Reporting and Analytics</li>
                                        <li>Manager and Employee self-service</li>
                                    </ul>
                                    <div class="footer-text">
                                        <div class="sub header">Version 1.1</div>
                                       
                                    </div>
                                </p>
                                <div class="ui section divider"></div>
                              
                            </div>
                        </div>
                    </div>

                   
                </div>
            </div>
            </div>
        </div>
    </div>

    @endsection
    
    @section('scripts')
    <script type="text/javascript">
        $('.menu .item').tab();
    </script>
    @endsection 