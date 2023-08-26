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
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary new_recent_work" href="javascript:void(0)"><i class="fa fa-plus"></i> Add New</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered table-compact" id="list">
				<colgroup>
					<col width="5%">
					<col width="40%">
					<col width="30%">
					<col width="20%">
					<col width="15%">
				</colgroup>
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Attachment</th>
						<th>Name</th>
						<th>Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$qry = $conn->query("SELECT * FROM `recent_work`");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td>
							<img src="<?php echo validate_image($row['thumbnail']) ?>" alt="<?php echo validate_image($row['name']) ?>" id="cimg" style="max-height: 100px; width: auto" class="img-fluid img-thumbnail">
						</td>
						<td><b class="truncate-1"><?php echo ucwords($row['name']) ?></b></td>
						<td><small class="truncate-1"><?php echo ucwords($row['service']) ?></small></td>
						<td><small class="truncate-1"><?php echo $row['date'] ?></small></td>
						<td class="text-center">
		                    <div class="btn-group">
		                        <a href="javascript:void(0)" data-id='<?php echo $row['id'] ?>' class="btn btn-primary btn-flat btn-sm manage_recent_work">
		                          <i class="fas fa-edit"></i>
		                        </a>
		                        <button type="button" class="btn btn-danger btn-sm btn-flat delete_recent_work" data-id="<?php echo $row['id'] ?>">
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
		$('.new_recent_work').click(function(){
			location.href = _base_url_+"admin/?page=recent-work/manage";
		})
		$('.manage_recent_work').click(function(){
			location.href = _base_url_+"admin/?page=recent-work/manage&id="+$(this).attr('data-id')
		})
		$('.delete_recent_work').click(function(){
		_conf("Are you sure to delete this detail?","delete_recent_work",[$(this).attr('data-id')])
		})
		$('#list').dataTable()
	})
	function delete_recent_work($id){
		start_loader()
		$.ajax({
			url:_base_url_+'classes/Content.php?f=recent_work_delete',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				location.reload();
			}
		})
	}
</script>