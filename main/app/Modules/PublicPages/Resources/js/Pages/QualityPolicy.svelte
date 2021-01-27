<script>
  import { page } from "@inertiajs/inertia-svelte";
  import Layout from "@p-shared/PublicPagesLayout";
  $: ({ app } = $page.props);

  let uploadCV = () => {};
</script>

<Layout title="Our Quality Policy">

  <section class="sec-padding doctor-profile">
    <div class="container">
      <div class="row">

        <div class="col-md-12 single-team-member">
          <h3>
            <span>
              Our Quality Policy
              <span />
            </span>
          </h3>

          <p>
            {app.name} provides quality healthcare to its patients with the
            highest level of skills, technology driven, patient centered,
            professionalism and ethical practice leading to effective care and
            treatment at affordable cost. This policy supports our strategic
            directions and addresses internal and external issues related to our
            service with focus on;
          </p>

          <br />

          <ul>
            <li>Ensuring wellbeing and quality of life</li>
            <li>
              Respecting the rights and dignity of our patients, customers and
              employees
            </li>
            <li>
              Providing treatment that is personal and relevant to individual
              needs of patients
            </li>
            <li>
              Achieving the best possible results for our patients through
              delivery of clinical experience
            </li>
            <li>
              Protecting the health and safety of our patients, customers and
              employees
            </li>
            <li>
              Protecting the privacy and confidentiality of all records
              collected in course of our daily activities
            </li>
            <li>
              Consciously improving our care processes for better service
              delivery
            </li>

          </ul>

          <br />

          <p>
            {app.name} meets all defined requirements; including those defined
            by the patients, statutory, regulatory and its own internal
            requirements.
          </p>

          <br />

          <p>
            We are committed to continual improvement of our quality management
            system. Quality objectives are established at relevant functions and
            reviewed periodically.
          </p>

          <br />
          <p>
            This quality policy has been communicated, understood and applied
            within the organization. It is endorsed by {app.name} executive
            management and made available to our relevant interested parties as
            appropriate.
          </p>

          <br />
          <p>
            Best Regards
            <br />
            Dr. Luckys Okparanyote
            <br />
            Medical Director
          </p>

        </div>
      </div>
    </div>
  </section>
</Layout>
