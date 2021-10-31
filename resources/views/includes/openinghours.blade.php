<div class="container border-bottom text-center opening-hours">
    <h2>Opening Hours.</h2>
    <p>Every working day you are welcome in our restaurant, below you can see all our opening hours.</p>
    <div class="row">
        @foreach($openingHours as $hour)
            <div class="col-sm-12 col-md">
                <i class="fal fa-clock fa-fw icon-george"></i>
                <p><strong>{{ $hour->day }}</strong></p>
                <p>{{ $hour->begin }} &mdash; {{ $hour->end }}</p>
            </div>
        @endforeach
    </div>
</div>