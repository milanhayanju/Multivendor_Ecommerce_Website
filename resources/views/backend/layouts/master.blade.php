<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('backend.layouts.head')
    </head>
    
    <?php 
        $setting = !empty($_GET['theme']) ? $_GET['theme'] : '';
        $theme = "theme-cyan";
        $menu = "";
        if ($setting == 'p') {
            $theme = "theme-purple";
        } else if ($setting == 'b') {
            $theme = "theme-blue";
        } else if ($setting == 'g') {
            $theme = "theme-green";
        } else if ($setting == 'o') {
            $theme = "theme-orange";
        } else if ($setting == 'bl') {
            $theme = "theme-blush";
        } else {
             $theme = "theme-cyan";
        }

    ?>

    <body class="<?= $theme ?>">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img src="{{asset('backend/assets/img/loader.png')}}" width="100" height="100" alt="Lucid"></div>
                <p>Please wait...</p>        
            </div>
        </div>

        <div id="wrapper">

            @include('backend.layouts.navbar')
            @include('backend.layouts.sidebar')

            <div id="main-content">
                <div class="container-fluid">
                    <div class="block-header">
                        <div class="row">
                            <div class="col-lg-5 col-md-8 col-sm-12">                        
                                <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> @yield('title')</h2>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin') }}"><i class="icon-home"></i></a></li>
                                    @if (trim($__env->yieldContent('parentPageTitle')))
                                       <li class="breadcrumb-item">@yield('parentPageTitle')</li>
                                    @endif
                                    @if (trim($__env->yieldContent('title')))
                                        <li class="breadcrumb-item active">@yield('title')</li>
                                    @endif
                                </ul>
                            </div>            
                            
                        </div>
                    </div>  
                </div>   
                @yield('content')
            </div>
        </div>

        @include('backend.layouts.footer')
    </body>
</html>
