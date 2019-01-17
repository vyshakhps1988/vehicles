<?php

$success    =   Session::get('success');
$error      =   Session::get('error');


?>

@extends('layouts.master')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-4"></div>
            <div class="col-sm-6">
                <form class="form-horizontal" name="addCarsForm" method="POST" action="handleAddCars" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group"></div>
                    <div class="form-group"></div>
                    <div class="form-group"></div>


                    <div class="form-group">
                        <label class="col-sm-2">Car Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="car_name" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2">Brand</label>
                        <div class="col-sm-6">
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
                        <div class="col-sm-6">
                            <input type="file" name="image[]" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2"></label>
                        <div class="col-sm-6">
                            <input type="submit" name="btn_save" class="btn btn-primary" value="Save" style="width:100%">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-12">
                            @include('includes.alert_message.alert_message',['error'=>$error,'success'=>$success])
                        </div>
                    </div>




                </form>
            </div>




        </div>
    </div>
</div>





@endsection
