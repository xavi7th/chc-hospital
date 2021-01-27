<script>
  import { InertiaLink } from "@inertiajs/inertia-svelte";
  export let routes;
</script>

<section class="top-bar">
  <div class="container">

    <div class="left-text pull-left">
      <p>
        <span>Opening Hours :</span>
        We are open 24/7
      </p>
    </div>
    <!-- /.left-text -->

    <div class="social-icons pull-right">

      <ul>
        <li>
          <a
            href="https://www.facebook.com.ng/pages/Capitol-Hill-Hospital/344449072366549"
            target="_blank">
            <i class="fa fa-facebook" />
          </a>
        </li>
        <li>
          <a href="https://twitter.com.ng/capitol_Hill2" target="_blank">
            <i class="fa fa-twitter" />
          </a>
        </li>
        <li>
          <a
            href="https://plus.google.com.ng/u/0/b/109035227895760462704/109035227895760462704/posts"
            target="_blank">
            <i class="fa fa-google-plus" />
          </a>
        </li>
        <li>
          <a
            href="http://www.youtube.com.ng/channel/UCidMyXK2rTe6nkLisfv5CdA?guided_help_flow=3&ytsession=ZVBQQ8S5eSbiv6SNQSpla_On5xnP0T1iijsqTgWT83ocEjYhA3xojBOYQraqLaJQu1BZURSsg9QzLZajIHNWuwQ6ticKhnfTfkxVXWz72GxETalvc8ZAIozmVYYOqMsPcaOOc7SUr8c122_90elbK8RZoMBfDCkX7b6xZsoPrFKSge35PpLt4hYxeyTMJ1SuznOLA3kuFC5aOv0v1hgyktaiZ-j-J9grYEPGZNNHHz_GsvD2ZESGVtlEZet3XPZHP-tbJhoAU9evevpr-c8kofHYXaEUavoPVuetnAB5F_0"
            target="_blank">
            <i class="fa fa-youtube" />
          </a>
        </li>
      </ul>
    </div>
    <!-- /.social-icons -->
  </div>
</section>
<!-- /.top-bar -->

<header class="header">
  <div class="container">
    <div class="logo pull-left">
      <a href="home">
        <img src="/img/resources/logo.png" alt="Logo" />
      </a>
    </div>
    <div class="header-right-info pull-right clearfix">
      <div class="single-header-info">
        <div class="icon-box">
          <div class="inner-box">
            <i class="flaticon-interface" />
          </div>
        </div>
        <div class="content">
          <h3>EMAIL</h3>
          <p>
            <a href="mailto:info@capitolhillhospitals.com.ng">
              info@capitolhillhospitals.com.ng
            </a>
          </p>
        </div>
      </div>
      <div class="single-header-info">
        <div class="icon-box">
          <div class="inner-box">
            <i class="flaticon-telephone" />
          </div>
        </div>
        <div class="content">
          <h3>Call Now</h3>
          <p>
            <b>
              <a href="tel:+2348037162448">+234 803 7162 448</a>
            </b>
          </p>
        </div>
      </div>
      <div class="single-header-info">
        <a href="appointment" class="thm-btn">Appointment</a>
      </div>
    </div>
  </div>

</header>
<!-- /.header -->

<nav class="mainmenu-area stricky">
  <div class="container">
    <div class="navigation pull-left">
      <div class="nav-header">
        <ul>
          {#each Object.entries(routes) as [route_name, route_cont]}
            {#if route_cont.length == 1}
              <li class:active={route().current(route_cont[0].name)}>
                <InertiaLink href={route(route_cont[0].name)}>
                  {route_cont[0].menu_name}
                </InertiaLink>
              </li>
            {:else if route_cont.length > 1}
              <li>
                <a href>
                  <span class="yay-icon">
                    <span
                      stroke-width="1.5"
                      data-feather={route_cont[0].icon} />
                  </span>
                  <span>{route_name}</span>
                  <span class="rui-yaybar-circle" />
                  <span class="yay-icon-collapse">
                    <span
                      data-feather="chevron-right"
                      class="rui-icon rui-icon-collapse rui-icon-stroke-1_5" />
                  </span>
                </a>
                <ul class="yay-submenu dropdown-triangle">
                  {#each route_cont as elem}
                    <li class:active={route().current(elem.name)}>
                      <InertiaLink href={route(elem.name)}>
                        {elem.menu_name}
                      </InertiaLink>
                    </li>
                  {/each}
                </ul>
              </li>
            {/if}
          {/each}
        </ul>
      </div>
      <div class="nav-footer">
        <button>
          <i class="fa fa-bars" />
        </button>
      </div>
    </div>

  </div>
</nav>
