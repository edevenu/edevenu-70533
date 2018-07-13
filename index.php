<!DOCTYPE html>
<html>
 <body>
 <style>
table, th, td {
    border: 1px solid black;
}
</style>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>70-533 Microsoft Azure Infrastructre Exam</h2>
				<p>This is demo page created for webapp</p>
				<table style="width:100%">
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