@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'><u><strong>Contacts</strong></u></h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col' class='text-center text-uppercase'>#</th>
                    <th scope='col' class='text-center text-uppercase'>map</th>
                    <th scope='col' class='text-center text-uppercase'>phone</th>
                    <th scope='col' class='text-center text-uppercase'>mobile</th>
                    <th scope='col' class='text-center text-uppercase'>Action</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th class='text-center' scope='row'>{{ $contact->id }}</th>
                    <td class='text-center'>{{ $contact->map }}</td>
                    <td class='text-center'>{{ $contact->phone }}</td>
                    <td class='text-center'>{{ $contact->mobile }}</td>
                    <td> {{-- read_td_anchor --}}
                        <div class="d-flex align-items-center justify-content-center">
                            <a class='btn btn-dark' href='{{ route('contacts.index') }}' role='button'>Back</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
