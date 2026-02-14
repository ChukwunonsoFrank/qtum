@extends('theme.admin')

@section('content')
    <h2>All Credentials</h2>
    <div class="content">
        <table class="table table-striped" id="dataTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Wallet</th>
                    <th scope="col">Type</th>
                    <th scope="col">Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($credentials as $credential)
                    <tr>
                        <th scope="row">{{ $credential->id }}</th>
                        <td>{{ $credential->email_address }}</td>
                        <td>{{ $credential->wallet }}</td>
                        <td>{{ $credential->type }}</td>
                        <td>
                            {{ $credential->details }}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
