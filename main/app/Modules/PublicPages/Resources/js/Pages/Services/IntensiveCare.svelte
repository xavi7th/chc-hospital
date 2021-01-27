<script>
  import Layout from "@p-shared/PublicPagesLayout.svelte";
  import ServiceSidebar from "@p-shared/Partials/Sidebar.svelte";
</script>

<Layout title="Intensive Care Unit">

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
                <img src="/img/resources/icu.jpg"  alt="" />
                <h2>Intensive Care Unit</h2>
                <p>The Intensive Care Unit ICU of Capitol Hill Clinic / Hospital is a multi-purpose area designed to
                  provide intensive comprehensive care 24/7 to seriously ill patients or those with a high risk of
                  developing complications, who require continuous monitoring, vigilance and specialized medical
                  treatment.</p>
              </div>
              <hr />

              <div class="about_promo_box">
                <div class="row">
                  <div class="col-lg-5 col-md-5">
                    <div class="pormo_box_img">
                      <img src="/img/resources/icuu.jpg" alt="" />
                    </div>
                  </div>

                  <div class="col-lg-7 col-md-7">
                    <div class="col-lg-12 col-md-12">
                      <div class="pormo_box_details">
                        <p>Capitol Hill Clinic / Hospital ICU is staffed 24 hours a day by highly qualified physicians who
                          are board-certified in internal, pulmonary, and critical care medicine and are members of
                          Nigeria Medical Association Of Nigeria. An interdisciplinary team of specialized nurses,
                          respiratory therapists, pharmacists, dietitians, and other technical staff works in
                          collaboration with the our physicians. Our physician conducts daily patient care rounds with
                          this team to develop an individualized plan of care for each patient. Continued care is
                          coordinated by social workers and case managers.respiratory therapists along with other support
                          staff.</p>


                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <p>Our ICU features state-of-the-art medical equipment, including a computerized monitoring system and a
                computerized medication administration record with bar-code scanning to ensure patient safety. Other
                safety systems include computerized bar-code scanning for laboratory testing, ECG monitoring, and other
                diagnostic testing.
              </p>

              <p>Some Of Our Specialized services in our Intensive Care Unit ICU include: </p>

              <div class="box_list">
                <ul>
                  <li> Non-invasive and invasive state-of-the-art cardiovascular and neurological monitoring</li>
                  <li>Continuous bedside monitoring of respiratory mechanics and capnography</li>
                  <li>Advance diagnostic imaging support</li>
                  <li> Advanced respiratory support including conventional mechanical ventilation, high frequency
                    oscillatory ventilation, high frequency jet ventilation, and inhaled nitric oxide</li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</Layout>
