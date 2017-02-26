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

</body>
