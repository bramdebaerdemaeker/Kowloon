<div class="cookie-screen-overlay">
  <div class="js-cookie-consent cookie-consent">
      <!-- cookie image -->
      <div class="cookie-image" id="cookie-overlay">
        <img src="img/cookie.png" alt="cookie crumble dog bone">
      </div>

      <!-- close tag -->
      <div class="cookie-close-tag js-cookie-consent-agree" id="close-cookie-overlay">
          <i class="fa fa-times fa" aria-hidden="true"></i>
      </div>

      <div class="cookie-content">
        <h1>Cookies</h1>
        <span class="cookie-consent__message">
            {!! trans('cookieConsent::texts.message') !!}
        </span>

        <button class="js-cookie-consent-agree cookie-consent__agree">
            {{ trans('cookieConsent::texts.agree') }}
        </button>
      </div>

  </div>

</div>
