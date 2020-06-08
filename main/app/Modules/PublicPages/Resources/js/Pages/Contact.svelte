<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import Layout from "@p-shared/PublicPagesLayout";
  import route from "ziggy";
  $: ({ app } = $page);

  let sendMessage = () => {
    // Save message in the messages DB
  };
</script>

<Layout title="Contact Us">

  <section class="contact-content sec-padding">
    <div class="container">
      <div class="sec-title text-center">
        <p>
          For more information about any of our services or how to see any of
          our board-certified doctors, nurses or our consultants, you can
          contact {app.name} on address beside or by filling out and submitting
          our enquiry form below.
        </p>
      </div>

      <div class="row" style="margin-bottom: 3rem">
        <div class="col-md-6">
          <iframe
            title={app.address1}
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1985.588266782488!2d5.761763158123207!3d5.540820498995631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1041b284ff33477d%3A0x16f3e1edfb8de3bf!2sCapitol%20Hill%20Clinic%2F%20Hospital!5e0!3m2!1sen!2sng!4v1590850254759!5m2!1sen!2sng"
            width="100%"
            height="450"
            frameborder="0"
            style="border:0; width:100%"
            allowfullscreen=""
            aria-hidden="false"
            tabindex="0" />
        </div>
        <div class="col-md-6">
          <iframe
            title={app.address2}
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.3179172063255!2d5.7569458296043114!3d5.528428991133806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1041b338058e6093%3A0x8553d978487c4262!2sCapitol%20Hill%20Clinic!5e0!3m2!1sen!2sng!4v1590850460144!5m2!1sen!2sng"
            width="100%"
            height="450"
            frameborder="0"
            style="border:0; width:100%"
            allowfullscreen=""
            aria-hidden="false"
            tabindex="0" />
        </div>
      </div>
      <div class="row" id="contact-form">
        <div class="col-md-8">
          <h2>Contact Form</h2>

          <form
            on:submit|preventDefault={sendMessage}
            class="contact-form row"
            id="contact-page-contact-form">
            <div class="col-md-6">
              <input type="text" required name="name" placeholder="Full Name" />
              <input
                type="email"
                required
                name="email"
                placeholder="Email Address" />
              <input
                type="text"
                required
                name="phone"
                placeholder="Phone Number" />

            </div>
            <div class="col-md-6">
              <textarea
                name="message"
                required
                placeholder="Message"
                cols="30"
                rows="10" />
            </div>
            <div class="col-md-12">
              <button type="submit">Send</button>
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <h2>Address</h2>
          <ul class="contact-info">
            <li>
              <div class="icon-box">
                <div class="inner">
                  <i class="fa fa-map-marker" />
                </div>
              </div>
              <div class="content-box">
                <h4>Address</h4>
                <p>
                  {app.address2}
                  <br />
                  {app.address1}
                </p>
              </div>
            </li>
            <li>
              <div class="icon-box">
                <div class="inner">
                  <i class="fa fa-phone" />
                </div>
              </div>
              <div class="content-box">
                <h4>Phone</h4>
                <p>
                  <a href="tel:{app.phone1}">{app.phone1}</a>
                  ,
                  <a href="tel:{app.phone2}">{app.phone2}</a>
                  <br />
                  <a href="tel:{app.phone3}">{app.phone3}</a>
                  ,
                  <a href="tel:{app.phone4}">{app.phone4}</a>
                  ,
                  <br />
                  <a href="tel:{app.phone5}">{app.phone5}</a>
                </p>
              </div>
            </li>
            <li>
              <div class="icon-box">
                <div class="inner">
                  <i class="fa fa-envelope-o" />
                </div>
              </div>
              <div class="content-box">
                <h4>Email</h4>
                <p>
                  <a href="mailto:{app.email}">{app.email}</a>
                  ,
                  <a href="mailto:{app.email2}">{app.email2}</a>
                  ,
                  <br />
                  <a href="mailto:{app.email3}">{app.email3}</a>
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</Layout>
