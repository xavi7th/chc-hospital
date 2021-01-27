<script>
  import { page } from "@inertiajs/inertia-svelte";
  import Layout from "@p-shared/PublicPagesLayout";
  $: ({ app } = $page.props);
</script>

<Layout title="Services">

  <section class="home-serivce sec-padding">
    <div class="container">
      <div class="sec-title text-center">
        <h2>Our Services</h2>
        <p>
          We At Capitol Hill Clinic/ Hospital, we believe in providing the most
          competitive and quality services at the most cost effective prices
          ever. We are armed with world class equipment and our team has sheer
          competence and dedication to diagnose factual problems of our
          patients. Our focus is to offer unbeatable and incomparable services
          as our team of professionals has a sizeable years of experience in
          offering diagnostic services to a wide gamut of customers.
        </p>
        <span class="decor">
          <span class="inner" />
        </span>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Dental Care</h3>
              <p>
                At Capitol Hill Clinic / Hospital, we are proud to offer
                comprehensive / quality dental care and customizable dental
                plans.
              </p>
              <a href="dental-services">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Spirometry</h3>
              <p>
                Spirometry is a common type of pulmonary function test (PFT)
                that measures how well a person can move air in and out of their
                lungs.
              </p>
              <a href="spirometry">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Neurology</h3>
              <p>
                We are able to provide quality neurology transcription service
                that can meet your requirements in a cost-effective manner.
              </p>
              <a href="neurology">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Dialysis</h3>
              <p>
                Our professionals have provided specialized cared for patients
                with renal disease for more than 40 years.
              </p>
              <a href="dialysis">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Radiological Services</h3>
              <p>
                Our team of board-certified radiologists offers services that
                range from X-ray and fluoroscopy tests to CT scans
              </p>
              <a href="radiological-services">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Obstetric and Gynecology</h3>
              <p>
                Our obstetricians/gynecologists Clinic provide a broad range of
                basic and specialized medical and surgical services,
              </p>
              <a href="Obstetric">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Dietetic Services</h3>
              <p>
                We evaluate and monitor dietetic intervention to help ensure a
                positive effect on patients' nutritional status
              </p>
              <a href="dietetic-services">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>E.N.T Services</h3>
              <p>
                Our Ear, Nose and Throat Center delivers excellence,
                compassionate and comprehensive ENT Care
              </p>
              <a href="ent-services">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Neonatology</h3>
              <p>
                capitol Hill Clinic / Hosptal's Division of Neonatal and
                Developmental Medicine aims to provide optimum state-of-the-art
                care for critically ill and recovering neonates and infants
              </p>
              <a href="neonatology">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Diagnostic Services</h3>
              <p>
                We offer Professional Diagnostic Services in every division of
                its areas of expertise
              </p>
              <a href="diagnostic">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Paediatric Clinic</h3>
              <p>
                We offer an extensive range of premium care features which makes
                us one of the best hospitals in the area for Children & Young
                People services
              </p>
              <a href="paediatrics">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Surgery</h3>
              <p>
                We are fortunate to have many physicians who are skilled at both
                minimally invasive and traditional surgical procedures.
              </p>
              <a href="surgery">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Laboratory Services</h3>
              <p>
                At Capitol Hill Hospital Laboratory, tests are carried out
                in-house using state-of-the-art medical diagnostic equipment
              </p>
              <a href="laboratory">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Dermatology Clinic</h3>
              <p>
                We at Capitol Hill Clinic/Hospital fully understand that the our
                patient's skin is the largest organ of their body, and it is
                also one of the first things people notice
              </p>
              <a href="dermatology">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Pharmaceutical Services</h3>
              <p>
                We provide comprehensive pharmaceutical services to a population
                of over two hundred thousand (200,000) patients Annually
              </p>
              <a href="pharmaceutical">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Plastic Surgery/Burns</h3>
              <p>
                Whether it’s done for medical or cosmetic reasons, we will guide
                you every step of the way, from consultation to surgery and
                recovery
              </p>
              <a href="plastic-surgery">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Intensive Care Unit</h3>
              <p>
                The Intensive Care Unit ICU of Capitol Hill Clinic / Hospital is
                a multi-purpose area designed to provide intensive comprehensive
                care 24/7 to seriously ill patients
              </p>
              <a href="intensive-care">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>24/7 Emergency Care Services</h3>
              <p>
                The Emergency Care Services Department at Capitol Hill Clinic /
                Hospital is a 24-hour, 7-day a week, full service department
                offering immediate and effective evaluation and treatment
              </p>
              <a href="emergency-care">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>High Dependency Care</h3>
              <p>
                We carry out high dependency services, successfully completing
                hundreds of thousands of treatments for critically ill adults,
                children and
              </p>
              <a href="high-dependency-care">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Ophthalmology Services</h3>
              <p>
                We have many experienced and certified Ophthalmologist. They are
                specially trained to treat visual problems, disorders of the
                eyelids, and ocular surface diseases
              </p>
              <a href="ophthamology">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Vaccination Services</h3>
              <p>
                Vaccines have contributed to a significant reduction in many
                childhood infectious diseases, such as diphtheria, measles, and
                Haemophilus influenzae type b (Hib)
              </p>
              <a href="vaccination">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Hospital Services</h3>
              <p>
                We are one of the largest competent hospital groups in Nigeria,
                we make use of advanced technology that guarantees a life time
                living comfort.
              </p>
              <a href="hospital-services">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Health Insurance Scheme</h3>
              <p>
                At Capitol Hill clinic / Hospital we make the easy availability
                of comprehensive health insurance our top priority and our
                fundamental goal
              </p>
              <a href="health-insurance">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Private Insurance Services</h3>
              <p>
                We are a reputable company endorsed by National Health Insurance
                scheme to sell All Types of Private Insurance to well qualified
                individual(s) or company(s)
              </p>
              <a href="private-insurance">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Audiological Evaluation</h3>
              <p>
                At Capitol Hill Clinic / Hospital We offer Professional
                Diagnostic Audiological Evaluation Services.
              </p>
              <a href="audiological-evaluation">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Hearing Conservation, Fabrication & Fitting</h3>
              <p>
                We have over 25 years experience in hearing conservation
                programs, can partner with your company to comply with the
                Occupational Safety
              </p>
              <a href="hearing-conservation">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Medical Certification</h3>
              <p>
                We are endorsed by various relevant bodies to train and issue
                relevant medical certificate to qualified personnel
              </p>
              <a href="medical-certification">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>General Practice Medicine</h3>
              <p>
                We have a reasonable number of senior medical officers, who are
                highly trained and have a great deal of experience.
              </p>
              <a href="general-medicine">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Specialist Consultation</h3>
              <p>
                Physicians who practice Specialty Care focus on specific health
                needs of patients. At Capitol Hill Clinic/Hospital, we provide
                services for In-patient referrals, and Out-patient clinic
                consultations
              </p>
              <a href="specialist-consultation">Read More</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>OCCUPATIONAL HEALTH (OH)</h3>
              <p>
                Occupational Health is part of preventive medicine. It functions
                to Protect, Promote, Improve and Maintain the health of the
                workforce to optimal level, thereby achieving cost effective
                business goals.
              </p>
              <a href="occupational-health">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Orthopaedic Services</h3>
              <p>
                We have many experienced and certified orthopaedics. They are
                specially trained to treat bone related problems, like disorders
                of spines and joints
              </p>
              <a href="orthopaedic">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="content">
              <h3>Neurosurgery</h3>
              <p>
                We have experienced and certified Neurosurgeons. They are
                specially trained to treat problems with the nervous system,
                especially disorders of the brain.
              </p>
              <a href="specialist-consultation">Read More</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <!-- <div class="single-service-home">
            <div class="content">
              <h3>OCCUPATIONAL HEALTH (OH)</h3>
              <p>
                Occupational Health is part of preventive medicine. It functions
                to Protect, Promote, Improve and Maintain the health of the
                workforce to optimal level, thereby achieving cost effective
                business goals.
              </p>
              <a href="occupational-health">Read More</a>
            </div>
          </div> -->
        </div>
      </div>

    </div>
  </section>

  <section class="offer-wrapper">
    <div class="has-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="single-offer left">
              <h3>Expert Care</h3>
              <p>
                To help people live happier lives by providing high quality
                medical care that is personalized, compassionate and focused on
                the preservation of independence and dignity.
              </p>

            </div>
          </div>
          <div class="col-md-6">
            <div class="single-offer right">
              <h3>Confidentiality</h3>
              <p>
                In providing our clinical services we prioritise the dignity and
                autonomy for our patients. We deliver care in a respectful
                manner and sensitive to cultural diversity, ethnic origin,
                religion, nationality, age, disability and other social issues
                that must be regarded.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="sec-padding faq-home">
    <div class="container">
      <hr />
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="sec-title style-two">
            <h2>Why Choose us?</h2>
          </div>
          <div class="accrodion-grp" data-grp-name="faq-accrodion">
            <div class="accrodion active">
              <div class="accrodion-title">
                <h4>
                  <span class="decor">
                    <span class="inner" />
                  </span>
                  <span class="text">
                    We are always careful in handling our patients
                  </span>
                </h4>
              </div>
              <div class="accrodion-content">
                <p>
                  All Laboratory tests are carried out by qualified and
                  experienced medical laboratory personnel drawn from various
                  fields of the operation in clinical pathology to ensure
                  accurate and precise diagnosis.
                </p>
              </div>
            </div>
            <div class="accrodion ">
              <div class="accrodion-title">
                <h4>
                  <span class="decor">
                    <span class="inner" />
                  </span>
                  <span class="text">
                    Book an appointment with our specialists
                  </span>
                </h4>
              </div>
              <div class="accrodion-content">
                <p>
                  You can book an appointment with any of our specialist doctors
                  who are specialized in different medical fields, who will help
                  and guide you towards the most efficient treatments
                </p>
              </div>
            </div>
            <div class="accrodion ">
              <div class="accrodion-title">
                <h4>
                  <span class="decor">
                    <span class="inner" />
                  </span>
                  <span class="text">
                    We offer lots of services for the best price
                  </span>
                </h4>
              </div>
              <div class="accrodion-content">
                <p>
                  We At Capitol Hill Clinic/ Hospital, we believe in providing
                  the most competitive and quality services at the most cost
                  effective prices ever. We are armed with world class equipment
                  and our team has sheer competence and dedication to diagnose
                  factual problems of our patients.
                </p>
                <p>
                  Our focus is to offer unbeatable and incomparable services as
                  our team of professionals has a sizeable years of experience
                  in offering diagnostic services to a wide gamut of customers.
                </p>
              </div>
            </div>
            <div class="accrodion ">
              <div class="accrodion-title">
                <h4>
                  <span class="decor">
                    <span class="inner" />
                  </span>
                  <span class="text">Excellent Front Desk</span>
                </h4>
              </div>
              <div class="accrodion-content">
                <p>
                  Our front desk is well equipped with the new model computers
                  and necessary facilities that aid easy and prompt retrieval of
                  patients medical Records
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 hidden-md">
          <div class="img-masonary">
            <div class="img-w1">
              <img src="img/faq/4.jpg" height="450" width="280" alt="" />
            </div>
            <div class="img-w1 img-h1">
              <img src="img/faq/5.jpg" height="450" width="280" alt="" />
            </div>
            <div class="img-w1 img-h1">
              <img src="img/faq/6.jpg" height="450" width="280" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</Layout>
