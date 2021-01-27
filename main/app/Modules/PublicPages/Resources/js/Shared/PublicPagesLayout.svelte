<script>
  import PageLoader from "@p-shared/PageLoader";
  import Header from "@p-shared/Partials/Header";
  import PageTitle from "@p-shared/Partials/PageTitle";
  import Footer from "@p-shared/Partials/Footer";
  import { page } from "@inertiajs/inertia-svelte";

  let isLoaded = false,
    pageLoaded = false;

  $: ({ isInertiaRequest, app, routes } = $page.props);

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

  <svelte:head>
    <title>{title} | Our Services </title>
  </svelte:head>

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
