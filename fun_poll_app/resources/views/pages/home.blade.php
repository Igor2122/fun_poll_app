@extends('layouts.app')

@section('content')
<h1 class="display-4 text-center">List of polls</h1>
<div class="container">
        <div class="col-md-4"></div>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-line-chart"></span> Please Rate our service</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value=""> Excellent
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value=""> Good
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value=""> Satisfactory
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value=""> Needs Improvement
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value=""> Poor
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer text-center">
                    <button type="button" class="btn btn-primary btn-block btn-sm">
                        Vote</button>
                    <a href="#" class="small">View Result</a>
                </div>
            </div>
        </div>

        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-line-chart"></span> Please Rate our service</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value=""> Excellent
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value=""> Good
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value=""> Satisfactory
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value=""> Needs Improvement
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value=""> Poor
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer text-center">
                    <button type="button" class="btn btn-primary btn-block btn-sm">
                        Vote</button>
                    <a href="#" class="small">View Result</a>
                </div>
            </div>
        </div>


    </div>

    
 
        

@endsection