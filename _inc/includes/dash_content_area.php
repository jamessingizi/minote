<style>
	.hide{
	display:none;
	}
</style>
<div class = "container" style = "margin-top:100px;">
	<div class = "row">
		<div class="col-lg-4" style = "border-right: 1px solid #3598db;">
			<div>
			<table class="table table-hover">
				<thead>
					<tr>
					<th>My Notes</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						if (empty($userNotes)) {
							echo "<tr><td>There are notes in your note book</td></tr>";
						}
						foreach ($userNotes as $eachNote){
							echo "<tr>";
								
								echo "<td><a href='#' data-note-id='$eachNote[id]' class = 'note-listing'> ";
								echo $currentNote = (strlen($eachNote['content'])>50)?substr($eachNote['content'], 0,50)."...":$eachNote['content'];
								echo "</a></td>";
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
		</div>
	
		<div class="col-lg-8">
			<div >
			<span class = "pull-right"  style="margin-bottom: 8px;">
			
				<button type="button" id="btn-add" class="btn btn-sm btn-danger fa fa-plus">
					&nbsp;&nbsp;Add&nbsp;&nbsp;
				</button>
				
				<button type="button" id="btn-delete" class="btn btn-sm btn-warning fa fa-remove" disabled>
					Delete
				</button>
				
				<button type="button" id="btn-edit" class="btn btn-sm btn-primary fa fa-edit" disabled>
					&nbsp;Edit&nbsp; 
				</button>
				
			</span>
				
			</div>
			<div id="note-display-wrapper">
				<!-- note display area -->
				<textarea rows="" cols="" style = "text-indent: 3px;" id = "note-display-area" disabled data-note-display-id="">
				</textarea>
			</div>
			
			<div class = "pull-right">
				<button type="button" id="btn-save" class="btn btn-xs btn-danger fa fa-save hide">
					Save
				</button>
			</div>
			<div class = "pull-left">
				<span id="note-meta"></span>
			</div>
		</div>
	</div>
	<hr/>
</div>