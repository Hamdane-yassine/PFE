@extends('layouts.prof')
@section('title','Tableau de board')
@section('content')
	<div class="main-container">
		<div class="xs-pd-20-10 pd-ltr-20">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Année universitaire : 2021/2020</h4>
							<span class="pl-2"><i class="icon-copy fi-arrow-right"></i> Semestre 4</span>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div>
							<span class="btn btn-primary">07/04/2021</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row pb-10">
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">75</div>
								<div class="font-14 text-secondary weight-500">Etudiants</div>
							</div>
							<div class="widget-icon">
								<div class="icon"><span class="icon-copy fi-torsos-all"></span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">2</div>
								<div class="font-14 text-secondary weight-500">Filiéres</div>
							</div>
							<div class="widget-icon">
								<div class="icon"><i class="fa fa-graduation-cap"></i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">4</div>
								<div class="font-14 text-secondary weight-500">Total des absences</div>
							</div>
							<div class="widget-icon">
								<div class="icon"><i class="micon fa fa-calendar-check-o" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">ouvert</div>
								<div class="font-14 text-secondary weight-500">Insértion des notes</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#09cc06"><i class="icon-copy fi-check"
										aria-hidden="true"></i></div>
								<!-- <div class="icon" data-color="red"><i class="icon-copy fi-x" aria-hidden="true"></i></div> -->
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row pb-10">
				<div class="col-md-8 mb-20">
					<div class="card-box height-100-p pd-20">
						<div class="h5 pb-1">Demandes des rattrapages</div>
						<table class="data-table table nowrap">
							<thead>
								<tr>
									<th>N°</th>
									<th>Nom du professeur</th>
                             	    <th>Date d'absence</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Abd Ali lasfar</td>
                          	        <td>27 April 2021 11:55 am</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Abd Ali lasfar</td>
                          	        <td>27 April 2021 11:55 am</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Abd Ali lasfar</td>
                          	        <td>27 April 2021 11:55 am</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Abd Ali lasfar</td>
                          	        <td>27 April 2021 11:55 am</td>
								</tr>
								<tr>
									<td>5</td>
									<td>Abd Ali lasfar</td>
                          	        <td>27 April 2021 11:55 am</td>
								</tr>	
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-4 mb-20">
					<div class="card-box height-100-p pd-20">
						<div class="h5 mb-md-0">Notifications</div>
						<hr>
						<!-- <div class="text-center text-secondary">Aucun notification</div> -->
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo1.jpg" alt="">
										<h3>Lea R. Frith</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo2.jpg" alt="">
										<h3>Erik L. Richards</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo3.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo4.jpg" alt="">
										<h3>Renee I. Hansen</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>Vicki M. Coleman</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit
					Hingarajiya</a>
			</div>
		</div>
	</div>
	@endsection
	@section('SpecialScripts')
	<script src="{{ asset('src/plugins/apexcharts/apexcharts.min.js') }}"></script>
	<script src="{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('vendors/scripts/dashboard3.js') }}"></script>
	@endsection