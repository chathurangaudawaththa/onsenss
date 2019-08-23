<script>
    function onloadFunc(){
        getAllSubCatagories();
        getAllComponents();
    }

    function getAllSubCatagories(){
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
                $('#subCatFilter').html(str);
            },
            error: function (e) {
                alert(e);
            }
        });
    }

    function getAllComponents(){
        $('tbodyview').html('');
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: "POST",
            enctype: 'multipart/form-data',
            url: "component/getAll",
            processData: false, 
            contentType: false,
            dataType: 'json',
            contentType: "application/json",
            success: function (data) {
                var str='';
                var count=1;
                $.each(data, function (index, value) {
                    str+='<tr>';
                    str+='<td>'+count+'</td>';
                    str+='<td>'+value.sub_catagory.catagory_name+'</td>';
                    str+='<td><a href="" title="View Product">'+value.part_number+'</a></td>';
                    str+='<td><img class="zoom" src='+value.image_path+' style="height:5%"></td>';
                    str+='<td>'+value.manufacturer+'</td>';
                    str+='<td>'+value.quantity_available+'</td>';
                    str+='<td>'+value.unit_price+'</td>';
                    str+='<td class="article-btn edit"><a href="#" onclick="setFormValuesByComponentId('+value.id+')" title="Update Data"><i style="color:#ffa700" class="fa fa-pencil-square" aria-hidden="true"></i></a>  </td>';
                    str+='<td class="article-btn delete"><a href="#" onclick="deleteComponent('+value.id+')" title="Delete Article"><i style="color:#910f2c" class="fa fa-window-close" aria-hidden="true"></i></a> </td>';
                    str+='</tr>';
                });
                $('#tbodyview').html(str);
            },
            error: function (e) {
                alert(e);
            }
        });
    }

    function setFormValuesByComponentId(compID){
        var rdata={compID : compID};
    	$.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: "POST",
            url: "component/getById",
            processData: false, 
            contentType: false,
            dataType: 'json',
            data: JSON.stringify(rdata),
            contentType: "application/json",
            success: function (data) {
                
            	$('#coponentForm')[0].action="component/update";
            	$('#id').val(data.id);
            	$('#part_number').val(data.part_number);
                $('#sub_catagory_id').val(data.sub_catagory_id);
                $('#description').val(data.description);
                $('#series').val(data.series);
                $('#manufacturer_part_number').val(data.manufacturer_part_number);
                $('#manufacturer').val(data.manufacturer);
                $('#quantity_available').val(data.quantity_available);
                $('#unit_price').val(data.unit_price);
                $('#minimum_quantity').val(data.minimum_quantity);
                $('#part_status').val(data.part_status);
                $('#accessory_Type').val(data.accessory_Type);
                $('#for_use_with_related_products').val(data.for_use_with_related_products);
                $('#imgPrev').attr('src',data.image_path);
            },
            error: function (e) {
                alert(e);
            }
        });
    }

    function deleteComponent(compID){
        var rdata={compID : compID};
    	$.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: "POST",
            url: "component/deleteById",
            processData: false, 
            contentType: false,
            dataType: 'json',
            data: JSON.stringify(rdata),
            contentType: "application/json",
            success: function (data) {
               alert('Successfully deleted ');
               getAllSubCatagories();
               getAllComponents();
            },
            error: function (e) {
                alert(e);
            }
        });
    }

    function readURLImg(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
            $('#imgPrev').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURLFile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
            $('#filePrev').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>