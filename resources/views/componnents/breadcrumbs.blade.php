<div class="breadcumb-content">
    <h1 class="breadcumb-title"> {{ $title }} </h1>
    <ul class="breadcumb-menu">

        <li>
            <a href="{{ route('home') }}">Accueil</a>
        </li>


        @foreach ($paths as $key => $path)

            <li>
                @if (count($path) > 1)

                    <a href="{{ $path[1] }}" style="font-size: 17px; color:white;">
                        {{ $path[0] }}
                    </a>

                @else

                    {{ $path[0] }}

                @endif
            </li>

        @endforeach
    </ul>
</div>
