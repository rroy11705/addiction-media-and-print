<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>
<style>
	.banner-img{
		width: 75px;
		object-fit:contain;
	}
</style>
<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-header">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary new_service" href="javascript:void(0)"><i class="fa fa-plus"></i> Add New</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered table-compact" id="list">
				<colgroup>
					<col width="10%">
					<col width="35%">
					<col width="35%">
					<col width="20%">
				</colgroup>
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Service Name</th>
						<th>image</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$qry = $conn->query("SELECT * FROM `service`");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td><b class="truncate-1"><?php echo ucwords($row['name']) ?></b></td>
						<td>
							<img src="<?php echo validate_image($row['image']) ?>" alt="" id="cimg" style="width: 40px; height: auto" class="img-fluid img-thumbnail" />
						</td>
						<td class="text-center">
		                    <div class="btn-group">
		                        <a href="javascript:void(0)" data-id='<?php echo $row['id'] ?>' class="btn btn-primary btn-flat btn-sm manage_service">
		                          <i class="fas fa-edit"></i>
		                        </a>
		                        <button type="button" class="btn btn-danger btn-sm btn-flat delete_service" data-id="<?php echo $row['id'] ?>">
		                          <i class="fas fa-trash"></i>
		                        </button>
	                      </div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>

	$(document).ready(function(){
		$('.new_service').click(function(){
			location.href = _base_url_+"admin/?page=service/manage";
		})
		$('.manage_service').click(function(){
			location.href = _base_url_+"admin/?page=service/manage&id="+$(this).attr('data-id')
		})
		$('.delete_service').click(function(){
			_conf("Are you sure to delete this detail?","delete_service",[$(this).attr('data-id')])
		})
		$('#list').dataTable()
	})
	function delete_service($id){
		start_loader()
		$.ajax({
			url:_base_url_+'classes/Content.php?f=service_delete',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				location.reload();
			}
		})
	}
</script>