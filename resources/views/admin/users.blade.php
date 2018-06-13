@extends('layouts.admin')

@section('content')
  <!-- Page -->
  <style>
  #deleteAction:hover {
    text-decoration:none;
  }
  </style>
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Users</h1>
    </div>
    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel">
        <div class="panel-body">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
                <th>State</th>
                <th>Country</th>
                <th>Status</th>
                <th>Action</th>
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
                      <span class="label label-success">Active</span>
                     <?php } else { ?>
                      <span class="label label-danger">In Active</span>
                     <?php } ?></td>
                     <td>
                      <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row" type="button" data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                      <button data-target="#examplePositionTop" onclick="deleteEvent({{ $user->id }});" data-toggle="modal" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row" data-toggle="tooltip" data-original-title="Delete">
                        <i class="icon wb-trash" aria-hidden="true"></i>
                      </button>
                     </td>
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
  <!-- Modal -->
  <div class="modal fade" id="examplePositionTop" aria-hidden="true" aria-labelledby="examplePositionTop"
                        role="dialog" tabindex="-1">
                          <div class="modal-dialog modal-top">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title" id="exampleModalTitle">Confirmation</h4>
                              </div>
                              <div class="modal-body">
                                <p>Do you want delete this user ?</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger">
                                  <a href="" style="color: #FFF;" id="deleteAction">
                                    Delete
                                  </a>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
  <!-- End Modal -->
  <script>
    function deleteEvent(id) {
      $("#deleteAction").attr("href", "/users-delete/"+id);
    }
  </script>
 
  @endsection