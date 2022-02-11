@extends('file-manager.master-layout')
@section('title','File Explorer')
@section('bread','Dashboard')
@section('current_location','File Explorer')


@section('content')


    <hr style="margin-top: -5px !important;">
    <section class="content">
        <div class="container-fluid">


            {{--@if (count($errors) > 0)--}}
                {{--<div class = "alert alert-danger">--}}
                    {{--<ul>--}}
                        {{--@foreach ($errors->all() as $error)--}}
                            {{--<li>{{ $error }}</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--@endif--}}

            <div class="padding-top"></div>
            <h2 id="bodyLabel">Folders</h2>
            <div class="row">

                @foreach($folders as $key=> $folder)

                <div class="col-sm-3 box">
                    <div class="info-box bg-light">
                        <i class="nav-icon fas fa-folder fa-4x folder-color" style="padding-left: 10px;"></i>
                        <div class="info-box-content" style="overflow: hidden;">
                            <span class="info-box-text text-left text-muted"style="padding-left: 10px;">{{ $folder['folder_name'] }}</span>
                            <span class="info-box-number text-left text-muted mb-0"style="padding-left: 10px;"></span>
                        </div>

                    </div>
                    <div id="contextMenu" class="context-menu" data-folderId="contextMenu_{{$key}}">
                        <ul class="menu">
                            <li><a href="{{ url('file-explorer') }}"><i class="nav-icon far fa-folder-open" aria-hidden="true" style="padding-right: 5px;"></i> Open</a></li>
                            <li class="addToStarred"><a href="#"><i class="nav-icon far fa-star" aria-hidden="true" style="padding-right: 5px;"></i> Add to Starred</a></li>
                            <li class="rename" data-toggle="modal" data-target="#exampleModalCenter"><a href="#"><i class="nav-icon far fa-edit" aria-hidden="true" style="padding-right: 5px;"></i> Rename</a></li>
                            <li class="move"><a href="#"><i class="nav-icon far fa-folder" aria-hidden="true" style="padding-right: 5px;"></i> Move to</a></li>
                            <hr style="margin-top: 0; margin-bottom: 0; padding-bottom: 5px;">
                            <li class="download"><a href="#"><i class="nav-icon fas fa-download" aria-hidden="true" style="padding-right: 5px;"></i> Download</a></li>
                            <li class="viewDetails"><a href="#"><i class="nav-icon fas fa-info-circle" aria-hidden="true" style="padding-right: 5px;"></i> View Details</a></li>
                            <hr style="margin-top: 0; margin-bottom: 0; padding-bottom: 5px;">
                            <li class="trash"><a href="#"><i class="nav-icon far fa-trash-alt" aria-hidden="true" style="padding-right: 5px;"></i> Remove</a></li>
                        </ul>
                    </div>
                </div>
                @endforeach



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
