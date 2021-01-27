<script>
  import Layout from "@p-shared/PublicPagesLayout.svelte";
  import ServiceSidebar from "@p-shared/Partials/Sidebar.svelte";
</script>

<Layout title="Health Insurance">

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
                <img src="/img/resources/hi.jpg"  alt="" />
                <h2>Health Insurance Scheme</h2>
                <p> Health care provision in Nigeria is a concurrent responsibility of the three tiers of government in
                  the country. However, because Nigeria operates a mixed economy, private providers of health care have a
                  visible role to play in health care delivery. The federal government's role is mostly limited to
                  coordinating the affairs of the university teaching hospitals, Federal Medical Centres (tertiary health
                  care) while the state government manages the various general hospitals (secondary health care) and the
                  local government focus on dispensaries (primary health care), (which are regulated by the federal
                  government through NPHCDA)</p>
              </div>
              <hr />

              <div class="about_promo_box">
                <div class="row">
                  <div class="col-lg-5 col-md-5">
                    <div class="pormo_box_img">
                      <img src="/img/resources/hii.jpg" alt="" />
                    </div>
                  </div>

                  <div class="col-lg-7 col-md-7">
                    <div class="col-lg-12 col-md-12">
                      <div class="pormo_box_details">
                        <p>Capitol Hill clinic / Hospital A Leading Provider of Services For Health Insurance Scheme has
                          decried the poor distribution of health insurance in Nigeria. They have noticed that, only
                          federal government workers are currently covered by the National health Insurance Scheme (NHIS).
                        </p>

                        <p>That is why we at Capitol Hill clinic / Hospital have decided to make the easy availability of
                          comprehensive health insurance our top priority and our fundamental goal. Researching the
                          different insurance companies and plans, will help you find the cheapest health insurance.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
              <br>
              <p> Everyone needs health insurance and new types of low cost plans are being developed by major insurance
                companies to provide coverage for everyone. At Capitol Hill clinic / Hospital we guarantee you nothing
                less than all these. </p>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</Layout>
