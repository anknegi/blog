@extends('admin.layouts.app')
@section('head-section')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection
@section('main-content')

  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            All categories
            <small>list of all categories created by you.</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
          </ol>
        </section>
    
        <!-- Main content -->
        <section class="content">
    
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Categories</h3>
              <a href="{{ route('category.create') }}" class="col-lg-offset-5 btn btn-success">Create New</a>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Table With Full Features</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr.No.</th>
                                    <th>Category Name</th>
                                    <th>Slug</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach( $categories as $category )
                                <tr>                                   
                                  <td>{{ $loop->index + 1 }}</td>
                                  <td>{{ $category->name }}</td>
                                  <td>{{ $category->slug }}</td>
                                  <td><a href="{{ route('category.edit', $category->id ) }}"><i class="fa fa-fw fa-edit"></a></i></td>
                                  <td>
                                      <form id="delete-form-{{ $category->id }}" method="post" action="{{ route('category.destroy', $category->id ) }}" style="display: none;">
                                          {{ csrf_field() }}  
                                          @method('delete')                                       
                                      </form>
                                        <a href="" onclick="if(confirm('Are you sure to delete?'))
                                                            { 
                                                               event.preventDefault();
                                                               document.getElementById('delete-form-{{ $category->id }}').submit();
                                                            }
                                                            "><i class="fa fa-fw fa-remove">
                                        </a></i>  
                                  
                                  </td>                                   
                                </tr>
                              @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Category Name</th>
                                    <th>Slug</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->


            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              Footer
            </div>
            <!-- /.box-footer-->
          </div>
          <!-- /.box -->
    
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      
@endsection
@section('footer-section')
<!-- DataTables -->
<script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(function () {
        $('#example1').DataTable()
    })

</script>
@endsection