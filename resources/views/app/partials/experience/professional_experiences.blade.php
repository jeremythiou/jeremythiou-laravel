<div class="experience__content">
  <div class="experience__list-name">
    Exp&#233;rience professionnelle
  </div>
  <div class="experience__list reveal">
    @foreach ($professional_experiences as $experience)
      <div class="experience__row">
      <div class="experience__left">
        <div class="experience__place reveal-1">
          @if ($experience->link)
            <a href="{{ $experience->link }}" target="_blank">{{ $experience->company }}</a>
          @else
            {{ $experience->company }}
          @endif
        </div>
        <div class="experience__duration reveal-2">
          {{ $experience->dateRangeFormatted }}
        </div>
      </div>
      <div class="experience__right">
        <div class="experience__name reveal-3">
          {{ $experience->type }} - {{ $experience->title }}
        </div>
        <div class="experience__description reveal-4">
          <p>{!! $experience->description !!}<p>
        </div>
        <div class="experience__location reveal-5">
          {{ $experience->locality }}, {{ $experience->country }}
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>