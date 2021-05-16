<li class="control-group">
    @if($label)
        <label class="control-label">{{$label}}</label>
    @endif
    <div class="controls">
        <textarea name="{{$name}}" {{$attributes}}></textarea>
        @if($hint)
            <span class="help-block">{{$hint}}</span>
        @endif
    </div>
</li>
