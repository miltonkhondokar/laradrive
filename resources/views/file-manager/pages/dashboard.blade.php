@extends('file-manager.master-layout')
@section('title','My Drive')
@section('bread','Dashboard')
@section('current_location','My Drive')


@section('content')
    <hr style="margin-top: -5px !important;">
<section class="content">
    <div class="container-fluid">

        <div class="padding-top"></div>
        <h2 id="bodyLabel">Suggested</h2>
        <div class="row">

            <div class="col-md-2 d-flex align-items-stretch flex-column">
                {{--<span id="customRibbon"><i class="far fa-star"></i></span>--}}
                <div class="card bg-light d-flex flex-fill"  style="position: unset;">
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




        <div class="padding-top"></div>
        <h2 id="bodyLabel">Folders</h2>
        <div class="row">
            <div class="col-sm-2">
                <div class="info-box bg-light">
                    <i class="nav-icon far fa-folder fa-4x" style="padding-left: 10px;"></i>
                    <div class="info-box-content">
                        <span class="info-box-text text-left text-muted"style="padding-left: 10px;">Estimated budget</span>
                        <span class="info-box-number text-left text-muted mb-0"style="padding-left: 10px;">2300</span>
                    </div>
                    <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="info-box bg-light">
                    <i class="nav-icon far fa-folder fa-4x" style="padding-left: 10px;"></i>
                    <div class="info-box-content">
                        <span class="info-box-text text-left text-muted"style="padding-left: 10px;">Estimated budget</span>
                        <span class="info-box-number text-left text-muted mb-0"style="padding-left: 10px;">2300</span>
                    </div>
                    <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="info-box bg-light">
                    <i class="nav-icon far fa-folder fa-4x" style="padding-left: 10px;"></i>
                    <div class="info-box-content">
                        <span class="info-box-text text-left text-muted"style="padding-left: 10px;">Estimated budget</span>
                        <span class="info-box-number text-left text-muted mb-0"style="padding-left: 10px;">2300</span>
                    </div>
                    <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="info-box bg-light">
                    <i class="nav-icon far fa-folder fa-4x" style="padding-left: 10px;"></i>
                    <div class="info-box-content">
                        <span class="info-box-text text-left text-muted"style="padding-left: 10px;">Estimated budget</span>
                        <span class="info-box-number text-left text-muted mb-0"style="padding-left: 10px;">2300</span>
                    </div>
                    <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="info-box bg-light">
                    <i class="nav-icon far fa-folder fa-4x" style="padding-left: 10px;"></i>
                    <div class="info-box-content">
                        <span class="info-box-text text-left text-muted"style="padding-left: 10px;">Estimated budget</span>
                        <span class="info-box-number text-left text-muted mb-0"style="padding-left: 10px;">2300</span>
                    </div>
                    <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="info-box bg-light">
                    <i class="nav-icon far fa-folder fa-4x" style="padding-left: 10px;"></i>
                    <div class="info-box-content">
                        <span class="info-box-text text-left text-muted"style="padding-left: 10px;">Estimated budget</span>
                        <span class="info-box-number text-left text-muted mb-0"style="padding-left: 10px;">2300</span>
                    </div>
                    <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                </div>
            </div>



        </div>






        <div class="padding-top"></div>
        <h2 id="bodyLabel">Files</h2>
        <div class="row">

            <div class="col-md-2 d-flex align-items-stretch flex-column">
                {{--<span id="customRibbon"><i class="far fa-star"></i></span>--}}
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row" id="fileDiv">
                            <i class="nav-icon far fa-file-pdf fa-5x" style="margin: 0 auto !important; padding-top: 60px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                </div>
            </div>


            <div class="col-md-2 d-flex align-items-stretch flex-column">
                {{--<span id="customRibbon"><i class="far fa-star"></i></span>--}}
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row" id="fileDiv">
                            <i class="nav-icon far fa-file-pdf fa-5x" style="margin: 0 auto !important; padding-top: 60px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                </div>
            </div>


            <div class="col-md-2 d-flex align-items-stretch flex-column">
                {{--<span id="customRibbon"><i class="far fa-star"></i></span>--}}
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row" id="fileDiv">
                            <i class="nav-icon far fa-file-pdf fa-5x" style="margin: 0 auto !important; padding-top: 60px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                </div>
            </div>


            <div class="col-md-2 d-flex align-items-stretch flex-column">
                {{--<span id="customRibbon"><i class="far fa-star"></i></span>--}}
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row" id="fileDiv">
                            <i class="nav-icon far fa-file-pdf fa-5x" style="margin: 0 auto !important; padding-top: 60px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                </div>
            </div>



            <div class="col-md-2 d-flex align-items-stretch flex-column">
                {{--<span id="customRibbon"><i class="far fa-star"></i></span>--}}
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row" id="fileDiv">
                            <i class="nav-icon far fa-file-pdf fa-5x" style="margin: 0 auto !important; padding-top: 60px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                </div>
            </div>



            <div class="col-md-2 d-flex align-items-stretch flex-column">
                {{--<span id="customRibbon"><i class="far fa-star"></i></span>--}}
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row" id="fileDiv">
                            <i class="nav-icon far fa-file-pdf fa-5x" style="margin: 0 auto !important; padding-top: 60px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                </div>
            </div>


        </div>


    </div>
</section>
@endsection
