<div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-sm-6">
            <h3>{{ $title_page }}</h3>

            @if(Route::currentRouteName() != 'admin.dashboard')
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">Tableau de bord</a>
                    </li>
                    @isset($paths)
                        @foreach ($paths as $path)
                            @if (isset($path[2]) && $path[2])

                                <li class="breadcrumb-item active">
                                    {{ $path[1] }}
                                </li>

                            @else

                                <li class="breadcrumb-item">
                                    <a href="{{ $path[0] }}">
                                        {{ $path[1] }}
                                    </a>
                                </li>

                            @endif

                        @endforeach
                    @endisset
                </ol>
            @endif

        </div>

      </div>
    </div>
  </div>
