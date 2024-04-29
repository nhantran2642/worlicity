	<?php
	require_once 'config/db.php';
	$db = new connect();
	$conn = $db->getConnection();


	// Lấy dữ liệu từ bảng "property_types"
	$propertyTypesQuery = "SELECT * FROM property_types";
	$propertyTypesResult = $conn->query($propertyTypesQuery);
	// Lấy dữ liệu từ bảng "utilities"
	$utilitiesQuery = "SELECT * FROM utilities";
	$utilitiesResult = $conn->query($utilitiesQuery);
	?>
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div class="preloader"></div>

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">

		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->
		<!-- Start Navigation -->

		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->


		<!-- ============================ Hero Banner  Start================================== -->
		<div class="hero-banner vedio-banner">
			<div class="overlay"></div>

			<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
				<source src="public/img/banners.mp4" type="video/mp4">
			</video>

			<div class="container">

				<div class="row justify-content-center">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<h1 class="big-header-capt mb-0 text-light">WORLICITY</h1>
						<p class="text-center mb-4 text-light">Tìm kiếm các phòng trọ, nhà trọ, căn hộ tại thành phố Đà Nẵng.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="simple_tab_search center">
							<!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="rent-tab" data-toggle="tab" href="#rent" role="tab" aria-controls="rent" aria-selected="true">Buy</a>
								</li>
							</ul> -->

							<div class="tab-content" id="myTabContent">

								<form action="" method="GET">
									<!-- Tab for Buy -->
									<div class="tab-pane fade show active" id="rent" role="tabpanel" aria-labelledby="rent-tab">
										<div class="full_search_box nexio_search lightanic_search hero_search-radius modern">
											<div class="search_hero_wrapping">

												<div class="row">

													<div class="col-lg-3 col-sm-12 d-md-none d-lg-block">
														<div class="form-group">
															<label>Tìm nhanh</label>
															<input type="text" name="keyword" class="form-control search_input b-0" placeholder="ex. Tên bất động sản" />
														</div>
													</div>

													<div class="col-lg-3 col-md-3 col-sm-12">
														<div class="form-group">
															<label>Quận/Huyện</label>
															<div class="input-with-icon">
																<select id="location" name="city" class="form-control">
																	<option value="">&nbsp;</option>
																	<option value="Hà Nội">Hà Nội</option>
																	<option value="Đà nẵng">Đà nẵng</option>
																	<option value="Bình Dương">Bình Dương</option>
																	<option value="TP. Hồ Chí Minh">Hồ Chí Minh</option>
																	<option value="Cần Thơ">Cần Thơ</option>
																</select>
															</div>
														</div>
													</div>

													<div class="col-lg-2 col-md-3 col-sm-12">
														<div class="form-group">
															<label>Loại bất động sản</label>
															<div class="input-with-icon">
																<select id="ptypes" name="propertyType" class="form-control">
																	<option value="">&nbsp;</option>
																	<?php while ($row = $propertyTypesResult->fetch(PDO::FETCH_ASSOC)) { ?>
																		<option value="<?php echo $row['type_id']; ?>"><?php echo $row['type_name']; ?></option>
																	<?php } ?>
																</select>
															</div>
														</div>
													</div>

													<div class="col-lg-2 col-md-3 col-sm-12">
														<div class="form-group none">
															<a class="collapsed ad-search" data-toggle="collapse" data-parent="#search" data-target="#advance-search" href="javascript:void(0);" aria-expanded="false" aria-controls="advance-search"><i class="fa fa-sliders-h mr-2"></i>Tìm kiếm nâng cao</a>
														</div>
													</div>

													<div class="col-lg-2 col-md-3 col-sm-12 small-padd">
														<div class="form-group none">
															<button class="btn search-btn" type="submit" value="submit">Tìm kiếm</button>

														</div>
													</div>
												</div>

												<!-- Collapse Advance Search Form -->
												<div class="collapse" id="advance-search" aria-expanded="false" role="banner">




													<!-- row -->
													<div class="row">

														<div class="col-lg-12 col-md-12 col-sm-12 mt-3">
															<h4 class="text-dark">Tiện nghi & tính năng</h4>
															<ul class="no-ul-list third-row">
																<?php while ($row = $utilitiesResult->fetch(PDO::FETCH_ASSOC)) { ?>
																	<li>
																		<input id="utilities-<?php echo $row['utility_id']; ?>" class="checkbox-custom" name="utilities[]" type="checkbox" value="<?php echo $row['utility_id']; ?>">
																		<label for="utilities-<?php echo $row['utility_id']; ?>" class="checkbox-custom-label"><?php echo $row['utility_name']; ?></label>
																	</li>
																<?php } ?>
															</ul>
														</div>

													</div>
													<!-- /row -->

												</div>

											</div>
										</div>
									</div>
								</form>
							</div>

						</div>


					</div>
				</div>
			</div>
		</div>
		<!-- ============================ Hero Banner End ================================== -->

		<!-- ============================ Property Location ================================== -->
		<section class="min">
			<div class="container">

				<div class="row justify-content-center">

					<!-- Single Location -->
					<div class="col-lg-3 col-md-3 col-sm-6">
						<a href="#" class="img-wrap style-2">
							<div class="location_wrap_content visible">
								<div class="location_wrap_content_first">
									<h4>Hải Châu</h4>
									<!-- <ul>
										<li><span>12 Villas</span></li>
										<li><span>10 Apartments</span></li>
										<li><span>07 Offices</span></li>
									</ul> -->
								</div>
							</div>
							<div class="img-wrap-background" style="background-image: url(public/img/city-1.png);"></div>
						</a>
					</div>

					<!-- Single Location -->
					<div class="col-lg-3 col-md-3 col-sm-6">
						<a href="#" class="img-wrap style-2">
							<div class="location_wrap_content visible">
								<div class="location_wrap_content_first">
									<h4>Thanh Khê</h4>
									<!-- <ul>
										<li><span>12 Villas</span></li>
										<li><span>10 Apartments</span></li>
										<li><span>07 Offices</span></li>
									</ul> -->
								</div>
							</div>
							<div class="img-wrap-background" style="background-image: url(public/img/city-2.png);"></div>
						</a>
					</div>

					<!-- Single Location -->
					<div class="col-lg-3 col-md-3 col-sm-6">
						<a href="#" class="img-wrap style-2">
							<div class="location_wrap_content visible">
								<div class="location_wrap_content_first">
									<h4>Sơn Trà</h4>
									<!-- <ul>
										<li><span>12 Villas</span></li>
										<li><span>10 Apartments</span></li>
										<li><span>07 Offices</span></li>
									</ul> -->
								</div>
							</div>
							<div class="img-wrap-background" style="background-image: url(public/img/city-3.png);"></div>
						</a>
					</div>

					<!-- Single Location -->
					<div class="col-lg-3 col-md-3 col-sm-6">
						<a href="#" class="img-wrap style-2">
							<div class="location_wrap_content visible">
								<div class="location_wrap_content_first">
									<h4>Ngũ Hành Sơn</h4>
									<!-- <ul>
										<li><span>12 Villas</span></li>
										<li><span>10 Apartments</span></li>
										<li><span>07 Offices</span></li>
									</ul> -->
								</div>
							</div>
							<div class="img-wrap-background" style="background-image: url(public/img/city-4.png);"></div>
						</a>
					</div>
					<!-- </div>
				<div class="row justify-content-center"> -->
					<!-- Single Location -->
					<div class="col-lg-3 col-md-3 col-sm-6">
						<a href="#" class="img-wrap style-2">
							<div class="location_wrap_content visible">
								<div class="location_wrap_content_first">
									<h4>Liên Chiểu</h4>
									<!-- <ul>
										<li><span>12 Villas</span></li>
										<li><span>10 Apartments</span></li>
										<li><span>07 Offices</span></li>
									</ul> -->
								</div>
							</div>
							<div class="img-wrap-background" style="background-image: url(public/img/city-5.png);"></div>
						</a>
					</div>

					<!-- Single Location -->
					<div class="col-lg-3 col-md-3 col-sm-6">
						<a href="#" class="img-wrap style-2">
							<div class="location_wrap_content visible">
								<div class="location_wrap_content_first">
									<h4>Hòa Vang</h4>
									<!-- <ul>
										<li><span>12 Villas</span></li>
										<li><span>10 Apartments</span></li>
										<li><span>07 Offices</span></li>
									</ul> -->
								</div>
							</div>
							<div class="img-wrap-background" style="background-image: url(public/img/city-6.png);"></div>
						</a>
					</div>

					<!-- Single Location -->
					<div class="col-lg-3 col-md-3 col-sm-6">
						<a href="#" class="img-wrap style-2">
							<div class="location_wrap_content visible">
								<div class="location_wrap_content_first">
									<h4>Cẩm Lệ</h4>
									<!-- <ul>
										<li><span>12 Villas</span></li>
										<li><span>10 Apartments</span></li>
										<li><span>07 Offices</span></li>
									</ul> -->
								</div>
							</div>
							<div class="img-wrap-background" style="background-image: url(public/img/city-7.png);"></div>
						</a>
					</div>

					<!-- Single Location -->
					<div class="col-lg-3 col-md-3 col-sm-6">
						<a href="#" class="img-wrap style-2">
							<div class="location_wrap_content visible">
								<div class="location_wrap_content_first">
									<h4>Hoàng Sa</h4>
									<!-- <ul>
										<li><span>12 Villas</span></li>
										<li><span>10 Apartments</span></li>
										<li><span>07 Offices</span></li>
									</ul> -->
								</div>
							</div>
							<div class="img-wrap-background" style="background-image: url(public/img/city-1.png);"></div>
						</a>
					</div>

				</div>

			</div>
		</section>
		<!-- ============================ Property Location End ================================== -->


		<!-- ============================ Latest Property For Sale Start ================================== -->
		<section class="min">
			<div class="container">

				<div class="row justify-content-center">
					<div class="col-lg-7 col-md-10 text-center">
						<div style="border-radius: 50px;background: rgba(49, 177, 54,0.1);  color: #31b136;" class="sec-heading center mb-4">

							<p style="font-size: large;font-weight: 600; color: #00966a"><img src="public/img/deals.png" class="img-fluid" width="80" alt=""> NHÀ MỚI GẦN ĐÂY</p>
						</div>
					</div>
				</div>

				<div id="property_list" class="row justify-content-center">

					<!--đặt đoạn mã PHP xử lý truy vấn ở một file riêng và include vào đây -->
					<?php foreach ($result as $row) { ?>
						<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
							<div class="property-listing list_view">
								<div class="listing-img-wrapper">
									<div class="_exlio_125" style="background:<?php echo ($row['status'] == 'Bán') ? '' : (($row['status'] == 'Thuê') ? '#0072c6 ' : ''); ?>">
										<?php echo $row['status']; ?>
									</div>
									<div class="list-img-slide">
										<div class="click">
											<div><a href="?controller=BdsRent&action=single&property_id=<?php echo $row['property_id']; ?>"><img src="public/upload/properties/<?php echo $row['image_url']; ?>" class="img-fluid mx-auto" alt="" /></a></div>

										</div>
									</div>
								</div>
								<div class="list_view_flex">
									<div class="listing-detail-wrapper mt-1">
										<div class="listing-short-detail-wrap">
											<div class="_card_list_flex mb-2">
												<div class="_card_flex_01">
													<span class="_list_blickes _netork">VIP</span>
													<span class="property-type elt_rent"><?php echo $row['age']; ?></span>
													<span class="_list_blickes types"><?php echo $row['type_name']; ?></span>
												</div>
												<div class="_card_flex_last">
													<h6 class="listing-card-info-price mb-0"></h6>
												</div>
											</div>
											<div class="_card_list_flex">
												<div class="_card_flex_01">
													<h4 class="listing-name verified"><a href="?controller=BdsRent&action=single&property_id=<?php echo $row['property_id']; ?>" class="prt-link-detail">
															<?php
															$property_name = $row['property_name'] . ', ' . $row['city'];
															if (strlen($property_name) > 70) {
																$property_name = substr($property_name, 0, 67) . '...';
															}
															echo htmlentities($property_name);
															?>
														</a>
													</h4>
												</div>
											</div>
										</div>
									</div>
									<div class="price-features-wrapper">
										<div class="list-fx-features">
											<div class="listing-card-info-icon">
												<div class="inc-fleat-icon"><img src="public/img/bed.svg" width="13" alt="" /></div><?php echo $row['bedroom_count']; ?> Beds
											</div>
											<div class="listing-card-info-icon">
												<div class="inc-fleat-icon"><img src="public/img/bathtub.svg" width="13" alt="" /></div><?php echo $row['bathroom_count']; ?> Baths
											</div>
											<div class="listing-card-info-icon">
												<div class="inc-fleat-icon"><img src="public/img/move.svg" width="13" alt="" /></div><?php echo $row['real_area']; ?> m<sup>2</sup>
											</div>
										</div>
									</div>

									<div class="listing-detail-footer">
										<div class="footer-first">
											<div class="foot-rates">
												<span class="elio_rate perfect">

													<?php
													$price = $row['formatted_price'];
													if (mb_strlen($price) > 6) {
														$price = mb_substr($price, 0, 6) . '';
													}
													echo htmlentities($price);
													?>/<?php echo $row['unit']; ?>

												</span>
											</div>
										</div>
										<div class="footer-flex">
											<a href="?controller=BdsRent&action=single&property_id=<?php echo $row['property_id']; ?>" class="prt-view">Xem chi tiết</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>

					<!-- End Single Property -->
				</div>

				<!-- Load more -->
				<!-- <div class="row">
					<div id="property_placeholder"></div>
						<div class="col-lg-12 col-md-12 col-sm-12 text-center">

							<button id="load_more" name="load_more" value="Load more" onclick="load_ajax()" class="btn btn-theme-light-2 rounded">Xem thêm</button>
						</div>
					</div> -->

			</div>
		</section>
		<!-- ============================ Latest Property For Sale End ================================== -->





		<!-- ============================ Price Table Start ================================== -->
		<!-- <section class="min">
			<div class="container">

				<div class="row justify-content-center">
					<div class="col-lg-7 col-md-10 text-center">
						<div class="sec-heading center">
							<h2>Select your Package</h2>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
						</div>
					</div>
				</div>

				<div class="row align-items-center"> -->

		<!-- Single Package -->
		<!-- <div class="col-lg-3 col-md-3">
						<div class="pricing_wrap">
							<div class="prt_head">
								<h4>Gói tiêu chuẩn</h4>
							</div>
							<div class="prt_price">
								<h2><span>VND</span>230k</h2>
								<span>mỗi người dùng/năm</span>
							</div>
							<div class="prt_body">
								<ul>
									<li>10 danh sách</li>
									<li>2 tài sản nổi bật</li>
									<li>2 hình ảnh/mỗi danh sách</li>
									<li>Trợ giúp và hỗ trợ</li>
									<li class="none">Ưu tiên đề xuất</li>
									<li class="none">Quảng cáo</li>
								</ul>
							</div>
							<div class="prt_footer">
								<a href="#" class="btn choose_package">Mua gói</a>
							</div>
						</div>
					</div> -->

		<!-- Single Package -->
		<!-- <div class="col-lg-3 col-md-3">
						<div class="pricing_wrap">
							<div class="prt_head">
								<div class="recommended">Gói tốt nhất</div>
								<h4>Gói vàng</h4>
							</div>
							<div class="prt_price">
								<h2><span>VND</span>1100k</h2>
								<span>mỗi người dùng/năm</span>
							</div>
							<div class="prt_body">
								<ul>
									<li>20 danh sách</li>
									<li>5 tài sản nổi bật</li>
									<li>5 hình ảnh/mỗi danh sách</li>
									<li>Trợ giúp và hỗ trợ</li>
									<li>Ưu tiên đề xuất</li>
									<li class="none">Quảng cáo</li>
								</ul>
							</div>
							<div class="prt_footer">
								<a href="#" class="btn choose_package active">Mua gói</a>
							</div>
						</div>
					</div> -->

		<!-- Single Package -->
		<!-- <div class="col-lg-3 col-md-3">
						<div class="pricing_wrap">
							<div class="prt_head">
								<h4>Gói cao cấp</h4>
							</div>
							<div class="prt_price">
								<h2><span>VND</span>1790k</h2>
								<span>2 người dùng/năm</span>
							</div>
							<div class="prt_body">
								<ul>
									<li>Danh sách không giới hạn</li>
									<li>50 tài sản nổi bật</li>
									<li>Hình ảnh không giới hạn</li>
									<li>Trợ giúp và hỗ trợ</li>
									<li>Ưu tiên đề xuất</li>
									<li>Quảng cáo</li>
								</ul>
							</div>
							<div class="prt_footer">
								<a href="#" class="btn choose_package">Mua gói</a>
							</div>
						</div>
					</div> -->

		<!-- </div>

			</div>
		</section> -->
		<!-- ============================ Price Table End ================================== -->

		<!-- ============================ Footer Start ================================== -->

		<!-- ============================ Footer End ================================== -->



	</div>