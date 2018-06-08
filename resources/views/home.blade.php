@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <br />
                    @if(Auth::user()->admin)
                        You are admin <a href="{{ route('admin-dashboard') }}"/> Dashboard</a> | 
                        <a href="{{ route('users') }}"/> Users</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
