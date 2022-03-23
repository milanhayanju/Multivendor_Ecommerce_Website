@extends('backend.layouts.master')
@section('title', 'Edit Banners')
@section('parentPageTitle', 'Admin')

@section('content')
<div class="col-md-12">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Edit Banner <small>Basic example without any additional modification classes</small> </h2>                            
            </div>


            <div class="body">
                <form action="{{ route('banner.update',$banner->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12">
                            <label for="">Title <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $banner->title }}">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <label for="">Description</label>
                            <div class="form-group">
                                <textarea id="description" class="form-control" name="description" placeholder="enter description..." >{{ $banner->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <label for="">Image</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Choose
                                  </a>
                                </span>
                                <input id="thumbnail" value="{{ $banner->photo }}" class="form-control" type="text" name="photo">
                              </div>
                              <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="">Condition</label>
                            <select class="form-control show-tick" name="condition">
                                <option value="">--Condition--</option>
                                <option value="banner" {{ $banner->condition=='banner' ? 'selected' : '' }}>Banner</option>
                                <option value="promo" {{ $banner->condition=='promo' ? 'selected' : '' }}>Promo</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="">Status</label>
                            <select class="form-control show-tick" name="status">
                                <option value="">--Status--</option>
                                <option value="active" {{ $banner->status=='active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ $banner->status=='inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
    
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="form-group"></div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>

    <script>
    $(document).ready(function() {
        $('#description').summernote();
    });
    </script>
@endsection