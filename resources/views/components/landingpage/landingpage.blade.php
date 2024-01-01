    <div style="background: {{$page->background}}">
        @foreach($page->children as $p)
            <x-landingpage.draw :page="$p"/>
        @endforeach
    </div>
