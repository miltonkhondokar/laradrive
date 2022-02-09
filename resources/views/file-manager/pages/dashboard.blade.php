@extends('file-manager.master-layout')
@section('title','My Drive')
@section('bread','Dashboard')
@section('current_location','My Drive')


@section('content')


    <hr style="margin-top: -5px !important;">
<section class="content">
    <div class="container-fluid">

        <div class="right-click-menu">
            <ul>
                <li><i class="nav-icon far fa-star"></i><p>Mark as important</p></li>
                <li><i class="nav-icon far fa-star"></i><p>Mark as important</p></li>
                <li>Share</li>
                <li>Copy To</li>
                <li>Move To</li>
                <li>Delete</li>
                <li>Rename</li>
                <li>Download</li>
                <li>View Details</li>
            </ul>
        </div>


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
                            <i class="nav-icon far fa-file-pdf fa-5x pdf-file" style="margin: 0 auto !important; padding-top: 18px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer last-access-text-color">
                        Last Accessed - 52 mins ago
                    </div>
                </div>
            </div>


            <div class="col-md-2 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                    </div>
                    <div class="card-body pt-0">

                        <div class="row" id="suggestDiv">
                            <i class="nav-icon far fa-file-word fa-5x word-file" style="margin: 0 auto !important; padding-top: 18px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer  last-access-text-color">
                        Last Accessed - 52 mins ago
                    </div>
                </div>
            </div>


            <div class="col-md-2 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                    </div>
                    <div class="card-body pt-0">

                        <div class="row" id="suggestDiv">
                            <i class="nav-icon far fa-file-image fa-5x image-file" style="margin: 0 auto !important; padding-top: 18px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer  last-access-text-color">
                        Last Accessed - 52 mins ago
                    </div>
                </div>
            </div>


            <div class="col-md-2 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                    </div>
                    <div class="card-body pt-0">

                        <div class="row" id="suggestDiv">
                            <i class="nav-icon far fa-file-audio fa-5x audio-file" style="margin: 0 auto !important; padding-top: 18px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer  last-access-text-color">
                        Last Accessed - 52 mins ago
                    </div>
                </div>
            </div>



            <div class="col-md-2 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                    </div>
                    <div class="card-body pt-0">

                        <div class="row" id="suggestDiv">
                            <i class="nav-icon far fa-file-video fa-5x video-file" style="margin: 0 auto !important; padding-top: 18px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer  last-access-text-color">
                        Last Accessed - 52 mins ago
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
                            <i class="nav-icon far fa-file-excel fa-5x excel-file" style="margin: 0 auto !important; padding-top: 18px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer  last-access-text-color">
                        Last Accessed - 52 mins ago
                    </div>
                </div>
            </div>


        </div>




        <div class="padding-top"></div>
        <h2 id="bodyLabel">Folders</h2>
        <div class="row">

            <div class="col-sm-2">
                <div class="info-box bg-light">
                    <i class="nav-icon fas fa-folder fa-4x folder-color" style="padding-left: 10px;"></i>
                    <div class="info-box-content" style="overflow: hidden;">
                        <span class="info-box-text text-left text-muted"style="padding-left: 10px;">Test Folder</span>
                        <span class="info-box-number text-left text-muted mb-0"style="padding-left: 10px;"></span>
                    </div>
                    <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="info-box bg-light">
                    <i class="nav-icon fas fa-folder fa-4x folder-color" style="padding-left: 10px;"></i>
                    <div class="info-box-content" style="overflow: hidden;">
                        <span class="info-box-text text-left text-muted"style="padding-left: 10px;">Test Folder</span>
                        <span class="info-box-number text-left text-muted mb-0"style="padding-left: 10px;"></span>
                    </div>
                    <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="info-box bg-light">
                    <i class="nav-icon fas fa-folder fa-4x folder-color" style="padding-left: 10px;"></i>
                    <div class="info-box-content" style="overflow: hidden;">
                        <span class="info-box-text text-left text-muted"style="padding-left: 10px;">Test Folder</span>
                        <span class="info-box-number text-left text-muted mb-0"style="padding-left: 10px;"></span>
                    </div>
                    <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="info-box bg-light">
                    <i class="nav-icon fas fa-folder fa-4x folder-color" style="padding-left: 10px;"></i>
                    <div class="info-box-content" style="overflow: hidden;">
                        <span class="info-box-text text-left text-muted"style="padding-left: 10px;">Test Folder</span>
                        <span class="info-box-number text-left text-muted mb-0"style="padding-left: 10px;"></span>
                    </div>
                    <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="info-box bg-light">
                    <i class="nav-icon fas fa-folder fa-4x folder-color" style="padding-left: 10px;"></i>
                    <div class="info-box-content" style="overflow: hidden;">
                        <span class="info-box-text text-left text-muted"style="padding-left: 10px;">Test Folder</span>
                        <span class="info-box-number text-left text-muted mb-0"style="padding-left: 10px;"></span>
                    </div>
                    <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="info-box bg-light">
                    <i class="nav-icon fas fa-folder fa-4x folder-color" style="padding-left: 10px;"></i>
                    <div class="info-box-content" style="overflow: hidden;">
                        <span class="info-box-text text-left text-muted"style="padding-left: 10px;">Test Folder</span>
                        <span class="info-box-number text-left text-muted mb-0"style="padding-left: 10px;"></span>
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
                            <i class="nav-icon far fa-file-pdf fa-5x pdf-file" style="margin: 0 auto !important; padding-top: 60px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer last-access-text-color">
                        File Name - Test File<br>
                        Created on - 09-Feb-2022 14:06:00
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
                            <i class="nav-icon fas fa-file-csv fa-5x csv-file" style="margin: 0 auto !important; padding-top: 60px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer last-access-text-color">
                        File Name - Test File<br>
                        Created on - 09-Feb-2022 14:06:00
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
                            <i class="nav-icon far fa-file-powerpoint fa-5x powerpnt-file" style="margin: 0 auto !important; padding-top: 60px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer last-access-text-color">
                        File Name - Test File<br>
                        Created on - 09-Feb-2022 14:06:00
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
                            <i class="nav-icon far fa-file-image fa-5x image-file" style="margin: 0 auto !important; padding-top: 60px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer last-access-text-color">
                         File Name - Test File<br>
                        Created on - 09-Feb-2022 14:06:00
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
                            <i class="nav-icon far fa-file-word fa-5x word-file" style="margin: 0 auto !important; padding-top: 60px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer last-access-text-color">
                        File Name - Test File<br>
                        Created on - 09-Feb-2022 14:06:00
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
                            <i class="nav-icon far fa-file-audio fa-5x audio-file" style="margin: 0 auto !important; padding-top: 60px !important;"></i>
                            <i class="fas fa-ellipsis-v" style="color: #bbbbbbed !important;"></i>
                        </div>
                    </div>
                    <div class="card-footer last-access-text-color">
                        File Name - Test File<br>
                        Created on - 09-Feb-2022 14:06:00
                    </div>
                </div>
            </div>


        </div>


    </div>
</section>
@endsection
