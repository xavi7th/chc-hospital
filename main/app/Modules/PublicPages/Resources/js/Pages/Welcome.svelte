<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import Layout from "@p-shared/PublicPagesLayout";
</script>

<Layout title="Welcome">

  <section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider" data-version="5.0">
      <ul>
        <li data-transition="parallaxvertical">
          <img
            src="img/slides/slide2.jpg"
            alt=""
            width="1920"
            height="705"
            data-bgposition="top center"
            data-bgfit="cover"
            data-bgrepeat="no-repeat"
            data-bgparallax="1" />
          <div
            class="tp-caption sfl tp-resizeme thm-banner-h1"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="225"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="500">
            Your Health
          </div>
          <div
            class="tp-caption sfr tp-resizeme thm-banner-h1 heavy"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="280"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="1000">
            Our First Priority
          </div>
          <div
            class="tp-caption sfb tp-resizeme thm-banner-h3"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="353"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="1500">
            We will treat you Promptly and we will treat you well
          </div>
          <div
            style="font-size: 20px"
            class="tp-caption sfb tp-resizeme thm-banner-p"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="404"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="2000">
            We have a full house of board-certified and Experienced doctors,
            nurses
            <br />
            and medical consultants with more than a decade of working
            experience
            <br />
            in their various areas of expertise
          </div>
          <div
            class="tp-caption sfl tp-resizeme"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="488"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="2300">
            <a href="contact" class="thm-btn">Call us Today</a>
          </div>
          <div
            class="tp-caption sfr tp-resizeme"
            data-x="left"
            data-hoffset="185"
            data-y="top"
            data-voffset="488"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="2600">
            <a href="about" class="thm-btn inverse">Learn More</a>
          </div>
        </li>
        <li data-transition="parallaxvertical">
          <img
            src="img/slides/slide3.png"
            alt=""
            width="1920"
            height="705"
            data-bgposition="top center"
            data-bgfit="cover"
            data-bgrepeat="no-repeat"
            data-bgparallax="2" />
          <div
            class="tp-caption sfl tp-resizeme thm-banner-h1 blue-bg"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="209"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="500">
            Your Health
          </div>
          <div
            class="tp-caption sfr tp-resizeme thm-banner-h1 heavy black-bg"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="263"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="1000">
            Our First Priority
          </div>
          <div
            class="tp-caption sfb tp-resizeme thm-banner-h3"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="341"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="1500">
            To help patients make informed decisions regarding their care
          </div>
          <div
            style="font-size: 20px"
            class="tp-caption sfb tp-resizeme thm-banner-p"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="393"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="2000">
            Not sure what is going on, come in Today for a Symptom
            <br />
            Check up, There are many kinds of process!!
          </div>
          <div
            class="tp-caption sfl tp-resizeme"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="465"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="2300">
            <a href="appointment" class="thm-btn">Book Appointment</a>
          </div>
        </li>

        <li data-transition="parallaxvertical">
          <img
            src="img/slides/slide4.jpg"
            alt=""
            width="1920"
            height="705"
            data-bgposition="top center"
            data-bgfit="cover"
            data-bgrepeat="no-repeat"
            data-bgparallax="2" />
          <div
            class="tp-caption sfl tp-resizeme thm-banner-h1 blue-bg"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="209"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="500">
            Your Health
          </div>
          <div
            class="tp-caption sfr tp-resizeme thm-banner-h1 heavy black-bg"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="263"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="1000">
            Our First Priority
          </div>
          <div
            class="tp-caption sfb tp-resizeme thm-banner-h3"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="341"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="1500">
            Innovation in patient care
          </div>
          <div
            style="font-size: 20px"
            class="tp-caption sfb tp-resizeme thm-banner-p"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="393"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="2000">
            We leverage on modern technology in healthcare delivery
          </div>
          <div
            class="tp-caption sfl tp-resizeme"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="465"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="2300">
            <a href="about" class="thm-btn">Learn More</a>
          </div>
        </li>

        <li data-transition="parallaxvertical">
          <img
            src="img/slides/slide6.jpg"
            alt=""
            width="1920"
            height="705"
            data-bgposition="top center"
            data-bgfit="cover"
            data-bgrepeat="no-repeat"
            data-bgparallax="2" />
          <div
            class="tp-caption sfl tp-resizeme thm-banner-h1 blue-bg"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="209"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="500">
            Your Health
          </div>
          <div
            class="tp-caption sfr tp-resizeme thm-banner-h1 heavy black-bg"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="263"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="1000">
            Our First Priority
          </div>
          <div
            class="tp-caption sfb tp-resizeme thm-banner-h3"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="341"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="1500">
            Excellent Child Care
          </div>
          <div
            style="font-size: 20px"
            class="tp-caption sfb tp-resizeme thm-banner-p"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="393"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="2000">
            we offer an extensive range of premium care features
            <br />
            which makes us one of the best hospitals in the area
            <br />
            for Children & Young People services
          </div>
          <div
            class="tp-caption sfl tp-resizeme"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="465"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="2300">
            <a href="paediatrics" class="thm-btn">Learn More</a>
          </div>
        </li>

        <li data-transition="parallaxvertical">
          <img
            src="img/slides/slide5.jpg"
            alt=""
            width="1920"
            height="705"
            data-bgposition="top center"
            data-bgfit="cover"
            data-bgrepeat="no-repeat"
            data-bgparallax="1" />
          <div
            class="tp-caption sfl tp-resizeme thm-banner-h1"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="225"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="500">
            Your Health
          </div>
          <div
            class="tp-caption sfr tp-resizeme thm-banner-h1 heavy"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="280"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="1000">
            Our First Priority
          </div>
          <div
            class="tp-caption sfb tp-resizeme thm-banner-h3"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="353"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="1500">
            Throughout Capitol Hill Hospital, you'll experience
            <br />
            a level of service that sets us apart
          </div>
          <div
            class="tp-caption sfb tp-resizeme thm-banner-p"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="435"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="2000">
            We have a full house of board-certified and Experienced doctors,
            nurses and
            <br />
            medical consultants with more than a decade of working experience in
            their various areas of expertise
          </div>
          <div
            class="tp-caption sfl tp-resizeme"
            data-x="left"
            data-hoffset="0"
            data-y="top"
            data-voffset="494"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="2300">
            <a href="contact" class="thm-btn">Call us Today</a>
          </div>
          <div
            class="tp-caption sfr tp-resizeme"
            data-x="left"
            data-hoffset="185"
            data-y="top"
            data-voffset="494"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="o:0"
            data-transform_out="o:0"
            data-start="2600">
            <a href="about" class="thm-btn inverse">Learn More</a>
          </div>
        </li>

      </ul>
    </div>
  </section>

  <section class="call-to-action home-one">
    <div class="container-fluid">
      <div class="clearfix">
        <div
          class="call-to-action-corner col-md-4"
          style="background-image: url(img/call-to-action/open.jpg);">
          <div class="single-call-to-action open-hours">
            <div class="icon-box">
              <div class="inner-box">
                <i class="flaticon-clock" />
              </div>
            </div>
            <div class="content-box">
              <h3>OPEN HOURS</h3>
              <ul>
                <li>
                  <span>Monday - Friday</span>
                  <span>24 hours</span>
                </li>
                <li>
                  <span>Sunday</span>
                  <span>24 hours</span>
                </li>
                <li>
                  <span>Saturday</span>
                  <span>24 hours</span>
                </li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
              </ul>
            </div>
          </div>
        </div>
        <div
          class="call-to-action-center col-md-4"
          style="background-image: url(img/call-to-action/appoint.jpg);">
          <div class="single-call-to-action">
            <div class="icon-box">
              <div class="inner-box">
                <i class="flaticon-medical" />
              </div>
            </div>
            <div class="content-box">
              <h3>Appointment</h3>
              <p>
                Appointment are available, call us
                <br />
                today or book a appoinment
              </p>
              <a href="appointment" class="thm-btn inverse">Book Now</a>
            </div>
          </div>
        </div>
        <div
          class="call-to-action-corner col-md-4"
          style="background-image: url(img/call-to-action/specialist.png);">
          <div class="single-call-to-action">
            <div class="icon-box">
              <div class="inner-box">
                <i class="flaticon-coins" />
              </div>
            </div>
            <div class="content-box">
              <h3>Specialist Consultation</h3>
              <p>
                Consult a Specialist today, who will help and guide you towards
                the most efficient treatments
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="sec-padding">
    <div class="container">
      <div class="sec-title text-center">
        <h2>We Specialize In</h2>
        <p>We have Specialists in the following areas</p>
        <span class="decor">
          <span class="inner" />
        </span>
      </div>

      <div class="row">
        <div class="col-md-4 col-sm-6 ">
          <div class="single-specialize text-center">
            <div class="icon-box">
              <i class="flaticon-medical-1" />
            </div>
            <h3>Primary Health Care</h3>
            <p>
              We have a reasonable number of senior medical officers, who are
              highly trained and have a great deal of experience.
            </p>
            <a href="general-medicine" class="thm-btn">Read More</a>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 ">
          <div class="single-specialize text-center">
            <div class="icon-box">
              <i class="flaticon-medical-3" />
            </div>
            <h3>Dental Care</h3>
            <p>
              At Capitol Hill Clinic / Hospital, we are proud to offer
              comprehensive / quality dental care and customizable dental plans.
            </p>
            <a href="dental-services" class="thm-btn">Read More</a>
          </div>
        </div>
        <div
          class="col-md-4 col-sm-6 col-lg-offset-0 col-md-offset-0
          col-sm-offset-3 col-xs-offset-0">
          <div class="single-specialize text-center">
            <div class="icon-box">
              <i class="flaticon-medical-5" />
            </div>
            <h3>Neurology</h3>
            <p>
              We are able to provide quality neurology transcription service
              that can meet your requirements in a cost-effective manner.
            </p>
            <a href="neurology" class="thm-btn">Read More</a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="full-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-6 hidden-md hidden-sm hidden-xs">
          <img
            class="full-image pull-right"
            src="img/resources/full.jpg"
            alt="" />
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="full-sec-content">
            <div class="sec-title style-two">
              <h2>About Us</h2>
            </div>
            <h3>
              CAPITOL HILL CLINIC/HOSPITAL is a
              <br />
              multi-functional hospital
            </h3>
            <br />
            <p>
              Situated at Ranyo’s Place, Warri, Nigeria. Our Medical Center is
              an all purpose general specialist practice enclave with non
              partnership
            </p>
            <br />
            <p>
              group practice encompassing surgery, obstetrics etc. CAPITOL HILL
              CLINIC/HOSPITAL has a standard laboratory that is fully equipped
              with the most recent -state-of-the-art medical facilities
            </p>
            <br />
            <a href="about" class="thm-btn">Read More</a>
          </div>
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

        <div class="col-md-6 hidden-md">
          <div class="img-masonary">
            <div class="img-w1">
              <img src="img/faq/7.jpg" height="450" width="280" alt="" />
            </div>
            <div class="img-w1 img-h1">
              <img src="img/faq/8.jpg" height="450" width="280" alt="" />
            </div>
            <div class="img-w1 img-h1">
              <img src="img/faq/9.jpg" height="450" width="280" alt="" />
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="sec-title style-two">
            <h2>Mission & Vision Statement</h2>
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
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="home-serivce sec-padding">
    <div class="container">
      <div class="sec-title text-center">
        <h2>Our Services</h2>
        <p>Here are some of our services.</p>
        <span class="decor">
          <span class="inner" />
        </span>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="single-service-home">
            <div class="icon-box">
              <div class="inner-box">
                <i class="flaticon-medical-6" />
              </div>
            </div>
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
            <div class="icon-box">
              <div class="inner-box">
                <i class="flaticon-people-2" />
              </div>
            </div>
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
            <div class="icon-box">
              <div class="inner-box">
                <i class="flaticon-people-1" />
              </div>
            </div>
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
        <center>
          <a href="services" class="thm-btn">See More</a>
        </center>
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
                  <span class="text">We are equipped to meet your needs</span>
                </h4>
              </div>
              <div class="accrodion-content">
                <p>
                  The staff at Capitol Hill Clinic/ Hospital aim to provide you
                  with a caring, quality service in pleasant surroundings. We
                  are able to meet your needs with our wide range of latest
                  technology services and highly experienced and competent staff
                  and doctors. We are part of a large organisation with an ethos
                  of safety and quality patient care. All Laboratory tests are
                  carried out by qualified and experienced medical laboratory
                  personnel drawn from various fields of the operation in
                  clinical pathology to ensure accurate and precise diagnosis
                </p>
              </div>
            </div>
            <div class="accrodion ">
              <div class="accrodion-title">
                <h4>
                  <span class="decor">
                    <span class="inner" />
                  </span>
                  <span class="text">We care for everyone</span>
                </h4>
              </div>
              <div class="accrodion-content">
                <p>
                  Capitol Hill Clinic/ Hospital is dedicated to medical,
                  surgical and rehabilitative care of children and adult. The
                  staff uses the latest technology and most recent research to
                  achieve the best possible outcomes.
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
                    We welcome feedback to improve our service.
                  </span>
                </h4>
              </div>
              <div class="accrodion-content">
                <p>We welcome feedback to improve our service.</p>
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

  <section class="blog-home sec-padding">
    <div class="container">
      <div class="sec-title text-center">
        <h2>Gallery</h2>
        <p>Some images from our hospital</p>
        <span class="decor">
          <span class="inner" />
        </span>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6" style="padding: 0px">
          <div class="single-blog-post">
            <div class="img-box">
              <img src="img/gallery/1.jpg" alt="" />
              <div class="overlay">
                <div class="box">
                  <div class="content">
                    <ul>
                      <li>
                        <a href="img/gallery/1.jpg" data-lightbox="example-set">
                          <img class="example-image" alt/>
                          <i class="fa fa-link" />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-3 col-sm-6" style="padding: 0px">
          <div class="single-blog-post">
            <div class="img-box">
              <img src="img/gallery/2.jpg" alt="" />
              <div class="overlay">
                <div class="box">
                  <div class="content">
                    <ul>
                      <li>
                        <a href="img/gallery/2.jpg" data-lightbox="example-set">
                          <img class="example-image" alt />
                          <i class="fa fa-link" />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-md-3 col-sm-6" style="padding: 0px">
          <div class="single-blog-post">
            <div class="img-box">
              <img src="img/gallery/3.jpg" alt="" />
              <div class="overlay">
                <div class="box">
                  <div class="content">
                    <ul>
                      <li>
                        <a href="img/gallery/3.jpg" data-lightbox="example-set">
                          <img class="example-image" alt />
                          <i class="fa fa-link" />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-3 col-sm-6" style="padding: 0px">
          <div class="single-blog-post">
            <div class="img-box">
              <img src="img/gallery/4.jpg" alt="" />
              <div class="overlay">
                <div class="box">
                  <div class="content">
                    <ul>
                      <li>
                        <a href="img/gallery/4.jpg" data-lightbox="example-set">
                          <img class="example-image" alt />
                          <i class="fa fa-link" />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-md-3 col-sm-6" style="padding: 0px">
          <div class="single-blog-post">
            <div class="img-box">
              <img src="img/gallery/5.jpg" alt="" />
              <div class="overlay">
                <div class="box">
                  <div class="content">
                    <ul>
                      <li>
                        <a href="img/gallery/5.jpg" data-lightbox="example-set">
                          <img class="example-image" alt />
                          <i class="fa fa-link" />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-3 col-sm-6" style="padding: 0px">
          <div class="single-blog-post">
            <div class="img-box">
              <img src="img/gallery/6.jpg" alt="" />
              <div class="overlay">
                <div class="box">
                  <div class="content">
                    <ul>
                      <li>
                        <a href="img/gallery/6.jpg" data-lightbox="example-set">
                          <img class="example-image" alt />
                          <i class="fa fa-link" />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-md-3 col-sm-6" style="padding: 0px">
          <div class="single-blog-post">
            <div class="img-box">
              <img src="img/gallery/7.jpg" alt="" />
              <div class="overlay">
                <div class="box">
                  <div class="content">
                    <ul>
                      <li>
                        <a href="img/gallery/7.jpg" data-lightbox="example-set">
                          <img class="example-image" alt />
                          <i class="fa fa-link" />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-3 col-sm-6" style="padding: 0px">
          <div class="single-blog-post">
            <div class="img-box">
              <img src="img/gallery/8.jpg" alt="" />
              <div class="overlay">
                <div class="box">
                  <div class="content">
                    <ul>
                      <li>
                        <a href="img/gallery/8.jpg" data-lightbox="example-set">
                          <img class="example-image" alt />
                          <i class="fa fa-link" />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-md-3 col-sm-6" style="padding: 0px">
          <div class="single-blog-post">
            <div class="img-box">
              <img src="img/gallery/9.jpg" alt="" />
              <div class="overlay">
                <div class="box">
                  <div class="content">
                    <ul>
                      <li>
                        <a href="img/gallery/9.jpg" data-lightbox="example-set">
                          <img class="example-image" alt />
                          <i class="fa fa-link" />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-md-3 col-sm-6" style="padding: 0px">
          <div class="single-blog-post">
            <div class="img-box">
              <img src="img/gallery/10.jpg" alt="" />
              <div class="overlay">
                <div class="box">
                  <div class="content">
                    <ul>
                      <li>
                        <a
                          href="img/gallery/10.jpg"
                          data-lightbox="example-set">
                          <img class="example-image" alt />
                          <i class="fa fa-link" />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-3 col-sm-6" style="padding: 0px">
          <div class="single-blog-post">
            <div class="img-box">
              <img src="img/gallery/11.jpg" alt="" />
              <div class="overlay">
                <div class="box">
                  <div class="content">
                    <ul>
                      <li>
                        <a
                          href="img/gallery/11.jpg"
                          data-lightbox="example-set">
                          <img class="example-image" alt />
                          <i class="fa fa-link" />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div
          class="col-md-3 col-sm-6 col-lg-offset-0 col-md-offset-0
          col-sm-offset-3 col-xs-offset-0"
          style="padding: 0px">
          <div class="single-blog-post">
            <div class="img-box">
              <img src="img/gallery/12.jpg" alt="" />
              <div class="overlay">
                <div class="box">
                  <div class="content">
                    <ul>
                      <li>
                        <a
                          href="img/gallery/12.jpg"
                          data-lightbox="example-set">
                          <img class="example-image" alt />
                          <i class="fa fa-link" />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
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
          <a href="career" class="thm-btn inverse">Be a part of us</a>
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

  <!-- <section class="sec-padding testimonials-wrapper">
		<div class="container">
			<div class="sec-title colored text-center">
				<h2>Testimonials</h2>
				<span class="decor">
					<span class="inner"></span>
				</span>
			</div>
			<div class="testimonaials-carousel owl-carousel owl-theme">
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
			</div>
		</div>
	</section> -->

  <section class="blog-home sec-padding">
    <div class="container">
      <div class="sec-title text-center">
        <h2>Latest News</h2>
        <p>Stay updated on the latest news</p>
        <span class="decor">
          <span class="inner" />
        </span>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="single-blog-post">
            <div class="img-box">
              <img src="img/blog/1.jpg" alt="" />

            </div>
            <div class="content-box">
              <div class="date-box">
                <div class="inner">
                  <div class="date">
                    <b>28</b>
                    jan
                  </div>

                </div>
              </div>
              <div class="content">
                <a href="news-radiology">
                  <h3>Radiology And Imaging</h3>
                </a>
                <p>
                  Radiology department provides a comprehensive array of
                  diagnostic imaging services for
                  <span>
                    <a href="news-radiology">read more</a>
                  </span>
                </p>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="single-blog-post">
            <div class="img-box">
              <img src="img/blog/2.jpg" alt="" />

            </div>
            <div class="content-box">
              <div class="date-box">
                <div class="inner">
                  <div class="date">
                    <b>11</b>
                    aug
                  </div>

                </div>
              </div>
              <div class="content">
                <a href="news-ebola">
                  <h3>EBOLA VIRUS</h3>
                </a>
                <p>
                  West Africa was counting the cost of measures to contain the
                  deadly Ebola
                  <span>
                    <a href="news-ebola">read more</a>
                  </span>
                </p>

              </div>
            </div>
          </div>
        </div>
        <div
          class="col-md-4 col-sm-6 col-lg-offset-0 col-md-offset-0
          col-sm-offset-3 col-xs-offset-0">
          <div class="single-blog-post">
            <div class="img-box">
              <img src="img/blog/3.jpg" alt="" />

            </div>
            <div class="content-box">
              <div class="date-box">
                <div class="inner">
                  <div class="date">
                    <b>8</b>
                    aug
                  </div>

                </div>
              </div>
              <div class="content">
                <a href="news-patient">
                  <h3>Patients Experience</h3>
                </a>
                <p>
                  New Experience for Patients At Capitol Hill Clinic/Hospital,
                  we are revolutionizing...
                  <span>
                    <a href="news-patient">read more</a>
                  </span>
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="sec-padding meet-doctors">
    <div class="container">
      <div class="sec-title text-left">
        <h2>Meet Our Clients</h2>
        <p>
          We have the privilege of working with some of the most well known
          companies in the world
        </p>
        <span class="decor">
          <span class="inner" />
        </span>
      </div>
      <div class="clearfix">
        <div class="team-carousel owl-carousel owl-theme">
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/1.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/2.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/3.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/4.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/5.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/6.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/7.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/8.jpg" alt="" />

              </div>

            </div>
          </div>

          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/9.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/10.jpg" alt="" />

              </div>

            </div>
          </div>

          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/11.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/12.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/13.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/14.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/15.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/16.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/17.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/18.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/19.jpg" alt="" />

              </div>

            </div>
          </div>

          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/20.jpg" alt="" />

              </div>

            </div>
          </div>

          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/21.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/22.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/23.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/24.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/25.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/26.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/27.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/28.jpg" alt="" />

              </div>

            </div>
          </div>

          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/29.jpg" alt="" />

              </div>

            </div>
          </div>

          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/30.jpg" alt="" />

              </div>

            </div>
          </div>

          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/31.jpg" alt="" />

              </div>

            </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box">
                <img src="img/team/32.jpg" alt="" />

              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</Layout>
