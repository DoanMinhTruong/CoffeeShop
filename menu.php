<?php include("includes/header.php");?>
<div class="container mt-3">
	<div class="header">
		<h1 class='text-center'>MENU</h1>
		<hr>
		
			<button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#themmon-form">Thêm Món</button>
	</div>

<!-- Modal -->
<div class="modal fade" id="themmon-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLongTitle">Thêm Món</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="" class="form-group" id="upload-menu" enctype="multipart/form-data">
			        	<div>
			        		<label for="">Tên Món : </label> <input type="text" id="tenmon" class="form-control-input" placeholder="Tên món">
			        	</div>
			        	<div>
			        		<label for="">Giá : </label> <input type="text" id="price" class="form-control-input ml-4" placeholder="Giá">
			        		.000 VNĐ
			        	</div>
			        	<div>
			        		<label for="">Hình Ảnh : </label> <input required id="hinhanh" type="file" class="form-control-file">
			        	</div>
			        	<div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
			        <button type="submit" id="themmon" class="btn btn-primary">Thêm</button>

			      </div>
			        </form>
			        <div class="error">
			        	
			        	
			        </div>
			      </div>
			    </div>
			  </div>
		</div>

<!-- ENd modal -->
<div class="row" id="menu-items" >
	<?php 
		require("classes/DB.php");
	$db = new DB();
	$db->connect();
		$menu =  $db->fetchAllMenu();
		$menu = array_reverse($menu);
		foreach($menu as $item){
			echo '
			<form class="col-md-3 mx-4 card menu-item-card">
				<div class="item-id d-none">'.$item['id'].'</div>
				<img class="card-img-top" src="'.$item['image'].'" alt="'.$item['name'].'"/>
				<div class="card-body">
					<div class="card-title">
						'.$item['name'].'
					</div>
					<div class="card-text">
						Price: '.$item['price'].'.000 VNĐ
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<button class="del-item btn btn-danger" type="button">Xóa</button> 
					</div>
					<form method="POST" action="update.php" class="col-md-6">
						<img class="card-img-top d-none" src="'.$item['image'].'" alt="'.$item['name'].'"/>
						<input class="update-item btn btn-info" name="submit" type="submit" value="Update" /> 
					</form>
				</div>
			</form>
			';
		}
	?>
</div>

</div>
<script src="js/themmon.js"></script>
<script src="js/xoamon.js"></script>
<script src="js/update-mon.js"></script>