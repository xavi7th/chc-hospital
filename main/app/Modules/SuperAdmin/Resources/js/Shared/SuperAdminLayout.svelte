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
  export let title;

  onMount(() => {
    isMounted = true;
  });
</script>

<svelte:window
  on:load|once={() => {
    isLoaded = true;
  }} />

<div class="wrapper">
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

</div>

{#if isLoaded}
  <script src="/js/dashboard-init-22-06-2020.js">

  </script>
{/if}
