@if (!empty($sections))
    <div class="widget-categories  push-down-30">
        <h6>РАЗДЕЛЫ</h6>
        <ul>
            @foreach($sections as $section)
                <li>
                    <a href="#">{{ $section->name }} &nbsp; <span class="widget-categories__text">({{ $section->posts()->count() }})</span> </a>
                </li>
            @endforeach
        </ul>
    </div>
@endif