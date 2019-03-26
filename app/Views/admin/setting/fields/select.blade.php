<div class="form-group {{ $errors->has($field['name']) ? ' has-error' : '' }} wp-input">
    <label for="{{ $field['name'] }}" class="col-sm-3 control-label">{{ $field['label'] }}</label>
    <select name="{{ $field['name'] }}" class="form-control {{ array_get( $field, 'class') }}" id="{{ $field['name'] }} input-sm">
        @foreach(array_get($field, 'options', []) as $val => $label)
            <option @if( old($field['name'], \setting($field['name'])) == $val ) selected  @endif value="{{ $val }}">{{ $label }}</option>
        @endforeach
    </select>
    @if ($errors->has($field['name'])) <small class="help-block">{{ $errors->first($field['name']) }}</small> @endif
</div>