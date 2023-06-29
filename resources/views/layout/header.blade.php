<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container brand-logo">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }} - {{ app()->getLocale() }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ms-auto navbar-nav-scroll">
                @foreach ($categories as $category)
                <li class="nav-item dropdown" aria-expanded="false">
                    <a class="nav-link dropdown-toggle" href="{{ route(app()->getLocale() . '.' . $category->route) }}" title="{{ __('messages.' . $category->fullname) }}" id="dropdown{{ $category->id }}" data-bs-toggle="dropdown" aria-expanded="false">{{ __('messages.' . $category->name) }}</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown01">
                        @foreach ($category->calculators()->get() as $calculator)
                        <li><a class="dropdown-item" href="{{ route(app()->getLocale() . '.' . $calculator->route) }}">{{ __('messages.' . $calculator->name) }}</a></li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
            <!--<span class="nav-item">
                        <a class="btn-solid-sm" href="#contact">Get quote</a>
                    </span>-->
        </div> <!-- end of navbar-collapse -->

    </div>
</nav>