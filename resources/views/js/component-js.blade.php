<script>
    function onloadFunc(){
    	getAllSubCatagories();
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
                var str='';
                $.each(data, function (index, value) {
                    str+='<option value='+value.id+'>'+value.sub_catagory_name+'</option>';
                    
                });
                $('#sub_catagory_id').html(str);
            },
            error: function (e) {
                alert(e);
            }
        });
    }
</script>