<div class="form-group @if ($errors->has($name)) has-error @endif">
    <label for="{{ studly_case($name) }}">{{ $label }}</label>
    <div class="input-group">
        <div class="input-group-addon">$</div>
        <input type="number" step="0.01" class="form-control" id="{{ studly_case($name) }}" placeholder="0.00" name="{{ $name }}" value="{{ old($name, $product->{$name}) }}" />
    </div>
    @if ($errors->has($name))
    <span class="help-block">{{ $errors->first($name) }}</span>
    @elseif (isset($extra))
    <span class="help-block">{{ $extra }}</span>
    @endif
</div>
