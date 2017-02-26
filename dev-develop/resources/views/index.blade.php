<style>
h1, h2 { border-bottom:1px solide #eee; }
</style>


<body>

<h1>
    {{ $title or '' }}
</h1>


<h2>Prepared</h2>
<ul>
  @foreach($items as $item)
    <li>{{ $item }}</li>
  @endforeach
</ul>

@if($itemCount = count($items))
  <p>There are {{ $itemCount }} items !</p>
@else
  <p>There is no item !</p>
@endif

@forelse($items as $item)
  <p>The item is {{ $item }}</p>
@empty
  <p>There is no item !</p>
@endforelse


</body>
