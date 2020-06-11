@extends('/layout/master') 


@section('content')    
<!-- MAIN -->
<div class="main">
<!-- MAIN CONTENT -->
<div class="main-content">
<div class="container-fluid">
	<div class="panel panel-profile">
		<div class="clearfix">
			<!-- LEFT COLUMN -->
			<div class="col-md-4">
			<br>
				<!-- PROFILE HEADER -->
				<div class="profile-header">
					<div class="overlay"></div>
					<div class="profile-main overlay" style="background: url('{{config('waslinsek.gedung_url')}}')">
						<img src="{{config('waslinsek.logo_url')}}" width='40%' class="img-circle" alt="Avatar">
						<h3 class="name">{{auth()->user()->name}}</h3>
						<span class="online-status status-available">Available</span>
					</div>
					<div class="profile-stat">
						<div class="row">
							<div class="col-md-4 stat-item">
								45 <span>Program</span>
							</div>
							<div class="col-md-4 stat-item">
								15 <span>Pegawai</span>
							</div>
							<div class="col-md-4 stat-item">
								2174 <span>Point</span>
							</div>
						</div>
					</div>
				</div>
				<!-- END PROFILE HEADER -->
				<!-- PROFILE DETAIL -->
				<div class="profile-detail">
					<div class="profile-info">
						<h4 class="heading">Basic Info</h4>
						<ul class="list-unstyled list-justify">
							<li>Unit Kerja <span>{{auth()->user()->bpkp->nama_unit}}</span></li>
							<li>Telepon <span>{{auth()->user()->bpkp->telepon}}</span></li>
							<li>Email <span>{{auth()->user()->bpkp->email}}</span></li>
							<li>Website <span><a href="{{auth()->user()->bpkp->website}}">{{auth()->user()->bpkp->website}}</a></span></li>
							<li>Alamat <li><right>{{auth()->user()->bpkp->alamat}}</right></li></li>
						</ul>

					</div>
					<!-- <div class="profile-info">
						<h4 class="heading">Social</h4>
						<ul class="list-inline social-icons">
							<li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
						</ul>
					</div> -->
					<div class="text-center"><a href="/profile/{{auth()->user()->bpkp->id}}/edit" class="btn btn-primary">Edit Profile</a></div>
				</div>
				
				<!-- END PROFILE DETAIL -->
			</div>
			<!-- END LEFT COLUMN -->
			<!-- RIGHT COLUMN -->
			<div class="col-md-8">
				<br>
				<h4 class="heading">Proyek Pengawasan</h4>
				<!-- AWARDS -->
				
				<!-- TABBED CONTENT -->
				<div class="custom-tabs-line tabs-line-bottom left-aligned">
					<ul class="nav" role="tablist">
						<li class="active"><a href="{{auth()->user()->id}}#tab-bottom-left1" role="tab" data-toggle="tab">Recent Activity</a></li>
						<li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Projects <span class="badge">{{$count = count($count)}}</span></a></li>
					</ul>
				</div>
				<div class="tab-content">
					<div class="tab-pane fade in active" id="tab-bottom-left1">
						<ul class="list-unstyled activity-timeline">
							<li>
								<i class="fa fa-comment activity-icon"></i>
								<p>Commented on post <a href="#">Prototyping</a> <span class="timestamp">2 minutes ago</span></p>
							</li>
							<li>
								<i class="fa fa-cloud-upload activity-icon"></i>
								<p>Uploaded new file <a href="#">Proposal.docx</a> to project <a href="#">New Year Campaign</a> <span class="timestamp">7 hours ago</span></p>
							</li>
							<li>
								<i class="fa fa-plus activity-icon"></i>
								<p>Added <a href="#">Martin</a> and <a href="#">3 others colleagues</a> to project repository <span class="timestamp">Yesterday</span></p>
							</li>
							<li>
								<i class="fa fa-check activity-icon"></i>
								<p>Finished 80% of all <a href="#">assigned tasks</a> <span class="timestamp">1 day ago</span></p>
							</li>
						</ul>
						<div class="margin-top-30 text-center"><a href="#" class="btn btn-default">See all activity</a></div>
					</div>
					<div class="tab-pane fade" id="tab-bottom-left2">
						<div class="table-responsive">
							<table class="table project-table">
								<thead>
									<tr>
										<th>Objek Pengawasan</th>
										<th width="20%">Progress</th>
										<th>Surat Tugas</th>
										<th>Active</th>
									</tr>
								</thead>
								<tbody>
								@foreach($objek as $objek)
									<tr>
										<td><a href="/pemilihan/index">{{$objek -> objek}}</a></td>
										<td>
										<center><label class="label label-info">{{$objek -> progres}} Complete</label></center>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="{{$objek -> progres}}" aria-valuemin="0" aria-valuemax="100" style='width: {{$objek -> progres}};'>
												</div>
											</div>
										</td>
										<td><a href="/surat_tugas/index">{{$objek -> no_st}}</a></td>
										<td><span class="label label-success">ACTIVE</span></td>
								@endforeach
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>

				<!-- END TABBED CONTENT -->


@endsection