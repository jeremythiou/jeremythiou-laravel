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
        <?php
          $tools = [
            ["git", 5],
            ["Microsoft Office", 5],
            ["npm", 5],
            ["Trello", 5],
            ["UNIX/Linux, Ubuntu, Debian", 5],
            ["Windows (Vista, 7, 8, 10)", 5],
            ["Composer", 4],
            ["Photoshop", 4],
            ["Premier Pro", 4],
            ["Sony Vegas Pro", 4],
            ["Unity", 4],
            ["VIM", 4],
            ["VS Code", 4],
            ["Docker", 3],
            ["SCRUM", 3],
            ["Sketch", 3],
            ["Android", 2],
            ["Modélisation UML", 2],
          ];

          foreach($tools as $key=>$tool){
            ?>
            <div class="abilities__reveal reveal-<?= $key + 1 ?>">
              <div class="abilities__row">
                <div class="abilities__name">
                  <?= $tool[0]; ?>
                </div>
                <div class="abilities__rate">
                  <?php
                    for($i = 0; $i < $tool[1]; $i++){
                      ?>
                      <i class="fas fa-star"></i>
                      <?php
                    }

                    for($i = 0; $i < 5 - $tool[1]; $i++){
                      ?>
                      <i class="far fa-star"></i>
                      <?php
                    }
                  ?>
                </div>
              </div>
            </div>
            <?php
          }
        ?>
      </div>
    </div>

  </div>
</div>