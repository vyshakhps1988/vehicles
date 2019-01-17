<?php

$success    =   Session::get('success');
$error      =   Session::get('error');


?>

@extends('layouts.master')

<style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
        margin-bottom: 0;
        border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
        padding-top: 20px;
        background-color: #f1f1f1;
        height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
        background-color: #555;
        color: white;
        padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
        .sidenav {
            height: auto;
            padding: 15px;
        }
        .row.content {height:auto;}
    }
</style>

@section('content')


    <header>
        <nav>
            <div >
                <a>
                    <span>Add Cars </span>
                </a>
            </div>
        </nav>
    </header>

    <div class="container-fluid text-left">
        <div class="row">
            <div class="form-group">
                <div class="col-sm-12">
                    <form class="form-horizontal" name="addCarsForm" method="POST" action="handleAddCars" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group"></div>
                        <div class="form-group"></div>
                        <div class="form-group"></div>
                        <div class="form-group">
                            <label class="col-sm-2">Car Name</label>
                            <div class="col-sm-6 col-md-6 col-lg-4 ">
                                <input type="text" name="car_name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2">Brand</label>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <select class="form-control" name = "brand">
                                    <option value="0">Choose a brand</option>
                                    <option value="maruthi">Maruthi</option>
                                    <option value="toyota">Toyota</option>
                                    <option value="benz">Mercedes</option>
                                    <option value="bmw">BMW</option>
                                    <option value="porche">Porche</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2">Image</label>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <input type="file" name="image[]" class="form-control" style="padding:0 0 0">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2"></label>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <input type="submit" name="btn_save" class="btn btn-primary" value="Save" style="width:100%">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                @include('includes.alert_message.alert_message',['error'=>$error,'success'=>$success])
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
