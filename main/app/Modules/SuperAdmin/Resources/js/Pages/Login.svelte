<script>
  import { page } from "@inertiajs/inertia-svelte";
  import { Inertia } from "@inertiajs/inertia";
  import Layout from "@s-shared/SuperAdminLayout";
  import FlashMessage from "@p-shared/FlashMessage";

  $: ({ app, errors } = $page.props);

  let details = {};

  let loginAdmin = () => {
    BlockToast.fire({
      text: "Accessing your dashboard..."
    });
    Inertia.post(route("superadmin.login.post"), details);
  };
</script>

<Layout title="{app.name} Admin Login" isAuth={true}>
  <div class="fs-18 fw-600 text-center mb-30 text-title">Welcome, Log In</div>
  <form on:submit|preventDefault={loginAdmin}>
    <FlashMessage isGeneralError={true} />
    <div class="form-group mb-20" class:has-danger={errors.email}>
      <label for="login-email" class=" form-control-label">
        <strong>E-Mail</strong>
      </label>
      <input
        type="email"
        class="form-control form-control-pill"
        class:form-control-danger={errors.email}
        bind:value={details.email}
        id="login-email" />
      <FlashMessage msg={errors.email} />
    </div>
    <div class="form-group mb-20" class:has-danger={errors.password}>
      <label for="login-pass" class=" form-control-label">
        <strong>Password</strong>
      </label>
      <input
        type="password"
        bind:value={details.password}
        class="form-control form-control-pill"
        class:form-control-danger={errors.password}
        id="login-pass" />
      <FlashMessage msg={errors.password} />
    </div>
    <div class="form-group">
      <label class="control control-checkbox">
        <div class="flex a-i-center j-c-between">
          <span class="text-light fs-12 ">Remember</span>
        </div>
        <input type="checkbox" bind:value={details.remember} />
        <span class="control-icon" />
      </label>
    </div>
    <div class="form-group flex j-c-center mt-30">
      <button class="btn btn-primary btn-shadow btn-round">Log In</button>
    </div>
  </form>
</Layout>
