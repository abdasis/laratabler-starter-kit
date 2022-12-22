<li class="nav-item">
    @if($dropdownable == 'false')
        <a href="{{$target}}" class="nav-link">
            <x-nav-icon>{{$slot}}</x-nav-icon>
            <span class="nav-link-title">
                {{$title}}
            </span>
        </a>
    @else
        <a href="#{{$target}}" class="nav-link" data-bs-toggle="collapse" aria-expanded="false">
            <x-nav-icon>{{$slot}}</x-nav-icon>
            <span class="nav-link-title">
                {{$title}}
            </span>
            <span class="nav-link-toggle"></span>
        </a>
    @endif
</li>
