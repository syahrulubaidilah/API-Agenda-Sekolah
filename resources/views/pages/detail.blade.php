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
						<li class="active">Detail Activity</li>
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
					<div class="page-header">
						<h1>
							{{ $activity->name }}
							<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
								</small>
						</h1>
					</div>
					<!-- /.page-header -->
          <div class="table-detail">
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<div class="text-center">
									<img height="200" class="thumbnail inline no-margin-bottom" src="{{ $activity->image }}" />
									<br />
									<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
										<div class="inline position-relative">
											<a class="user-title-label" href="#">
												<i class="ace-icon fa fa-circle light-green"></i>
												&nbsp;
												<span class="white">{{ $activity->name }}</span>
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xs-12 col-sm-7">
								<div class="space visible-xs"></div>
									<div class="profile-user-info profile-user-info-striped">
										<div class="profile-info-row">
											<div class="profile-info-name"> Pembuat </div>
												<div class="profile-info-value">
													<span>{{ $activity->users->name === null ? "null" : $activity->users->name }}</span>
												</div>
											</div>
											<div class="profile-info-row">
												<div class="profile-info-name"> Deskripsi </div>
												<div class="profile-info-value">
													<span>{{ $activity->description }}</span>
												</div>
											</div>
											<div class="profile-info-row">
												<div class="profile-info-name"> Tanggal </div>
												<div class="profile-info-value">
													<span>{{ $activity->date_activity }}</span>
												</div>
											</div>
											<div class="profile-info-row">
												<div class="profile-info-name"> Waktu </div>
												<div class="profile-info-value">
													<span>{{ $activity->time }}</span>
												</div>
											</div>
											<div class="profile-info-row">
												<div class="profile-info-name"> Tempat </div>
												<div class="profile-info-value">
													<span>{{ $activity->place }}</span>
												</div>
											</div>
											<div class="profile-info-row">
												<div class="profile-info-name"> Peserta </div>
												<div class="profile-info-value">
													<span>{{ $activity->participant }}</span>
												</div>
											</div>
                      <div class="profile-info-row">
												<div class="profile-info-name"> Status </div>
												<div class="profile-info-value">
                          @if($activity->status == 0)
                            <span class="label label-default">Draft</span>
                          @elseif($activity->status == 1)
                            <span class="label label-primary">Publish</span>@else
                            <span class="label label-danger">Expired</span>
                          @endif
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
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