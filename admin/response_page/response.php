<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>
		Response Page
	</title>
	<style type="text/css">
		.response
		{
			max-width: 800px;
			margin: 50px auto;
			position: relative;
			box-shadow: 0 10px 30px 0px rgba(0, 0, 0, 0.1);
			padding: 50px;
		}
		.response .title
		{
			text-transform: uppercase;
			text-align: center;
			letter-spacing: 3px;
			font-size: 3em;
			line-height: 48px;
			padding-bottom: 20px;
			color: #5543ca;
			background: linear-gradient(to right,#f4524d 0%,#5543ca 100%);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
		}
		.contact-form .form-field
		{
			position: relative;
			margin: 32px 0;
		}
		.contact-form .input-text
		{
			display: block;
			width: 100%;height: 36px;border-width: 0 0 2px 0;
			border-color: #5543ca;
			font-size: 18px;
			line-height: 26px;
			font-weight: 400;
		}
		.contact-form .input-text:focus+ .label,
		.contact-form .input-text.not-empty + .label
		{
			transform: translateY(-24px);
		}
		.contact-form .input-text:focus
		{
			outline: none;
		}
		.contact-form .label
		{
			position: absolute;
			left: 20px;
			bottom: 11px;
			font-size: 18px;
			line-height: 26px;
			font-weight: 400;
			color: #5543ca;
			cursor: text;
			text-transform: capitalize;
			transition: transform 0.2s ease-in-out;
		}
		.contact-form .submit
		{
			display: inline-block;
			background-image: linear-gradient(125deg,#a72879,#064497);
			color: #fff;
			text-transform: uppercase;
			letter-spacing: 2px;
			font-size: 16px;
			padding: 8px 16px;
			border: none;
			width: 200px;
			cursor: pointer;
		}

	</style>
</head>
<body>
	<section class="response">
		<h3 class="title">
			Response Query
		</h3>
		<div class="container">
			<div class="contact-form row">
				<div class="form-field col-lg-6">
					<input id="name" type="text" name="" class="input-text">
					<label for="name" class="label">Name</label>
				</div>
				<div class="form-field col-lg-6">
					<input id="name" type="phone" name="" class="input-text">
					<label for="name" class="label">Phone Number</label>
				</div>
				<div class="form-field col-lg-6">
					<input id="name" type="email" name="" class="input-text">
					<label for="name" class="label">Email</label>
				</div>
				<div class="form-field col-lg-6">
					<input id="name" type="text" name="" class="input-text">
					<label for="name" class="label">Subject</label>
				</div>
				<div class="form-field col-lg-12">
					<input id="name" type="text" name="" class="input-text">
					<label for="name" class="label">Message</label>
				</div>
				<div class="form-field col-lg-12">
					<input type="Submit" name="" value="Send Message" class="submit">
				</div>
			</div>
		</div>
	</section>

</body>
</html>