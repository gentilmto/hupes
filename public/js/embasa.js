var url = "http://localhost:8000/paciente";
    
    //display modal form for product editing
    
    $(document).on('click','.open_modal',function(){
        var product_id = $(this).val();
       
        $.get(url + '/' + product_id, function (data) {
            //success data
            console.log(data);
            //var valor = data.nome;
            $('#product_id').val(data.id);
            $('#nome').val(data.nome);
            $('#prontuario').val(data.prontuario);
            $('#dataNas').val(data.dataNas);
            $('#idade').val(data.idade);
            $('#sexo_id').val(data.sexo_id);
            $('#peso').val(data.peso);
            $('#cor_id').val(data.cor_id);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });


$('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmProducts').trigger("reset");
        $('#myModal').modal('show');
    });







$("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault(); 
        var formData = {

                       
            id:$('#product_id').val(),
            nome:$('#nome').val(),
           prontuario: $('#prontuario').val(),
            dataNas:$('#dataNas').val(),
            idade:$('#idade').val(),
           sexo_id: $('#sexo_id').val(),
            peso:$('#peso').val(),
           cor_id: $('#cor_id').val(),
           

        }
        
        //used to determine the http verb to use [add=POST], [update=PUT]
        
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var product_id = $('#product_id').val();
        var my_url = url;
        
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + product_id;
        }
        console.log(formData);
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                var product = '<tr id="product' + data.id + '"><td>' + data.id + '</td><td>' + data.name + '</td><td>' + data.details + '</td>';
                product += '<td><button class="btn btn-warning btn-detail open_modal" value="' + data.id + '">Edit</button>';
                product += ' <button class="btn btn-danger btn-delete delete-product" value="' + data.id + '">Delete</button></td></tr>';
                if (state == "add"){ //if user added a new record
                    //$('#products-list').replaceWith();
                    
                    $('#products-list').append('<button class="btn-warning"> inserido com sucesso</button>');
                   // $('#products-list').append(product);
                    location.reload();

                    //$('#frmProducts').trigger("reset");
                                   

                }else{ //if user updated an existing record
                    $("#product" + product_id).replaceWith( product );
                }

                $('#frmProducts').trigger("reset");
                
                $('#myModal').modal('hide');
            },
            error: function (data) {
                console.log('Error:', data);
              
            }
        });
    });




//delete product and remove it from list
    $(document).on('click','.delete-product',function(){
        var product_id = $(this).val();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({
            type: "DELETE",
            url: url + '/' + product_id,
            success: function (data) {
                console.log(data); 
                 $('#myModal').modal('hide');
location.reload();
                //$("#product" + product_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
//delete