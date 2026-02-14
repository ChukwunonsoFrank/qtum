@extends('theme.admin')

@section('content')

    <h2>Exchange Rates</h2>
    <div class="content">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Asset</th>
                <th scope="col">Wallet</th>
                <th scope="col">Type</th>
                <th scope="col">Rate</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($assets as $asset)
                <tr>
                    <th scope="row">{{$asset->id}}</th>
                    <td>{{ucfirst($asset->name)}}</td>
                    <td>{{$asset->wallet}}</td>
                    <td>{{$asset->type}}</td>
                    <td>${{$asset->rate}} </td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="{{url('admin/edit/assets/').'/'.$asset->id}}">Update Rate</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection

