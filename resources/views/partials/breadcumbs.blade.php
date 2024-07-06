<nav>
    <ol class="breadcrumb">
        @foreach ($segments = request()->segments() as $index => $segment)
            <li class="breadcrumb-item">
                <a href=""> {{ ucwords($segment) }}</a>
            </li>
        @endforeach
    </ol>
</nav>
