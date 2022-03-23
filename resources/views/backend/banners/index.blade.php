@extends('backend.layouts.master')
@section('title', 'Banner Mangement')
@section('parentPageTitle', 'Admin')

@section('content')
    <div class="col-lg-12">
        @include('backend.layouts.notification')
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <p class="float-right">
            Total Banners: {{ \App\Models\Banner::count() }}
        </p>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>List of Banner</h2>
                <a class="float-right btn btn-sm btn-outline-secondary" href="{{ route('banner.create') }}"><i class="icon-plus"></i> Create Banner</a>                            
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable table-custom">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Photo</th>
                                <th>Condition</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Photo</th>
                                <th>Condition</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ( $banners as $item )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{!! $item->description !!}</td>
                                    <td><img src="{{ $item->photo }}" alt="banner img" style="max-height: 90px;max-width:120px"></td>
                                    <td>
                                        @if ($item->condition == "banner")
                                          <span class="badge badge-success">{{ $item->condition }}</span>
                                        @else 
                                            <span class="badge badge-primary">{{ $item->condition }}</span> 
                                        @endif
                                    </td>
                                    <td>
                                            <input type="checkbox" data-toggle="switchbutton" name="toggle" value="{{ $item->id }}" {{ $item->status=='active'? 'checked': ''}} data-onlabel="Active" data-offlabel="Inactive" data-onstyle="success" data-offstyle="danger">
                                    </td>
                                    <td>
                                        <a href="{{ route('banner.edit',$item->id) }}" class="float-left btn btn-sm btn-outline-warning" data-toggle="tooltip"  title="edit" data-placement="bottom"><i class="fa fa-edit"></i></a>
                                        <form class="float-left ml-1" action="{{ route('banner.destroy',$item->id) }} " method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="" class="dltBtn btn btn-sm btn-outline-danger" data-id="{{ $item->id }}" data-toggle="tooltip"  title="delete"  data-placement="bottom"><i class="fa fa-trash"></i></a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
{{-- delete --}}
    <script>
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.dltBtn').click(function(e){
            var form = $(this).closest('form');
            var dataID = $(this).data('id');
            e.preventDefault();
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                    swal("Poof! Your file has been deleted!", {
                    icon: "success",
                    });
                } else {
                    swal("Your file is safe!");
                }
            });
        });
    </script>

    {{-- Banner status ajax --}}
    <script>
        $('input[name=toggle]').change(function(){
            var mode = $(this).prop('checked');
            var id = $(this).val();
            // alert(id);
            $.ajax(
                {
                    url: "{{ route('banner.status') }}",
                    type: "POST",
                    data: {
                        _token: '{{ csrf_token() }}',
                        mode: mode,
                        id: id,

                    },
                    success:function(response){
                        if(response.status){
                            alert(response.msg);
                        }
                        else{
                            alert('Try Again');
                        }
                    }
                }
            )
        });
    </script>
@endsection