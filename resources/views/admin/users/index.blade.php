@extends('layouts.admin.app')

@section('assets-top')
    <!-- Page level plugin CSS-->
    <link href="{{ asset('assets/blog-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/blog-admin/vendor/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Users</a>
          </li>
          <li class="breadcrumb-item active">Table</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-list"></i> Users
            <a href="users-create.html" class="btn btn-sm btn-primary">Add New</a>
          </div>
          <div class="card-body table-responsive">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th></th>
                  </tr>
                </thead>
                <tfoot>
                   <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th></th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>
                      <img src="{{ asset('images/user-icon.png') }}" height="32" width="32">
                      John Doe
                    </td>
                    <td>john@mail.com</td>
                    <td>Contributor</td>
                    <td>
                      <a href="#" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
                      </a>
                      <a href="#" class="btn btn-sm btn-outline-secondary" style="padding-bottom: 0px; padding-top: 0px;">
                          Edit
                          <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                      </a>
                      <button  
                          type="submit" class="btn btn-sm btn-outline-danger" 
                          style="padding-bottom: 0px; padding-top: 0px;"
                          onclick="return confirm('Are you sure you want to delete this item?');"
                      >
                          Delete
                          <span class="btn-label btn-label-right"><i class="fa fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
@endsection

@section('assets-bottom')
    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('assets/blog-admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/blog-admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('assets/blog-admin/vendor/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/blog-admin/vendor/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $("#dataTable").DataTable()
        });
    </script>
@endsection