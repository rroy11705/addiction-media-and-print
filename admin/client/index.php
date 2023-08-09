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
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary new_client" href="javascript:void(0)"><i class="fa fa-plus"></i> Add New</a>
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
						<th>Logo</th>
						<th>Client Name</th>
						<th>Featured</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$qry = $conn->query("SELECT * FROM `client`");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td>
							<img src="<?php echo validate_image($row['image']) ?>" alt="" id="cimg" style="width: 40px; height: auto" class="img-fluid img-thumbnail" />
						</td>
						<td><b class="truncate-1"><?php echo ucwords($row['name']) ?></b></td>
						<td><b class="truncate-1"><?php echo isset($row['featured']) ? $row['featured'] == 1 ? 'Yes' : 'No' : '' ?></b></td>
						<td class="text-center">
		                    <div class="btn-group">
		                        <a href="javascript:void(0)" data-id='<?php echo $row['id'] ?>' class="btn btn-primary btn-flat btn-sm manage_client">
		                          <i class="fas fa-edit"></i>
		                        </a>
		                        <button type="button" class="btn btn-danger btn-sm btn-flat delete_client" data-id="<?php echo $row['id'] ?>">
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
		$('.new_client').click(function(){
			location.href = _base_url_+"admin/?page=client/manage";
		})
		$('.manage_client').click(function(){
			location.href = _base_url_+"admin/?page=client/manage&id="+$(this).attr('data-id')
		})
		$('.delete_client').click(function(){
			_conf("Are you sure to delete this detail?","delete_client",[$(this).attr('data-id')])
		})
		$('#list').dataTable()
	})
	function delete_client($id){
		start_loader()
		$.ajax({
			url:_base_url_+'classes/Content.php?f=client_delete',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				location.reload();
			}
		})
	}
</script>