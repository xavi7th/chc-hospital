<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import { Inertia } from "@inertiajs/inertia";
  import Layout from "@s-shared/SuperAdminLayout";
  import FlashMessage from "@p-shared/FlashMessage";
  import route from "ziggy";
  import axios from "axios";

  $: ({ app, status, flash } = $page);

  export let jobListings = [];

  let deleteJobListing = id => {
    swalPreconfirm
      .fire({
        confirmButtonText: "Carry on!",
        text: "This will permanently delete this job listing from the site",
        preConfirm: () => {
          return Inertia.delete(route("superadmin.delete_job_listing", id));
        }
      })
      .then(val => {
        if (undefined === status) {
          if (val.isDismissed) {
            Toast.fire({
              title: "Canceled",
              icon: "info",
              position: "center"
            });
          } else if (flash.success) {
            ToastLarge.fire({
              title: "Success",
              html: `Job listing has been deleted`,
              position: "bottom",
              icon: "success",
              timer: 10000
            });
          }
        }
      });
  };
</script>

<style>
  .btn-xs {
    margin-left: auto;
    margin-right: 0;
    display: block;
  }
</style>

<Layout title="Manage Job Listings">
  <div class="document">
    <div class="row">
      <!-- basic  -->
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="timeline">
              <!-- left -->

              {#each jobListings as listing, idx}
                <div class="timeline-item" class:timeline-item-right={idx % 2}>
                  <div class="timeline-point">
                    <div class="badge badge-primary badge-xxl badge-dot" />
                  </div>
                  <div class="timeline-detail">
                    <span>
                      {new Date(listing.created_at).toDateString()} - {new Date(listing.created_at).toLocaleTimeString()}
                    </span>
                  </div>
                  <div class="timeline-content">
                    <div>
                      <h5 class="timeline-title">
                        {listing.contract_type} {listing.job_title} at {listing.job_location}
                      </h5>
                      <p class="timeline-text">
                        {@html listing.job_description}
                      </p>
                    </div>
                    <button
                      type="button"
                      class="btn btn-danger btn-outline btn-bold btn-w-sm btn-xs"
                      on:click={deleteJobListing(listing.id)}>
                      Delete
                    </button>
                  </div>
                </div>
              {:else}
                <div class="timeline-item">
                  <div class="timeline-point">
                    <div class="badge badge-primary badge-xxl badge-dot" />
                  </div>
                  <div class="timeline-detail">
                    <span>{new Date().toDateString()}</span>
                  </div>
                  <div class="timeline-content">
                    <div>
                      <h4 class="timeline-title">
                        THERE ARE NO JOB LISTINGS AT THE MOMENT
                      </h4>
                    </div>
                  </div>
                </div>
              {/each}

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</Layout>
