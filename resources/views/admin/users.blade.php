@extends('layouts.admin')

@section('content')
  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Users</h1>
    </div>
    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel">
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
                <th>State</th>
                <th>Country</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
            @if($users->count() > 0)

              @foreach($users as $user)

                  <tr>

                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->city }}</td>
                    <td>{{ $user->state->name }}</td>
                    <td>{{ $user->country->name }}</td>
                    <td><?php if($user->verified == 1) { ?>
                        Active
                     <?php } else { ?>
                        In Active
                     <?php } ?></td>
                  </tr>

                @endforeach

                @endif
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Basic -->

    </div>
  </div>
  <!-- End Page -->
  @endsection