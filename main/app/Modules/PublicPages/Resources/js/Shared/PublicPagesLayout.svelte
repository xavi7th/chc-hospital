<script>
  import PageLoader from "@p-shared/PageLoader";
  import Header from "@p-shared/Partials/Header";
  import PageTitle from "@p-shared/Partials/PageTitle";
  import Footer from "@p-shared/Partials/Footer";
  import { fade } from "svelte/transition";
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import { toCurrency } from "@p-shared/utils";
  import { Inertia } from "@inertiajs/inertia";
  import route from "ziggy";
  import { afterUpdate } from "svelte";

  let isLoaded = false,
    pageLoaded = false;

  $: ({ isInertiaRequest, app, routes } = $page);

  console.log($page);

  export let title;
</script>

{#if !pageLoaded && !isInertiaRequest}
  <PageLoader />
{:else if !pageLoaded && isInertiaRequest}
  <PageLoader transparent={true} />
{/if}

<svelte:window
  on:load|once={() => {
    isLoaded = true;
  }} />

<Header {routes} />

{#if !route().current('app.home')}
  <PageTitle {title} />
{/if}

<slot />

<Footer appName={app.name} />

{#if isLoaded}
  <script src="/js/app-init-06-06-20.js">

  </script>
{/if}
