<div class="col-lg-4">
	<div class="card" style="border:1px solid #7c1ab5">
		<form>
			<div class="card-body">
				<h5 class="card-title" style="font-size: 20px;">Price</h5>
				<div class="input-group mb-3">
					<div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend">Rs.</span></div>
					<input class="form-control form-control-lg" type="number" placeholder="" aria-describedby="inputGroupPrepend" required="">
				</div>
				
				<div class="font-13 mb-3">
					<i class="fa fa-star" style="color:#fadf53;font-size:27px;"></i>&nbsp;&nbsp;<a href="#" style="font-size:16px;color:#068eef;">Set "Compare to" price</a>
				</div>
				<div class="font-13 mb-3">
					<i class="fa fa-star" style="color:#fadf53;font-size:27px;"></i>&nbsp;&nbsp;<a href="#" style="font-size:16px;color:#068eef;">‍Bulk discount pricing</a>
				</div>
			</div>
			<div class="card-footer">
				<span style="font-size: 18px;">Availability</span>
				<div class="flexbox mb-3">
					<!-- <a href="#"><span style="font-size: 15px;font-weight: bold;color:#37ba32;">Enable</span>&nbsp;&nbsp;<span style="font-size: 15px;font-weight: bold;color:#068eef;">[ Disable ]</span></a> -->
					<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label>
				</div>
				<span style="font-size: 18px;">Stock Control</span>
				<div class="flexbox mb-3">
					<a href="#"><span style="font-size: 15px;font-weight: bold;color:#37ba32;">Instock</span>&nbsp;&nbsp;<span style="font-size: 15px;font-weight: bold;color:#000;">(∞)</span>&nbsp;&nbsp;<span style="font-size: 15px;color:#068eef;">[ Manage ]</span></a>
				</div>
				<div class="font-13 mb-3" id="stockzz">
					<i class="fa fa-star" style="color:#fadf53;font-size:27px;"></i>&nbsp;&nbsp;<a href="javascript:void(0);" style="font-size:16px;color:#068eef;" onclick="stock_levelz();">Set Stock Level</a>
				</div>
				<div class="font-13 mb-3" id="stockzz_qty" style="display:none;">
					<div class="form-group">
						<input type="number" class="form-control" placeholder="Enter Quantity">
					</div>
					<div class="form-group">
						<button class="btn btn-primary clr" style="margin-right:10px;" type="submit">Save</button>
						<button class="btn btn-default" type="reset">Clear</button>
					</div>
				</div>
			</div>
			<div class="card-footer">
				<a href="product_preview.php" style="font-size: 18px;color:#068eef">Preview Product</a>
			</div>
		</form>
	</div>
</div>