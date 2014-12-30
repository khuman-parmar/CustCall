
<div class="login-wrapper" style="height:500px;width:500px;margin-left:400px;">
	    <div class="text-center">
		<h2 class="fadeInUp animation-delay8" style="font-weight:bold">
		    <span class="text-success">Cust</span> <span style="color:#ccc; text-shadow:0 1px #fff">Call</span>
		</h2>
	    </div>
	    <div class="login-widget animation-delay1">	
		<div class="panel panel-default">
		    <div class="panel-heading clearfix">
			<div class="pull-left">
			    <i class="fa fa-lock fa-lg"></i> Login
			</div>

			<div class="pull-right">
			    <span style="font-size:11px;">Don't have any account?</span>
			    <a class="btn btn-default btn-xs login-link" href="signup" style="margin-top:-2px;"><i class="fa fa-plus-circle"></i> Sign up</a>
			</div>
		    </div>
		    <div class="panel-body">
			<form class="form-login" action="<?php l('login'); ?>" method="post">
			<?php if ($error != '') : ?>
            <div class="error">
                <img src="<?php print _MEDIA_URL ?>img/login-erroe.png" width="28" height="26" alt=" " />
                <strong>ERROR:</strong> The password and username you entered 
                is incorrect. 
            </div>
        <?php endif; ?>
			    <div class="form-group">
				<label>Username</label>
				<input type="text" name="username" id="username" placeholder="Username" class="form-control input-sm bounceIn animation-delay2" >
			    </div>
			    <div class="form-group">
				<label>Password</label>
				<input type="password" name="password" id="password" placeholder="Password" class="form-control input-sm bounceIn animation-delay4">
			    </div>
			    <div class="form-group">
				<label class="label-checkbox inline">
				    <input type="checkbox" class="regular-checkbox chk-delete" />
					
				    <span class="custom-checkbox info bounceIn animation-delay4"></span>
				</label>
				Remember me		
			    </div>

			    <div class="seperator"></div>
			    <div class="form-group">
				Forgot your password?<br/>
				Click <a href="#">here</a> to reset your password
			    </div>

			    <hr/>
                <input type="submit" name="submit" value="Sign In" class="btn btn-success btn-sm bounceIn animation-delay5 login-link pull-right" style="" />
			   
			</form>
		    </div>
		</div><!-- /panel -->
	    </div><!-- /login-widget -->
	</div><!-- /login-wrapper -->


<style type="text/css">
    body{
        background:url(<?php print _MEDIA_URL ?>img/bg.jpg);
    }
</style>
