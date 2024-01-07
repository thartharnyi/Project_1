 <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu">
    
    @foreach ($songs as $song)
        <li><a class="dropdown-item" href="/songs/{{ $song->singer->name }}">{{ $song->singer->name }}</a></li>
    @endforeach
    
  </ul>
</div>