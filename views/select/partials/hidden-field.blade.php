
<select x-cloak {{ $attributes }} name="{{ $name }}" id="{{ $id }}" class="kin-f-hide" @if($multiple) multiple @endif>
    @foreach($options as $value => $option)
    <option value="{{ $value }}" @if(in_array($value, $selecteds)) selected @endif>
        {{ $option }}
    </option>
    @endforeach
</select>
