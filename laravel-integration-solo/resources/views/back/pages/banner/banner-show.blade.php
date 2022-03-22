@extends('back/layout/app-back')
@section('content-back')
    @include('back/partials/sidenav-back')

    <div class="container d-flex flex-column align-items-center justify-content-center">
        <div class='container-fluid d-flex align-items-center justify-content-between my-5'>
            <h2 class="text-uppercase m-0">Liste banner</h2>
            <a href="/back/pages/banner/banner-create" class="btn btn-success">Create</a>
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
                    <th scope="col">Texte</th>
                    <th scope="col">Lien</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataBanner as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->titre }}</td>
                        <td>{{ $item->texte }}</td>
                        <td>{{ $item->lien }}</td>
                        <td>{{ $item->image }}</td>
                        <td>
                            <form action="{{ route('banner.destroy', $item->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <td>
                            <a href="/back/pages/banner/banner-edit/{{ $item->id }}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
