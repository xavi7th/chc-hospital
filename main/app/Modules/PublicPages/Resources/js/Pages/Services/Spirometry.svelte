<script>
  import Layout from "@p-shared/PublicPagesLayout.svelte";
  import ServiceSidebar from "@p-shared/Partials/Sidebar.svelte";
</script>

<Layout title="Spirometry">

  <section id="single_Service" class="sec-padding">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-3">
          <div class="service_sideber">

            <ServiceSidebar />

          </div>
        </div>

        <div class="col-lg-9 col-md-9">
          <div class="tab-content">
            <div class="service_mainconetent tab-pane fade in active" id="invisalign">

              <div class="about_box">
                <img src="/img/resources/spiro.jpg"  alt="" />
                <h2>Spirometry Services</h2>
                <p>Spirometry is a common type of pulmonary function test (PFT) that measures how well a person can move
                  air in and out of their lungs. In occupational settings, spirometry can be used to establish a baseline
                  before assigning a worker to job tasks that are physically demanding, that require use of a respirator,
                  or that may expose the worker to respiratory hazards. </p>
              </div>
              <hr />

              <div class="about_promo_box">
                <div class="row">
                  <div class="col-lg-5 col-md-5">
                    <div class="pormo_box_img">
                      <img src="/img/resources/spirom.jpg" alt="" />
                    </div>
                  </div>

                  <div class="col-lg-7 col-md-7">
                    <div class="col-lg-12 col-md-12">
                      <div class="pormo_box_details">
                        <p>Spirometry is a painless study of air volume and flow rate within the lungs. Spirometry is
                          frequently used to evaluate lung function in people with obstructive or restrictive lung
                          diseases such as asthma or cystic fibrosis. Capitol Hill Clinic / Hospital has the most recent
                          model of spirometry instrument used to track lung function over time and to evaluate workers who
                          experience symptoms of respiratory disease.</p>

                        <p>The spirometry equipment and software used at Capitol Hill Clinic / Hospital has been tested
                          "ok" and they have been validated by independent laboratory testing documented by the
                          manufacturer they also comply with the most recent American Thoracic Society/European
                        </p>
                      </div>
                    </div>
                  </div>
                </div>


              </div>

              <p>Respiratory Society standards. At Capitol Hill Clinic / Hospital all Spirometry results are computerized
                and the computer file are kept by relevant health care provider.
              </p>

              <p>We Use The Following Spirometric Equipment And Software At Capitol Hill Clinic / Hospital:</p>

              <div class="box_list">
                <ul>
                  <li>Customized software for protocol specific requirements </li>
                  <li>Programmable protocol specific screen alerts</li>
                  <li>Standardized equipment and software</li>
                  <li> Equipment that Ensures uniform and quality data across sites</li>
                  <li>Manual and electronic quality control checks</li>
                  <li> 21CFR11 compliant equipment and software

                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</Layout>
