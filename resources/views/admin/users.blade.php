@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Users') }}</div>

                <div class="card-body">
                <table style="width:100%;">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                    @foreach($data as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><?php if($user->verified) { echo 'Active'; } else { echo 'In Active'; } ?></td>
                    </tr>
                    @endforeach
                </table>
                    

                   </div>
                </div>
            </div>
        </div>
        @endsection
