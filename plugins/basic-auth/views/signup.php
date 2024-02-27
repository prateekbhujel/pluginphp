<link rel="stylesheet" type="text/css" href="<?=plugin_http_path('assets/css/style.css')?>">

<main class="p-4" style="background-color: #dde5f4; height: 100vh;">
	
	<form method="post" class="col-xl-4 col-lg-5 col-md-6 col-sm-8 mx-auto p-4 shadow" style="border-radius: 38px; background-color: #f1f7fe;">
		
		<h3 class="text-center mt-2">Signup</h3>
		<div class="text-muted text-center mb-3"><i>Please Signup to continue.</i></div>

		<div class="form-floating my-2">
		  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" style="border-radius: 35px;">
		  <label for="floatingInput">First Name</label>
		</div>

		<div class="form-floating my-2">
		  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" style="border-radius: 35px;">
		  <label for="floatingInput">Last Name</label>
		</div>

		<div class="form-floating my-2">
		  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" style="border-radius: 35px;">
		  <label for="floatingInput">Email address</label>
		</div>
		
		<div class="form-floating my-2">
		  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" style="border-radius: 35px;">
		  <label for="floatingPassword">Password</label>
		</div>

		<div class="form-floating my-2">
		  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" style="border-radius: 35px;">
		  <label for="floatingPassword">Retype Password</label>
		</div>

		<div class="px-2 d-flex justify-content-between my-2">
			<a href="<?=ROOT?>/<?=$vars['forgot_page']?>">Forgot password?</a>
			<a href="<?=ROOT?>/<?=$vars['login_page']?>">or Login</a>
		</div>

		<button class="btn text-light px-4 py-3 w-100 my-2" style="border-radius: 38px; background-color: #3d4785;">Signup</button>
	</form>

</main>

<script src="<?=plugin_http_path('assets/js/plugin.js')?>"></script>