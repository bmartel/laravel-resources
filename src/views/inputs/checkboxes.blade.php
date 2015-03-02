<div class="form-group">
	{{ $label }}
	@foreach( $choices as $_key => $_choice )
		<div class="checkbox">
			<label>
				<input type="checkbox" value="{{ $_key }}" id="{{ $id }}" name="{{ $name }}[]"
					@if(in_array($_key, $value))
						checked="checked"
					@endif
				>
				{{ $_choice }}
			</label>
		</div>
	@endforeach
</div>
