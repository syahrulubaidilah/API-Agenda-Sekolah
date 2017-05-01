@extends('layouts.app')
@section('title', 'Ini Dashboard Page Title')
@section('content')
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
          <ul class="breadcrumb">
            <li>
              <i class="ace-icon fa fa-home home-icon"></i>
              <a href="#">Home</a>
            </li>
            <li class="active">Agenda</li>
          </ul>
          <!-- /.breadcrumb -->

          <div class="nav-search" id="nav-search">
            <form class="form-search">
              <span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
            </form>
          </div>
          <!-- /.nav-search -->
        </div>

        <div class="page-content">
          <div class="row">
            <div class="col-xs-12">
              <!-- PAGE CONTENT BEGINS -->
              <div class="page-header">
                <h1>
                  Tabel
                  <small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Agenda
								</small>
                </h1>
              </div>
              <!-- /.page-header -->
              <div class="row">
                <div class="col-xs-12">
                   <div class="col-md-8 pull-left">
                      <div class="font-icon-list">
                        <a class="btn btn-success submit fa fa-plus bigger-120" href="#">
                          <i class="pe-7s-plus"></i>
                        </a>
                        <button class="btn btn-default submit fa fa-refresh bigger-120 ">
                          <i class="pe-7s-refresh"></i>
                        </button>
                      </div>
                    </div>
                    <div class="col-md-4 pull-right">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" value="">
                      </div>
                    </div>
                  </div>
                  <table id="saimple-table" class="table  table-bordered table-hover">
                    <thead>
                      <th>Id</th>
                      <th>Nama</th>
                      <th>Deskripsi</th>
                      <th><i class="fa fa-calendar"></i> Tanggal</th>
                      <th><i class="fa fa-clock-o"></i> Waktu</th>
                      <th>Tempat</th>
                      <th>Peserta</th>
                      <th>Pembuat</th>
                      <th></th>
                    </thead>
                    <tbody>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                          <a class="btn btn-info fa fa-pencil bigger-120" href='#'>
                            <i class="pe-7s-pen"></i>
                          </a>
                          <button class="btn btn-danger fa fa-trash bigger-120">
                              <i class="pe-7s-trash"></i>
                              </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.span -->
              </div>
              <!-- /.row -->
              <!-- PAGE CONTENT ENDS -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.page-content -->
      </div>
@endsection
@section('scripts')
@endsection