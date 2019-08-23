@extends('layouts.admin')
@section('content')
    <section class="content">
      <div class="col-md-12">
      <div class="card card-outline card-success">
        <div class="card-header">
        <h3 class="card-title">
          <small>Add Electronic Component <span id="catagorytitle"></span></small>
        </h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip"
          title="Collapse">
          <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-tool btn-sm" data-widget="remove" data-toggle="tooltip"
          title="Remove">
          <i class="fa fa-times"></i></button>
        </div>
        </div>
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
        <form action="component/save" enctype="multipart/form-data" method="post" id="coponentForm" class="form-horizontal">
    {{ csrf_field() }}
          <div class="card-body">
          <div class="form-group">
            <div class="col-sm-6">
            <input type="hidden" id="id" name="id">
            <select class="form-control" id="sub_catagory_id" name="sub_catagory_id">
              
            </select>
            </div>
          </div>
          <div class="form-group ">
            <div class="col-md-3 f-right">
            <input class="form-control" type="text" id="part_number" name="part_number"  placeholder="Part Number"
              name="part_number">
            </div>
            <div class="col-md-6 f-right">
            <input class="form-control" type="text" id="description" name="description" placeholder="Description"
              name="description">
            </div>
            <div class="col-md-3 f-right">
              <input class="form-control" type="text" id="series" name="series" placeholder="Series" name="series">
            </div>
          </div>
          <div class="form-group ">
            <div class="col-md-3 f-right">
            <input class="form-control" type="text" id="manufacturer_part_number"  name="manufacturer_part_number" placeholder="Manufacturer Part Number"
              name="menu_part">
            </div>
            <div class="col-md-3 f-right">
            <input class="form-control" type="text" id="manufacturer" name="manufacturer" placeholder="Manufacturer" name="manufact">
            </div>
            <div class="col-md-3 f-right">
            <input class="form-control" type="text" id="quantity_available" name="quantity_available" placeholder="Quantity Available"
              name="qut_ava">
            </div>
            <div class="col-md-3 f-right"> 
            <input class="form-control" type="text" id="unit_price" name="unit_price" placeholder="Unit Price LKR" name="unit_pr">
            </div>
            </div>
          <div class="form-group ">
            <div class="col-md-3 f-right">
              <input class="form-control" type="text" id="minimum_quantity"  name="minimum_quantity" placeholder="Minimum Quantity"
                name="min_quy">
              </div>
            <div class="col-md-3 f-right">
            <input class="form-control" type="text" id="part_status" name="part_status" placeholder="Part Status" name="part_stat">
            </div>
            <div class="col-md-3 f-right">
            <input class="form-control" placeholder="Accessory Type" type="text" id="accessory_Type" name="accessory_Type">
            </div>
            <div class="col-md-3 f-right">
            <input class="form-control" type="text" id="for_use_with_related_products" name="for_use_with_related_products" placeholder="For Use With/Related Products"
              name="rel_prd">
            </div>
          </div>
          <div class="form-group ">
            <div class="col-md-6 input-group f-right">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="data_sheet" name="data_sheet" multiple="true" onchange="readURLFile(this);">
                <label class="custom-file-label" for="exampleInputFile">Add Data Sheet</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>

              </div>
            <div class="col-md-6 input-group f-right">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="image" name="image" multiple="true" onchange="readURLImg(this);">
                  <label class="custom-file-label" for="exampleInputFile">Add Item Image</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text" id="">Upload</span>
                </div>

            </div>
          </div>
          <div class="form-group ">
              <div class="col-md-6 f-right">
                <img id="filePrev" src="#" alt="" style="height:20%;" />
              </div>
              <div class="col-md-6 f-right">
                <img id="imgPrev" src="#" alt="" style="height:20%;" />
              </div>
            </div>
          </div>
          <div class="">
          <button type="submit" class="btn btn-success"> Submit </button>
          </div>
        </form>
        </div>
      </div>
      <div class="card card-outline card-danger">
        <div class="card-header">
        <h3 class="card-title">
          <small>Product Overview<span id="catagorytitle"></span></small>
        </h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip"
          title="Collapse">
          <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-tool btn-sm" data-widget="remove" data-toggle="tooltip"
          title="Remove">
          <i class="fa fa-times"></i></button>
        </div>
        </div>
        <div class="card-body pad">
          <table class="table table-bordered" style="font-size:13px;">
            <thead>
            <tr style="text-align: center;">
              <th style="width: 10px">#</th>
              <th>
                <select class="form-control" id="subCatFilter">

                </select>
              </th>
              <th>Part Number</th>
              <th>Image</th>
              <th>Manufacturer</th>
              <th>Quantity</th>
              <th>Unit Price (LKR)</th>
              <th class="th-sm" colspan="2">Action</th>
            </tr>
            </thead>
            <tbody id="tbodyview">
              
            </tbody>
          </table>
        </div>
      </div>
      @include('js.component-js')
    </section>
@stop
