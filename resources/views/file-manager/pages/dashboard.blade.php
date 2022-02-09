@extends('file-manager.master-layout')
@section('title','Dashboard')
@section('bread','Dashboard')
@section('current_location','Dashboard')


@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">




            <div class="col-md-2 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                    </div>
                    <div class="card-body pt-0">

                        <div class="row" id="suggestDiv">
                            <i class="nav-icon far fa-file-pdf fa-5x" style="margin: 0 auto !important; padding-top: 18px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                </div>
            </div>




            <div class="col-md-2 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                    </div>
                    <div class="card-body pt-0">

                        <div class="row" id="suggestDiv">
                            <i class="nav-icon far fa-file-word fa-5x" style="margin: 0 auto !important; padding-top: 18px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                </div>
            </div>




            <div class="col-md-2 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                    </div>
                    <div class="card-body pt-0">

                        <div class="row" id="suggestDiv">
                            <i class="nav-icon far fa-file-image fa-5x" style="margin: 0 auto !important; padding-top: 18px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                </div>
            </div>




            <div class="col-md-2 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                    </div>
                    <div class="card-body pt-0">

                        <div class="row" id="suggestDiv">
                            <i class="nav-icon far fa-file-audio fa-5x" style="margin: 0 auto !important; padding-top: 18px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                </div>
            </div>




            <div class="col-md-2 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                    </div>
                    <div class="card-body pt-0">

                        <div class="row" id="suggestDiv">
                            <i class="nav-icon far fa-file-video fa-5x" style="margin: 0 auto !important; padding-top: 18px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                </div>
            </div>




            <div class="col-md-2 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                    </div>
                    <div class="card-body pt-0">

                        <div class="row" id="suggestDiv">
                            {{--<i class="fas fa-file-csv"></i>--}}
                            <i class="nav-icon far fa-file-excel fa-5x" style="margin: 0 auto !important; padding-top: 18px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                </div>
            </div>








        </div>


        <div class="row">




        </div>
    </div>
</section>
@endsection
