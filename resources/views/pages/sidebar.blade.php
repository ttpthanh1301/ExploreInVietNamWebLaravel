<form action="{{ route('tours.search') }}" method="get">
    <div class="widget">
        <div class="widget-title">
            <h5 class="title fw-600">Where do you want to go?</h5>
        </div>
        <div class="widget-content">
            <div class="mb-3 select-border">
                <ul class="list-unstyled mb-0 location">
                    <li><a href="{{ route('tours.search', ['location' => 'Ha Long']) }}" style="cursor: pointer;">Ha Long</a></li>
                    <li><a href="{{ route('tours.search', ['location' => 'Ninh Binh']) }}" style="cursor: pointer;">Ninh Binh</a></li>
                    <li><a href="{{ route('tours.search', ['location' => 'Sapa']) }}" style="cursor: pointer;">Sapa</a></li>
                    <li><a href="{{ route('tours.search', ['location' => 'Ho Chi Minh']) }}" style="cursor: pointer;">Ho Chi Minh</a></li>
                    <li><a href="{{ route('tours.search', ['location' => 'Da Nang']) }}" style="cursor: pointer;">Da Nang</a></li>
                    <li><a href="{{ route('tours.search', ['location' => 'Hoi An']) }}" style="cursor: pointer;">Hoi An</a></li>
                    <li><a href="{{ route('tours.search', ['location' => 'Nha Trang']) }}" style="cursor: pointer;">Nha Trang</a></li>
                    <li><a href="{{ route('tours.search', ['location' => 'Phu Quoc']) }}" style="cursor: pointer;">Phu Quoc</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="widget">
        <div class="widget-title">
            <h5 class="title fw-600">Category</h5>
        </div>
        <div class="widget-content">
            <div class="popular-tag">
                <ul class="list-unstyled mb-0 category">
                    <li><a href="{{ route('tours.search', ['category' => 'Beach']) }}" style="cursor: pointer;">Beach</a></li>
                    <li><a href="{{ route('tours.search', ['category' => 'Mountain']) }}" style="cursor: pointer;">Mountain</a></li>
                    <li><a href="{{ route('tours.search', ['category' => 'Clamping']) }}" style="cursor: pointer;">Clamping</a></li>
                    <li><a href="{{ route('tours.search', ['category' => 'Countryside']) }}" style="cursor: pointer;">Countryside</a></li>
                    <li><a href="{{ route('tours.search', ['category' => 'Heritage']) }}" style="cursor: pointer;">Heritage</a></li>
                    <li><a href="{{ route('tours.search', ['category' => 'National Park']) }}" style="cursor: pointer;">National Park</a></li>
                </ul>
            </div>
        </div>
    </div>

</form>
