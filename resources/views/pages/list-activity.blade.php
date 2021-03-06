@extends('layouts.dashboard')
@section('title', 'Agenda')
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
                        <a class="btn btn-success submit fa fa-plus bigger-120" href={{route('page.create-activity')}}>
                          <i class="pe-7s-plus"></i>
                        </a>
                        <button class="btn btn-default submit fa fa-refresh bigger-120 ">
                          <i class="pe-7s-refresh"></i>
                        </button>
                      </div>
                    </div>
                    <div class="col-md-4 pull-right">
                      <form method="GET" action="{{route('page.list-activity')}}"> 
                       <div class="form-group">
                         <input type="text" class="form-control" name="search" placeholder="Pencarian..." value="">
                       </div>
                     </form>
                    </div>
                  </div>
                  <table id="saimple-table" class="table  table-bordered table-hover">
                    <thead>
                      <th>Gambar</th>
                      <th>Nama</th>
                      <th>Deskripsi</th>
                      <th><i class="fa fa-calendar"></i> Tanggal Mulai</th>
                      <th><i class="fa fa-calendar"></i> Tanggal Selesai</th>
                      <th><i class="fa fa-clock-o"></i> Waktu</th>
                      <th>Tempat</th>
                      <th>Peserta</th>
                      <th>Status</th>
                      <th>Pembuat</th>
                      <th>Detail</th>
                      <th></th>
                    </thead>
                    <tbody>
                       @foreach ($activities as $activity)
                      <tr>
                        <td>
                          <img height="150" class="thumbnail inline no-margin-bottom" src="{{ $activity->image }}" />
                        </td>
                        <td>{{ $activity->name }}</td>
                        <td>{{ $activity->description }}</td>
                        <td>{{ $activity->start_date }}</td>
                        <td>{{ $activity->end_date }}</td>
                        <td>{{ $activity->time }}</td>
                        <td>{{ $activity->place }}</td>
                        <td>{{ $activity->participant }}</td>
                        <td>
                          @if($activity->status == 0)
                            <span class="label label-default">Draft</span>
                          @elseif($activity->status == 1)
                            <span class="label label-primary">Publish</span>@else
                            <span class="label label-danger">Expired</span>
                          @endif
                        </td>
                        <td>{{ $activity->users->name === null ? "null" : $activity->users->name }}</td>
                        <td>
                              <a class="green bigger-140 show-details-btn" title="Show Details" href={{route('page.detail-activity',['id' => $activity->id])}}>
																<i class="ace-icon fa fa-angle-double-right"></i>
																<span class="sr-only">Details</span>
															</a>
                        </td>
                        <td>
                          <a class="btn btn-info fa fa-pencil bigger-120" href={{route('page.edit-activity',['id' => $activity->id])}}>
                            <i class="pe-7s-pen"></i>
                          </a>
                          <button class="btn btn-danger fa fa-trash bigger-120" onClick="deleteData('{{$activity->id}}')">
                              <i class="pe-7s-trash"></i>
                              </button>
                        </td>
                      </tr>
                       @endforeach
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
          <div class="col-md-12 text-center">
              <!--pagination-->
              {{$activities->links()}}
          </div>
        </div>
        <!-- /.page-content -->
      </div>
@endsection
@section('scripts')
  <script>
    function deleteData(activityId){
      console.log(activityId);
      swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel plx!",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm){
        if (isConfirm) {
          // delete data using ajax
          $.ajax({
            url: "/api/activity/" + activityId,
            type: 'DELETE',
            success: function( data, textStatus, jQxhr ){
              console.log(data);
              swal("Deleted!", "Your imaginary file has been deleted.", "success");
            },
            error: function( data, textStatus, jQxhr ){
              swal("Internal Server Error", "Whooops something went wrong!", "error");
            }
          });
          // reload page
          location.reload();
        } else {
          swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
      });
    };
  </script>
@endsection