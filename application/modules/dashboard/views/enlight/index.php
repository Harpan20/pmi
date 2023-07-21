<section class="probootstrap-section" style="padding-bottom: 0px;">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
			<h2>Our Services</h2>
			<p class="lead">The reason why you have to choose us</p>
		</div>
	</div>
	<?php if (count($data_service) > 0) : ?>
		<div class="row">
			<?php foreach ($data_service as $item) : ?>
				<div class="col-md-4">
					<div class="service left-icon probootstrap-animate">
						<div class="icon"><i class="zmdi <?php echo $item->icon ?>"></i></div>
						<div class="text">
							<h3><?php echo $item->name ?></h3>
							<p><?php echo $item->description ?></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	<?php else : ?>
		<div class="nothing-found">
			<div>No data found</div>
		</div>
	<?php endif; ?>
</section>