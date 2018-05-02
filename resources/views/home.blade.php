@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <hr>
                    <b>All Active Sessions</b>
                    <a href="{{ route('sessionDestroy') }}" class="btn btn-primary btn-sm pull-right">Destroy All</a>
                    <table class="table" style="margin-top:25px;">
                        <tr>
                            <th>Ip</th>
                            <th>User Agent</th>
                        </tr>
                        @foreach ($sessions as $session)
                            <tr>
                                <td>{{ $session->ip_address }}</td>
                                <td>{{ $session->user_agent }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
