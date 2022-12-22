<li class="nav-item">
    <a href="#{{$target}}" class="nav-link" data-bs-toggle="collapse" aria-expanded="false">
        <x-nav-icon>{{$slot}}</x-nav-icon>
        <span class="nav-link-title">
            {{$title}}
        </span>
        @if($target != "null")
            <span class="nav-link-toggle"></span>
        @endif
    </a>
</li>
