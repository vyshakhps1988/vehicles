@extends('layouts.master')
@section('content')
    <header>
        <nav>
            <div >
                <a>
                    <span>Vehicles </span>
                </a>
                <div>
                    <div class="container" style="width: 100%">
                        <div class="row">

                            <div class="form-group">
                                <div align="center">
                                    <button class="btn btn-default filter-button" data-filter="all">All</button>
                                    <button class="btn btn-default filter-button" data-filter="maruthi">Maruthi</button>
                                    <button class="btn btn-default filter-button" data-filter="toyota">Toyota</button>
                                    <button class="btn btn-default filter-button" data-filter="benz">Mercedes</button>
                                    <button class="btn btn-default filter-button" data-filter="bmw">BMW</button>
                                    <button class="btn btn-default filter-button" data-filter="porche">Porche</button>
                                </div>
                            </div>



                            @if(!empty($vehicleData))
                                @foreach($vehicleData as $key => $vehicleDataVal)
                                    <tr>
                                        <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter {{$vehicleDataVal['brand']}}">
                                            <img src="../assets/images/vehicles/{{$vehicleDataVal['image']}}" class="img-responsive" height = "20px" width = "20px">
                                            <span>{{$vehicleDataVal['car_name']}}</span>
                                        </div>

                                    </tr>
                                @endforeach

                            @endif



                        </div>
                    </div>


                </div>
            </div>

        </nav>
    </header>

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            vehicleElements.init();
        });
    </script>
@endsection



