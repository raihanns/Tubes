	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
	<script src="<?= base_url('assets/bootstrap/dashboard.js'); ?>"></script>

	<script>
		$('.form-check-input').on('click', function() {
			const menuId = $(this).data('menu');
			const roleId = $(this).data('role');


			$.ajax({
				url: "<?= base_url('admin/changeAccess'); ?>",
				type: 'post',
				data: {
					menuId: menuId,
					roleId: roleId
				},
				success: function() {
					document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
				}
			});

		});
	</script>

	</body>

	</html>