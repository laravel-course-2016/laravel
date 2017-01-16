<ul>
    @foreach($sections as $section)
        <li>
            <a href="#">{{ $section->name }} &nbsp; <span class="widget-categories__text">({{ $section->posts()->count() }})</span> </a>
        </li>
    @endforeach
</ul>