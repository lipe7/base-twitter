<div class="mt-10 text-lg text-white">
    @foreach ( $tweets as $t)
        <div>
            {{ $loop->index }} - {{ $t->body }}
        </div>
    @endforeach
</div>
