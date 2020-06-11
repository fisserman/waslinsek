<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav" id="accordion">
						<li>
						<a href="/dashboard" class="{{Request::is('dashboard')? 'active':''}}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						@if (auth()->user()->role == 'admin')
						<li><a href="/administrator/user_admin" class="{{Request::is('administrator/user_admin')?'active':''}}"><i class="lnr lnr-user"></i> <span>User Managements</span></a></li>
						@endif
						<li><a href="#subPages1" data-toggle="collapse" aria-expanded="true" aria-controls="subPages" class="{{Request::is('perencanaan/index', 'pemilihan/index', 'surat_tugas/index', 'data_tim/index')?'active':''}}"><i class="lnr lnr-file-empty"></i> <span>Persiapan</span><i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages1" class="collapse" data-parent="#accordion">
							<ul class="nav">
									<li><a href="/perencanaan/index" class=""><i class="lnr lnr-apartment"></i><span>Objek Pengawasan</span></a></li>
									<li><a href="/sasaran" class=""><i class="lnr lnr-star-half"></i><span>Indeks Program</span></a></li>
									<li><a href="/surat_tugas/index" class=""><i class="lnr lnr-envelope"></i><span>Surat Tugas</span></a></li>
									<li><a href="/data_tim/index" class=""><i class="lnr lnr-users"></i><span>Data Tim</span></a></li>
									<li><a href="/pemilihan/index" class=""><i class="lnr lnr-location"></i><span>Pemilihan Objek</span></a></li>
								</ul>
						</div>
						<li><a href="#subPages2" data-toggle="collapse" aria-expanded="true" aria-controls="subPages" class="{{Request::is('program','wilayah')?'active':''}}"><i class="lnr lnr-inbox"></i> <span>Pelaksanaan</span><i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse" data-parent="#accordion">
							<ul class="nav">
									<li><a href="/wilayah" class=""><i class="lnr lnr-store"></i><span>Dukungan Pemda</span></a></li>
									<li><a href="/program" class=""><i class="lnr lnr-star-half"></i><span>Prioritas Nasional</span></a></li>
							</ul>
						</div>
						<li><a href="/data_tim/index" class="" selected='nav-link active'><i class="lnr lnr-calendar-full" class=></i> <span>Pelaporan</span></a></li>
						<!-- <li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a></li>
						<li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
						<li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li> -->
						<!-- <li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li> -->
						<!-- <li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li> -->
					</ul>
				</nav>
			</div>
		</div>

<!-- <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item has-treeview menu-open">
							<a href="#" class="nav-link active">
								<i class="nav-icon fas fa-user"></i>
								<p>
									Report Personal
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="http://eos.bpkp.go.id/ipms_pro/covid/personal/status" class="nav-link active">
										&nbsp;&nbsp;&nbsp; <i class="fa fa-notes-medical nav-icon text-danger"></i>
										<p>Status Kesehatan</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="http://eos.bpkp.go.id/ipms_pro/covid/personal/checkup" class="nav-link ">
										&nbsp;&nbsp;&nbsp; <i class="fa fa-stethoscope nav-icon text-info"></i>
										<p>Skor Self Check</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item has-treeview ">
							<a href="#" class="nav-link ">
								<i class="nav-icon fas fa-edit"></i>
								<p>
									Input Data
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="http://eos.bpkp.go.id/ipms_pro/covid/input" class="nav-link ">
										&nbsp;&nbsp;&nbsp; <i class="fa fa-notes-medical nav-icon text-danger"></i>
										<p>Status Kesehatan</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="http://eos.bpkp.go.id/ipms_pro/covid/checkup" class="nav-link ">
										&nbsp;&nbsp;&nbsp; <i class="fa fa-stethoscope nav-icon text-info"></i>
										<p>Self-Check Kondisi</p>
									</a>
								</li>
							</ul>
						</li>
											</ul> -->