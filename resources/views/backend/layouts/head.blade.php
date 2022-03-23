<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"> <!-- Favicon-->
        <title>@yield('title')</title>
        <meta name="description" content="@yield('meta_description', config('app.name'))">
        <meta name="author" content="@yield('meta_author', config('app.name'))">
        @yield('meta')

        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')

        <link rel="stylesheet" href="{{ asset('backend/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/morrisjs/morris.min.css') }}" />
           
        {{-- summernote --}}
        <link rel="stylesheet" href="{{ asset('backend/assets/vendor/summernote/dist/summernote.css') }}">

        {{-- switch button --}}
        <link href="{{ asset('backend/assets/vendor/switch-button-bootstrap/css/bootstrap-switch-button.css') }}" rel="stylesheet">

        @if (Request::segment(2) === 'analytical' )
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/chartist/css/chartist.min.css') }}">
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}">
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/toastr/toastr.min.css') }}">
        @endif
                
        @if (Request::segment(2) === 'iot' )
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/morrisjs/morris.css') }}">
        @endif

        @if (Request::segment(2) === 'project' or Request::segment(2) === 'nestable' )
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/nestable/jquery-nestable.css') }}"/>
        @endif

        @if (Request::segment(2) === 'project' or Request::segment(2) === 'ecommerce' or Request::segment(2) === 'typography' or Request::segment(2) === 'progress-bars' or Request::segment(2) === 'data' or Request::segment(1) === 'file-manager' && Request::segment(2) === 'dashboard' or Request::segment(2) === 'teams-board' )
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}">
        @endif

        @if (Request::segment(2) === 'bitcoin' )
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/chartist/css/chartist.min.css') }}">
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.css') }}">
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
        @endif

		@if (Request::segment(2) === 'inbox' )
			<link rel="stylesheet" href="{{ asset('/backend/assets/css/inbox.css') }}"/>
        @endif
		
		@if (Request::segment(2) === 'chat' )
			<link rel="stylesheet" href="{{ asset('/backend/assets/css/chatapp.css') }}"/>
        @endif
		
		@if (Request::segment(2) === 'calendar' )
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/fullcalendar/fullcalendar.min.css') }}"/>
        @endif

        @if (Request::segment(2) === 'contact-list' or Request::segment(2) === 'contact-card' or Request::segment(2) === 'inbox' or Request::segment(2) === 'taskboard' or Request::segment(2) === 'dialogs' )
			<link rel="stylesheet" href="{{ asset('/backend/assets/vendor/sweetalert/sweetalert.css') }}"/>
        @endif

        @if (Request::segment(2) === 'taskboard' )
			<link rel="stylesheet" href="{{ asset('/backend/assets/vendor/nestable/jquery-nestable.css') }}"/>
			<link rel="stylesheet" href="{{ asset('/backend/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}"/>
        @endif

        @if (Request::segment(1) === 'file-manager' && Request::segment(2) === 'dashboard' )
			<link rel="stylesheet" href="{{ asset('/backend/assets/vendor/morrisjs/morris.css') }}"/>
        @endif

        @if (Request::segment(1) === 'blog' && Request::segment(2) === 'dashboard' )
			<link rel="stylesheet" href="{{ asset('/backend/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.css') }}"/>
			<link rel="stylesheet" href="{{ asset('/backend/assets/vendor/morrisjs/morris.css') }}"/>
        @endif

        @if (Request::segment(2) === 'new-post' )
			<link rel="stylesheet" href="{{ asset('/backend/assets/vendor/summernote/dist/summernote.css') }}"/>
        @endif

        @if (Request::segment(2) === 'notifications' )
			<link rel="stylesheet" href="{{ asset('/backend/assets/vendor/toastr/toastr.min.css') }}"/>
        @endif

        @if (Request::segment(2) === 'range-sliders' )
			<link rel="stylesheet" href="{{ asset('/backend/assets/vendor/rangeslider/css/ion.rangeSlider.css') }}"/>
			<link rel="stylesheet" href="{{ asset('/backend/assets/vendor/rangeslider/css/ion.rangeSlider.skinFlat.css') }}"/>
			<link rel="stylesheet" href="{{ asset('/backend/assets/vendor/material-rangeslider/style.css') }}"/>
			<link rel="stylesheet" href="{{ asset('/backend/assets/vendor/roundslider/roundslider.min.css') }}"/>
			<link rel="stylesheet" href="{{ asset('/backend/assets/vendor/roundslider/style.css') }}"/>
        @endif

        @if (Request::segment(2) === 'treeview' )
			<link rel="stylesheet" href="{{ asset('/backend/assets/vendor/toastr/toastr.min.css') }}"/>
			<link rel="stylesheet" href="{{ asset('/backend/assets/vendor/bootstrap-treeview/bootstrap-treeview.min.css') }}"/>
			<link rel="stylesheet" href="{{ asset('/backend/assets/vendor/jstree/themes/default/style.min.css') }}"/>
        @endif

        @if (Request::segment(2) === 'chart' )
			<link rel="stylesheet" href="{{ asset('/backend/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.css') }}"/>
			<link rel="stylesheet" href="{{ asset('/backend/assets/vendor/morrisjs/morris.min.css') }}"/>
			<link rel="stylesheet" href="{{ asset('/backend/assets/vendor/chartist/css/chartist.min.css') }}"/>
        @endif

        @if (Request::segment(2) === 'profile1' or Request::segment(2) === 'profile2' or Request::segment(2) === 'image-gallery1' )
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}"/>
        @endif
        
        @if (Request::segment(2) === 'image-gallery2' )
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/light-gallery/css/lightgallery.css') }}"/>
        @endif
        
        @if (Request::segment(2) === 'horizontal-timeline' )
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/horizontal-timeline/css/horizontal-timeline.css') }}"/>
        @endif
        
        @if (Request::segment(2) === 'validation' or Request::segment(2) === 'advance-elements' )
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}"/>
        @endif
        
        @if (Request::segment(2) === 'advance-elements' )
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" />
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}" />
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/multi-select/css/multi-select.css')}}" />
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" />
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/nouislider/nouislider.min.css')}}" />
        @endif
        
        @if (Request::segment(2) === 'dragdrop' )
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/dropify/css/dropify.min.css') }}"/>
        @endif
        
        @if (Request::segment(2) === 'cropping' )
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/cropper/cropper.min.css') }}"/>
        @endif
        
        @if (Request::segment(2) === 'summernote' )
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/summernote/dist/summernote.css') }}"/>
        @endif
        
        @if (Request::segment(2) === 'markdown' )
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/bootstrap-markdown/bootstrap-markdown.min.css') }}"/>
        @endif
        
        @if (Request::segment(2) === 'jquery-datatable' )
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}"/>
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}"/>
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}"/>
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/sweetalert/sweetalert.css') }}"/>
        @endif
        
        @if (Request::segment(2) === 'dragger' )
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/table-dragger/table-dragger.min.css') }}"/>
        @endif
        
        @if (Request::segment(2) === 'morris' )
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/morrisjs/morris.css') }}"/>
        @endif
        
        @if (Request::segment(2) === 'chartjs' )
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/chartist/css/chartist.min.css') }}"/>
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}"/>
        @endif
        
        @if (Request::segment(2) === 'c3' )
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/charts-c3/plugin.css') }}"/>
        @endif
        
        @if (Request::segment(2) === 'jvector' )
            <link rel="stylesheet" href="{{ asset('/backend/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css') }}"/>
        @endif

        <!-- Custom Css -->
        <link rel="stylesheet" href="{{ asset('/backend/assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('/backend/assets/css/color_skins.css') }}">

        @if (Request::segment(2) === 'list' or Request::segment(2) === 'detail' or Request::segment(2) === 'blog' or Request::segment(2) === 'profile2' )
			<link rel="stylesheet" href="{{ asset('/backend/assets/css/blog.css') }}"/>
        @endif

        @if (Request::segment(2) === 'ecommerce' )
			<link rel="stylesheet" href="{{ asset('/backend/assets/css/ecommerce.css') }}"/>
        @endif

        @stack('after-styles')

        @if (trim($__env->yieldContent('page-styles')))
            @yield('page-styles')
        @endif