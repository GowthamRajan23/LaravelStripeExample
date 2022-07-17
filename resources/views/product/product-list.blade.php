<!DOCTPE html>
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}" />

<title>Product List</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
	vertical-align: middle !important;
}</style>
</head>
<body>
{!! csrf_field() !!}
<div class="container">
@php
$gridData = [
    'dataProvider' => $dataProvider,
    'title' => 'Product List',
	'paginatorOptions' => [ // Here you can set some options of paginator Illuminate\Pagination\LengthAwarePaginator, used in a package.
        'pageName' => 'p'
    ],
    'rowsPerPage' => 5,
    'useFilters' => false,
    'columnFields' => [
        'name',
        'description',
        'price',
		[
            'label' => 'Active', // Column label.
            'value' => function ($row) { // You can set 'value' as a callback function to get a row data value dynamically.
                return '<span id="'.$row->price.'"><a target="_blank" href="checkout/'.$row->id.'"><img src="../public/buynow.png" style="width:100px"></a></span>';
            },
            'format' => 'html', // To render column content without lossless of html tags, set 'html' formatter.
            'sort' => 'active'
        ]
    ]
];
@endphp
@gridView($gridData)
</div>
</body>
</html>