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

  $: ({ isInertiaRequest, app } = $page);

  console.log($page);

  export let title;

  afterUpdate(() => {
    isLoaded = true;
  });
</script>

{#if !pageLoaded && !isInertiaRequest}
  <PageLoader />
{:else if !pageLoaded && isInertiaRequest}
  <PageLoader transparent={true} />
{/if}

{#if !route().current('app.login.show')}
  <Header />
{/if}

{#if !route().current('app.home') && !route().current('app.login.show')}
  <PageTitle {title} />
{/if}

<slot />

{#if !route().current('app.login.show')}
  <Footer appName={app.name} />
{/if}

{#if isLoaded}
  <script src="/js/app-init-06-06-20.js">

  </script>
{/if}
