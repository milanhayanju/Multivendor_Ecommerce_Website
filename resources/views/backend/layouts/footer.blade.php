       <!-- Scripts -->
       @stack('before-scripts')

       <script src="{{ asset('/backend/assets/bundles/libscripts.bundle.js') }}"></script>    
       <script src="{{ asset('/backend/assets/bundles/vendorscripts.bundle.js') }}"></script>
       
       <script src="{{ asset('/backend/assets/bundles/morrisscripts.bundle.js') }}"></script><!-- Morris Plugin Js -->
       <script src="{{ asset('/backend/assets/bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->
       <script src="{{ asset('/backend/assets/bundles/knob.bundle.js') }}"></script>
       
       @if (Request::segment(2) === 'analytical' )
           <script src="{{ asset('/backend/assets/bundles/chartist.bundle.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/toastr/toastr.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/index.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'iot' )
           <script src="{{ asset('/backend/assets/bundles/morrisscripts.bundle.js')}}"></script>
           <script src="{{ asset('/backend/assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js')}}"></script>
           <script src="{{ asset('/backend/assets/vendor/raphael/raphael-min.js')}}"></script>
           <script src="{{ asset('/backend/assets/js/iot.js')}}"></script>
       @endif

       @if (Request::segment(2) === 'bitcoin' )
           <script src="{{ asset('/backend/assets/bundles/jvectormap.bundle.js') }}"></script>
           <script src="{{ asset('/backend/assets/bundles/chartist.bundle.js') }}"></script>
           <script src="{{ asset('/backend/assets/bundles/datatablescripts.bundle.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/tables/jquery-datatable.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/index7.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'demographic' )
           <script src="{{ asset('/backend/assets/js/widgets/infobox/infobox-1.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/index2.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'hospital' )
           <script src="{{ asset('/backend/assets/js/index3.js') }}"></script>
       @endif
       
       @if (Request::segment(2) === 'university' )
           <script src="{{ asset('/backend/assets/js/index4.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'real-estate' )
           <script src="{{ asset('/backend/assets/js/index5.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'ecommerce' )
           <script src="{{ asset('/backend/assets/js/index8.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'project' )
           <script src="{{ asset('/backend/assets/vendor/nestable/jquery.nestable.js') }}"></script> <!-- Jquery Nestable -->
           <script src="{{ asset('/backend/assets/js/pages/ui/sortable-nestable.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/index6.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'inbox' or Request::segment(2) === 'contact-list' or Request::segment(2) === 'taskboard' or Request::segment(2) === 'dialogs' )
           <script src="{{ asset('/backend/assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/ui/dialogs.js') }}"></script>
       @endif
       
       @if (Request::segment(2) === 'calendar' )
           <script src="{{ asset('/backend/assets/bundles/fullcalendarscripts.bundle.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/fullcalendar/fullcalendar.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/calendar.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'contact-card' )
           <script src="{{ asset('/backend/assets/bundles/easypiechart.bundle.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'taskboard' )
           <script src="{{ asset('/backend/assets/vendor/nestable/jquery.nestable.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/ui/sortable-nestable.js') }}"></script>
       @endif

       @if (Request::segment(1) === 'file-manager' && Request::segment(2) === 'dashboard' )
           <script src="{{ asset('/backend/assets/js/pages/file/filemanager.js') }}"></script>
       @endif

       @if (Request::segment(1) === 'blog' && Request::segment(2) === 'dashboard' )
           <script src="{{ asset('/backend/assets/js/pages/blog.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'new-post' )
           <script src="{{ asset('/backend/assets/vendor/summernote/dist/summernote.js') }}"></script>
       @endif
       
       @if (Request::segment(2) === 'notifications' )
           <script src="{{ asset('/backend/assets/vendor/toastr/toastr.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'nestable' )
           <script src="{{ asset('/backend/assets/vendor/nestable/jquery.nestable.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/ui/sortable-nestable.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'range-sliders' )
           <script src="{{ asset('/backend/assets/vendor/rangeslider/js/ion.rangeSlider.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/roundslider/roundslider.min.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/range-sliders.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/material-rangeslider/mrange.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/roundslider/custom.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'treeview' )
           <script src="{{ asset('/backend/assets/vendor/bootstrap-treeview/bootstrap-treeview.min.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/jstree/jstree.min.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/toastr/toastr.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/treeview/jstree.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/treeview/bootstrap-treeview.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'statistics' )
           <script src="{{ asset('/backend/assets/js/widgets/infobox/infobox-1.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'chart' )
           <script src="{{ asset('/backend/assets/bundles/chartist.bundle.js') }}"></script>
           <script src="{{ asset('/backend/assets/bundles/jvectormap.bundle.js') }}"></script>
           <script src="{{ asset('/backend/assets/bundles/flotscripts.bundle.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/flot-charts/jquery.flot.selection.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/charts/chart-widgets.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'profile1' or Request::segment(2) === 'profile2' or Request::segment(2) === 'image-gallery1' )
           <script src="{{ asset('/backend/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
       @endif
       
       @if (Request::segment(2) === 'image-gallery1' )
           <script src="{{ asset('/backend/assets/vendor/LightboxGallery/mauGallery.min.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/LightboxGallery/scripts.js') }}"></script>
       @endif
       
       @if (Request::segment(2) === 'image-gallery2' )
           <script src="{{ asset('/backend/assets/vendor/light-gallery/js/lightgallery-all.min.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/medias/image-gallery.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'horizontal-timeline' )
           <script src="{{ asset('/backend/assets/vendor/horizontal-timeline/js/horizontal-timeline.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'validation' )
           <script src="{{ asset('/backend/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/parsleyjs/js/parsley.min.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'advance-elements' )
           <script src="{{ asset('/backend/assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/multi-select/js/jquery.multi-select.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/nouislider/nouislider.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/forms/advanced-form-elements.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'wizard' )
           <script src="{{ asset('/backend/assets/vendor/jquery-validation/jquery.validate.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/jquery-steps/jquery.steps.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/forms/form-wizard.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'dragdrop' )
           <script src="{{ asset('/backend/assets/vendor/dropify/js/dropify.min.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/forms/dropify.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'cropping' )
           <script src="{{ asset('/backend/assets/vendor/cropper/cropper.min.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/cropper/cropper-init.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'summernote' )
           <script src="{{ asset('/backend/assets/vendor/summernote/dist/summernote.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'editors' )
           <script src="{{ asset('/backend/assets/vendor/ckeditor/ckeditor.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/forms/editors.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'markdown' )
           <script src="{{ asset('/backend/assets/vendor/markdown/markdown.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/to-markdown/to-markdown.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/bootstrap-markdown/bootstrap-markdown.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'jquery-datatable' )
           <script src="{{ asset('/backend/assets/bundles/datatablescripts.bundle.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/jquery-datatable/buttons/buttons.print.min.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/tables/jquery-datatable.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'editable' )
           <script src="{{ asset('/backend/assets/vendor/editable-table/mindmup-editabletable.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/tables/editable-table.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'dragger' )
           <script src="{{ asset('/backend/assets/vendor/table-dragger/table-dragger.min.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'morris' )
           <script src="{{ asset('/backend/assets/js/pages/charts/morris.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'flot' )
           <script src="{{ asset('/backend/assets/bundles/flotscripts.bundle.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/flot-charts/jquery.flot.time.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/flot-charts/jquery.flot.selection.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/charts/flot.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'chartjs' )
           <script src="{{ asset('/backend/assets/bundles/chartist.bundle.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/chartist/polar_area_chart.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/charts/chartjs.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'jquery-knob' )
           <script src="{{ asset('/backend/assets/vendor/jquery-knob/jquery.knob.min.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/charts/jquery-knob.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'sparkline' )
           <script src="{{ asset('/backend/assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/charts/sparkline.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'peity' )
           <script src="{{ asset('/backend/assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/charts/peity_chart.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'c3' )
           <script src="{{ asset('/backend/assets/bundles/c3.bundle.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/chart/c3.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'gauges' )
           <script src="{{ asset('/backend/assets/vendor/gauge/gauge.min.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/chart/gauge.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'echart' )
           <script src="{{ asset('/backend/assets/bundles/echarts.bundle.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/charts/echart.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'google' )
           <script src="https://maps.google.com/maps/api/js?v=3&sensor=false"></script>
           <script src="{{ asset('/backend/assets/vendor/gmaps/gmaps.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/maps/google.js') }}"></script>
       @endif

       @if (Request::segment(2) === 'jvector' )
           <script src="{{ asset('/backend/assets/bundles/jvectormap.bundle.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/jvectormap/jquery-jvectormap-in-mill.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/jvectormap/jquery-jvectormap-uk-mill-en.js') }}"></script>
           <script src="{{ asset('/backend/assets/vendor/jvectormap/jquery-jvectormap-au-mill.js') }}"></script>
           <script src="{{ asset('/backend/assets/js/pages/maps/jvectormap.js') }}"></script>
       @endif

       <script src="{{ asset('/backend/assets/bundles/mainscripts.bundle.js') }}"></script>
       <script src="{{ asset('backend/assets/bundles/datatablescripts.bundle.js') }}"></script>
       <script src="{{ asset('backend/assets/js/pages/tables/jquery-datatable.js') }}"></script>
       @stack('after-scripts')

       @if (trim($__env->yieldContent('page-script')))
           <script>
               @yield('page-script')
           </script>
       @endif

       {{-- summernote --}}
       <script src="{{ asset('backend/assets/vendor/summernote/dist/summernote.js') }}"></script>
       
       {{--switch button  --}}
       <script src="{{ asset('backend/assets/vendor/switch-button-bootstrap/src/bootstrap-switch-button.js') }}"></script>

       @yield('scripts')

       <script>
           setTimeout(function(){
               $('#alert').slideUp();
           },4000);
       </script>