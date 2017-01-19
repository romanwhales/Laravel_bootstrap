@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    You are logged in!.
                    @if( Auth::user()->is_admin)
                        <a href="/admin/user">View Users</a>
                    @else
                        
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
