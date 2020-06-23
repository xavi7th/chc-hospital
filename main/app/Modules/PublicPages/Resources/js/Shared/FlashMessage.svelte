<script>
  import { page } from "@inertiajs/inertia-svelte";
  $: ({ flash } = $page);

  export let msg,
    isGeneralError = false;
</script>

{#if msg}
  <span class="form-validation form-control-feedback">{msg}</span>
{:else if flash.error && isGeneralError}
  <div class="alert alert-danger">{flash.error}</div>
{:else if flash.success && isGeneralError}
  <div class="alert alert-success">{flash.success}</div>
{/if}
