<div class="container" id="profil">
  <div class="profile">
    <div class="profile__header">
      <div class="profile__header-title">
        PROFIL
      </div>
      <div class="profile__header-subtitle">
        
      </div>
    </div>

    <div class="profile__content reveal">
      <div class="profile__about reveal-1">
        <div class="profile__content-title">
          &#192; propos
        </div>
        <div class="profile__about-text">
          <p>{{ $user->about }}</p>
        </div>
      </div>
      
      <div class="profile__picture reveal reveal-2">

      </div>

      <div class="profile__details reveal-3">
        <div class="profile__content-title">
          D&#233;tails
        </div>

        <div class="profile__details-title">
          Nom	
        </div>
        <div class="profile__details-content">
          {{ $user->first_name }} {{ $user->last_name }}
        </div>

        <div class="profile__details-title">
          &#194;ge
        </div>
        <div class="profile__details-content">
          {{ \Carbon\Carbon::parse($user->birthdate)->age }} ans
        </div>

        <div class="profile__details-title">
          Localisation
        </div>
        <div class="profile__details-content">
          {{ $user->locality }} {{ $user->county }}, {{ $user->country }}, Terre
        </div>
      </div>
    </div>
  </div>
</div>