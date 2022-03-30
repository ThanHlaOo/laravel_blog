
<li class="menu-item {{Request::url() === $link ? 'active': ''}}">
                            <a href="{{$link ?? '#'}}" class="menu-item-link">
                                <span>
                                    <i class="{{$icon}}"></i>
                                  {{$name}}
                                </span>
                                @isset($number)
                                <span class="badge rounded-pill bg-secondary shadow-sm p-1">
                                    {{$number}}
                                </span>
                                @endisset
                            </a>
</li>
