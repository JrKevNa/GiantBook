<header>
    <link rel="stylesheet" href="/css/navbarStyle.css">

    @php
        $categories = App\Models\Category::all();
    @endphp

    <div class="nav-bg bg-warning">
        <h1 class="text-light">Giant Book Supplier</h1>
    </div>

      <ul class="nav nav-tabs justify-content-center">
        <li class="nav-item">
          <a class="nav-link text-primary fw-bold" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fw-bold" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Category</a>
          <ul class="dropdown-menu">
            @foreach($categories as $c)
                <li><a class="dropdown-item" href="../bookCategory/{{ $c->id }}">{{ $c->name }}</a></li>
            @endforeach
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary fw-bold" href="../publisher/">Publisher</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary fw-bold" href="../contact/">Contact</a>
        </li>
      </ul>
</header>
