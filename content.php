<div class="row mt-3">

	<?php 
		for($i = 1 ; $i <=21 ;$i++){
			echo "<div class='col-md-4 my-2'> 
					<div class='card card-content' data-toggle='modal' data-target='#xem-form'>
						<div class='card-body'>
							<div class='row'>
								<div class='col-6'>
									<div class='card-title h3' id='".$i."'>Bàn - ".$i."</div>
								</div>
								<div class='col-6'>
									Trạng Thái : <div class='card-text text-danger bg-light'>Trống</div>
								</div>
							</div>
						</div>
					</div>
				</div>";
		}
	?>


<div class="modal fade" id="xem-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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


</div>
<script type="text/javascript" src="js/xem-form.js"></script>