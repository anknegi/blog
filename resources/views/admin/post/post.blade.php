@extends('admin.layouts.app')

@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Create Post
            <small>create your post here</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Editors</li>
          </ol>
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="row">

                <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Post</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form role="form">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="postTitle">Post title</label>
                        <input type="text" class="form-control" name="postTitle" placeholder="Enter title of post">
                      </div>

                      <div class="form-group">
                            <label for="postSubTitle">Post Sub title</label>
                            <input type="text" class="form-control" name="postSubTitle" placeholder="Enter sub-title of post">
                      </div>

                      <div class="form-group">
                            <label for="postSlug">Post Slug</label>
                            <input type="text" class="form-control" name="postSlug" placeholder="Enter slug of post">
                      </div>

                      <div class="form-group">
                           
                            <input type="file" name="image">
          
                            <p class="help-block">Input feature image here</p>
                      </div>

                      <div class="form-group">
                          <input type="checkbox" name="postPublish"> Publish
                      </div>
                                          
                    </div>
                    <!-- /.box-body -->
      
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
           
          
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Write your post here
                  
                  </h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                      <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                            title="Remove">
                      <i class="fa fa-times"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">
                  <form>
                        <textarea id="editor1" name="editor1" rows="10" cols="80">
                                                This is my textarea to be replaced with CKEditor.
                        </textarea>
                  </form>
                </div>
              </div>
              <!-- /.box -->

            </div>
            <!-- /.col-->
          </div>
          <!-- ./row -->
        </section>
        <!-- /.content -->
  </div>

<!-- jQuery 3 -->
<script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js') }}"></script>
<!-- CK Editor -->
<script src="{{ asset('admin/bower_components/ckeditor/ckeditor.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script>
        $(function () {
          // Replace the <textarea id="editor1"> with a CKEditor
          // instance, using default configuration.
          CKEDITOR.replace('editor1')
          //bootstrap WYSIHTML5 - text editor
          $('.textarea').wysihtml5()
        })
</script>
@endsection