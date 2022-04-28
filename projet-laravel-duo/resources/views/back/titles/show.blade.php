@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'><u><strong>Title</strong></u></h1>
        <table class='table'>
            <thead>
                <tr>
                    <th class='text-uppercase text-center' scope='col'>#</th>
					<th class='text-uppercase text-center' scope='col'>petit</th>
					<th class='text-uppercase text-center' scope='col'>grand</th>
					<th class='text-uppercase text-center' scope='col'>grand 2</th>
					<th class='text-uppercase text-center' scope='col'>description</th>
                    <th class='text-uppercase text-center' scope='col'>Action</th> {{-- show_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class='text-center text-capitalize' scope='row'>{{ $title->id }}</th>
						<td class='text-center text-capitalize'>{{ $title->petit }}</td>
						<td class='text-center text-capitalize'>{{ $title->grand }}</td>
						<td class='text-center text-capitalize'>{{ $title->grand2 }}</td>
						<td class='text-center text-capitalize'>{{ $title->description }}</td>
                    <td> {{-- show_td_anchor --}}
                        <div class="d-flex align-items-center justify-content-center">
                            <a class='btn btn-dark' href='{{ route('titles.index') }}' role='button'>Back</a>

                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
