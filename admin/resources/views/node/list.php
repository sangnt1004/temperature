

<div class="page-header">
	<h1>
		Tables
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Node information
		</small>
	</h1>
</div><!-- /.page-header -->
<div class="row">
	<div class="col-xs-12">
		<table id="simple-table" class="table  table-bordered table-hover">
			<thead>
				<tr>
					<th class="center">
						<label class="pos-rel">
							NO
						</label>
					</th>
					<th class="detail-col">Details</th>
					<th>Name</th>
					<th>Temperature(&deg;C)</th>
					<th class="hidden-480">Line Graph</th>

					<th>
						<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
						Update
					</th>
					<th class="hidden-480">Status</th>

					<th></th>
				</tr>
			</thead>

			<tbody>

				<?php 
				$nodes = listNodes($conn);
				foreach ($nodes as $value) {
					$newTemp = selectNewTemp($conn,"zigbee".$value['id']);
					if (isset($newTemp[0])) {
						$item = $newTemp[0];
						// checkTemp($value['id'],$item['temperature']);
						
					}
					else
						$item = null ;
					
					?>
					<tr>
						<td class="center">
							<label class="pos-rel">
								<?php echo $value["id"]; ?>
							</label>
						</td>

						<td class="center">
							<div class="action-buttons">
								<a href="#" class="green bigger-140 show-details-btn" title="Show Details">
									<i class="ace-icon fa fa-angle-double-down"></i>
									<span class="sr-only">Details</span>
								</a>
							</div>
						</td>

						<td>
							<a href="#"><?php echo $value["name"]; ?></a>
						</td>
						
						<td><?php echo $item["temperature"]; ?></td>
						<td class="hidden-480"><a href="?con=node&act=detail&cid=<?php echo $value['id']; ?>"><i class="fa fa-line-chart" aria-hidden="true"></i></a></td>
						<td><?php echo $item['time']; ?></td>
						
						<td class="hidden-480">
							<?php 
							if($value["status"] == "On")
								echo '<span class="label label-sm label-success">Online</span>';
							else
								echo '<span class="label label-sm label-warning">Offline</span>'
							?>
						</td>
						<td>
							<div class="hidden-sm hidden-xs btn-group">
								<button class="btn btn-xs btn-success">
									<i class="ace-icon fa fa-check bigger-120"></i>
								</button>

								<button class="btn btn-xs btn-info">
									<i class="ace-icon fa fa-pencil bigger-120"></i>
								</button>

								<button class="btn btn-xs btn-danger">
									<i class="ace-icon fa fa-trash-o bigger-120"></i>
								</button>

								<button class="btn btn-xs btn-warning">
									<i class="ace-icon fa fa-flag bigger-120"></i>
								</button>
							</div>

							<div class="hidden-md hidden-lg">
								<div class="inline pos-rel">
									<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
										<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
									</button>

									<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
										<li>
											<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
												<span class="blue">
													<i class="ace-icon fa fa-search-plus bigger-120"></i>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
												<span class="green">
													<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
												<span class="red">
													<i class="ace-icon fa fa-trash-o bigger-120"></i>
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</td>
					</tr>


					<tr class="detail-row">
						<td colspan="8">
							<div class="table-detail">
								<div class="row">
									<div class="col-xs-12 col-sm-2">
										<div class="text-center">
											<img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
											<br />
											<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
												<div class="inline position-relative">
													<a class="user-title-label" href="#">
														<i class="ace-icon fa fa-circle light-green"></i>
														&nbsp;
														<span class="white">Node #<?php echo $value["id"]; ?></span>
													</a>
												</div>
											</div>
										</div>
									</div>

									<div class="col-xs-12 col-sm-8">
										<div class="space visible-xs"></div>

										<div class="profile-user-info profile-user-info-striped">
											<div class="profile-info-row">
												<div class="profile-info-name"> Devicename </div>

												<div class="profile-info-value">
													<span><?php echo $value["name"]; ?></span>
												</div>
											</div>

											<div class="profile-info-row">
												<div class="profile-info-name"> Location </div>

												<div class="profile-info-value">
													<i class="fa fa-map-marker light-orange bigger-110"></i>
													<span><?php echo $value["location"]; ?></span>
												</div>
											</div>

											<div class="profile-info-row">
												<div class="profile-info-name"> Status </div>

												<div class="profile-info-value">
													<span><?php echo $value["status"]; ?></span>
												</div>
											</div>

											<div class="profile-info-row">
												<div class="profile-info-name"> Joined </div>

												<div class="profile-info-value">
													<span><?php echo $value["created_at"]; ?></span>
												</div>
											</div>

											<div class="profile-info-row">
												<div class="profile-info-name"> Last Online </div>

												<div class="profile-info-value">
													<span>3 hours ago</span>
												</div>
											</div>

											<div class="profile-info-row">
												<div class="profile-info-name"> About Me </div>

												<div class="profile-info-value">
													<span>Bio</span>
												</div>
											</div>
										</div>
									</div>

									<div class="col-xs-12 col-sm-2">

									</div>
								</div>
							</div>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>