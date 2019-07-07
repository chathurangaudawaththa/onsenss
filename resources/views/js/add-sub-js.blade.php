<script>
    function onloadFunc(){
    	getAllCatagories();
    	getAllSubCatagories();
    }
	function getAllCatagories(){
		$('#catagory').html('');
		$.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: "POST",
            enctype: 'multipart/form-data',
            url: "catagory/getAll",
            processData: false, 
            contentType: false,
            dataType: 'json',
            contentType: "application/json",
            success: function (data) {
                var Str='';
                $.each(data, function (index, value) {
                	Str+='<option value='+value.id+'>'+value.catagory_name+'</option>';
                });
                $('#catagory_id').html(Str);
            },
            error: function (e) {
                alert(e);
            }
        });
	}

	function getAllSubCatagories(){
		$('#tbodyview').html('');
		$.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: "POST",
            enctype: 'multipart/form-data',
            url: "sub_catagory/getAll",
            processData: false, 
            contentType: false,
            dataType: 'json',
            contentType: "application/json",
            success: function (data) {
            	var tableInsert='';
                $.each(data, function (index, value) {
                     tableInsert=tableInsert+" <tr><td>"+index+"</td><td>"+value.catagory.catagory_name+"</td><td>"+value.sub_catagory_name+"</td><td>"+value.created_at+"</td>";
                   
         			 tableInsert=tableInsert+"</td><td class='article-btn edit'><a href='#' onclick='setFormValuesBySubCatagoryId("+value.id+")' title='Update Data'><i style='color:#ffa700' class='fa fa-pencil-square' aria-hidden='true'></i></a>  </td><td class='article-btn delete'><a href='#' onclick='deleteSubCatagoryById("+value.id+")' title='Delete Data'><i style='color:#910f2c'  class='fa fa-window-close' aria-hidden='true'></i></a> </td></tr> ";
                });
                $('#tbodyview').html(tableInsert);
            },
            error: function (e) {
                alert(e);
            }
        });
	}

	function deleteSubCatagoryById(subCatId){
    	var rdata={subCatId : subCatId};
    	$.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: "POST",
            url: "sub_catagory/deleteById",
            processData: false, 
            contentType: false,
            dataType: 'json',
            data: JSON.stringify(rdata),
            contentType: "application/json",
            success: function (data) {
               alert('Successfully deleted ');
               getAllSubCatagories();
            },
            error: function (e) {
                alert(e);
            }
        });
    }

	function setFormValuesBySubCatagoryId(subCatId){
    	var rdata={subCatId : subCatId};
    	$.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: "POST",
            url: "sub_catagory/getById",
            processData: false, 
            contentType: false,
            dataType: 'json',
            data: JSON.stringify(rdata),
            contentType: "application/json",
            success: function (data) {
                
            	$('#subCatForm')[0].action="sub_catagory/update";
            	$('#id').val(data.id);
            	$('#catagory_id').val(data.catagory_id);
            	$('#sub_catagory_name').val(data.sub_catagory_name);
            },
            error: function (e) {
                alert(e);
            }
        });
    }
</script>