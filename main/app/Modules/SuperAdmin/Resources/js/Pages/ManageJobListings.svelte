<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import { Inertia } from "@inertiajs/inertia";
  import Layout from "@s-shared/SuperAdminLayout";
  import FlashMessage from "@p-shared/FlashMessage";
  import route from "ziggy";

  $: ({ app } = $page);
</script>

<Layout title="Manage Job Listings">
  <div class="document">
    <div class="row">
      <!-- basic  -->
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="timeline">
              <!-- left -->
              <div class="timeline-item">
                <div class="timeline-point">
                  <div class="badge badge-primary badge-xxl badge-dot" />
                </div>
                <div class="timeline-detail">
                  <span>21/09/2018 - 02:30</span>
                </div>
                <div class="timeline-content">
                  <div>
                    <h5 class="timeline-title">Timeline Event #1</h5>
                    <p class="timeline-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Illum corporis corrupti, quia numquam, reprehenderit
                      accusamus perferendis veniam facere nemo debitis
                      blanditiis similique.
                    </p>
                  </div>
                </div>
              </div>
              <!-- right -->
              <div class="timeline-item timeline-item-right">
                <div class="timeline-point">
                  <div class="badge badge-primary badge-xxl badge-dot" />
                </div>
                <div class="timeline-detail">
                  <span>22/09/2018 - 04:00</span>
                </div>
                <div class="timeline-content">
                  <div>
                    <h5 class="timeline-title">Joined User</h5>
                    <div class="img-list">
                      <a href="">
                        <img src="/img/user-1.png" alt="user" />
                      </a>
                      <a href="">
                        <img src="/img/user-2.png" alt="user" />
                      </a>
                      <a href="">
                        <img src="/img/user-3.png" alt="user" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- left -->
              <div class="timeline-item">
                <div class="timeline-point">
                  <div class="badge badge-primary badge-xxl badge-dot" />
                </div>
                <div class="timeline-detail">
                  <span>20/09/2018 - 12:00</span>
                </div>
                <div class="timeline-content">
                  <div>
                    <h5 class="timeline-title">Timeline Event #3</h5>
                    <p class="timeline-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Magni culpa dolores a necessitatibus, architecto enim!
                      Nobis illum dolor quam soluta eos, natus, aspernatur cum
                      quisquam earum veritatis architecto harum, excepturi?
                      <br />
                      <a
                        href=""
                        class="btn btn-secondary btn-round btn-bold mt-20">
                        DETAIL
                      </a>
                    </p>
                  </div>
                </div>
              </div>
              <!-- right -->
              <div class="timeline-item timeline-item-right">
                <div class="timeline-point">
                  <div class="badge badge-primary badge-xxl badge-dot" />
                </div>
                <div class="timeline-detail">
                  <span>22/09/2018 - 04:00</span>
                </div>
                <div class="timeline-content">
                  <div>
                    <h5 class="timeline-title">Timeline Event #4</h5>
                    <p class="timeline-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Illum corporis corrupti...
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</Layout>
