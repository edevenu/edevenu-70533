<!DOCTYPE html>
<html>
 <body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2></h2>
				<p></p>
				<table class ="table table-stripped">
					<thead>
						<tr>
							<th>Environment</th>
							<th>Message</th>
						</tr>
					<tbody>
						<tr>
							<td><?php echo getenv("Env"); ?> </td>
							<td><?php echo getenv("slotMessage"); ?> </td>
						</tr>
					</tbody>
					</thead>
				</table>	
			</div>
		</div>
	</div>
 </body>
</html> 