@section('content')
<h1>Customer List</h1>
<a href="{{ URL::to('/report.report') }}">Export PDF</a>
<table>
  <thead>
  <tr>
        <th>Product ID</th>
        <th>Section</th>
        <th>Category</th>
        <th>Product</th>
        <th>Stock Size</th>
        <th>Assigned Quantity</th>
    </tr>
  </thead>
  <tbody>
  @foreach($category_data as $category)
      <tr>
        <td>{{ $category->product_id }}</td>
        <td>{{ $category->section }}</td>
        <td>{{ $category->category }}</td>
        <td>{{ $category->product }}</td>
        <td>{{ $category->total_stock }}</td>
        <td>{{ $category->total_assign }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection