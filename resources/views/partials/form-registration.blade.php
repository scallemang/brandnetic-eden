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
<form class="registration bg-floral">
  <div class="container">
    <h2>Register your interest</h2>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputFname">First Name*</label>
        <input type="text" class="form-control" id="inputFname" placeholder="">
      </div>
      <div class="form-group col-md-6">
        <label for="inputLname">Last Name*</label>
        <input type="text" class="form-control" id="inputLname" placeholder="">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email*</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPhone">Phone Number*</label>
        <input type="tel" class="form-control" id="inputPhone" placeholder="">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity" placeholder="">
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
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>