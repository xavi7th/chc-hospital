<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import Layout from "@p-shared/PublicPagesLayout";
  import ServiceSidebar from "@p-shared/Partials/Sidebar";
  import route from "ziggy";
  $: ({ app } = $page);

  let uploadCV = () => {};
</script>

<Layout title="Pharmaceutical Services">

  <section id="single_Service" class="sec-padding">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-3">
          <div class="service_sideber">

            <ServiceSidebar page="pharmServ" />

          </div>
        </div>

        <div class="col-lg-9 col-md-9">
          <div class="tab-content">
            <div
              class="service_mainconetent tab-pane fade in active"
              id="invisalign">

              <div class="about_box">
                <img src="/img/resources/pharm.jpg" alt="" />
                <h2>Pharmaceutical Services</h2>
                <p>
                  The Pharmacy Department at Capitol Hill Clinic/Hospital
                  provides comprehensive pharmacy services to a population of
                  over two hundred thousand (200,000) patients Annually. Capitol
                  Hill Clinic / Hospital has a local team of dedicated
                  professionals committed to providing excellent customer care.
                  Our team of over 40 members consists of pharmacists, certified
                  pharmacy.
                </p>
              </div>
              <hr />

              <div class="about_promo_box">
                <div class="row">
                  <div class="col-lg-5 col-md-5">
                    <div class="pormo_box_img">
                      <img src="/img/resources/pharm1.jpg" alt="" />
                    </div>
                  </div>

                  <div class="col-lg-7 col-md-7">
                    <div class="col-lg-12 col-md-12">
                      <div class="pormo_box_details">
                        <p>
                          Capitol Hill Clinic / Hospital provides pharmaceutical
                          companies with services to support product
                          introduction and delivery. Over the years our services
                          has helped to promote the most effective use of drugs,
                          helped pharmaceutical programs to succeed, and
                          ultimately improve health.
                        </p>

                        <p>
                          Assisting our pharmacists are competent technical and
                          support personnel who work together to assure that you
                          get the highest quality pharmaceutical care possible.
                          The scope of Our pharmacy practice includes more
                          traditional roles such as compounding and dispensing
                          medications, and it also includes more modern
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <br />
              <p>
                services related to health care, including clinical services,
                reviewing medications for safety and efficacy, and providing
                drug information. Our Pharmacists, are experts on drug therapy
                and are the primary health professionals who optimize use of
                medication for the benefit of the patients. The professionalism
                of Capitol Hill Clinic/Hospital's Pharmacists goes beyond
                dispensing drugs or preparing prescriptions. They are
                experienced health consultants and they render the following
                services: 24/7 access to our local pharmacist • Specialized
                medication packaging • Medication administration records (MARs)
                are color coded and include resident photograph • Option for
                Electronic Medication Administration Records (EMARs) Itemized
                invoices and local dedicated billing team • Delivery etc.
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</Layout>
