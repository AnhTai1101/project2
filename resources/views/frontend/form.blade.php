<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
<link rel="stylesheet" href="public/css/style1.css">
<div class="container">
	<div class="row">
		<form role="form" id="contact-form" class="contact-form">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" name="Name" autocomplete="off" id="Name" placeholder="Name">
					</div>
				</div>
					<div class="col-md-6">
					<div class="form-group">
						<input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<textarea class="form-control textarea" rows="3" name="Message" id="Message" placeholder="Message"></textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<button type="submit" class="btn main-btn pull-right">Send a message</button>
				</div>
			</div>
		</form>
	</div>
</div>