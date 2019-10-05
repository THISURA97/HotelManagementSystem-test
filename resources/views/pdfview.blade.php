<style type="text/css">
	table td, table th{
		border:1px solid black;
		border: 1px solid #ddd;
		padding: 8px;
		padding-top: 12px;
  		padding-bottom: 12px;
  		text-align: left;

}
table th{
	background-color: #4CAF50;
  	color: white;
}



</style>
<div class="container">


	<br/>
	<!--<a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a> -->


	<table>
		<tr>
			<th>Product ID</th>
			<th>Section</th>
			<th>Category</th>
            <th>Product</th>
			<th>Total Stock</th>
			<th>Assigned Value</th>
		</tr>
		@foreach ($stocks as $key => $stk)
		<tr>

			<td>{{ $stk->product_id }}</td>
			<td>{{ $stk->section }}</td>
            <td>{{ $stk->category }}</td>
			<td>{{ $stk->product }}</td>
            <td>{{ $stk->total_stock }}</td>
			<td>{{ $stk->total_assign }}</td>
		</tr>
		@endforeach
	</table>
</div>
