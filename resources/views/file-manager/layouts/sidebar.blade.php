


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link" style="padding: 0.5rem 0.5rem !important;">
        <img src="{{ asset('file-manager/dist/img/drive.png') }}" alt="Drive Logo" style="width: 40px; height: 40px;">
        <span class="brand-text font-weight-light"  id="driveLogoTitle">Drive</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <hr>
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-plus"></i>

                        <p>
                            New
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link active">
                                <i class="nav-icon far fa-file"></i>
                                <p>File</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">
                                <i class="nav-icon far fa-folder"></i>
                                <p>Folder</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <hr>

                {{--<li class="nav-header">MULTI LEVEL EXAMPLE</li>--}}
                <li class="nav-item">
                    <a href="#" class="nav-link"  id="ChangeFolderIcon">
                        {{--<i class="nav-icon fas fa-disc-drive"></i>--}}
                        {{--<i class="nav-icon fas fa-hdd"></i>--}}
                        <i class="nav-icon far fa-folder" id="folderOpenClose"></i>
                        {{--<i class="far fa-folder-open"></i>--}}
                        <p>
                            My Drive
                            <i class="right fas fa-angle-left" ></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Level 2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Level 2
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-clock"></i>
                        <p>Recent</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-star"></i>
                        <p>Starred</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-trash-alt"></i>
                        <p>Trash</p>
                    </a>
                </li>





                <li class="nav-header" style="font-size: 13px; !important; color: #5f6368 !important;">FILE LIBRARY</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-file"></i>
                        <p class="text">Documents</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-file-image"></i>
                        <p class="text">Image</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-music"></i>
                        <p class="text">Audio</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-video"></i>
                        <p class="text">Video</p>
                    </a>
                </li>





                <li class="nav-header" style="font-size: 13px; !important; color: #5f6368 !important;">STORAGE INFORMATION</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <svg class="a-s-fa-Ha-pa a-ml-da-Q-c nav-icon " width="24px" height="24px" viewBox="0 0 24 24" focusable="false" fill="#6f6f6f"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM19 18H6c-2.21 0-4-1.79-4-4s1.79-4 4-4h.71C7.37 7.69 9.48 6 12 6c3.04 0 5.5 2.46 5.5 5.5v.5H19c1.66 0 3 1.34 3 3s-1.34 3-3 3z"></path></svg>
                        {{--<i class="nav-icon fas fa-cloud text-info"></i>--}}
                        <p class="text">Storage</p>
                    </a>
                </li>
                <div class="progress"  style="height: 10px !important; width: 80% !important;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"  style="width: 20%;">25%</div>
                </div>
                <p><code>15 GB Used</code></p>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>


{{--<script>--}}
    {{--function changeFontawesomeIcon(x) {--}}
        {{--onclick="changeFontawesomeIcon(this)";--}}
        {{--x.classList.toggle("fa-folder-open");--}}
    {{--}--}}
{{--</script>--}}
