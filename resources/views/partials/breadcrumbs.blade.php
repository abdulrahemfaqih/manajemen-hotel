<nav>
    <ol class="breadcrumb">
        @foreach ($segments = request()->segments() as $index => $segment)
            @php
                $url = url(implode('/', array_slice($segments, 0, $index + 1)));
            @endphp
            <li class="breadcrumb-item {{ $loop->last ? 'active' : '' }}" {{ $loop->last ? 'aria-current="page"' : '' }}>
                @if($loop->last)
                    {{ ucwords($segment) }}
                @else
                    <a href="{{ $url }}">{{ ucwords($segment) }}</a>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
