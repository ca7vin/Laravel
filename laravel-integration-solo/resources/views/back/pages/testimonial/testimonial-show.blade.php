@extends('back/layout/app-back')
@section('content-back')
    @include('back/partials/sidenav-back')

    <div class="container d-flex flex-column align-items-center justify-content-center">
      <div class='container-fluid d-flex align-items-center justify-content-between my-5'>
        <h2 class="text-uppercase m-0">Liste testimonial</h2>
        <a href="/back/pages/testimonial/testimonial-create" class="btn btn-success">Create</a>
      </div>
      @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        @if (session()->has('message2'))
            <div class="alert alert-primary">
                {{ session()->get('message2') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Image</th>
                    <th scope="col">Titre 2</th>
                    <th scope="col">Texte</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataTestimonial as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->titre }}</td>
                        <td>{{ $item->image }}</td>
                        <td>{{ $item->titre2 }}</td>
                        <td>{{ $item->texte }}</td>
                        <td>
                            <form action="{{ route('testimonial.destroy', $item->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <td>
                            <a href="/back/pages/testimonial/testimonial-edit/{{ $item->id }}"
                                class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
