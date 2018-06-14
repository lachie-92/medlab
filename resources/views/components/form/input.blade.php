<div class="form-group @if ($errors->has($name)) has-error @endif"">
    <label for="{{ studly_case($name) }}">{{ $label }}</label>
    <input type="text" class="form-control" id="{{ studly_case($name) }}" name="{{ $name }}" value="{{ old($name, isset($item) ? $item->{$name} : null) }}" />
    @if ($errors->has($name))
    <span class="help-block">{{ $errors->first($name) }}</span>
    @elseif (isset($extra))
    <span class="help-block">{{ $extra }}</span>
    @endif
</div>
