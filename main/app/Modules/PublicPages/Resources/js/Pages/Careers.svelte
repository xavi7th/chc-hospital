<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import Layout from "@p-shared/PublicPagesLayout";
  import route from "ziggy";
  $: ({ app } = $page);

  let uploadCV = () => {};
</script>

<Layout title="Careers">

  <section class="contact-content sec-padding">
    <div class="container">
      <div class="sec-title text-center">
        <p>
          At {app.name}, we recognize that our staff are central to our success.
          We are therefore committed to recruiting and retaining high caliber
          staff with passion and drive, who we know will exceed our clients'
          expectations. While communications experience is an asset in our
          sector, we also invite speculative applications from talented, driven
          professionals, whom we will train and mentor to ensure that they
          achieve their full potential. Regular performance reviews and bonuses
          recognize individuals for going 'above and beyond the company’s
          expectations. This, together with our competitive salaries, ensures
          that any highly motivated individual will excel in our friendly,
          fast-paced working environment. If you would like to become a part of
          our devoted and caring team while receiving a comprehensive wage and
          benefits package that meets the needs of our employees and their
          families on a personal and individual basis, please Fill the form
          below.
        </p>
      </div>

      <div class="row" id="career-form">
        <div class="col-md-8">
          <h2>Application Form</h2>

          <form
            on:submit|preventDefault={uploadCV}
            class="contact-form row"
            id="contact-page-contact-form">
            <div class="col-md-6">
              <input type="text" name="name" required placeholder="Full Name" />
              <input
                type="email"
                name="email"
                required
                placeholder="Email Address" />
              <input
                type="text"
                name="phone"
                required
                placeholder="Phone Number" />
              <input type="text" name="job" required placeholder="Job Type" />
            </div>
            <div class="col-md-6">
              <textarea
                name="message"
                required
                placeholder="Type Your Request, Comment or Suggestion"
                cols="30"
                rows="10"
                style="height: 300px; line-height: 25px;" />
            </div>
            <div class="col-md-12">
              <label for="upload" style="font-weight: 300;">Upload CV</label>
              <input
                type="file"
                name="file"
                required
                class="btn btn-success"
                accept=".doc, .docx, .pdf"
                style="border-radius: 0px;"
                id="upload" />
            </div>
            <div class="col-md-12">
              <button type="submit">Send</button>
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <h2>Job Description</h2>
          <ul class="contact-info">
            <li>Medical Professionals</li>

            <li>Surgeons</li>

            <li>Pharmacist</li>
            <li>Consultant</li>
            <li>Administrative Staff</li>
            <li>House Officers</li>
            <li>Material Management</li>

          </ul>
        </div>
      </div>
    </div>
  </section>

</Layout>
