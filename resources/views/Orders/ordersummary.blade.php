@extends('main')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-8" style="margin-left: -7px;">
				<div class="title container" style="margin-top: 5%;">
					<h3>WONDERBLOOM FLOWERSHOP ORDERING</h3>
				</div>
				<div class="panel" style="margin-top: 3%">
					<div class="panel-heading  Sharp">
						<div class="panel-title">
                			<div class="row">
                  				<div class="col-xs-6">
                    				<h6 style="color: white"><span class="glyphicon glyphicon-user" style="color: white;"></span> <b>Order Summary</b></h6>
                  				</div>
                			</div>
              			</div>
					</div>
					<div class="panel-body">
						<div class="col-md-12" style="margin-top: 40px;overflow-x:auto;">
							<h3 class="fontx text-center">Flower Summary</h3>
							<hr>
							<table class="table table-hover table-bordered">
							  	<thead>
							    	<tr>
								      <th class="text-center">Flower ID</th>
								      <th class="text-center">Name</th>
								      <th class="text-center">Image</th>
								      <th class="text-center">Price</th>
								      <th class="text-center">Qty</th>
								      <th class="text-center">Total Amount</th>
									</tr>
							  </thead>
							  <tbody>
							    <tr>
							      <th scope="row">1</th>
							      <td>Mark</td>
							      <td>Otto</td>
							      <td>@mdo</td>
							      <td></td>
							      <td></td>
							    </tr>
							    <tr>
							      <th scope="row">2</th>
							      <td>Jacob</td>
							      <td>Thornton</td>
							      <td>@fat</td>
							      <td></td>
							      <td></td>
							    </tr>
							  </tbody>
							</table>
						</div>
						<hr>
						<div class="col-md-4 col-md-offset-7">
							<b>(Flower) Total Amount: PHP</b>
						</div>
						<div class="col-md-12" style="margin-top: 40px;overflow-x:auto;">
							<h3 class="fontx text-center">Bouquet Summary</h3>
							<hr>
							<table class="table table-hover table-bordered">
							  	<thead>
							    	<tr>
								      <th class="text-center">Flower ID</th>
								      <th class="text-center">Name</th>
								      <th class="text-center">Image</th>
								      <th class="text-center">Price</th>
								      <th class="text-center">Qty</th>
								      <th class="text-center">Total Amount</th>
									</tr>
							  </thead>
							  <tbody>
							    <tr>
							      <th scope="row">1</th>
							      <td>Mark</td>
							      <td>Otto</td>
							      <td>@mdo</td>
							      <td></td>
							      <td></td>
							    </tr>
							    <tr>
							      <th scope="row">2</th>
							      <td>Jacob</td>
							      <td>Thornton</td>
							      <td>@fat</td>
							      <td></td>
							      <td></td>
							    </tr>
							  </tbody>
							</table>
						</div>
						<div class="col-md-4 col-md-offset-7">
							<b>(Bouquet) Total Amount: PHP</b>
						</div>
					</div>
					<div class="panel-footer">
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel" style="margin-top: 35%; margin-left: -5%;">
					<div class="panel-heading  Sharp">
						<div class="panel-title">
                			<h6 style="color: white"><span class="glyphicon glyphicon-user text-center" style="color: white;"></span> <b>Order Processing</b></h6>
              			</div>
					</div>
					<div class="panel-body">
						<h5 class="text-center">Customer Details</h5>
						<div class="togglebutton col-md-6">
							<label>
						    	<input type="checkbox" checked="">
								One Time Customer?
							</label>
						</div>
						<div class="col-md-4 dropdown" style="margin-left: -5%;">
							<a href="#" class="btn btn-simple dropdown-toggle" data-toggle="dropdown">
						    	Choose Customer
						    	<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">...</a></li>
								<li><a href="#">...</a></li>
								<li><a href="#">...</a></li>
							</ul>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group label-floating">
									<label class="control-label">First Name</label>
									<input type="email" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group label-floating">
									<label class="control-label">Last Name</label>
									<input type="email" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group label-floating">
									<label class="control-label">Contact No</label>
									<input type="email" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group label-floating">
									<label class="control-label">Email Address</label>
									<input type="email" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group label-floating">
									<label class="control-label">Address Line</label>
									<input type="email" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group label-floating">
									<label class="control-label">Baranggay</label>
									<input type="email" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<a href="#" class="btn btn-simple dropdown-toggle" data-toggle="dropdown">
						    	Province
						    	<b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">...</a></li>
									<li><a href="#">...</a></li>
									<li><a href="#">...</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<a href="#" class="btn btn-simple dropdown-toggle" data-toggle="dropdown">
						    	City
						    	<b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">...</a></li>
									<li><a href="#">...</a></li>
									<li><a href="#">...</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<a href="/shippingmethod" type="button" class="btn btn-sm Lemon"> Next</a>
					</div>
				</div>
			</div>
		</div>
	</div>	
@endsection



													
													