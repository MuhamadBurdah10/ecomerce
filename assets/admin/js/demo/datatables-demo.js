// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();

  $('#dataTableProduct').dataTable( {
    "columnDefs": [
      { "width": "20%", "targets": 0 }
    ]
  } );
});


