<div class="padding-md">
				<div class="clearfix">
					<div class="pull-left">
						<span class="img-demo">
							Logo
						</span>
						<div class="pull-left m-left-sm">
							<h3 class="m-bottom-xs m-top-xs">Endless Admin</h3>
							<span class="text-muted">endless.themes@gmail.com</span>
						</div>
					</div>
					<div class="pull-right">
						<h5><strong>#82370</strong></h5>
						<strong>13th Oct 2013</strong>
					</div>
				</div>
				<hr>
				<div class="clearfix">
					<div class="pull-left"> 
						<h4>Company Information</h4> 
						<address> 
							<strong>Twitter, Inc.</strong><br> 
							795 Folsom Ave, Suite 600<br> 
							San Francisco, CA 94107<br> 
							<abbr title="Phone">P:</abbr> (123) 456-7890 
						</address> 
					</div>
					<div class="pull-right text-right">
						<h4>Client Information</h4> 
						<address> 
							<strong>Twitter, Inc.</strong><br> 
							795 Folsom Ave, Suite 600<br> 
							San Francisco, CA 94107<br> 
							<abbr title="Phone">P:</abbr> (123) 456-7890 
						</address> 
					</div>
				</div>
				
				<table class="table table-striped m-top-md" id="dataTable">
					<thead>
						<tr class="bg-theme">
							<th>No</th>
							<th>Product</th>
							<th>Unit Price</th>
							<th class="hidden-xs">Quantity</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>#1001</td>
							<td>Leather Bag</td>
							<td>$90</td>
							<td class="hidden-xs">2</td>
							<td>$180</td>
						</tr>
						<tr>
							<td>#1002</td>
							<td>Brown Sunglasses</td>
							<td>$120</td>
							<td class="hidden-xs">1</td>
							<td>$120</td>
						</tr>
						<tr>
							<td>#1003</td>
							<td>Casual Boots</td>
							<td>$100</td>
							<td class="hidden-xs">1</td>
							<td>$100</td>
						</tr>
						<tr>
							<td>#1007</td>
							<td>Summer Dress</td>
							<td>$30</td>
							<td class="hidden-xs">3</td>
							<td>$90</td>
						</tr>
					</tbody>
				</table>
				
				<div class="padding-sm bg-grey">
					<p>Note : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit. Nunc vel tempor nisi. Aenean id pellentesque mi, non placerat mi. Integer luctus accumsan tellus. Vivamus quis elit sit amet nibh lacinia suscipit eu quis purus. Vivamus tristique est non ipsum dapibus lacinia sed nec metus.</p> 
				</div>
				
				<div class="pull-right">
					<table class="table m-top-md">	
						<tbody>
							<tr class="no-border">
								<td class="no-border"></td>
								<td class="no-border"></td>
								<td class="no-border"></td>
								<td class="text-right no-border"><strong>Subtotal</strong></td>
								<td><strong>$490.00</strong></td>
							</tr>
							<tr class="no-border">
								<td class="no-border"></td>
								<td class="no-border"></td>
								<td class="no-border"></td>
								<td class="text-right no-border"><strong>Shipping</strong></td>
								<td><strong>$5.00</strong></td>
							</tr>
							<tr class="no-border">
								<td class="no-border"></td>
								<td class="no-border"></td>
								<td class="no-border"></td>
								<td class="text-right no-border"><strong>Vat</strong></td>
								<td><strong>$50.00</strong></td>
							</tr>
							<tr class="no-border">
								<td class="no-border"></td>
								<td class="no-border"></td>
								<td class="no-border"></td>
								<td class="text-right no-border"><strong>Total</strong></td>
								<td><strong class="text-danger">$545.00</strong></td>
							</tr>
						</tbody>
					</table>
						
					<a class="btn btn-success hidden-print" id="invoicePrint"><i class="fa fa-print"></i> Print</a>
					<a class="btn btn-success hidden-print"><i class="fa fa-usd"></i> Proceed to Payment</a>
				</div>
			</div><!-- /.padding20 -->
                        <script>
		$(function()	{
			$('#invoicePrint').click(function()	{
				window.print();
			});
		});
	</script>