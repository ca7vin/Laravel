@extends('/back/layouts/app')

@section('content')
    @if (request()->routeIs('services.index'))
        @include('back/services/all')
    @endif
    @if (request()->routeIs('courses.index'))
        @include('back/courses/all')
    @endif
    @if (request()->routeIs('testimonials.index'))
        @include('back/testimonials/all')
    @endif
@endsection
