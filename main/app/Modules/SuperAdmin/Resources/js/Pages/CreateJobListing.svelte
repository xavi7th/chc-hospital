<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import { Inertia } from "@inertiajs/inertia";
  import Layout from "@s-shared/SuperAdminLayout";
  import FlashMessage from "@p-shared/FlashMessage";
  import { onMount } from "svelte";
  import route from "ziggy";

  $: ({ app, flash, errors } = $page);

  let details = {},
    pageLoaded = false;

  let createJobListing = () => {
    if (jQuery(".summernote").summernote("isEmpty")) {
      ToastLarge.fire({
        title: "Error",
        html: "Every job listing needs a <b>description</b>.",
        icon: "warning"
      });
    } else {
      details.job_description = jQuery(".summernote").summernote("code");
      BlockToast.fire({
        title: "Please wait!",
        text: "Creating new job listing..."
      });
      Inertia.post(route("superadmin.create_job_listing"), details, {
        preserveState: true,
        preserveScroll: false
      }).then(() => {
        if (flash.success) {
          ToastLarge.fire({
            title: "Success",
            html: flash.success,
            icon: "success"
          });
        } else {
          swal.close();
        }
      });
    }
  };

  let deleteJobListing = () => {};

  onMount(() => {
    setTimeout(() => {
      jQuery(".summernote").summernote({
        height: 300,
        toolbar: [
          ["style", ["bold", "italic", "underline", "clear"]],
          ["font", ["fontname"]],
          ["fontsize", ["fontsize"]],
          ["color", ["color"]],
          ["para", ["ul", "ol", "paragraph"]],
          ["height", ["height"]],
          ["table", ["table"]],
          ["insert", ["link", "picture"]],
          ["view", ["help"]]
        ]
      });
    }, 2000);

    return jQuery(".summernote").summernote("destroy");
  });
</script>

<svelte:window
  on:load={() => {
    pageLoaded = true;
  }} />

<Layout title="Create Job Listings">
  <div class="content">
    <div class="document">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <div class="fs-18 fw-600 text-center mb-30 text-title">
                Fill the form below to create a new job listing on the website
              </div>
              <form on:submit|preventDefault={createJobListing}>
                <FlashMessage isGeneralError={true} />

                <div class="row mb-20">

                  <div class="col-md-4">
                    <div class="form-group" class:has-danger={errors.job_title}>
                      <label class="form-control-label" for="job-title">
                        Job Title
                      </label>
                      <input
                        type="text"
                        class="form-control"
                        class:form-control-danger={errors.job_title}
                        bind:value={details.job_title}
                        id="job-title"
                        aria-label="success input" />
                      <FlashMessage msg={errors.job_title} />
                      <small class="form-text text-muted">
                        The job position that is to be applied for
                      </small>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div
                      class="form-group"
                      class:has-danger={errors.contract_type}>
                      <label class="form-control-label" for="contract-type">
                        Contract Type
                      </label>
                      <select
                        class="form-control"
                        id="contract-type"
                        class:form-control-danger={errors.contract_type}
                        bind:value={details.contract_type}>
                        <option>Full Time</option>
                        <option>Part Time</option>
                        <option>Locum</option>
                        <option>Contract</option>
                        <option>Industrial Attachment</option>
                        <option>National Service</option>
                      </select>
                      <FlashMessage msg={errors.contract_type} />
                      <small class="form-text text-muted">
                        The job position that is to be applied for
                      </small>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div
                      class="form-group"
                      class:has-danger={errors.job_location}>
                      <label class="form-control-label" for="job-location">
                        Job Location
                      </label>
                      <select
                        class="form-control"
                        id="job-location"
                        class:form-control-danger={errors.job_location}
                        bind:value={details.job_location}>
                        <option>Airport Road</option>
                        <option>Etuwewe</option>
                      </select>
                      <FlashMessage msg={errors.job_location} />
                      <small class="form-text text-muted">
                        The primary deployment location for this position
                      </small>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="summernote" />
                    <FlashMessage msg={errors.job_description} />
                  </div>

                </div>

                <div class="form-group flex j-c-center mt-30">
                  <button class="btn btn-primary btn-shadow btn-round">
                    Create Job Listing
                  </button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</Layout>

{#if pageLoaded}
  <script>
    // $(".summernote").summernote({
    //   height: 300,
    //   toolbar: [
    //     ["style", ["bold", "italic", "underline", "clear"]],
    //     ["font", ["fontname"]],
    //     ["fontsize", ["fontsize"]],
    //     ["color", ["color"]],
    //     ["para", ["ul", "ol", "paragraph"]],
    //     ["height", ["height"]],
    //     ["table", ["table"]],
    //     ["insert", ["link", "picture"]],
    //     ["view", ["help"]]
    //   ]
    // });
  </script>
{/if}
