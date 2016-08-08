<!--Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog"aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
			</button>
			<h4 class="modal-title" id="myModalLabel">
				Login to your account
			</h4>
		</div>
		
		<div class="modal-body">
			<form role="form">
				<div class="form-group">
					<label for="name">Email</label>
					<input type="email" class="form-control" id="email" placeholder="enter account email">
				</div>
				
				<div class="form-group">
					<label for="name">Password</label>
					<input type="password" class="form-control" id="password" placeholder="enter account password">
				</div>
				
				<button type="button" class="btn btn-primary" id="login">
					Login
				</button>
			
				<button type="button" class="btn btn-default" data-dismiss="modal">
					Cancel
				</button>
			</form>
		</div>
		
		<div class="modal-footer">
			
			
		</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.Login modal -->

<!--Account Modal -->
<div class="modal fade" id="newAccountModal" tabindex="-1" role="dialog"aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
			</button>
			<h4 class="modal-title" id="myModalLabel">
				Create a new account
			</h4>
		</div>
		
		<div class="modal-body">
			<form role="form">
				<div class="form-group">
					<label for="name">Email</label>
					<input type="email" class="form-control" id="create_email" placeholder="enter account email">
				</div>
				
				<div class="form-group">
					<label for="name">Password</label>
					<input type="password" class="form-control" id="new_password" placeholder="enter account password">
				</div>
				
				<div class="form-group">
					<label for="name">Repeat Password</label>
					<input type="password" class="form-control" id="repeat_new_password" placeholder="re-enter account password">
				</div>
				
				<button type="button" class="btn btn-primary" id="create_account">
					Create account
				</button>
			
				<button type="button" class="btn btn-default" data-dismiss="modal">
					Cancel
				</button>
			</form>
		</div>
		
		<div class="modal-footer">
			
			
		</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.Account modal -->