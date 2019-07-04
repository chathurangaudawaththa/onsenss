@extends('layouts.admin')
@section('content')
<section class="content">
  <div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
    <div class="col-12 col-sm-6 col-md-3">

    <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <!-- /.col -->

    <!-- /.col -->
    </div>

  </div><!--/. container-fluid -->

  <div class="col-md-12">
    <div class="card card-outline card-warning">
    <div class="card-header">
    <h3 class="card-title">
     <small>Update Category<span id="catagorytitle"></span></small>
    </h3>

    <!-- tools box -->
    <div class="card-tools">
    <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
    <button type="button" class="btn btn-tool btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
      <i class="fa fa-times"></i></button>
    </div>
    <!-- /. tools -->
    </div>
    <!-- /.card-header -->
	@if(count($errors) > 0)
        @foreach($errors-> all() as $error)
          <div class='alert alert-danger'>
              {{$error}}
          </div>
        @endforeach
      @endif
      @if(session('success'))
          <div class='alert alert-success'>
              {{session('success')}}
          </div>
      @endif
    <div class="card-body pad">
    <form action="catagory/save" enctype="multipart/form-data" method="post" id="catForm" class="form-horizontal">
    {{ csrf_field() }}
    <div class="card-body">
      <div class="form-group">


      <div class="col-sm-6 f-right">
      <input type="text" class="form-control" id="catagory_name" name="catagory_name" placeholder="Category Name">
      </div>
      <div class="col-md-6 input-group f-right">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="image" name="image">
              <label class="custom-file-label" for="exampleInputFile">Add Item Image</label>
            </div>
            <!-- <div class="input-group-append">
              <span class="input-group-text" id="">Upload</span>
            </div> -->

            </div>
    </div>
      <div class="form-group">
      <div class="col-sm-12">
        <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Meta Title">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="meta_keyword"  name="meta_keyword" placeholder="Meta Keyword">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <input type="text" class="form-control" id="meta_description"  name="meta_description" placeholder="Meta description">
        </div>


      </div>

    </div>
    <!-- /.card-body -->
    <div class="">
      <button type="submit"  class="btn btn-success">Submit </button>

    </div>
    <!-- /.card-footer -->
    </form>
    </div>
  </div>
  <div class="card card-outline card-danger">
    <div class="card-header">
    <h3 class="card-title">
     <small>Overview<span id="catagorytitle"></span></small>
    </h3>

    <!-- tools box -->
    <div class="card-tools">
    <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
    <i class="fa fa-minus"></i></button>
    <button type="button" class="btn btn-tool btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
    <i class="fa fa-times"></i></button>
    </div>
    <!-- /. tools -->
    </div>
    <!-- /.card-header -->

    <div class="card-body pad">
      <table class="table table-bordered">
          <tbody><tr>
          <th style="width: 10px">#</th>
          <th>Category</th>
          <th>Image</th>

          <th>Meta Title</th>
          <th>Meta Keyword</th>
          <th>Meta description</th>
          <th>Created at</th>
          <th class="th-sm" colspan="2">Action</th>
          <tbody id="tbodyview"></tbody>
<!--         </tr> 
<!--           <tr> -->
<!--           <td>1.</td> -->
<!--           <td>Electronin Components</td> -->
<!--           <td><img src="" alt=""></td> -->
<!--           <td>Meta Title</td> -->
<!--           <td>Meta Keyword</td> -->
<!--           <td>Meta description</td> -->
<!--           <td> -->
<!--             Created date -->
<!--           </td> -->
         <!--  <td class="article-btn edit"><a href="#" title="Update Data"><i style="color:#ffa700" class="fa fa-pencil-square" aria-hidden="true"></i></a>  </td>
          <td class="article-btn delete"><a href="#" title="Delete Article"><i style="color:#910f2c" class="fa fa-window-close" aria-hidden="true"></i></a> </td>-->
<!--         </tr> -->


          </tbody></table>
    </div>
  </div>
  @include('js.add-category-js')
  </section>
@stop
