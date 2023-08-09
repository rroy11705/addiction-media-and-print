<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>
<?php 
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * from recent_work where id = '{$_GET['id']}' ");
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
			<h5 class="card-title">Service</h5>
		</div>
		<div class="card-body">
			<form id="recent_work">
				<div class="row" class="details">
					<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
					<div class="col-sm-8">
						<div class="form-group">
							<label for="" class="control-label">Name</label>
							<input id="name" name="name" cols="30" rows="1" class="form-control" value="<?php echo isset($name) ? $name : '' ?>" />
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="date" class="control-label">Date (dd/mm/yyyy)</label>
							<input id="date" name="date" cols="30" rows="1" class="form-control" value="<?php echo isset($date) ? $date : '' ?>" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label for="" class="control-label">Description</label>
				             <textarea name="description" id="" cols="30" rows="3" class="form-control"><?php echo (isset($description)) ? html_entity_decode(($description)) : '' ?></textarea>
						</div>
					</div>
				</div>
				<div class="row" class="details">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="customFile" class="control-label">Video</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input rounded-circle" id="customFile" name="media" onchange="displayImg(this,$(this))">
								<label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						</div>
						<!-- <div class="form-group d-flex justify-content-center">
							<img src="<?php echo isset($attachment) ? validate_image($attachment) : '' ?>" alt="" id="cimg" class="img-fluid img-thumbnail">
						</div> -->
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="customFile" class="control-label">Thumbnail / Image</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input rounded-circle" id="customFile" name="thumbnail" onchange="displayImg(this,$(this))">
								<label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						</div>
						<div class="form-group d-flex justify-content-center">
							<img src="<?php echo isset($attachment) ? validate_image($attachment) : '' ?>" alt="" id="cimg" class="img-fluid img-thumbnail">
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="card-footer">
			<button class="btn btn-primary btn-sm" form="recent_work"><?php echo isset($_GET['id']) ? "Update": "Save" ?></button>
			<a class="btn btn-primary btn-sm" href="./?page=recent-work">Cancel</a>
		</div>
	</div>
</div>

<script>
	function generateVideoThumbnail(file) {
		return new Promise((resolve) => {
			const canvas = document.createElement("canvas");
			const video = document.createElement("video");

			// this is important
			video.currentTime = 2;
			video.autoplay = true;
			video.muted = true;
			video.src = URL.createObjectURL(file);

			video.onloadeddata = () => {
				let ctx = canvas.getContext("2d");

				canvas.width = video.videoWidth;
				canvas.height = video.videoHeight;

				ctx.drawImage(video, 0, 0, video.videoWidth, video.videoHeight);
				video.pause();
				return resolve(canvas.toDataURL("image/png"));
			};
		});
	};
	function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
				var mimeType = e.target.result.split(",")[0].split(":")[1].split(";")[0];
				if (mimeType.split("/")[0] === 'video') {
					const thumbnail = generateVideoThumbnail(input.files[0]);
					thumbnail.then(function (value) {
						console.log(value)
						$('#cimg').attr('src', value);
					})
				} else {
					$('#cimg').attr('src', e.target.result);
				}
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
	$(document).ready(function(){
		$('.select')
		$('#recent_work').submit(function(e){
			e.preventDefault();
			start_loader();
			$.ajax({
				url:_base_url_+"classes/Content.php?f=recent_work",
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
							location.href=_base_url_+"admin/?page=recent-work";
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