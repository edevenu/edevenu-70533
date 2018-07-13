<!DOCTYPE html>
<html>
 <body>
 <style>
	table 
	{  
		color: #333; /* Lighten up font color */
		font-family: Helvetica, Arial, sans-serif; /* Nicer font */
		width: 640px; 
		border-collapse: 
		collapse; border-spacing: 0; 
	}

	td, th 
	{ 
		border: 1px solid #CCC; height: 30px; 
	} 

	th 
	{  
		background: #F3F3F3; /* Light grey background */
		font-weight: bold; /* Make sure they're bold */
	}

	td 
	{  
		background: #FAFAFA; /* Lighter grey background */
		text-align: center; /* Center our text */
	}
</style>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>70-533 Microsoft Azure Infrastructre Exam</h2>
				<p>This is demo page created for webapp</p>
				<table style="width:50%">
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
				<p>background: #000000;foreground: #FF0000;<?php This value will be displayed only for devlopment slot : echo getenv("slotOnlyVar"); ?> </p>
			</div>
		</div>
	</div>
 </body>
</html> 