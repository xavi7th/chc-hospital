<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import { onMount } from "svelte";
  import { fly } from "svelte/transition";
  import route from "ziggy";
  import Sidebar from "@s-shared/Partials/Sidebar";
  import Header from "@s-shared/Partials/Header";
  import PageTitle from "@s-shared/Partials/PageTitle";
  import Footer from "@s-shared/Partials/Footer";

  $: ({ app, routes } = $page);

  console.log($page);

  let isLoaded = false,
    isMounted = false;
  export let title,
    isAuth = false;

  onMount(() => {
    isMounted = true;
  });
</script>

<style>
  .auth-right {
    background-size: cover;
  }
</style>

<svelte:window
  on:load|once={() => {
    isLoaded = true;
  }} />

<div class="wrapper">
  {#if isAuth}
    <div class="auth-split">
      <div class="auth-left">
        <div class="auth-box-wrapper">
          <div class="auth-logo">
            <div class="logo">
              <div class="logo-type logo-type-colored">
                <a href="/">
                  <img src="/img/logo.png" alt="{app.name} logo" />
                </a>
              </div>
            </div>
          </div>
          <slot />
        </div>
      </div>
      <div
        class="auth-right"
        style="background-image:url('/img/capitol-hill-auth.jpg')">
        <div class="auth-content">
          <div>
            <h1 class="text-center">{title}</h1>
            <p>
              A product of Capitol Hill Hospital/Clinic Warri, Delta State.
              Unauthorised access forbidden
            </p>
          </div>
        </div>
      </div>
    </div>
  {:else}
    <Sidebar {routes} />

    <Header />

    {#if isMounted}
      <main
        in:fly={{ x: -300, duration: 700, delay: 400 }}
        out:fly={{ y: 30, duration: 400, delay: 0 }}>

        {#if title}
          <PageTitle {title} appName={app.name} />
        {/if}

        <slot />
      </main>
    {/if}
  {/if}

</div>

{#if isLoaded}
  <script src="/js/dashboard-init-22-06-2020.js">

  </script>
{/if}
