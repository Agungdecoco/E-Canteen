$(function(){

	// console.log("ok")





	$('.tampilModalUbah').on('click', function(){

		// $('#myModal').html('Ubah Data Menu');
		// $('.closebtn button[type=submit]').html('Ubah Data');
		$('#formModal').attr('action', 'http://localhost/ecanteen/public/menu/ubah');
		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/ecanteen/public/menu/getubah',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data){
				$('#nama').val(data.nama);
				$('#harga').val(data.harga);
				$('#id').val(data.id);
			}
		})

	});

});