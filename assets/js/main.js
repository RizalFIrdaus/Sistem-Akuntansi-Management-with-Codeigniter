(function () {
	"use strict";

	var treeviewMenu = $('.app-menu');

	// Toggle Sidebar
	$('[data-toggle="sidebar"]').click(function (event) {
		event.preventDefault();
		$('.app').toggleClass('sidenav-toggled');
	});

	// Activate sidebar treeview toggle
	$("[data-toggle='treeview']").click(function (event) {
		event.preventDefault();
		if (!$(this).parent().hasClass('is-expanded')) {
			treeviewMenu.find("[data-toggle='treeview']").parent().removeClass('is-expanded');
		}
		$(this).parent().toggleClass('is-expanded');
	});

	// Set initial active toggle
	$("[data-toggle='treeview.'].is-expanded").parent().toggleClass('is-expanded');

	//Activate bootstrip tooltips
	$("[data-toggle='tooltip']").tooltip();


	$('.tampilModalUbah').on('click', function () {
		const id = $(this).data('email');
		//ajax
		$.ajax({
			url: 'http://localhost/jurnal/tambah',
			data: {
				id: id
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				$("#tanggal").val(data.tanggal);
				$("#uraian").val(data.uraian);
				$("#ref").val(data.ref);
				$("#debet").val(data.debet);
				$("#kredit").val(data.kredit);
				$("#keterangan").val(data.keterangan);
			}
		});
	});






})();
