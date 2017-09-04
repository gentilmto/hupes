<html>
  <head>
   <title>PACIENTE</title>  
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

<div class="container">

<form action="/embasa/creat" method="POST" >
{{ csrf_field() }}
		<table class="table responsive boder">

					<tr>
					<th>
						id
					</th>
					<th>
					numero antes
					</th>
					<th>

					numero final
					</th>
					<th>
					mês
					</th>

					</tr>

					<tr>
						<?php foreach ($dados as $key => $value): ?>

						<td>{{$value}}</td>
						<td><input type="number" id = "1" name="dadoinicial">
						<td><input type="number" id = "2" name="dadofinal">
						<td><input type="date" id = "2" name="mes">
						<td><button type="submmit" action="submmit" class="btn-wornig ">
						salvar
						</button>
					</td>
						<?php endforeach ?>
					<td></td>
					</tr>

		</table>


</form>


 <meta name="_token" content="{!! csrf_token() !!}" />

</div>



