@extends ('layout')

@section ('cookie')
<!-- cookie overlay -->
<div class="cookie-screen-overlay">
  <div class="cookie-overlay">

    <!-- cookie image -->
    <div class="cookie-image" id="cookie-overlay">
      <img src="img/cookie.png" alt="cookie crumble dog bone">
    </div>

    <!-- close tag -->
    <div class="cookie-close-tag cookie-close" id="close-cookie-overlay">
        <i class="fa fa-times fa" aria-hidden="true"></i>
    </div>

    <div class="cookie-content">
      <h1>Cookies</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Duis voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
      <button type="button" name="button" class="cookie-button cookie-close">ok, verder surfen</button>
    </div>
  </div>
</div>
@stop
