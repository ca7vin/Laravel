@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'><u><strong>Contacts</strong></u></h1>
        @if (session()->has('message'))
            <div class='alert alert-success'>
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col' class='text-center text-uppercase'>#</th>
                    <th scope='col' class='text-center text-uppercase'>map</th>
                    <th scope='col' class='text-center text-uppercase'>phone</th>
                    <th scope='col' class='text-center text-uppercase'>mobile</th>
                    <th scope='col' class='text-center text-uppercase w-25'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <th class='text-center text-capitalize' scope='row'>{{ $contact->id }}</th>
                        <td class='text-center text-capitalize'>{{ $contact->map }}</td>
                        <td class='text-center text-capitalize'>{{ $contact->phone }}</td>
                        <td class='text-center text-capitalize'>{{ $contact->mobile }}</td>
                        <td class='text-center text-capitalize'> {{-- all_td_anchor --}}
                            <div class='d-flex align-items-center justify-content-around'>
                                <a class='btn btn-dark' href='{{ route('contacts.edit', $contact->id) }}' role='button'>Edit</a>
                                <a class='btn btn-dark' href='{{ route('contacts.show', $contact->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
