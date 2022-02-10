<!DOCTYPE html>
<html lang="en">
@include('file-manager.layouts.header')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @include('file-manager.layouts.preloader')

    @include('file-manager.layouts.nav')

    @include('file-manager.layouts.sidebar')

    <div class="content-wrapper">

        @include('file-manager.layouts.content_header')

        @yield('content')

        <div class="padding-top"></div>

        @include('file-manager.layouts.create_file_modal')
        @include('file-manager.layouts.create_folder_modal')

    </div>


    @include('file-manager.layouts.footer')

</div>

@include('file-manager.layouts.js')
</body>
</html>
