{{-- <article @php post_class() @endphp>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
</article>
 --}}
<script>
var register = function(jQuery) {
  jQuery.ajax({
    type: "POST",
    url: 'partials/lasso/signup.php',
    data: {
      firstName: document.getElementById('first_name').value,
      lastName: document.getElementById('last_name').value,
      email: document.getElementById('email').value,
      phone: document.getElementById('phone').value,
      //address: document.getElementById('address').value,
      city: document.getElementById('city').value,
      //province: document.getElementById('province').value,
      //postal: document.getElementById('postal').value,
      //country: document.getElementById('country').value
    },
    success: function(arguments){
      console.log(arguments);
    }
  });
};
</script>
<form class="registration bg-floral">
  <div class="container">
    <h2>Register your interest</h2>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="first_name">First Name*</label>
        <input type="text" class="form-control" id="first_name" placeholder="">
      </div>
      <div class="form-group col-md-6">
        <label for="last_name">Last Name*</label>
        <input type="text" class="form-control" id="last_name" placeholder="">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="email">Email*</label>
        <input type="email" class="form-control" id="email" placeholder="">
      </div>
      <div class="form-group col-md-6">
        <label for="phone">Phone Number*</label>
        <input type="tel" class="form-control" id="phone" placeholder="">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="cith">City</label>
        <input type="text" class="form-control" id="city" placeholder="">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <legend>Are you a realator?*</legend>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="areYouARealator" id="areYouARealatorYes" value="yes">
          <label class="form-check-label" for="areYouARealatorYes">Yes</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="areYouARealator" id="areYouARealatorNo" value="no">
          <label class="form-check-label" for="areYouARealatorNo">No</label>
        </div>
      </div>
      <div class="form-group col-md-6">
        <legend>Are you working with a realator?*</legend>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="areYouWorkingWithARealator" id="areYouWorkingWithARealatorYes" value="yes">
          <label class="form-check-label" for="areYouWorkingWithARealatorYes">Yes</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="areYouWorkingWithARealator" id="areYouWorkingWithARealatorNo" value="no">
          <label class="form-check-label" for="areYouWorkingWithARealatorNo">No</label>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <legend>What best describes you?*</legend>
        <select class="custom-select" name="whatBestDescribesYou" id="whatBestDescribesYou">
          <option selected>Select...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <legend>Preferred Home Type?*</legend>
        <select class="custom-select" name="whatBestDescribesYou" id="whatBestDescribesYou">
          <option selected>Select...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <legend>Estimated Budget*</legend>
        <select class="custom-select" name="estimatedBudget" id="estimatedBudget">
          <option selected>Select...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <legend>How Did You Hear About Us?*</legend>
        <select class="custom-select" name="howDidYouHearAboutUs" id="howDidYouHearAboutUs">
          <option selected>Select...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
        <label class="custom-control-label" for="customControlValidation1">In accordance with Canadian Anti-Spam Legislation, I give my consent to receive electronic communications from Fortune Marketing regarding: upcoming communities, current communities, announcements, invitations, events, promotions and all other related electronic communications.</label>
        {{-- <div class="invalid-feedback">Example invalid feedback text</div> --}}
      </div>
    </div>
    <div class="g-recaptcha" data-sitekey="6LfEapkUAAAAAFn3dEfJ9Ywnzr85qVFTSwDwe4i3"></div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>