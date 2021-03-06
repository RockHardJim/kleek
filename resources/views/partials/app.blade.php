<!DOCTYPE html>
<html>
<head>
    <title>{{ env('APP_NAME') }} | Dashboard</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta name="description" content="{{ env('APP_NAME') }}">
    <meta name="author" content="{{ env('APP_NAME') }}">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css" >
    <link href="{{ asset('platform/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('platform/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('platform/bower_components/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('platform/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('platform/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('platform/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('platform/bower_components/slick-carousel/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('platform/css/main.css?version=4.5.0') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/notie/dist/notie.min.css">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <link href="{{ asset('js/doka.min.css') }}" rel="stylesheet">

    <style>
        /* override styles here */
        .notie-container {
            box-shadow: none;
        }
    </style>
    @livewireStyles
</head>
    @yield('content')

<script src="{{ asset('platform/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/moment/moment.js') }}"></script>
<script src="{{ asset('platform/bower_components/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap-validator/dist/validator.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('platform/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/dropzone/dist/dropzone.js') }}"></script>
<script src="{{ asset('platform/bower_components/editable-table/mindmup-editabletable.js') }}"></script>
<script src="{{ asset('platform/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/tether/dist/js/tether.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/slick-carousel/slick/slick.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap/js/dist/util.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap/js/dist/alert.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap/js/dist/button.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap/js/dist/carousel.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap/js/dist/collapse.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap/js/dist/dropdown.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap/js/dist/modal.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap/js/dist/tab.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap/js/dist/tooltip.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap/js/dist/popover.js') }}"></script>
<script src="{{ asset('platform/js/demo_customizer.js?version=4.5.0') }}"></script>
<script src="{{ asset('platform/js/main.js?version=4.5.0') }}"></script>
<script src="{{ asset('js/doka.min.js') }}"></script>
<script src="https://unpkg.com/filepond-plugin-file-metadata/dist/filepond-plugin-file-metadata.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-rename/dist/filepond-plugin-file-rename.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-filter/dist/filepond-plugin-image-filter.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-validate-size/dist/filepond-plugin-image-validate-size.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.js"></script>
<script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0"></script>



<script src="https://unpkg.com/filepond/dist/filepond.js"></script>

<!-- include FilePond plugins -->
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>

<!-- include FilePond jQuery adapter -->
<script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>
<script src="https://unpkg.com/notie"></script>
@yield('javascript')
@livewireScripts
</body>
</html>
