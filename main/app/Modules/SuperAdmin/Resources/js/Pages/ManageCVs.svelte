<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import { Inertia } from "@inertiajs/inertia";
  import { onMount } from "svelte";
  import Layout from "@s-shared/SuperAdminLayout";
  import FlashMessage from "@p-shared/FlashMessage";
  import route from "ziggy";

  $: ({ app, flash, status } = $page);

  export let uploadedCVs = [];

  let deleteCV = cv => {
    swalPreconfirm
      .fire({
        confirmButtonText: "Yes!",
        text: `This will permanently delete ${cv.full_name}'s job application from the records`,
        preConfirm: () => {
          return Inertia.delete(route("superadmin.delete_cv", cv.id));
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
              html: `Job application has been deleted`,
              position: "bottom",
              icon: "success",
              timer: 10000
            });
          }
        }
      });
  };

  onMount(() => {
    let jq = window.$;

    jq(function() {
      if (jq.fn.dataTable.isDataTable("#datatable1")) {
        // table = jq("#datatable1").DataTable();
      } else if (uploadedCVs.length !== 0) {
        jq("#datatable1").DataTable({
          responsive: true,
          language: {
            searchPlaceholder: "Search...",
            sSearch: ""
          }
        });
      }
    });
  });
</script>

<Layout title="Manage CVs">
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-title">
            <h4>BASIC</h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered" id="datatable1">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Applicant Name</th>
                  <th>Phone</th>
                  <th>Interested Position</th>
                  <th>Uploaded Date</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                {#each uploadedCVs as uploadedCV, idx}
                  <tr>
                    <td>{idx + 1}</td>
                    <td>{uploadedCV.full_name}</td>
                    <td>{uploadedCV.phone}</td>
                    <td>{uploadedCV.position}</td>
                    <td>{new Date(uploadedCV.created_at).toDateString()}</td>
                    <td class="nowrap">
                      <a
                        href={uploadedCV.cv}
                        target="_blank"
                        class="badge badge-success badge-shadow">
                        View
                      </a>
                      <button
                        class="badge badge-danger badge-shadow"
                        on:click={deleteCV(uploadedCV)}>
                        Delete
                      </button>
                    </td>
                  </tr>
                {:else}
                  <tr>
                    <td class="text-center h3" colspan="6">
                      No Uploaded Applications
                    </td>
                  </tr>
                {/each}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</Layout>
