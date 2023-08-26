<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>
<?php 
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * from project where id = '{$_GET['id']}' ");
	foreach($qry->fetch_array() as $k => $v){
		if(!is_numeric($k)){
			$$k = $v;
		}
	}
}
?>
<style>
	#cimg{
		max-width: 50%;
		object-fit: contain;
	}
</style>
<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-header">
			<h5 class="card-title">Project</h5>
		</div>
		<div class="card-body">
			<form id="project">
				<div class="row" class="details">
					<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
					<div class="col-sm-12">
						<div class="form-group">
							<label for="" class="control-label">Name</label>
							<input id="name" name="name" cols="30" rows="1" class="form-control" value="<?php echo isset($name) ? $name : '' ?>" />
						</div>
					</div>
				</div>
				<div class="row" class="details">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="service" class="control-label">Service</label>
							<select name="service" id="service" cols="30" rows="1" class="form-control" required>
								<option value="" disabled selected hidden>Choose an option</option>
								<?php 
									$p_qry = $conn->query("SELECT * FROM `service`");
									while($row = $p_qry->fetch_assoc()):
									?>
									<option value="<?php echo $row['id'] ?>" <?php echo isset($service) ? $service == $row['id'] ? 'selected' : '' : '' ?>><?php echo $row['name'] ?></option>
								<?php endwhile; ?>
							</select>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="client" class="control-label">Client</label>
							<select name="client" id="client" cols="30" rows="1" class="form-control">
								<option value="0" selected>Choose an option</option>
								<?php 
									$p_qry = $conn->query("SELECT `id`, `name` FROM `client`");
									while($row = $p_qry->fetch_assoc()):
									?>
									<option value="<?php echo $row['id'] ?>" <?php echo isset($client) ? $client == $row['id'] ? 'selected' : '' : '' ?>><?php echo $row['name'] ?></option>
								<?php endwhile; ?>
							</select>
							<!-- <input id="category" name="category"  value="<?php echo isset($category) ? $category : '' ?>" /> -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label for="" class="control-label">Summary</label>
				             <textarea name="summary" id="" cols="30" rows="3" class="form-control"><?php echo (isset($summary)) ? html_entity_decode(($summary)) : '' ?></textarea>
						</div>
					</div>
				</div>
				<div class="row" class="details">
					<div class="col-sm-8">
						<div class="form-group">
							<label for="customFile" class="control-label">Attachment</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input rounded-circle" id="customFile" name="img" onchange="displayImg(this,$(this))" <?php echo isset($id) ? 'required' : '' ?>>
								<label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						</div>
						<div class="form-group d-flex justify-content-center">
							<img src="<?php echo isset($attachment) ? validate_image($attachment) : '' ?>" alt="" id="cimg" class="img-fluid img-thumbnail">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="date" class="control-label">Date (dd/mm/yyyy)</label>
							<input id="date" name="date" cols="30" rows="1" class="form-control" value="<?php echo isset($date) ? $date : '' ?>" />
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="card-footer">
			<button class="btn btn-primary btn-sm" form="project"><?php echo isset($_GET['id']) ? "Update": "Save" ?></button>
			<a class="btn btn-primary btn-sm" href="./?page=project">Cancel</a>
		</div>
	</div>
</div>

<script>
	function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
	$(document).ready(function(){
		$('.select')
		$('#project').submit(function(e){
			e.preventDefault();
			start_loader();
			$.ajax({
				url:_base_url_+"classes/Content.php?f=project",
				data: new FormData($(this)[0]),
			    cache: false,
			    contentType: false,
			    processData: false,
			    method: 'POST',
			    type: 'POST',
				error: err=>{
					alert_toast("An error occured",'error')
					console.log(err);
				},
				success:function(resp){
					if(resp != undefined){
						resp = JSON.parse(resp)
						if(resp.status == 'success'){
							location.href=_base_url_+"admin/?page=project";
						}else{
							alert_toast("An error occured",'error')
							console.log(resp);
							end_loader();
						}
					}
				}
			})
		})
		$('.summernote').summernote({
		        height: 200,
		        toolbar: [
		            [ 'style', [ 'style' ] ],
		            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
		            [ 'fontname', [ 'fontname' ] ],
		            [ 'fontsize', [ 'fontsize' ] ],
		            [ 'color', [ 'color' ] ],
		            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
		            [ 'table', [ 'table' ] ],
		            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
		        ]
		    })
	})
	
</script>