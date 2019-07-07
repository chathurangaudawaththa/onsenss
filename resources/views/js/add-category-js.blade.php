
<script>
	function onloadFunc(){
		getAllCatagories();
	}
    function getAllCatagories(){
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
                 var tableInsert='';
                 $.each(data, function (index, value) {
                      tableInsert=tableInsert+" <tr><td>"+value.catagory_name+"</td><td>"+value.image_path+"</td><td>"+value.meta_title+"</td><td>"+value.meta_keyword+"</td><td>"+value.meta_description+"</td><td>"+value.created_at+"</td>";
                    
          			 tableInsert=tableInsert+"</td><td class='article-btn edit'><a href='#' onclick='setFormValuesByCatagoryId("+value.id+")' title='Update Data'><i style='color:#ffa700' class='fa fa-pencil-square' aria-hidden='true'></i></a>  </td><td class='article-btn delete'><a href='#' onclick='deleteCatagoryById("+value.id+")' title='Delete Data'><i style='color:#910f2c'  class='fa fa-window-close' aria-hidden='true'></i></a> </td></tr> ";
                 });
                 $('#tbodyview').html(tableInsert);
             },
             error: function (e) {
                 alert(e);
             }
         });
    }

    function deleteCatagoryById(catId){
    	var rdata={catId : catId};
    	$.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: "POST",
            url: "catagory/deleteById",
            processData: false, 
            contentType: false,
            dataType: 'json',
            data: JSON.stringify(rdata),
            contentType: "application/json",
            success: function (data) {
               alert('Successfully deleted ');
               getAllCatagories();
            },
            error: function (e) {
                alert(e);
            }
        });
    }

    function setFormValuesByCatagoryId(catId){
    	var rdata={catId : catId};
    	$.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: "POST",
            url: "catagory/getById",
            processData: false, 
            contentType: false,
            dataType: 'json',
            data: JSON.stringify(rdata),
            contentType: "application/json",
            success: function (data) {
            	setFormValues(data);
            	 $('#catForm')[0].action="catagory/update";
            },
            error: function (e) {
                alert(e);
            }
        });
    }

    function setFormValues(data){
		$('#catagory_name').val(data.catagory_name);
		$('#meta_description').val(data.meta_description);
		$('#meta_keyword').val(data.meta_keyword);
		$('#meta_title').val(data.meta_title);
		$('#id').val(data.id);
    }
</script>