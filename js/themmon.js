$(document).ready(function(){
	$("#upload-menu").submit(function(e){
		e.preventDefault();
		var name = $("#tenmon").val();
		var price = $("#price").val();
		var img = $("#hinhanh").prop('files')[0];
		var form_data =  new FormData();
		form_data.append("file" ,img);
		form_data.append("name" , name);
		form_data.append("price" , price);
		if( name == '' || price == '' || img === '' ){
			$(".error").html("<div class='alert alert-danger'>Vui lòng hoàn thành form!</div>");
		}else{
			$.ajax({
					url : 'backend/themmon.php',
					type : 'POST',
					enctype: 'multipart/form-data',
					processData: false,
	            	contentType: false,
	            	dataType : 'text',
					data : form_data,
					success : function(res){
						if(res==1){
							alert("Thêm món thành công!");
							location.reload();
						}
						else{
							alert("Lỗi! không thêm được món!! Vui lòng xem lại");
						}

					},
					error: function(res){
						alert(res);
					}
				});
		}
	});
})