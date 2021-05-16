
<li class="control-group">
    @if($label)
    <label class="control-label">{{$label}}</label>
    @endif
    <div class="controls">
            <input type="{{$type}}" name="{{$name}}" {{$attributes}}/>
        @if($hint)
        <span class="help-block">{{$hint}}</span>
            @endif
    </div>
</li>
