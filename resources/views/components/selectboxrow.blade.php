<li class="control-group">
    @if($label)
        <label class="control-label">{{$label}}</label>
    @endif
    <div class="controls">
        <select name="{{$name}}" {{$attributes}}>
                @foreach($options as $key => $option)
                    <option value="{{$key}}">{{$option}}</option>
                    @endforeach
        </select>
        @if($hint)
            <span class="help-block">{{$hint}}</span>
        @endif
    </div>
</li>
