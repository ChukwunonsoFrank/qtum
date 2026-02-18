@extends('theme.admin')

@section('content')
    <h2>Stakes</h2>
    <div class="content">
        <table class="table table-striped" id="dataTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User</th>
                    <th scope="col">Asset</th>
                    <th scope="col">Amount</th>
                    <th scope="col">APR Rate</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Profit</th>
                    <th scope="col">Matures On</th>
                    <th scope="col">Matured</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stakes as $stake)
                    <tr>
                        <th scope="row">{{ $stake->id }}</th>
                        <td>{{ $stake->user->name ?? 'N/A' }}</td>
                        <td>{{ $stake->asset->name ?? 'N/A' }}</td>
                        <td>{{ $stake->amount }} {{ $stake->asset->name }}</td>
                        <td>{{ $stake->apr_rate }}%</td>
                        <td>{{ $stake->duration }} Months</td>
                        <td>{{ $stake->profit }} {{ $stake->asset->name }}</td>
                        <td>{{ $stake->matures_on?->format('M d, Y') ?? 'N/A' }}</td>
                        <td>{{ $stake->has_matured ? 'Yes' : 'No' }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
