<html>
  <head>
   <title>Laravel CRUD Application using Ajax without Reloading Page</title>  
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> 
  
<style>
.ui-autocomplete {
  z-index: 215000000 !important;
}
 .ui-autocomplete {
    max-height: 100px;
    overflow-y: auto;
    /* prevent horizontal scrollbar */
    overflow-x: show;
  }
  /* IE 6 doesn't support max-height
   * we use height instead, but this forces the menu to always be this tall
   */
   .ui-autocomplete {
    height: 100px;
  }


</style>


  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  </head>
<body>


<div class="container">



<div class="panel panel-primary">
 <div class="panel-heading">HUPES CADASTRO
 <button id="btn_add" name="btn_add" class="btn btn-default pull-right">Novo Medicamento Suspeito New Product</button>
    </div>
      <div class="panel-body"> 
       <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Details</th>
            <th>Actions</th>
          </tr>
         </thead>
         <tbody id="products-list" name="products-list">
           @foreach ($products as $product)
            <tr id="product{{$product->id}}">
             <td>{{$product->id}}</td>
             <td>{{$product->nome}}</td>
             <td>{{$product->grupo_farmacologico_id}}</td>
              <td>
              <button class="btn btn-warning btn-detail open_modal" value="{{$product->id}}">Edit</button>
              <button class="btn btn-danger btn-delete delete-product" value="{{$product->id}}">Delete</button>
              </td>
            </tr>
            @endforeach
        </tbody>
        </table>
       </div>
       </div>
    


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog">

           <div class="modal-content">

             <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Medicamentos Suspeitos</h4>
            </div>

            <div class="modal-body">
            <form id="frmProducts" name="frmProducts" class="form-horizontal" novalidate="">
                <div class="form-group error">
                 <label for="inputName" class="col-sm-3 control-label">Name</label>
                   <div class="col-sm-9">
                    <input type="text" class="form-control has-error" id="name" class="name"  name="name" placeholder="Product Name" value="">
                   </div>
                   </div>
                 <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Details</label>
                    <div class="col-sm-9" class="ui-widget">
                    <label for="details">Tags: </label>
                    <input type="text" class="form-control" id="details" name="details" placeholder="details" value="">
                    </div>
                </div>
            </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
            <input type="hidden" id="product_id" name="product_id" value="0">
            </div>
        </div>
     


      </div>
  </div>
</div>



    <meta name="_token" content="{!! csrf_token() !!}" />
   

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{asset('js/ajaxscript.js')}}"></script>
    



  <script>



  $( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#details" ).autocomplete({
      source: availableTags
    });
  } );
  </script>

<script>

        $( function() {

            
            $( "#name" ).autocomplete({
                minLength: 3,
                source: "/medicamento",
                
                focus: function( event, ui ) {
                    $( "#name" ).val( ui.item.nome );
                    return true;
                },
                select: function( event, ui ) {
                    $( "#name" ).val( ui.item.nome );
                   // $( "#medicamento2-id" ).val( ui.item.prontuario );

                    return false;
                }
            })
                    .autocomplete( "instance" )._renderItem = function( ul, item ) {
                return $( "<li>" )
                        .append( "<div>" + "ATC:" + item.atc +" "+ item.nome + "</div>" )
                        .appendTo( ul );
            };
        } );

    </script> 



</body>
</html>