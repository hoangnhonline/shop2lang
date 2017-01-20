<div class="col-md-3 col-sm-4 col-xs-12 sidebar">
	<div class="sidebar-shop sidebar-left">
		<div class="widget widget-filter">
			<div class="box-filter category-filter">
				<h2 class="widget-title">{{ trans('text.category') }}</h2>
				<ul>
					@foreach($loaiSp as $loai)
					<li><a href="{{ $lang == 'vi' ? route('danh-muc-cha', [$loai->slug_vi]) : route('danh-muc-cha', [$loai->slug_en]) }}" title="{{ $lang == 'vi' ? $loai->name_vi : $loai->name_en }}" {{ isset($rs) && $rs->id == $loai->id ? "class=active" : "" }}> {{ $lang == 'vi' ? $loai->name_vi : $loai->name_en }}</a></li>
					@endforeach					
				</ul>
			</div>
			<!-- End Category -->
			<div class="box-filter price-filter">
				<h2 class="widget-title">{{ trans('text.price-range') }}</h2>
				<div class="inner-price-filter" style="margin-bottom:20px">				
					<div class="slider-range">
                        <div id="slider-range"></div>
                        <div class="action" style="margin-top:10px">
                            <span class="price-range" style="height:1px"><span id="amount-left"></span> - <span id="amount-right"></span></span>
                        </div>
                    </div>
				</div>
			</div>
			<!-- End Manufacturers -->
		</div>
		
		<!-- End Vote -->
		<div class="widget widget-adv">
			<h2 class="title-widget-adv">
				<span>Week</span>
				<strong>big sale</strong>
			</h2>
			<div class="wrap-item">
				<div class="item">
					<div class="item-widget-adv">
						<div class="adv-widget-thumb">
							<a href="#"><img src="images/grid/sl1.jpg" alt="" /></a>
						</div>
						<div class="adv-widget-info">
							<h3>New Collection</h3>
							<h2><span>from</span> 40% off</h2>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="item-widget-adv">
						<div class="adv-widget-thumb">
							<a href="#"><img src="images/grid/sl2.jpg" alt="" /></a>
						</div>
						<div class="adv-widget-info">
							<h3>Quality usinesswear </h3>
							<h2><span>from</span> 30% off</h2>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="item-widget-adv">
						<div class="adv-widget-thumb">
							<a href="#"><img src="images/grid/sl3.jpg" alt="" /></a>
						</div>
						<div class="adv-widget-info">
							<h3>Hanbags Style 2016</h3>
							<h2><span>from</span> 20% off</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Adv -->
	</div>
	<!-- End Sidebar Shop -->
</div>