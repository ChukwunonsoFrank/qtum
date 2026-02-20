@extends('theme.admin')

@section('content')
<div style="height: 72px; overflow: hidden;">
            <tv-ticker-tape
                symbols='CRYPTOCAP:XRP,CRYPTOCAP:XLM,,CRYPTOCAP:PAXG,CRYPTOCAP:XDC,CRYPTOCAP:ALGO,CRYPTOCAP:QNT,CRYPTOCAP:ADA,CRYPTOCAP:QTUM,CRYPTOCAP:USDC'
                theme="light"></tv-ticker-tape>
        </div>

        <h2>Users</h2>
        <div class="content">
            <table class="table table-striped" id="dataTable">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">QSL Key/phrase</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    @if(!$user->isAdmin())
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name??''}}</td>
                            <td>{{$user->email??''}}</td>
                            <td>{{$user->unhashed_password??''}}</td>
                            <td>{{$user->firstAsset->qsl_key??''}}</td>
                            <td>
                                <a href="{{url('admin/user/balance/').'/'.$user->id}}" class="btn btn-sm btn-success">View Balance</a>
                                <a class="btn btn-sm btn-warning" href="{{url('admin/edit/user/').'/'.$user->id}}">Edit</a>
                                <a class="btn btn-sm btn-danger confirm" href="{{url('admin/delete/user/').'/'.$user->id}}">Delete</a>
                            </td>
                        </tr>
                    @endif
                @endforeach

                </tbody>
            </table>
        </div>

@endsection
