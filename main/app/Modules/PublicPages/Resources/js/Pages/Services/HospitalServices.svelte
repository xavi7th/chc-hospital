<script>
  import Layout from "@p-shared/PublicPagesLayout.svelte";
  import ServiceSidebar from "@p-shared/Partials/Sidebar.svelte";
</script>

<Layout title="Hospital Services">

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
                <img src="/img/resources/hospital.jpg"  alt="" />
                <h2>Hospital Services</h2>
                <p>Keeping a large hospital running smoothly a is complex and costly activity. Ensuring patients receive
                  top-quality care while also meeting the needs of staff requires careful planning and targeted
                  investments. With technology now at the heart of modern medicine, quality and precise attention can now
                  be given to the hospital. From their areas of expertise to their employee as well as IT infrastructure
                  that underpins all the hospital's operations. This infrastructure must be robust enough to deal with
                  heavy loads but also sufficiently flexible to quickly respond to changes in demand.</p>
              </div>
              <hr />

              <div class="about_promo_box">
                <div class="row">
                  <div class="col-lg-5 col-md-5">
                    <div class="pormo_box_img">
                      <img src="/img/resources/hos.jpg" alt="" />
                    </div>
                  </div>

                  <div class="col-lg-7 col-md-7">
                    <div class="col-lg-12 col-md-12">
                      <div class="pormo_box_details">
                        <p> Capitol Hill Clinic / Hospital is one of the largest competent hospital groups in Warri,
                          Nigeria. With more than two decades of working experience in planning and managing hospital
                          service both in small or large hospitals. We are engaged in providing excellent Hospital
                          Services to our customers. The professionals working with us take great care and take into
                          account each and every minute detail so that we make it easier to manage a hospital surrounding.
                          Moreover, we make use advanced technology that guarantees a life time living comfort.
                        </p>

                        <p>Our Hospital Services / Planning Include: </p>

                      </div>
                    </div>
                  </div>
                </div>


              </div>
              <br>
              <p>
                <strong>Reclaim : A Medical Detoxification Program • 24-Hour Emergency Department • Surgery Services • Psychiatric Crisis Intervention and Assessment • Intensive / Coronary Care Unit • Inpatient Medical / Surgical Unit • Medical Detox • Inpatient & Outpatient Surgery Center • Clinical Laboratory • Comprehensive Radiology Services, including an Open MR • Rehabilitation Services • Respiratory Care / Pulmonary Team • G.I. Laboratory / Endoscopy • Inpatient Mental Health Services • Outpatient Psychiatric Treatment Services (OPTS) etc.</strong>
              </p>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</Layout>
