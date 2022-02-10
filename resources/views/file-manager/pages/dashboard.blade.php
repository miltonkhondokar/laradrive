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
                            <i class="nav-icon far fa-file-pdf fa-5x pdf-file" style="margin: 0 auto !important; padding-top: 18px !important;"></i>

                        </div>
                    </div>
                    <div class="card-footer last-access-text-color">
                        Last Accessed - 52 mins ago
                    </div>
                </div>
                <div class="starred-wrapper">
                    <div class="starred"><i class="far fa-star" aria-hidden="true"></i></div>
                </div>
            </div>


            <div class="col-md-2 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                    </div>
                    <div class="card-body pt-0">

                        <div class="row" id="suggestDiv">
                            <i class="nav-icon far fa-file-word fa-5x word-file" style="margin: 0 auto !important; padding-top: 18px !important;"></i>

                        </div>
                    </div>
                    <div class="card-footer  last-access-text-color">
                        Last Accessed - 52 mins ago
                    </div>
                </div>
                <div class="starred-wrapper">
                    <div class="starred"><i class="far fa-star" aria-hidden="true"></i></div>
                </div>
            </div>


            <div class="col-md-2 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                    </div>
                    <div class="card-body pt-0">

                        <div class="row" id="suggestDiv">
                            <i class="nav-icon far fa-file-image fa-5x image-file" style="margin: 0 auto !important; padding-top: 18px !important;"></i>

                        </div>
                    </div>
                    <div class="card-footer  last-access-text-color">
                        Last Accessed - 52 mins ago
                    </div>
                </div>
                <div class="starred-wrapper">
                    <div class="starred"><i class="far fa-star" aria-hidden="true"></i></div>
                </div>
            </div>


            <div class="col-md-2 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                    </div>
                    <div class="card-body pt-0">

                        <div class="row" id="suggestDiv">
                            <i class="nav-icon far fa-file-audio fa-5x audio-file" style="margin: 0 auto !important; padding-top: 18px !important;"></i>

                        </div>
                    </div>
                    <div class="card-footer  last-access-text-color">
                        Last Accessed - 52 mins ago
                    </div>
                </div>
                <div class="starred-wrapper">
                    <div class="starred"><i class="far fa-star" aria-hidden="true"></i></div>
                </div>
            </div>



            <div class="col-md-2 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                    </div>
                    <div class="card-body pt-0">

                        <div class="row" id="suggestDiv">
                            <i class="nav-icon far fa-file-video fa-5x video-file" style="margin: 0 auto !important; padding-top: 18px !important;"></i>

                        </div>
                    </div>
                    <div class="card-footer  last-access-text-color">
                        Last Accessed - 52 mins ago
                    </div>
                </div>
                <div class="starred-wrapper">
                    <div class="starred"><i class="far fa-star" aria-hidden="true"></i></div>
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

                        </div>
                    </div>
                    <div class="card-footer  last-access-text-color">
                        Last Accessed - 52 mins ago
                    </div>
                </div>
                <div class="starred-wrapper">
                    <div class="starred"><i class="far fa-star" aria-hidden="true"></i></div>
                </div>
            </div>


        </div>




        <div class="padding-top"></div>
        <h2 id="bodyLabel">Folders</h2>
        <div class="row">

            <div class="col-sm-3 box">
                <div class="info-box bg-light">
                    <i class="nav-icon fas fa-folder fa-4x folder-color" style="padding-left: 10px;"></i>
                    <div class="info-box-content" style="overflow: hidden;">
                        <span class="info-box-text text-left text-muted"style="padding-left: 10px;">Test Folder</span>
                        <span class="info-box-number text-left text-muted mb-0"style="padding-left: 10px;"></span>
                    </div>

                </div>
                <div id="contextMenu" class="context-menu">
                    <ul class="menu">
                        <li class="addToStarred"><a href="#"><i class="nav-icon far fa-star" aria-hidden="true" style="padding-right: 5px;"></i> Add to Starred</a></li>
                        <li class="rename" data-toggle="modal" data-target="#exampleModalCenter"><a href="#"><i class="nav-icon far fa-edit" aria-hidden="true" style="padding-right: 5px;"></i> Rename</a></li>
                        <li class="move"><a href="#"><i class="nav-icon fas fa-cut" aria-hidden="true" style="padding-right: 5px;"></i> Move to</a></li>
                        <li class="download"  style="border-top: 1px solid rgba(0,0,0,0.08);"><a href="#"><i class="nav-icon fas fa-download" aria-hidden="true" style="padding-right: 5px;"></i> Download</a></li>
                        <li class="viewDetails"><a href="#"><i class="nav-icon fas fa-info-circle" aria-hidden="true" style="padding-right: 5px;"></i> View Details</a></li>
                        <li class="trash"  style="border-top: 1px solid rgba(0,0,0,0.08);"><a href="#"><i class="nav-icon far fa-trash-alt" aria-hidden="true" style="padding-right: 5px;"></i> Remove</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="info-box bg-light">
                    <i class="nav-icon fas fa-folder fa-4x folder-color" style="padding-left: 10px;"></i>
                    <div class="info-box-content" style="overflow: hidden;">
                        <span class="info-box-text text-left text-muted"style="padding-left: 10px;">Test Folder</span>
                        <span class="info-box-number text-left text-muted mb-0"style="padding-left: 10px;"></span>
                    </div>

                </div>
            </div>

            <div class="col-sm-3">
                <div class="info-box bg-light">
                    <i class="nav-icon fas fa-folder fa-4x folder-color" style="padding-left: 10px;"></i>
                    <div class="info-box-content" style="overflow: hidden;">
                        <span class="info-box-text text-left text-muted"style="padding-left: 10px;">Test Folder</span>
                        <span class="info-box-number text-left text-muted mb-0"style="padding-left: 10px;"></span>
                    </div>

                </div>
            </div>

            <div class="col-sm-3">
                <div class="info-box bg-light">
                    <i class="nav-icon fas fa-folder fa-4x folder-color" style="padding-left: 10px;"></i>
                    <div class="info-box-content" style="overflow: hidden;">
                        <span class="info-box-text text-left text-muted"style="padding-left: 10px;">Test Folder</span>
                        <span class="info-box-number text-left text-muted mb-0"style="padding-left: 10px;"></span>
                    </div>

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

    <script>
document.querySelector(".box").addEventListener("contextmenu", function (e) {
    e.preventDefault();
    var contextMenu = document.querySelector(".context-menu");
    posX = (e.clientX + 150 > document.documentElement.clientWidth) ? e.clientX - 150 : e.clientX,
        posY = (e.clientY + 140 + 55 > document.documentElement.clientHeight) ? e.clientY - 140 : e.clientY;
    contextMenu.style.top = posY + "px";
    contextMenu.style.left = posX + "px";
    contextMenu.classList.add("shown");
});


document.addEventListener("click", function (e) {
    var elems2hide = document.querySelectorAll(".shown");
    for (var i = 0, length = elems2hide.length; i < length; i++) {
        elems2hide[i].classList.remove("shown");
    }
});
    </script>



    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
