<script>
  import Layout from "@p-shared/PublicPagesLayout.svelte";
  import ServiceSidebar from "@p-shared/Partials/Sidebar.svelte";
</script>

<Layout title="Neonatology">

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
                <h2>Neonatology</h2>
                <p> Capitol Hill clinic / Hospital's Division of Neonatal and Developmental Medicine aims to provide
                  optimum state-of-the-art care for critically ill and recovering neonates and infants, provide training
                  for young physicians and investigators, as well as conduct basic and patient-oriented research studies
                  to improve care.</p>
              </div>
              <hr />

              <div class="about_promo_box">
                <div class="row">
                  <div class="col-lg-5 col-md-5">
                    <div class="pormo_box_img">
                      <img src="/img/resources/neona.jpg" alt="" />
                    </div>
                  </div>

                  <div class="col-lg-7 col-md-7">
                    <div class="col-lg-12 col-md-12">
                      <div class="pormo_box_details">
                        <p>Neonatology is a sub-specialty of pediatrics that consists of the medical care of newborn
                          infants, especially the ill or premature newborn infant.</p>

                        <p>Our Neonatal Intensive Care Nursery is equipped with the latest medical technology, including
                          the Extra-corporeal Membrane Oxygenation (ECMO) heart-lung bypass that supports neonates with
                          respiratory failure, as well as, therapeutic hyperthermia (body cooling) for asphyxiated
                          infants. Our neonatal care program delivers the highest quality of care with a focus on service
                          excellence, improved patient outcomes, optimized safety measures and evidence-based best
                          practice models. From the tiniest premature newborns to infants with complicated heart disease,
                          the team provides a full range of critical, lifesaving neonatal care services.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>


              </div>

              <p>Our well equipped Neonatal Intensive Care and Progressive Care nurseries treat over 1000 babies annually
                with a wide range of conditions, including: <br>
                <strong>Extreme prematurity • Congenital heart disease • Genetic disorders • Severe respiratory failure • Congenital bowel disorders • Neurologic diseases • Perinatal infectious diseases etc </strong>
              </p>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</Layout>
