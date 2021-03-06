<?php 

require_once("action/SignInAction.php");

$action = new SignInAction();
$action->execute();
require_once("partial/header.php") ;




?>
	<div  class="text-center">
	<form class="form-signin" method="post">
		<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
		<?php 
					if ($action->wrongSignin) 
						echo '<div class="alert alert-danger"><strong> Error! </strong> Wrong username or password entered </div>';
				?>
		<label for="inputEmail" class="sr-only">Email address</label>
		<input type="email" id="inputEmail" class="form-control" name= "username" placeholder="Email address">
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" >
		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">
		Sign in
		</button>
		
		<a href="<?=htmlspecialchars($loginURL)?>" class="btn btn-lg btn-block facebook-button-colour"  type="submit">
			<i class="fa fa-facebook"></i>
			Sign In with Facebook
			
		</a>


		<button class="btn btn-lg btn-block google-button-colour"  type="submit">
			<i class="fa fa-google"></i>
			Sign in with Google
			
		</button>
		



		<hr>

			<div class="form-group">
				<a href="#forgot" data-toggle="modal"> Forgot Password? </a>
			</div>

		
		
	</form>
</div>
<?php 
require_once("partial/footer.php") 
?>