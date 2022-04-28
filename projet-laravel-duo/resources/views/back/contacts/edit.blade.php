@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'><u><strong>Contacts</strong></u></h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('contacts.update' , $contact->id) }}' method='post'>
            @csrf
            @method('put')
            <div class='mb-3'>
                <label class='form-label text-capitalize' for=''>map</label>
                <input class='form-control' type='text' name='map' value='{{ $contact->map }}'>
            </div>
            <div class='mb-3'>
                <label class='form-label text-capitalize' for=''>phone</label>
                <input class='form-control' type='text' name='phone' value='{{ $contact->phone }}'>
            </div>
            <div class='mb-3'>
                <label class='form-label text-capitalize' for=''>mobile</label>
                <input class='form-control' type='text' name='mobile' value='{{ $contact->mobile }}'>
            </div>
            <button class='btn btn-dark mt-5' type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
