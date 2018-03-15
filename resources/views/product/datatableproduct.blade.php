@extends('mytemplate')
@section('content')
<div class="container-fluid">
<div class="table-responsive">
<buttton id="btn" class="btn btn-primary" onClick="getdataAjax()">Ajax Get</buttton>
<div class="alert alert-success" id="msg">This message will be replaced using Ajax. Click the button</div>
	<table id="table-product" class="table table-bordered table-striped table-hover" width="100%">

	<!-- <table class="table" id="table-product"> -->
	<thead>
		<tr>
			<td>id</td>
			<td>nama</td>
			<td>jumlah</td>
			<td>satuan</td>
			<td>harga</td>
			<td>action</td>
			
		</tr>
	</thead>
	</table>
	</div>
	</div>

	<script>
    $(function() {
        var oTable = $('#table-product').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ url("product/getproduct") }}'
            },
            columns: [
            {data: 'id', name: 'id'},
			{data: 'nama', name: 'nama'},
            {data: 'stok', name: 'stok'},
            {data: 'satuan', name: 'satuan', orderable: false},
            {data: 'harga', name: 'harga', orderable: false, searchable: false},
			{data: 'action', name: 'action', orderable: false, searchable:false}
        ],
        });
    });

$("#btnnnnn").click(function(){
	alert('haisss');
	getdataAjax();
});
function test(){
	alert('haisss');
}
function getdataAjax(){
			$.ajax({
			type:'POST',
			url:'/product/ajax_get_data',
			data:'_token={{ csrf_token() }}',
			// var data = form.serialize();
			success:function(data){
					$("#msg").html(data.msg);
			}
			});
}
</script>

@endsection