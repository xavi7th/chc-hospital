<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import Layout from "@p-shared/PublicPagesLayout";

  import route from "ziggy";
  $: ({ app } = $page);
</script>

<Layout title="Our Team Members">

  <section class="section section-lg text-center">
    <div class="container">
      <h3 class="wow-outer">
        <span
          class="wow slideInUp"
          style="visibility: visible; animation-name: slideInUp;">
          Our Team
        </span>
      </h3>
      <div
        class="row row-50 row-xxl-70 justify-content-center
        justify-content-lg-start">

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            style="visibility: visible; animation-name: slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-1.png"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Dr. Lucky</a>
              </h5>
              <p class="profile-creative-position">CEO, Founder</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Dr. Lucky founded our hospital in 1995 with a vision to help
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Aspernatur recusandae et sit maiores sunt veritatis atque
                voluptate placeat quod obcaecati animi ipsum corrupti amet at,
                eos laudantium esse illo in.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name:
            slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-2.png"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Jean Thompson</a>
              </h5>
              <p class="profile-creative-position">HR Manager</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Jean not only works with our special clients, Lorem ipsum dolor
                sit amet consectetur adipisicing elit. Deleniti quasi excepturi,
                quae corporis nemo esse rem distinctio optio consequatur nam
                magni, molestias dolorum laborum ratione voluptatibus facilis?
                Cum, odit possimus.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            style="visibility: visible; animation-name: slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-3.jpg"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Brian Payne</a>
              </h5>
              <p class="profile-creative-position">Financial Controller</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Brian is responsible for providing financial guidance Lorem
                ipsum dolor sit amet consectetur, adipisicing elit. Sint nam
                deserunt provident esse illo voluptates, nisi saepe, repellat
                sit ex consequatur sequi dolore ipsa sed quasi, consectetur
                officiis? Dolorum, corporis!
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name:
            slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-4.jpg"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Marie Fernandez</a>
              </h5>
              <p class="profile-creative-position">
                Director of Clinical Services
              </p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Marie is an acknowledged professional Lorem ipsum, dolor sit
                amet consectetur adipisicing elit. Ea modi obcaecati fugit
                repellat repudiandae eum inventore alias, animi facere sapiente
                minus sunt, facilis exercitationem et autem quis similique.
                Aliquid, quasi.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            style="visibility: visible; animation-name: slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-1.png"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Dr. Lucky</a>
              </h5>
              <p class="profile-creative-position">CEO, Founder</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Dr. Lucky founded our hospital in 1995 with a vision to help
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Aspernatur recusandae et sit maiores sunt veritatis atque
                voluptate placeat quod obcaecati animi ipsum corrupti amet at,
                eos laudantium esse illo in.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name:
            slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-2.png"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Jean Thompson</a>
              </h5>
              <p class="profile-creative-position">HR Manager</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Jean not only works with our special clients, Lorem ipsum dolor
                sit amet consectetur adipisicing elit. Deleniti quasi excepturi,
                quae corporis nemo esse rem distinctio optio consequatur nam
                magni, molestias dolorum laborum ratione voluptatibus facilis?
                Cum, odit possimus.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            style="visibility: visible; animation-name: slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-3.jpg"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Brian Payne</a>
              </h5>
              <p class="profile-creative-position">Financial Controller</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Brian is responsible for providing financial guidance Lorem
                ipsum dolor sit amet consectetur, adipisicing elit. Sint nam
                deserunt provident esse illo voluptates, nisi saepe, repellat
                sit ex consequatur sequi dolore ipsa sed quasi, consectetur
                officiis? Dolorum, corporis!
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name:
            slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-4.jpg"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Marie Fernandez</a>
              </h5>
              <p class="profile-creative-position">
                Director of Clinical Services
              </p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Marie is an acknowledged professional Lorem ipsum, dolor sit
                amet consectetur adipisicing elit. Ea modi obcaecati fugit
                repellat repudiandae eum inventore alias, animi facere sapiente
                minus sunt, facilis exercitationem et autem quis similique.
                Aliquid, quasi.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            style="visibility: visible; animation-name: slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-1.png"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Dr. Lucky</a>
              </h5>
              <p class="profile-creative-position">CEO, Founder</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Dr. Lucky founded our hospital in 1995 with a vision to help
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Aspernatur recusandae et sit maiores sunt veritatis atque
                voluptate placeat quod obcaecati animi ipsum corrupti amet at,
                eos laudantium esse illo in.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name:
            slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-2.png"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Jean Thompson</a>
              </h5>
              <p class="profile-creative-position">HR Manager</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Jean not only works with our special clients, Lorem ipsum dolor
                sit amet consectetur adipisicing elit. Deleniti quasi excepturi,
                quae corporis nemo esse rem distinctio optio consequatur nam
                magni, molestias dolorum laborum ratione voluptatibus facilis?
                Cum, odit possimus.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            style="visibility: visible; animation-name: slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-3.jpg"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Brian Payne</a>
              </h5>
              <p class="profile-creative-position">Financial Controller</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Brian is responsible for providing financial guidance Lorem
                ipsum dolor sit amet consectetur, adipisicing elit. Sint nam
                deserunt provident esse illo voluptates, nisi saepe, repellat
                sit ex consequatur sequi dolore ipsa sed quasi, consectetur
                officiis? Dolorum, corporis!
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name:
            slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-4.jpg"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Marie Fernandez</a>
              </h5>
              <p class="profile-creative-position">
                Director of Clinical Services
              </p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Marie is an acknowledged professional Lorem ipsum, dolor sit
                amet consectetur adipisicing elit. Ea modi obcaecati fugit
                repellat repudiandae eum inventore alias, animi facere sapiente
                minus sunt, facilis exercitationem et autem quis similique.
                Aliquid, quasi.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            style="visibility: visible; animation-name: slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-1.png"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Dr. Lucky</a>
              </h5>
              <p class="profile-creative-position">CEO, Founder</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Dr. Lucky founded our hospital in 1995 with a vision to help
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Aspernatur recusandae et sit maiores sunt veritatis atque
                voluptate placeat quod obcaecati animi ipsum corrupti amet at,
                eos laudantium esse illo in.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name:
            slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-2.png"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Jean Thompson</a>
              </h5>
              <p class="profile-creative-position">HR Manager</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Jean not only works with our special clients, Lorem ipsum dolor
                sit amet consectetur adipisicing elit. Deleniti quasi excepturi,
                quae corporis nemo esse rem distinctio optio consequatur nam
                magni, molestias dolorum laborum ratione voluptatibus facilis?
                Cum, odit possimus.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            style="visibility: visible; animation-name: slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-3.jpg"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Brian Payne</a>
              </h5>
              <p class="profile-creative-position">Financial Controller</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Brian is responsible for providing financial guidance Lorem
                ipsum dolor sit amet consectetur, adipisicing elit. Sint nam
                deserunt provident esse illo voluptates, nisi saepe, repellat
                sit ex consequatur sequi dolore ipsa sed quasi, consectetur
                officiis? Dolorum, corporis!
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name:
            slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-4.jpg"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Marie Fernandez</a>
              </h5>
              <p class="profile-creative-position">
                Director of Clinical Services
              </p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Marie is an acknowledged professional Lorem ipsum, dolor sit
                amet consectetur adipisicing elit. Ea modi obcaecati fugit
                repellat repudiandae eum inventore alias, animi facere sapiente
                minus sunt, facilis exercitationem et autem quis similique.
                Aliquid, quasi.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            style="visibility: visible; animation-name: slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-1.png"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Dr. Lucky</a>
              </h5>
              <p class="profile-creative-position">CEO, Founder</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Dr. Lucky founded our hospital in 1995 with a vision to help
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Aspernatur recusandae et sit maiores sunt veritatis atque
                voluptate placeat quod obcaecati animi ipsum corrupti amet at,
                eos laudantium esse illo in.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name:
            slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-2.png"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Jean Thompson</a>
              </h5>
              <p class="profile-creative-position">HR Manager</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Jean not only works with our special clients, Lorem ipsum dolor
                sit amet consectetur adipisicing elit. Deleniti quasi excepturi,
                quae corporis nemo esse rem distinctio optio consequatur nam
                magni, molestias dolorum laborum ratione voluptatibus facilis?
                Cum, odit possimus.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            style="visibility: visible; animation-name: slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-3.jpg"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Brian Payne</a>
              </h5>
              <p class="profile-creative-position">Financial Controller</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Brian is responsible for providing financial guidance Lorem
                ipsum dolor sit amet consectetur, adipisicing elit. Sint nam
                deserunt provident esse illo voluptates, nisi saepe, repellat
                sit ex consequatur sequi dolore ipsa sed quasi, consectetur
                officiis? Dolorum, corporis!
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name:
            slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-4.jpg"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Marie Fernandez</a>
              </h5>
              <p class="profile-creative-position">
                Director of Clinical Services
              </p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Marie is an acknowledged professional Lorem ipsum, dolor sit
                amet consectetur adipisicing elit. Ea modi obcaecati fugit
                repellat repudiandae eum inventore alias, animi facere sapiente
                minus sunt, facilis exercitationem et autem quis similique.
                Aliquid, quasi.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            style="visibility: visible; animation-name: slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-1.png"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Dr. Lucky</a>
              </h5>
              <p class="profile-creative-position">CEO, Founder</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Dr. Lucky founded our hospital in 1995 with a vision to help
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Aspernatur recusandae et sit maiores sunt veritatis atque
                voluptate placeat quod obcaecati animi ipsum corrupti amet at,
                eos laudantium esse illo in.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name:
            slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-2.png"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Jean Thompson</a>
              </h5>
              <p class="profile-creative-position">HR Manager</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Jean not only works with our special clients, Lorem ipsum dolor
                sit amet consectetur adipisicing elit. Deleniti quasi excepturi,
                quae corporis nemo esse rem distinctio optio consequatur nam
                magni, molestias dolorum laborum ratione voluptatibus facilis?
                Cum, odit possimus.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            style="visibility: visible; animation-name: slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-3.jpg"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Brian Payne</a>
              </h5>
              <p class="profile-creative-position">Financial Controller</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Brian is responsible for providing financial guidance Lorem
                ipsum dolor sit amet consectetur, adipisicing elit. Sint nam
                deserunt provident esse illo voluptates, nisi saepe, repellat
                sit ex consequatur sequi dolore ipsa sed quasi, consectetur
                officiis? Dolorum, corporis!
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name:
            slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-4.jpg"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Marie Fernandez</a>
              </h5>
              <p class="profile-creative-position">
                Director of Clinical Services
              </p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Marie is an acknowledged professional Lorem ipsum, dolor sit
                amet consectetur adipisicing elit. Ea modi obcaecati fugit
                repellat repudiandae eum inventore alias, animi facere sapiente
                minus sunt, facilis exercitationem et autem quis similique.
                Aliquid, quasi.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            style="visibility: visible; animation-name: slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-1.png"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Dr. Lucky</a>
              </h5>
              <p class="profile-creative-position">CEO, Founder</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Dr. Lucky founded our hospital in 1995 with a vision to help
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Aspernatur recusandae et sit maiores sunt veritatis atque
                voluptate placeat quod obcaecati animi ipsum corrupti amet at,
                eos laudantium esse illo in.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name:
            slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-2.png"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Jean Thompson</a>
              </h5>
              <p class="profile-creative-position">HR Manager</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Jean not only works with our special clients, Lorem ipsum dolor
                sit amet consectetur adipisicing elit. Deleniti quasi excepturi,
                quae corporis nemo esse rem distinctio optio consequatur nam
                magni, molestias dolorum laborum ratione voluptatibus facilis?
                Cum, odit possimus.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            style="visibility: visible; animation-name: slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-3.jpg"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Brian Payne</a>
              </h5>
              <p class="profile-creative-position">Financial Controller</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Brian is responsible for providing financial guidance Lorem
                ipsum dolor sit amet consectetur, adipisicing elit. Sint nam
                deserunt provident esse illo voluptates, nisi saepe, repellat
                sit ex consequatur sequi dolore ipsa sed quasi, consectetur
                officiis? Dolorum, corporis!
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name:
            slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-4.jpg"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Marie Fernandez</a>
              </h5>
              <p class="profile-creative-position">
                Director of Clinical Services
              </p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Marie is an acknowledged professional Lorem ipsum, dolor sit
                amet consectetur adipisicing elit. Ea modi obcaecati fugit
                repellat repudiandae eum inventore alias, animi facere sapiente
                minus sunt, facilis exercitationem et autem quis similique.
                Aliquid, quasi.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            style="visibility: visible; animation-name: slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-1.png"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Dr. Lucky</a>
              </h5>
              <p class="profile-creative-position">CEO, Founder</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Dr. Lucky founded our hospital in 1995 with a vision to help
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Aspernatur recusandae et sit maiores sunt veritatis atque
                voluptate placeat quod obcaecati animi ipsum corrupti amet at,
                eos laudantium esse illo in.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name:
            slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-2.png"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Jean Thompson</a>
              </h5>
              <p class="profile-creative-position">HR Manager</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Jean not only works with our special clients, Lorem ipsum dolor
                sit amet consectetur adipisicing elit. Deleniti quasi excepturi,
                quae corporis nemo esse rem distinctio optio consequatur nam
                magni, molestias dolorum laborum ratione voluptatibus facilis?
                Cum, odit possimus.
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            style="visibility: visible; animation-name: slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-3.jpg"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Brian Payne</a>
              </h5>
              <p class="profile-creative-position">Financial Controller</p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Brian is responsible for providing financial guidance Lorem
                ipsum dolor sit amet consectetur, adipisicing elit. Sint nam
                deserunt provident esse illo voluptates, nisi saepe, repellat
                sit ex consequatur sequi dolore ipsa sed quasi, consectetur
                officiis? Dolorum, corporis!
              </p>
            </div>
          </article>
        </div>

        <div class="col-md-10 col-lg-6 wow-outer">
          <!-- Profile Creative-->
          <article
            class="profile-creative wow slideInLeft"
            data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name:
            slideInLeft;">
            <figure class="profile-creative-figure">
              <img
                class="profile-creative-image"
                src="/img/team-members/team-4.jpg"
                alt=""
                width="270"
                height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title">
                <a href="#">Marie Fernandez</a>
              </h5>
              <p class="profile-creative-position">
                Director of Clinical Services
              </p>
              <div class="profile-creative-contacts">
                <div class="object-inline">
                  <span class="ti ti-mobile" />
                  <a href="tel:#">+234 803 132 4441</a>
                </div>
              </div>
              <p>
                Marie is an acknowledged professional Lorem ipsum, dolor sit
                amet consectetur adipisicing elit. Ea modi obcaecati fugit
                repellat repudiandae eum inventore alias, animi facere sapiente
                minus sunt, facilis exercitationem et autem quis similique.
                Aliquid, quasi.
              </p>
            </div>
          </article>
        </div>

      </div>

    </div>
  </section>

</Layout>
<svelte:head>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" />
</svelte:head>
