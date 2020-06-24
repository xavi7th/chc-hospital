<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import Layout from "@p-shared/PublicPagesLayout";

  import route from "ziggy";
  $: ({ app } = $page);

  export let teamMembers;
</script>

<Layout title="Our Team Members">

  <section class="section section-lg text-center">
    <div class="container">
      <h3 class="wow-outer">
        <span
          class="wow slideInUp"
          style="visibility: visible; animation-name: slideInUp;">
          <!-- Our Team -->
        </span>
      </h3>
      <div
        class="row row-50 row-xxl-70 justify-content-center
        justify-content-lg-start">
        {#each teamMembers as teamMember}
          <div class="col-md-10 col-lg-6 wow-outer">
            <article
              class="profile-creative wow slideInLeft"
              style="visibility: visible; animation-name: slideInLeft;">
              <figure class="profile-creative-figure">
                <img
                  class="profile-creative-image"
                  src={teamMember.thumb_url}
                  alt=""
                  width="270"
                  height="273" />
              </figure>
              <div class="profile-creative-main">
                <h5 class="profile-creative-title">
                  <a href={teamMember.img_url}>{teamMember.name}</a>
                </h5>
                <p class="profile-creative-position">{teamMember.job_title}</p>
                <div class="profile-creative-contacts">
                  <div class="object-inline">
                    <span class="ti ti-mobile text-primary" />
                    <a href="tel:{teamMember.phone}">{teamMember.phone}</a>
                  </div>
                </div>
                <p>
                  {@html teamMember.job_description}
                </p>
              </div>
            </article>
          </div>
        {/each}

      </div>

    </div>
  </section>

</Layout>

<svelte:head>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.min.css" />
</svelte:head>
