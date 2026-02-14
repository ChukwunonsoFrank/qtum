@extends('theme.admin')

@section('content')

    <h2>Withdrawals</h2>
    <div class="content">
        <table class="table table-striped" id="dataTable">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User ID</th>
                <th scope="col">Asset</th>
                <th scope="col">Amount</th>
                <th scope="col">Wallet</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($withdrawals as $withdrawal)
                <tr>
                    <th scope="row">{{$withdrawal->id}}</th>
                    <td>{{$withdrawal->owner->name}}</td>
                    <td>{{$withdrawal->asset->name}}</td>
                    <td>{{$withdrawal->amount}} {{$withdrawal->asset->name}}</td>
                    <td>{{$withdrawal->description}}</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="{{url('admin/edit/transactions/').'/'.$withdrawal->id}}">Edit</a>
                        <a class="btn btn-sm btn-danger confirm" href="{{url('admin/delete/transactions/').'/'.$withdrawal->id}}">Delete</a>
                        <a href="{{url('admin/approve/transactions/')}}/{{$withdrawal->id}}" class="btn btn-sm btn-success">Approve</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection

