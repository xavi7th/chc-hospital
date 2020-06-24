<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import route from "ziggy";

  export let routes;
</script>

<aside class="main-navigation">
  <nav data-simplebar>
    <div class="header">
      <div class="logo">
        <div class="logo-type">
          <InertiaLink
            href={route('superadmin.dashboard')}
            class="text-center d-block">
            <img src="/img/logo.png" alt="capitol hill logo" width="70%" />
          </InertiaLink>
        </div>
      </div>
    </div>
    <ul class="menu">
      <li class="menu-category">Menu</li>
      {#each Object.entries(routes) as [route_name, route_cont]}
        {#if route_cont.length == 1}
          <li class:active={route().current(route_cont[0].name)}>
            <InertiaLink
              href={route(route_cont[0].name)}
              class={route().current(route_cont[0].name) ? 'active' : null}>
              <i class="nav-icon fa fa-{route_cont[0].icon}" />
              {route_cont[0].menu_name}
            </InertiaLink>
          </li>
        {:else if route_cont.length > 1}
          <li>
            <a href class="yay-sub-toggle">
              <span class="yay-icon">
                <span stroke-width="1.5" data-feather={route_cont[0].icon} />
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
                <li class:yay-item-active={route().current(elem.name)}>
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
  </nav>
</aside>
<!--  -->
