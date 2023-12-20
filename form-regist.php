<div class="form-wrap">
  <form id="survey-form">
    <div class="change" id="eng-lang">
      <div class="form-title">Registration</div>
    </div>
    <div class="change-lang" id="ind-lang">
      <div class="form-title">पंजीकरण</div>
    </div>
    <div class="form-group">
      <label for="inputPassword5">PHONE NUMBER*</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">+91</div>
        </div>
        <input
          type="number"
          class="form-control"
          id="phone-country-code"
          required
        />
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword5">PASSWORD*</label>
      <input
        type="password"
        id="inputPassword5"
        class="form-control"
        placeholder="Create a password"
        aria-describedby="passwordHelpBlock"
        required
      />
      <small id="passwordHelpBlock" class="form-text text-muted">
        At least 8 characters. <br />You must use Latin characters and numbers
        when filling in this form
      </small>
    </div>

    <div class="form-group">
      <div class="form-check">
        <input
          class="form-check-input"
          type="checkbox"
          value=""
          id="invalidCheck"
          required
        />
        <label class="form-check-label" for="invalidCheck">
          I have read, understand and agree with the
          <a type="button" data-toggle="modal" data-target="#TnC"
            ><u>Terms and conditions</u></a
          >,
          <a type="button" data-toggle="modal" data-target="#privacy-policy"
            ><u>Privacy Policy</u></a
          >,
          <a type="button" data-toggle="modal" data-target="#betting-rules"
            ><u>Betting Rules</u></a
          >
          and confirm that I am over 18 years of age.
        </label>
        <div class="invalid-feedback">You must agree before submitting.</div>
      </div>
    </div>

    <div class="btn-submit">
      <button type="submit" id="submit" class="btn btn-primary btn-block">
        REGISTRATION
      </button>
    </div>

    <div class="text-link">
      <a href="https://happyluck.com/?action=login">ALREADY WITH HAPPYLUCK</a>
    </div>
  </form>
</div>
