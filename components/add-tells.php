<div id="add-tells" class="well well-small">
	<div class="accordion-heading">
		<a class="accordion-toggle" data-toggle="collapse" href="#collapseOne">
		<h3>Add a new friend <i class="icon-plus"></i></h3>
		</a>
	</div>
	<script type="text/javascript">
			$(function(){
				$(".collapse").collapse()
			});
		</script>
	<div id="collapseOne" class="accordion-body collapse">
		<div class="accordion-inner">
			<form id="tells-form" class="form-horizontal" name="tellsform" action="components/updateTable.php" method="get">
				<div class="control-group">
					<label>Enter your friend's name. Warning: This is how they will be addressed in emails.</label>
					<input type="text" name="friend" id="friend" class="span3" placeholder="Friend's name…">
				</div>
				<div class="control-group">
					<label>Enter the email or cell phone # to use. Just use numbers</label>
					<input type="text" name="contact" id="contact" class="span3" placeholder="example@example.com or 6666666666">
				</div>
				<div class="control-group">
					<label class="radio">
					<input type="radio" name="optionsRadios" value="email" checked>
					This is an email address
					</label>
					<label class="radio">
					<input type="radio" name="optionsRadios" value="phone">
					This is a cell phone number
					</label>
				</div>
				<div class="control-group">
					<label>Enter the <strong>"Tell"</strong> groups for this friend. Must be entered as #hashtags separated by commas</label>
					<input type="text" name="tells" id="tells" class="span3" placeholder="#example, #example2…">
				</div>
				<input type="hidden" name="adddel" value="add">
				<input type="submit" class="btn btn-success" value="Submit">
			</form>
		</div>
	</div>
</div>