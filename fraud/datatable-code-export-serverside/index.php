<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>How to Export the jQuery Datatable data to PDF,Excel,CSV and Copy</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>

	
	<div class="container" style="padding:20px;20px;">
      <div class="">
        <h1>Data</h1>
        <div class="">
		<table id="employee_grid" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Empid</th>
                <th>Name</th>
				<th>Salary</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Emmanuel Gamor</td>
            <td>Ghc222</td>
            <td>21</td>
        </tr>
        <tr>
            <td>2</td>
            <td>kenhfow Gamor</td>
            <td>Ghc300</td>
            <td>21</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Emmanuel skhnowi</td>
            <td>Ghc200</td>
            <td>21</td>
        </tr>
        </tbody>
    </table>
    </div>
      </div>

    </div>

<script type="text/javascript">
$( document ).ready(function() {
$('#employee_grid').DataTable({
		 "processing": true,

		 "dom": 'lBfrtip',
		 "buttons": [
            {
                extend: 'collection',
                text: 'Export',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ]
            }
        ]
        });
});
</script>
