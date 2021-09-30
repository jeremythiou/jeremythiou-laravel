<div class="container">
  <div class="abilities">
    <div class="abilities__header">
      <div class="abilities__title">
        COMPÉTENCES
      </div>
      <div class="abilities__subtitle">
        
      </div>
    </div>

    <div class="abilities__content">
      <div class="abilities__list-name">
        Comp&eacute;tences Techniques
      </div>
      <div class="abilities__list abilities__list--skills reveal-right">
        @foreach($abilities as $key => $ability)
          <div class="abilities__reveal reveal-{{ $key + 1 }}">
            <div class="abilities__row">
              <div class="abilities__name">
                {{ $ability->language }}
              </div>
              <div class="abilities__rate">
                @for($i = 0; $i < $ability->rate; $i++)
                  <i class="fas fa-star"></i>
                @endfor
                @for($i = 0; $i < 5 - $ability->rate; $i++)
                  <i class="far fa-star"></i>
                @endfor
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    <div class="abilities__content">
      <div class="abilities__list-name">
        Langues
      </div>
      <div class="abilities__list abilities__list--languages reveal-right">
        @foreach($languages as $key => $language)
          <div class="abilities__reveal reveal-{{ $key + 1 }}">
            <div class="abilities__row">
              <div class="abilities__name">
                {{ $language->language }}
              </div>
              <div class="abilities__rate">
                @for($i = 0; $i < $language->rate; $i++)
                  <i class="fas fa-star"></i>
                @endfor
                @for($i = 0; $i < 5 - $language->rate; $i++)
                  <i class="far fa-star"></i>
                @endfor
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    <div class="abilities__content">
      <div class="abilities__list-name">
        Outils
      </div>
      <div class="abilities__list abilities__list--tools reveal-right">
        @foreach($tools as $key => $tool)
          <div class="abilities__reveal reveal-{{ $key + 1 }}">
            <div class="abilities__row">
              <div class="abilities__name">
                {{ $tool->tool }}
              </div>
              <div class="abilities__rate">
                @for($i = 0; $i < $tool->rate; $i++)
                  <i class="fas fa-star"></i>
                @endfor
                @for($i = 0; $i < 5 - $tool->rate; $i++)
                  <i class="far fa-star"></i>
                @endfor
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>