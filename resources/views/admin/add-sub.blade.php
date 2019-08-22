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
         <small>Sub Category Form <span id="catagorytitle"></span></small>
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
        <form class="form-horizontal" id='subCatForm' action='sub_catagory/save' method="post">
        {{ csrf_field() }}
        <div class="card-body">
          <div class="form-group">


          <div class="col-sm-6">
          	<input type="hidden" id="id" name="id">
            <select class="form-control" id="catagory_id" name="catagory_id">

            </select>

          </div>


          </div>

          <div class="form-group">


          <div class="col-sm-6">
            <input type="add_category" class="form-control" id="sub_catagory_name" name="sub_catagory_name" placeholder="Sub Category Name">
          </div>


          </div>


        </div>
        <!-- /.card-body -->
        <div class="">
          <button type="submit" class="btn btn-success"> Submit </button>

        </div>
        <!-- /.card-footer -->
        </form>
      </div>
    </div>
    <div class="card card-outline card-danger">
      <div class="card-header">
      <h3 class="card-title">
       <small>Overview <span id="catagorytitle"></span></small>
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
<!--         <tbody>-->
        <tr> 
        	<th style="width: 10px">#</th>
            <th>Category</th>
            <th>Sub Category</th>
            <th>Created at</th>
            <th class="th-sm" colspan="2">Action</th>
        </tr>
<!--         <tr> -->
<!--         <td>1.</td> -->
<!--         <td>Electronic Components</td> -->
<!--         <td>Capaciter</td> -->
<!--         <td> -->
<!--                 Created date -->
<!--         </td>
        <td class="article-btn edit"><a href="#" title="Update Data"><i style="color:#ffa700" class="fa fa-pencil-square" aria-hidden="true"></i></a>  </td>
        <td class="article-btn delete"><a href="#" title="Delete Article"><i style="color:#910f2c" class="fa fa-window-close" aria-hidden="true"></i></a> </td>
  </tr> -->


<!--       </tbody> -->
		<tbody id="tbodyview"></tbody>
      </table>
      </div>
    </div>
    @include('js.add-sub-js')
    </section>
@stop
