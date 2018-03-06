<div class="form-group  @if ($errors->has($name)) has-error @endif"">
    <label for="{{ studly_case($name) }}">{{ $label }}</label>
    <textarea class="form-control" rows="5" id="{{ studly_case($name) }}" name="{{ $name }}">{{ old($name, isset($item) ? $item->{$name} : null) }}</textarea>
    @if ($errors->has($name))
    <span class="help-block">{{ $errors->first($name) }}</span>
    @elseif (isset($extra))
    <span class="help-block">{{ $extra }}</span>
    @endif
</div>
