<script>
  import Layout from "@p-shared/PublicPagesLayout.svelte";
  import ServiceSidebar from "@p-shared/Partials/Sidebar.svelte";
</script>

<Layout title="Dialysis">

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
                <img src="/img/resources/dialysiiss.jpg"  alt="" />
                <h2>Dialysis Services</h2>
                <p>Capitol Hill Clinic / Hospital's professionals have provided specialized cared for patients with renal
                  disease for more than 40 years. Our multidisciplinary team of board certified nephrologists, specialty
                  certified nurses and ancillary staff, social workers and renal dietary personnel work together to
                  provide: Inpatient and acute dialysis with a full spectrum of renal replacement therapies, outpatient
                  hemodialysis and peritoneal dialysis as well as Training and support for in-home peritoneal dialysis and
                  hemodialysis

                </p>
              </div>
              <hr />

              <div class="about_promo_box">
                <div class="row">
                  <div class="col-lg-5 col-md-5">
                    <div class="pormo_box_img">
                      <img src="/img/resources/dialysis.jpg" alt="" />
                    </div>
                  </div>

                  <div class="col-lg-7 col-md-7">
                    <div class="col-lg-12 col-md-12">
                      <div class="pormo_box_details">
                        <p>Capitol Hill Clinic / Hospital Dialysis Department is staffed by doctors and nurses who are
                          experts in internal medicine and nephrology (kidney treatment). Vascular surgeons make rounds in
                          each of our centers. We are very proud of the results we help our patients achieve. Our doctors
                          are endlessly involved in research to improve dialysis and kidney treatment and we strive to
                          bring the results of this research into the daily care of our patients.</p>

                        <p>According to the latest studies, the survival rate of our patients is better than expected,
                          only 2% of dialysis units nationwide can make this claim.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
              <br>
              <p>We treat as many of our patients as possible through AV fistulas. This method, which uses the patient’s
                own blood vessels, is the one most often recommended by the Centers of Medicare and Medicaid Services.
                Capitol Hill Clinic / Hospital dialysis center have documented lower rates of infection than the national
                benchmark; this is an important measure that is proven to improve mortality.</p>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</Layout>
