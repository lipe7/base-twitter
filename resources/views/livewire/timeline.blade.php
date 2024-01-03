<div>
    @foreach ( $tweets as $t)
        <div>
            {{ $t->body }}
        </div>
    @endforeach
</div>
