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
        <div class="card-body pad">
        <form class="form-horizontal">
          <div class="card-body">
          <div class="form-group">
            <div class="col-sm-6">
            <select class="form-control">
              <option value="0">Select Sub Category</option>
              <option>Connectors</option>
              <option>Analog chips</option>
              <option>Keyswitche / Relays</option>
            </select>
            </div>
          </div>
          <div class="form-group ">
            <div class="col-md-3 f-right">
            <input class="form-control" type="text" id="part_number" placeholder="Part Number"
              name="part_number">
            </div>
            <div class="col-md-6 f-right">
            <input class="form-control" type="text" id="description" placeholder="Description"
              name="description">
            </div>
            <div class="col-md-3 f-right">
              <input class="form-control" type="text" id="series" placeholder="Series" name="series">
            </div>
          </div>
          <div class="form-group ">
            <div class="col-md-3 f-right">
            <input class="form-control" type="text" id="menu_part" placeholder="Manufacturer Part Number"
              name="menu_part">
            </div>
            <div class="col-md-3 f-right">
            <input class="form-control" type="text" id="manufact" placeholder="Manufacturer" name="manufact">
            </div>
            <div class="col-md-3 f-right">
            <input class="form-control" type="text" id="qut_ava" placeholder="Quantity Available"
              name="qut_ava">
            </div>
            <div class="col-md-3 f-right">
            <input class="form-control" type="text" id="unit_pr" placeholder="Unit Price LKR" name="unit_pr">
            </div>
            </div>
          <div class="form-group ">
            <div class="col-md-3 f-right">
              <input class="form-control" type="text" id="min_quy" placeholder="Minimum Quantity"
                name="min_quy">
              </div>
            <div class="col-md-3 f-right">
            <input class="form-control" type="text" id="part_stat" placeholder="Part Status" name="part_stat">
            </div>
            <div class="col-md-3 f-right">
            <input class="form-control" placeholder="Accessory Type" type="text" id="acc_typ" name="acc_typ">
            </div>
            <div class="col-md-3 f-right">
            <input class="form-control" type="text" id="rel_prd" placeholder="For Use With/Related Products"
              name="rel_prd">
            </div>
          </div>
          <div class="form-group ">
            <div class="col-md-6 input-group f-right">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="images[]" multiple="true" onchange="readURL(this);">
                <label class="custom-file-label" for="exampleInputFile">Add Data Sheet</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>

              </div>
            <div class="col-md-6 input-group f-right">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile" name="images[]" multiple="true" onchange="readURL(this);">
                  <label class="custom-file-label" for="exampleInputFile">Add Item Image</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text" id="">Upload</span>
                </div>

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
            <tbody>
            <tr style="text-align: center;">
              <th style="width: 10px">#</th>
              <th><select class="form-control">
                <option value="0">All Sub Catagory</option>
                <option>Connectors</option>
                <option>Analog chips</option>
                <option>Keyswitche / Relays</option>
              </select></th>
              <th>Part Number</th>
              <th>Image</th>
              <th>Manufacturer</th>
              <th>Quantity</th>
              <th>Unit Price (LKR)</th>
              <th class="th-sm" colspan="2">Action</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Connectors</td>
              <td><a href="" title="View Product">493-4042-3-ND</a></td>
              <td><img class="zoom" src="{{ asset('images/item1.jpg') }}"></td>
              <td>Nichicon</td>
              <td>680</td>
              <td>80.00</td>
              <td class="article-btn edit"><a href="#" title="Update Data"><i style="color:#ffa700" class="fa fa-pencil-square" aria-hidden="true"></i></a>  </td>
              <td class="article-btn delete"><a href="#" title="Delete Article"><i style="color:#910f2c" class="fa fa-window-close" aria-hidden="true"></i></a> </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Analog chips</td>
              <td><a href="" title="View Product">493-44042-3-NFDG</a></td>
              <td><img class="zoom" src="{{ asset('images/item1.jpg') }}"></td>
              <td>Nichicon</td>
              <td>140</td>
              <td>100.00</td>
              <td class="article-btn edit"><a href="#" title="Update Data"><i style="color:#ffa700" class="fa fa-pencil-square" aria-hidden="true"></i></a>  </td>
              <td class="article-btn delete"><a href="#" title="Delete Article"><i style="color:#910f2c" class="fa fa-window-close" aria-hidden="true"></i></a> </td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
@stop
