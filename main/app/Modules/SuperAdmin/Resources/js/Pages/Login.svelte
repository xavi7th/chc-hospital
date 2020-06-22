<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import { Inertia } from "@inertiajs/inertia";
  import Layout from "@s-shared/SuperAdminLayout";
  import FlashMessage from "@p-shared/FlashMessage";
  import route from "ziggy";

  $: ({ app } = $page);
</script>

<Layout title="{app.name} Admin Login" isAuth={true}>
  <div class="fs-18 fw-600 text-center mb-30 text-title">Welcome, Log In</div>
  <form action="">
    <div class="form-group mb-20">
      <label for="form-mail">
        <strong>E-Mail</strong>
      </label>
      <input
        type="text"
        class="form-control form-control-pill"
        id="form-mail" />
    </div>
    <div class="form-group mb-20">
      <label for="form-pass">
        <strong>Password</strong>
      </label>
      <input
        type="password"
        class="form-control form-control-pill"
        id="form-pass" />
    </div>
    <div class="form-group">
      <label class="control control-checkbox">
        <div class="flex a-i-center j-c-between">
          <span class="text-light fs-12 ">Remember</span>
          <a href="" class="fs-12 text-light mt-2">Forgot Password?</a>
        </div>
        <input type="checkbox" />
        <span class="control-icon" />
      </label>
    </div>
    <div class="form-group flex j-c-center mt-30">
      <button class="btn btn-primary btn-shadow btn-round">Log In</button>
    </div>
    <div>
      <hr />
      <p class="fs-12 text-center text-light">
        Do not have an account?
        <a href="page-register-2.html" class="text-primary">Register</a>
      </p>
    </div>
  </form>
</Layout>
