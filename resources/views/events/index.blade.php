
<ul>
    @foreach ($events as $event)
        <li>{{ $event }}</li>
    @endforeach
</ul>

<table>
    @foreach ($events as $event)
        @include('partials._row', ['event' => $event])
    @endforeach
</table>