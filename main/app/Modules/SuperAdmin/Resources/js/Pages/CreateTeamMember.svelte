<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import { Inertia } from "@inertiajs/inertia";
  import Layout from "@s-shared/SuperAdminLayout";
  import FlashMessage from "@p-shared/FlashMessage";
  import route from "ziggy";

  $: ({ app } = $page);
</script>

<Layout title="Manage Job Listings">
  <div class="content">
    <div class="document">
      <div class="card">
        <div class="card-title">
          <h4>VALID STATE</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <div class="form-group has-success">
                  <label class="form-control-label" for="input-success">
                    Input with success
                  </label>
                  <input
                    type="text"
                    class="form-control form-control-success"
                    id="input-success"
                    aria-label="success input" />
                  <div class="form-control-feedback">
                    Success! You've done it.
                  </div>
                  <small class="form-text text-muted">
                    Example help text that remains unchanged.
                  </small>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group has-warning">
                <label class="form-control-label" for="input-warning">
                  Input with warning
                </label>
                <input
                  type="text"
                  class="form-control form-control-warning"
                  id="input-warning"
                  aria-label="warning input" />
                <div class="form-control-feedback">
                  Shucks, check the formatting of that and try again.
                </div>
                <small class="form-text text-muted">
                  Example help text that remains unchanged.
                </small>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group has-danger">
                <label class="form-control-label" for="input-danger">
                  Email
                </label>
                <input
                  type="email"
                  class="form-control form-control-danger"
                  id="input-danger"
                  aria-label="danger input" />
                <div class="form-control-feedback">
                  Sorry, that username's taken. Try another?
                </div>
                <small class="form-text text-muted">
                  Example help text that remains unchanged.
                </small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</Layout>
