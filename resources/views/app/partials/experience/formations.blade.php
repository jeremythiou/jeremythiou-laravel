<div class="experience__content">
  <div class="experience__list-name">
    Formations
  </div>
  <div class="experience__list reveal">
    @foreach($formations as $formation)
      <div class="experience__row">
        <div class="experience__left">
          <div class="experience__place reveal-1">
            <a href="{{ $formation->link }}" target="_blank">{{ $formation->location }}</a>
          </div>
          <div class="experience__duration reveal-2">
            {{ $formation->dateRangeFormatted }}
          </div>
        </div>
        <div class="experience__right">
          <div class="experience__name reveal-3">
            {{ $formation->name }}
          </div>
          <div class="experience__description reveal-4">
            <p>{{ $formation->description }}</p>
          </div>
          <div class="experience__location reveal-5">
            {{ $formation->locality }}, {{ $formation->country }}
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>