<div class="form-group @if ($errors->has($name)) has-error @endif"">
    <label for="{{ studly_case($name) }}">{{ $label }}</label>
    @if (isset($item) && $item->{$name} && file_exists(public_path($item->{$name})))
    <div><img src="{{ $item->{$name} }}" style="max-height: 100px;" /></div>
    @endif
    <input type="file" class="form-control" id="{{ studly_case($name) }}" name="{{ $name }}" />
    @if ($errors->has($name))
    <span class="help-block">{{ $errors->first($name) }}</span>
    @elseif (isset($extra))
    <span class="help-block">{{ $extra }}</span>
    @endif
</div>
