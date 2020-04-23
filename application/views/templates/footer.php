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




	<!-- <style>
		.page-footer {
			padding-top: 65px;
			background: #2C2B2B;
			color: white;
		}

		#brand {
			font-family: Open Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 20px;
			color: white;
			text-decoration: none;
		}
	</style> -->


	<!-- <footer class="page-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<h5><a id="brand" href="">HealtHub</a></h5>
					<h5>Better HealthCare For You.</h5>
				</div>
				<div class="col">
					<br>
					<h5 style="text-align: center; padding-bottom:30px;">© 2020 Copyright: HealtHub IF42-01</h5>
				</div>
				<div class="col">
				</div>
			</div>
		</div>

	</footer> -->


	</body>

	</html>