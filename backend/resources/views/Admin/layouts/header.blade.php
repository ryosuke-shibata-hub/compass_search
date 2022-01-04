
@section('header')
<header class="header">
  <div class="text-center font-f pt-4">
    <h2>Compass Search</h2>
    <form action={{ route('logout') }} method="GET">
      <button type="submit" class="btn btn-danger logout">Logout</button>
    </form>
  </div>
</header>
@endsection
