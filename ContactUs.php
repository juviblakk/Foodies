<?php 
$title = 'Contact Us';
require_once 'includes/header.php';
?>

<div class="columns" style="margin-top:40px;">
	<div class="column is-11 is-offset-1">
		<div>
			<h3>We'd Like to Hear from you.</h3>
			<p>Hey there! Feel free to reach out to us and let us know how we can serve you better.</p>
		</div>
	</div>
</div>
<form style="font-size:1vw" action="mail.php" method="post" onsubmit="return false;">
	<div class="columns" style="min-height:800px;">
		<div class="column is-8">
			<div class="field is-horizontal">
				<div class="field-label is-normal">
					<label class="label">Name:</label>
				</div>
				<div class="field-body">
					<div class="field">
						<p class="control">
							<input type="text" class="input is-medium" name="name" />
						</p>
					</div>
				</div>
			</div>
			<div class="field is-horizontal">
				<div class="field-label is-normal">
					<label class="label">Email:</label>
				</div>
				<div class="field-body">
					<div class="field">
					<p class="control">
						<input class="input is-medium" type="email" value="" name="email" />
					</p>
					</div>
				</div>
			</div>
			<div class="field is-horizontal">
				<div class="field-label is-normal">
					<label class="label">Priority:</label>
				</div>
				<div class="field-body">
					<div class="field">
					<p class="control">
						<select name="priority" class="select is-medium">
							<option value="Low">Low</option>
							<option value="Normal">Normal</option>
							<option value="High">High</option>
							<option value="Emergency">Emergency</option>
						</select>
					</p>
					</div>
				</div>
			</div>
			<div class="field is-horizontal">
				<div class="field-label is-normal">
					<label class="label">Type of Suggestion:</label>
				</div>
				<div class="field-body">
					<div class="field">
					<p class="control">
						<select name="type" class="select is-medium">
							<option value="layout">Layout (Design)</option>
							<option value="content">Content of the Website</option>
							<option value="experience">User friendliness</option>
							<option value="proformance">Overall Performance</option>
						</select>
					</p>
					</div>
				</div>
			</div>
			<div class="field is-horizontal">
				<div class="field-label is-normal">
					<label class="label">Message:</label>
				</div>
				<div class="field-body">
					<div class="field">
						<p class="control">
							<textarea class="textarea is-medium" name="message" id="" cols="30" rows="10"></textarea>
						</p>
						<div class="buttons" style="padding-top:10px;">
							<button class="button is-success is-medium is-fullwidth" type="submit">Submit</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="column is-8">
			<div style="background-color:#b19cd9" class="contact-col" >
				<h3>Group Office</h3>
				<p>27 Upper Waterloo Road,<br/>
				Kingston 10<br/>
				Jamaica, W.I.</p>
				<p>+876-555-5555</p>
				<p>+876-222-3333</p>
				<br>
				<br>
			</div>

			<br>
			
			<a class="btn" href="questions.php">Feedback</a>
		</div>
		
	</div>
</form>

</body>
</html>
<?php require_once 'includes/footer.php'; ?>