<script type="text/javascript">
(function($) {
  AddTableRow = function() {

    var newRow = $("<tr>");
    var cols = "";

	
	cols += '<td>';
	cols += $('#medicamento').prop('outerHTML');
    cols += '</td>';
	cols += '<td>';
    cols += '<input type="text" placeholder="Via de Administração .."></input>';
    cols += '</td>';
	cols += '<td>';
    cols += '<input type="text">Remover</input>';
    cols += '</td>';
	cols += '<td>&nbsp;</td>';
    cols += '<td>&nbsp;</td>';
    cols += '<td>&nbsp;</td>';
    cols += '<td>&nbsp;</td>';
    cols += '<td>';
    cols += '<button onclick="RemoveTableRow(this)" type="button">Remover</button>';
    cols += '</td>';



    newRow.append(cols);
    $("#products-table").append(newRow);

    return false;
  };
})(jQuery);



</script>

<script type="text/javascript">
(function($) {
  RemoveTableRow = function(item) {
    var tr = $(item).closest('tr');

    tr.fadeOut(400, function() {
      tr.remove();  
    });

    return false;
  }
})(jQuery);

</script>