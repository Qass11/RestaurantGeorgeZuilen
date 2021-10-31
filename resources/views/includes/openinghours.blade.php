<div class="container border-bottom text-center opening-hours">
    <h2>@lang('george.openingHours.title')</h2>
    <p>@lang('george.openingHours.description')</p>
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