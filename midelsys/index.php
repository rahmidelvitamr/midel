<!DOCTYPE>
<html>
<head>
<title>Midel System</title>
<script type="text/javascript" src="view/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="view/js/bootstrap.bundle.min.js"></script>
<link href="view/css/bootstrap.min.css" rel="stylesheet">
<link href="view/css/fontawesome-all.min.css" rel="stylesheet">
<link href="view/css/midel.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid bg-light">
	<nav class="navbar fixed-top d-flex flex-row justify-content-between align-items-center bg-midel-blue-peach">
    		<div class="d-flex flex-row align-items-center">
    			<a href="#" id="a-logo"><img src="view/images/midel-logo.png" width="30" height="30" alt=""></a>
    			<div class="ml-2">Midel Administration System</div>
    		</div>
    		<div class="mr-2">Hi, User</div>
	</nav>
	<div class="row h-100">
		<div class="col-2 bg-midel-blue-peach">
			<nav class="navbar navbar-expand mt-5">
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav w-100 d-flex flex-column h5 lh-3">
						<li class="nav-item">
							<a href="#"><i class="fas fa-tachometer-alt"></i><span class="ml-2">Dashboard</span></a>
						</li>
						<li class="nav-item">
							<a href="#"><i class="fas fa-shopping-basket"></i><span class="ml-2">Sale</span></a>
						</li>
						<li class="nav-item">
							<a href="#"><i class="fas fa-shopping-cart"></i><span class="ml-2">Purchase</span></a>
						</li>
						<li class="nav-item">
							<a href="#"><i class="fas fa-money-bill-alt"></i><span class="ml-2">Cost</span></a>
						</li>
						<li class="nav-item">
							<a href="#"><i class="fas fa-link"></i><span class="ml-2">Supplier</span></a>
						</li>
						<li class="nav-item">
							<a href="#"><i class="fas fa-users"></i><span class="ml-2">Customer</span></a>
						</li>
						<li class="nav-item">
							<a href="#"><i class="fab fa-product-hunt"></i><span class="ml-2">Product</span></a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="col">
			<div class="container-fluid mt-5 pt-2" id="view">
				
			</div>
		</div>
	</div>
 </div>
</body>
<script type="text/javascript" src="view/js/midel.js"></script>
</html>