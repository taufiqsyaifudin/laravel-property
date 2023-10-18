@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('Create Testimonial') }}</h1>
                    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">{{ __('Name') }}</label>
                        <input type="text" class="form-control" id="name" placeholder="{{ __('Name') }}" name="name" value="{{ old('name') }}" />
                    </div>
                    <div class="form-group">
                        <label for="job_title">{{ __('Job Title') }}</label>
                        <input type="text" class="form-control" id="job_title" placeholder="{{ __('Job Title') }}" name="job_title" value="{{ old('job_title') }}" />
                    </div>
                    <div class="form-group">
                        <label for="message">{{ __('Message') }}</label>
                        <textarea class="form-control" id="message" name="message" cols="30" rows="6"> {{ old('message') }} </textarea>
                    </div>
                    <div class="form-group">
                        <label for="photo">{{ __('Photo') }}</label>
                        <input type="file" class="form-control" id="photo" placeholder="{{ __('Photo') }}" name="photo" value="{{ old('photo') }}" />
                    </div>                    
                    <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection

@push('style-alt')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('script-alt')
<script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"
    >
    </script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
      $('.select-multiple').select2();
</script>
@endpush