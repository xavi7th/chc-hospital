<script>
  export let status;

  let title = {
    503: "503: Service Unavailable",
    500: "500: Server Error",
    404: "404: Page Not Found",
    403: "403: Forbidden"
  }[status];

  let description = {
    503: "Sorry, we are doing some maintenance. Please check back soon.",
    500: "Whoops, something went wrong on our servers.",
    404: "Sorry, the page you are looking for could not be found.",
    403: "Sorry, you are forbidden from accessing this page."
  }[status];
</script>

<svelte:head>
  <title>{title ? `${title} | Ping CRM` : 'APP NAME'}</title>
</svelte:head>

<div
  class="p-5 bg-indigo-800 text-indigo-100 min-h-screen flex justify-center
  items-center">
  <div class="w-full max-w-md">
    <h1 class="text-3xl">{title}</h1>
    <p class="mt-3 text-lg leading-tight">{description}</p>
  </div>
</div>
