<!doctype html>
<html lang="en">

<head>
	<title>{{auth()->user()->bpkp->nama_unit}}</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/chartist/css/chartist-custom.css')}}">
	<link href="{{asset('airpicker/dist/css/datepicker.min.css')}}" rel="stylesheet" type="text/css">
	<!-- MAIN CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.semanticui.min.css">
	<link rel="stylesheet" href="{{asset('admin/assets/css/jquery.dataTables.min')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{config('waslinsek.logo_url')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{config('waslinsek.logo_url')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		@include('layout.\navbar')
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		@include('layout.\sidebar')
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		@yield('content')
		<!-- END MAIN -->
		<div class="clearfix"></div>
			<div class="container-fluid">
				<p class="copyright">CREATED by <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">CPNS 2020</a>
</p>
			</div>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery/chained_dropdown.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery/modal.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
	<script src="{{asset('airpicker/dist/js/datepicker.min.js')}}"></script>
	<script src="{{asset('airpicker/dist/js/i18n/datepicker.en.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/datatable/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/datatable/dataTables.semanticui.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/datatable/semantic.min.js')}}"></script>

	@include('sweetalert::alert')
	
</body>

<script>
function myFunction() {
  var x = document.getElementById("signin-password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<style>
.datepicker{z-index:1151; }
</style>

<script>
    $(document).ready(function() {
    $('#data_users_reguler').DataTable( {
	"scrollX": true
    } );
} );

</script>

<script>
    $(document).ready(function() {
    $('#data_users_reguler_1').DataTable( {
	"scrollX": true
    } );
} );
</script>


<script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>
		<script>
    $('.delete').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
		swal.fire({
        title: 'Are you sure?',
        text: 'This record and it`s details will be permanantly deleted!',
        icon: 'warning',
				showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!',
				closeOnConfirm: false,
  			closeOnCancel: false,
    }).then((result) => {
        if (result.value) {
						window.location.href = url;
        }
    });
});
</script>
</html>
