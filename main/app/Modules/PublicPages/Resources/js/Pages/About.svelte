<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import Layout from "@p-shared/PublicPagesLayout";
  import route from "ziggy";
  $: ({ app } = $page);
</script>

<Layout title="About Us">

  <section class="sec-padding about-content full-sec">
    <div class="container">
      <div class="row">

        <div class="col-lg-5 col-md-12">
          <div class="full-sec-content">
            <div class="sec-title style-two">
              <h2>Who We Are</h2>
              <span class="decor">
                <span class="inner" />
              </span>
            </div>

            <p>
              Capitol Hill Clinic/Hospital is a multi-specialty private
              hospital, Situated at 38B Airport Road, Warri and Ranyo’s Place, 2
              Omamofe Sillo Street, Off Etuwewe Street, Off Deco Road, Warri,
              Nigeria.
            </p>
            <br />
            <p>
              We are one of the largest privately owned multi-specialist
              hospitals in Warri and we provide good primary, secondary and
              tertiary medical care from our two Warri sites.
            </p>

            <p>
              Capitol Hill Clinic/Hospital (CHC) has been at the forefront of
              medical care since inception –December 1996. We foster, promote,
              and practice evidence based medicine. Our dedicated staff are
              committed to compassionate delivery of professional services and
              outstanding hospitality.
            </p>

          </div>
        </div>
        <div class="col-md-7 hidden-md text-right">
          <img
            src="/img/resources/about-1.jpg"
            alt="{app.name} view at night" />
        </div>
        <InertiaLink
          href={route('app.message_from_md')}
          class="thm-btn"
          style="margin-left: 250px; margin-top: 30px">
          Read Message From Our MD
        </InertiaLink>

      </div>
      <p>
        In providing our clinical services Our hospitals offer a range of
        diagnostic services; Our radiology unit includes a digital X-ray
        machine, Advanced Ultrasound Scanners, Digital Conventional Radiology,
        Endoscopy, Screening Mammography, Cardiac Stress Test, Cardiac imaging
        and Pathology Services.
      </p>
      <p>
        We have a modern maternity unit and a complete spectrum of services to
        aid with the diagnosis and treatment of medical conditions.
      </p>

      <p>
        The sites are multi specialist delivering high quality care at
        affordable costs. The sites are an ecosystem where clinical outcomes and
        patient safety come first always. These high quality and patient
        centered care are driven by clinical governance.
      </p>
      <p>
        Services are assuring, efficient, effective, reliable, quick, advanced,
        technology driven and accessible to all.
      </p>

      <p>
        • Capitol Hill Clinic/Hospital has a full house of board-certified and
        Experienced doctors, nurses and medical consultants with more than a
        decade of working experience in their various areas of expertise.
        Capitol Hill Clinic/Hospital is endorsed by the these bodies: MINISTRY
        OF HEALTH, DPR (Department Of Petroleum Resources), NIMASA, SPDC,
        CHEVRON, Etc. At Capitol Hill Hospital we strive to make your admissions
        process as seamless as possible.
      </p>
    </div>
  </section>

  <section class="sec-padding faq-home">
    <div class="container">
      <hr />
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="sec-title style-two">
            <h2>More about us</h2>
          </div>
          <div class="accrodion-grp" data-grp-name="faq-accrodion">
            <div class="accrodion active">
              <div class="accrodion-title">
                <h4>
                  <span class="decor">
                    <span class="inner" />
                  </span>
                  <span class="text">Our Vision</span>
                </h4>
              </div>
              <div class="accrodion-content">
                <p>
                  To be the hospital of choice known for using modern technology
                  in healthcare delivery
                </p>
              </div>
            </div>
            <div class="accrodion ">
              <div class="accrodion-title">
                <h4>
                  <span class="decor">
                    <span class="inner" />
                  </span>
                  <span class="text">Our Mission</span>
                </h4>
              </div>
              <div class="accrodion-content">
                <p>
                  We are committed to delivering of high quality personalised
                  care to the people of all strata
                </p>
              </div>
            </div>
            <div class="accrodion ">
              <div class="accrodion-title">
                <h4>
                  <span class="decor">
                    <span class="inner" />
                  </span>
                  <span class="text">Our Slogan</span>
                </h4>
              </div>
              <div class="accrodion-content">
                <p>Quality Healthcare all round</p>
              </div>
            </div>
            <div class="accrodion ">
              <div class="accrodion-title">
                <h4>
                  <span class="decor">
                    <span class="inner" />
                  </span>
                  <span class="text">Our Values</span>
                </h4>
              </div>
              <div class="accrodion-content">
                <p>Professionalism, Compassion and Integrity (PCI)</p>
              </div>
            </div>
            <div class="accrodion ">
              <div class="accrodion-title">
                <h4>
                  <span class="decor">
                    <span class="inner" />
                  </span>
                  <span class="text">Our Clients</span>
                </h4>
              </div>
              <div class="accrodion-content">
                <p>
                  At Capitol Hill Clinic/ Hospital, we work closely with the
                  world’s leading institutions to create and deliver the
                  essential advantage they need to survive and thrive in a
                  changing world. We have the privilege of working with some of
                  the most well known companies in the world and we don’t take
                  this lightly. We view our clients as partners and work
                  collaboratively with them to achieve results they can measure.
                  We work both diligently and intelligently to ensure that the
                  needs of our clients come first. And we’re not afraid to push
                  the envelope or encourage restraint. We are only as good as
                  the reputation of our clients, and we willingly put our own
                  reputation on the line to ensure that they get as much out of
                  the relationship as we do.
                </p>
                <!-- <a href="about.html" class="thm-btn">See Our Clients</a> -->
              </div>
            </div>
            <div class="accrodion ">
              <div class="accrodion-title">
                <h4>
                  <span class="decor">
                    <span class="inner" />
                  </span>
                  <span class="text">Our Staff</span>
                </h4>
              </div>
              <div class="accrodion-content">
                <p>
                  We are blessed to have an amazing and well accredited staffs
                  at Capitol Hill Clinic/ Hospital who commit their time and
                  energy to render quality services to our patient 24/7. Capitol
                  Hill Clinic / Hospital has more than 100 staff members
                  including a distinguished group of scholars, active
                  researchers, and highly experienced doctors and professional
                  consultants.
                </p>
                <!-- <a href="about.html" class="thm-btn">See Our Staff</a> -->
              </div>
            </div>

            <div class="accrodion ">
              <div class="accrodion-title">
                <h4>
                  <span class="decor">
                    <span class="inner" />
                  </span>
                  <span class="text">Our Facilities</span>
                </h4>
              </div>
              <div class="accrodion-content">
                <p>
                  Medical facilities are on the rise, in many States,
                  communities and private hospitals/institutions. Doctors/
                  Nurses are lacking the necessary facilities required to aid
                  prompt and effective treatment on patients; facilities like;
                  clean environment, Standard Medical Lab, constant electrical
                  power, multiple exam rooms, sufficient parking space along
                  with easy access(in case of emergencies) and a Pharmacy fully
                  stocked with current and well endorsed drugs. At Capitol Hill
                  Clinic/Hospitals We have the best of these facilities.
                </p>
                <a href="facilities" class="thm-btn">View Facilities</a>
              </div>
            </div>

            <div class="accrodion ">
              <div class="accrodion-title">
                <h4>
                  <span class="decor">
                    <span class="inner" />
                  </span>
                  <span class="text">Awards and Recognition</span>
                </h4>
              </div>
              <div class="accrodion-content">
                <p>
                  Due to Our diligence and extreme commitment to delivering
                  first class patient care At Capitol Hill Clinic/ Hospital , we
                  either get an award / recognition from the Medical Association
                  of Nigeria or from other Well Accredited Medical Group each
                  year .These bodies honors a selected group of physicians or
                  medical students who exemplify the medical profession's
                  highest values: commitment to service, community involvement,
                  altruism, leadership and dedication to patient care. The
                  inspirational stories of these awardees demonstrate the
                  enormous impact that one person can have in his or her
                  community.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 hidden-md">
          <div class="img-masonary">
            <div class="img-w1">
              <img src="/img/faq/1.jpg" height="450" width="280" alt="" />
            </div>
            <div class="img-w1 img-h1">
              <img src="/img/faq/2.jpg" height="450" width="280" alt="" />
            </div>
            <div class="img-w1 img-h1">
              <img src="/img/faq/3.jpg" height="450" width="280" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="fact-counter-wrapper sec-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-4">
          <h2>
            For over 20 years Capitol Hill Clinic/Hospital has been serving our
            customers, providing state-of-the-art medical solutions that
            <br />
            set us apart.
          </h2>
          <InertiaLink href="{route('app.career')}" class="thm-btn inverse">
            Be a part of us
          </InertiaLink>
        </div>
        <div class="col-lg-6 col-md-8">
          <div class="single-fact">
            <div class="icon-box">
              <i class="flaticon-cup" />
            </div>
            <span
              class="timer"
              data-from="10"
              data-to="20"
              data-speed="2000"
              data-refresh-interval="50">
              20
            </span>
            <p>Total Awards</p>
          </div>
          <div class="single-fact">
            <div class="icon-box">
              <i class="flaticon-people-3" />
            </div>
            <span
              class="timer"
              data-from="10"
              data-to="50"
              data-speed="2000"
              data-refresh-interval="50">
              50
            </span>
            <p>Total Doctors</p>
          </div>
          <div class="single-fact">
            <div class="icon-box">
              <i class="flaticon-other" />
            </div>
            <span
              class="timer"
              data-from="10"
              data-to="200"
              data-speed="2000"
              data-refresh-interval="50">
              200
            </span>
            <p>Total Beds</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="sec-padding col-4">
    <div class="container">
      <div class="sec-title colored text-center">
        <h2>We Are Accredited To Carry Out The Following</h2>
        <span class="decor">
          <span class="inner" />
        </span>
      </div>

      <div class="row">
        <div class="col-md-2">
          <div class="single-specialize">
            <div class="icon-box">
              <i class="flaticon-medical-1" />
            </div>

            <h3>SEAFARERS Medical Examination for NIMASA</h3>
          </div>
        </div>

        <div class="col-md-2">
          <div class="single-specialize">
            <div class="icon-box">
              <i class="flaticon-medical-2" />
            </div>

            <h3>FITNESS TO WORK (FTW) for SPDC COntractors</h3>
          </div>
        </div>

        <div class="col-md-2">
          <div class="single-specialize">
            <div class="icon-box">
              <i class="flaticon-medical-1" />
            </div>

            <h3>AUDIOMETRY for SPDC</h3>
          </div>
        </div>

        <div class="col-md-2">
          <div class="single-specialize">
            <div class="icon-box">
              <i class="flaticon-medical-2" />
            </div>

            <h3>
              FITNESS TO WORK (FTW) for EGTL (Escravos Gas to Liquid) Project
            </h3>
          </div>
        </div>
        <div class="col-md-2">
          <div class="single-specialize">
            <div class="icon-box">
              <i class="flaticon-medical-1" />
            </div>

            <h3>SPIROMETRY for EGTL</h3>
          </div>
        </div>

        <div class="col-md-2">
          <div class="single-specialize">
            <div class="icon-box">
              <i class="flaticon-medical-2" />
            </div>

            <h3>FIT FOR DUTY (FFD) for CHEVRON Contractors</h3>
          </div>
        </div>

      </div>
    </div>
  </section>

</Layout>
