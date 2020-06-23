<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import { Inertia } from "@inertiajs/inertia";
  import { onMount } from "svelte";
  import Layout from "@s-shared/SuperAdminLayout";
  import FlashMessage from "@p-shared/FlashMessage";
  import route from "ziggy";

  $: ({ app } = $page);

  onMount(() => {
    let jq = window.$;

    jq(function() {
      jq("#datatable1").DataTable({
        responsive: true,
        language: {
          searchPlaceholder: "Search...",
          sSearch: ""
        }
      });

      jq("#datatable2").DataTable({
        responsive: true,
        searching: false,
        bLengthChange: false
      });
    });
  });
</script>

<Layout title="Manage CVs">
  <div class="content">
    <div class="card">
      <div class="card-body">Do you have an account?</div>
    </div>
    <row>
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
                  <th>Profile</th>
                  <th>Date</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>7250-15</td>
                  <td>Jack</td>
                  <td>10/10/2018</td>
                  <td>
                    <div class="badge badge-success badge-shadow">
                      Completed
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>0850-01</td>
                  <td>John</td>
                  <td>08/10/2018</td>
                  <td>
                    <div class="badge badge-danger badge-shadow">Error</div>
                  </td>
                </tr>
                <tr>
                  <td>9750-32</td>
                  <td>Chris</td>
                  <td>01/09/2018</td>
                  <td>
                    <div class="badge badge-warning badge-shadow">Pending</div>
                  </td>
                </tr>
                <tr>
                  <td>9915-70</td>
                  <td>Emily</td>
                  <td>15/09/2017</td>
                  <td>
                    <div class="badge badge-success badge-shadow">
                      Completed
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>8314-61</td>
                  <td>Peter</td>
                  <td>06/09/2017</td>
                  <td>
                    <div class="badge badge-danger badge-shadow">Error</div>
                  </td>
                </tr>
                <tr>
                  <td>7250-15</td>
                  <td>Jack</td>
                  <td>10/10/2018</td>
                  <td>
                    <div class="badge badge-success badge-shadow">
                      Completed
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>0850-01</td>
                  <td>John</td>
                  <td>08/10/2018</td>
                  <td>
                    <div class="badge badge-danger badge-shadow">Error</div>
                  </td>
                </tr>
                <tr>
                  <td>9750-32</td>
                  <td>Chris</td>
                  <td>01/09/2018</td>
                  <td>
                    <div class="badge badge-warning badge-shadow">Pending</div>
                  </td>
                </tr>
                <tr>
                  <td>9915-70</td>
                  <td>Emily</td>
                  <td>15/09/2017</td>
                  <td>
                    <div class="badge badge-success badge-shadow">
                      Completed
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>8314-61</td>
                  <td>Peter</td>
                  <td>06/09/2017</td>
                  <td>
                    <div class="badge badge-danger badge-shadow">Error</div>
                  </td>
                </tr>
                <tr>
                  <td>7250-15</td>
                  <td>Jack</td>
                  <td>10/10/2018</td>
                  <td>
                    <div class="badge badge-success badge-shadow">
                      Completed
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>0850-01</td>
                  <td>John</td>
                  <td>08/10/2018</td>
                  <td>
                    <div class="badge badge-danger badge-shadow">Error</div>
                  </td>
                </tr>
                <tr>
                  <td>9750-32</td>
                  <td>Chris</td>
                  <td>01/09/2018</td>
                  <td>
                    <div class="badge badge-warning badge-shadow">Pending</div>
                  </td>
                </tr>
                <tr>
                  <td>9915-70</td>
                  <td>Emily</td>
                  <td>15/09/2017</td>
                  <td>
                    <div class="badge badge-success badge-shadow">
                      Completed
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>8314-61</td>
                  <td>Peter</td>
                  <td>06/09/2017</td>
                  <td>
                    <div class="badge badge-danger badge-shadow">Error</div>
                  </td>
                </tr>
                <tr>
                  <td>7250-15</td>
                  <td>Jack</td>
                  <td>10/10/2018</td>
                  <td>
                    <div class="badge badge-success badge-shadow">
                      Completed
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>0850-01</td>
                  <td>John</td>
                  <td>08/10/2018</td>
                  <td>
                    <div class="badge badge-danger badge-shadow">Error</div>
                  </td>
                </tr>
                <tr>
                  <td>9750-32</td>
                  <td>Chris</td>
                  <td>01/09/2018</td>
                  <td>
                    <div class="badge badge-warning badge-shadow">Pending</div>
                  </td>
                </tr>
                <tr>
                  <td>9915-70</td>
                  <td>Emily</td>
                  <td>15/09/2017</td>
                  <td>
                    <div class="badge badge-success badge-shadow">
                      Completed
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>8314-61</td>
                  <td>Peter</td>
                  <td>06/09/2017</td>
                  <td>
                    <div class="badge badge-danger badge-shadow">Error</div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </row>
  </div>
</Layout>
