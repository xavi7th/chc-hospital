<script>
  import Layout from "@p-shared/PublicPagesLayout.svelte";
  import ServiceSidebar from "@p-shared/Partials/Sidebar.svelte";
</script>

<Layout title="Emergency Care">

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
                <img src="/img/resources/247.jpg"  alt="" />
                <h2>24/7 Emergency Care Services</h2>
                <p>The Emergency Care Services Department at Capitol Hill Clinic / Hospital is a 24-hour, 7-day a week,
                  full service department offering immediate and effective evaluation and treatment. The departments
                  dedicated staff is specifically trained in emergency to offer prompt and accurate diagnoses and skilled
                  medical treatment.</p>
              </div>
              <hr />

              <div class="about_promo_box">
                <div class="row">
                  <div class="col-lg-5 col-md-5">
                    <div class="pormo_box_img">
                      <img src="/img/resources/emer.jpg" alt="" />
                    </div>
                  </div>

                  <div class="col-lg-7 col-md-7">
                    <div class="col-lg-12 col-md-12">
                      <div class="pormo_box_details">
                        <p>Our Emergency Services team is committed to provide technologically advanced, life saving
                          medical services with compassionate care. Although regular, on-going medical care for
                          non-life-threatening conditions is best provided in a private physicians office, our urgent care
                          setting, emergencies do arise when immediate medical care is needed.</p>

                        <p>Our medical team includes board-certified emergency physicians and nationally certified nurses,
                          physicians assistants, emergency medical technicians and respiratory therapists along with other
                          support staff. Our Emergency Department is also approved for
                        </p>
                      </div>
                    </div>
                  </div>
                </div>


              </div>

              <p>Pediatrics and has a Pediatric Hospital on call at all times. People from Warri and its environs
                completely trust and rely on our Emergency Department for its award-winning care and exceptional service.
              </p>

              <p>Our full-service Emergency back-up call panel of physician specialists includes: <br>
                <strong>Adult Medicine • Pediatrics • Cardiology • Cardiovascular Surgery • Ear, Nose and Throat (ENT) • General Surgery; Neonatal Intensive care • Neurology • Neurosurgery • Ophthalmology • Orthopedic Surgery • Urology • Vascular Surgery etc. </strong>
              </p>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</Layout>
