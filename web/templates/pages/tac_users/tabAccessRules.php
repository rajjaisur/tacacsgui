<div class="row">
	<div class="col-lg-6 col-md-6">
		<div class="form-group priv-lvl">
			<label for="priv-lvl">Privilege Level</label>
			<div class="input-group">
				<div class="input-group-btn">
					<button type="button" class="btn btn-default btn-flat" onclick="tgui_supplier.privLvl('-', this)"><i class="fa fa-minus"></i></button>
				</div>
			<input type="text" class="form-control text-center" name="priv-lvl-preview" data-type="input" data-default="15" value="15" autocomplete="off" disabled>
			<input type="hidden" name="priv-lvl" data-type="input" data-default="15" data-pickup="true" value="15">
			<input type="hidden" name="priv-lvl_native" value="">
			<div class="input-group-btn">
				<button type="button" class="btn btn-default btn-flat" onclick="tgui_supplier.privLvl('+', this)"><i class="fa fa-plus"></i></button>
				<button type="button" class="btn btn-warning btn-flat" onclick="tgui_supplier.privLvl('unset', this)">Unset</button>
			</div>
			</div>
			<p class="help-block">default 15, if Undefined it will not appeared in configuration</p>
		</div>
	</div>
<div class="col-lg-6 col-md-6">
	<div class="form-group group">
		<label>Access Control List</label>
		<select class="select_acl form-control select2" style="width:100%"></select>
		<p class="help-block">select ACL</p>
		<input type="hidden" name="acl_native" value="">
    </div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-6">
	<div class="form-group service">
		<label>Access Service</label>
		<select class="select_service form-control select2" style="width:100%"></select>
		<input type="hidden" name="service_native" value="">
		<p class="help-block">select service</p>
    </div>
</div>
</div>
<div class="row default_service">
	<div class="col-lg-12">
		<div class="checkbox icheck">
			<label>
				<input type="checkbox" name="default_service" data-type="checkbox" data-default="checked" data-pickup="true" checked> Default service
			</label>
			<input type="hidden" name="default_service_native" value="">
			<p class="help-block">be careful with that checkbox, if you don't know what is it just leave it checked</p>
		</div>
	</div>
</div>
