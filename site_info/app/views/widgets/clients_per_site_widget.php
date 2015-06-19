<div class="col-lg-4 col-md-6">

			<div class="panel panel-default">

				<div class="panel-heading" data-container="body" title="Client Count Per Site">

			    	<h3 class="panel-title"><i class="fa fa-sitemap"></i> Client Count Per Site</h3>

				</div>
				<div class="list-group scroll-box">

					<?php	$munkireport = new Munkireport_model();
							$sql = "SELECT site_name, COUNT(1) AS count
									FROM site_info
									GROUP BY site_name
									ORDER BY COUNT DESC";
					?>
						<?php foreach($munkireport->query($sql) as $obj): ?>
							<?php if (empty($obj->site_name)):?>
								<a class="list-group-item"><span data-i18n="unknown">Unknown</span>
									<span class="badge pull-right"><?php echo $obj->count; ?></span>
								</a>
							<?php else: ?>
								<a href="<?php echo url('show/listing/site_info/#'.$obj->site_name); ?>" class="list-group-item"><?php echo $obj->site_name; ?>
									<span class="badge pull-right"><?php echo $obj->count; ?></span>
								</a>
							<?php endif; ?>
						<?php endforeach; ?>

				</div><!-- /scroll-box -->

			</div><!-- /panel -->

		</div><!-- /col -->