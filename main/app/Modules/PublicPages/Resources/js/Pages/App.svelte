<script>
  export let event;
  import { Inertia } from "@inertiajs/inertia";
  import { page } from "@inertiajs/inertia-svelte";

  $: ({ errors } = $page);

  let details = {};
  let loginRoute = route("app.login").url();

  let handleLogin = e => {
    console.log(e);

    Inertia.post(loginRoute, details).then(() => {
      if (_.size(errors) === 0) {
        location.reload();
      }
    });
  };
</script>

<style>
  .invalid-feedback {
    display: block;
  }
</style>

<div class="rui-sign align-items-center justify-content-center">
  <div class="bg-image">
    <div class="bg-grey-1" />
  </div>

  <form
    on:submit|preventDefault={handleLogin}
    class="form rui-sign-form rui-sign-form-cloud"
    action={loginRoute}
    method="post">
    <div class="row vertical-gap sm-gap justify-content-center">
      <div class="col-12">
        <h1 class="display-4 mb-10 text-center">Sign In</h1>
      </div>
      <div class="col-12">
        <input
          required
          type="email"
          id="email"
          placeholder="Email"
          name="email"
          class="form-control"
          aria-required="true"
          aria-invalid="false"
          bind:value={details.email} />
        {#if errors.email}
          <div class="invalid-feedback">{errors.email[0]}</div>
        {/if}

      </div>
      <div class="col-12">
        <input
          type="password"
          id="password"
          placeholder="Password"
          name="password"
          class="form-control"
          aria-required="true"
          aria-invalid="false"
          bind:value={details.password} />
        {#if errors.password}
          <div class="invalid-feedback">{errors.password[0]}</div>
        {/if}
      </div>
      <div class="col-sm-6">
        <div
          class="custom-control custom-checkbox d-flex justify-content-start">
          <input type="checkbox" id="rememberMe" class="custom-control-input" />
          <label for="rememberMe" class="custom-control-label fs-13">
            Remember me
          </label>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="d-flex justify-content-end">
          <a href="javascript:void(0)" class="fs-13">Forgot password?</a>
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-brand btn-block text-center">Sign in</button>
      </div>
      <div class="col-12">
        <div class="rui-sign-or mt-2 mb-5">or</div>
      </div>
      <div class="col-12">
        <ul class="rui-social-links">
          <li>
            <a href="dashboard.html" class="rui-social-github">
              <span class="fab fa-github" />
              Github
            </a>
          </li>
          <li>
            <a href="dashboard.html" class="rui-social-facebook">
              <span class="fab fa-facebook-f" />
              Facebook
            </a>
          </li>
          <li>
            <a href="dashboard.html" class="rui-social-google">
              <span class="fab fa-google" />
              Google
            </a>
          </li>
        </ul>
      </div>
    </div>
  </form>

  <div class="mt-20 text-grey-5">
    Don't you have an account? {event}
    <a href="/register" class="text-2">Sign Up</a>
  </div>
</div>
