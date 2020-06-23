<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import { Inertia } from "@inertiajs/inertia";
  import Layout from "@s-shared/SuperAdminLayout";
  import FlashMessage from "@p-shared/FlashMessage";
  import { onMount } from "svelte";
  import route from "ziggy";

  $: ({ app } = $page);

  onMount(() => {
    swal.close();
  });
</script>

<Layout title="Super Admin Dashboard">
  <div class="content">
    <div class="card">
      <div class="card-body">Do you have an account?</div>
    </div>
  </div>
</Layout>
