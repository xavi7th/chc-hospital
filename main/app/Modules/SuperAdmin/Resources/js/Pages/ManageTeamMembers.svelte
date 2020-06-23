<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import { Inertia } from "@inertiajs/inertia";
  import Layout from "@s-shared/SuperAdminLayout";
  import FlashMessage from "@p-shared/FlashMessage";
  import route from "ziggy";

  $: ({ app } = $page);
</script>

<Layout title="Manage Team Members">
  <div class="content">

    <div class="card">
      <div class="card-body">Do you have an account?</div>
    </div>

    <div class="row">
      <!-- activity -->
      <div class="col-lg-8 col-md-12">
        <div class="profile-activity">
          <!-- card -->
          <div class="card">
            <div class="activity-item">
              <div class="card-body">
                <div class="flex j-c-between">
                  <h5 class="mb-30 text-uppercase fw-700">Work Experience</h5>
                  <span class="fs-12 text-light">
                    <i class="far fa-clock mr-5" />
                    7 h
                  </span>
                </div>
                <div class="flex">
                  <div
                    class="flex a-i-center j-c-center bg-gray-200 w-80 h-80
                    mr-30">
                    <i class="fas fa-briefcase fs-24" />
                  </div>
                  <div>
                    <span class="d-block fw-500">UI / UX Designer</span>
                    <span class="d-block fs-12 text-light">
                      FreeGrap Digital Agency INC.
                    </span>
                    <span class="d-block fs-12 text-light">2017 - Present</span>
                  </div>
                </div>
              </div>
              <div class="card-footer fs-12">
                <a href="" class="text-primary mr-30">
                  <i class="fas fa-heart mr-5" />
                  Like
                </a>
                <a href="" class="text-light mr-30">
                  <i class="fas fa-comment mr-5" />
                  Comments
                </a>
                <a href="" class="text-light">
                  <i class="fas fa-share mr-5" />
                  Share
                </a>
              </div>
            </div>
          </div>

          <!-- card -->
          <div class="card">
            <div class="activity-item">
              <div class="card-body">
                <div class="flex j-c-between">
                  <h5 class="mb-30 text-uppercase fw-700">Education</h5>
                  <span class="fs-12 text-light">
                    <i class="far fa-clock mr-5" />
                    7 h
                  </span>
                </div>
                <div class="flex">
                  <div
                    class="flex a-i-center j-c-center bg-gray-200 w-80 h-80
                    mr-30">
                    <i class="fas fa-school fs-24" />
                  </div>
                  <div>
                    <span class="d-block fw-500">
                      Computer Science Department
                    </span>
                    <span class="d-block fs-12 text-light">
                      University of Oxford
                    </span>
                    <span class="d-block fs-12 text-light">2016 - 2020</span>
                  </div>
                </div>
              </div>
              <div class="card-footer fs-12">
                <a href="" class="text-light mr-30">
                  <i class="far fa-heart mr-5" />
                  Like
                </a>
                <a href="" class="text-light mr-30">
                  <i class="fas fa-comment mr-5" />
                  Comments
                </a>
                <a href="" class="text-light">
                  <i class="fas fa-share mr-5" />
                  Share
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</Layout>
