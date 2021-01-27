<script>
  import { InertiaLink } from "@inertiajs/inertia-svelte";

  export let app;
</script>

<style lang="scss">
  *,
  ::after,
  ::before {
    box-sizing: border-box;
  }
  h3 {
    margin-top: 0;
    margin-bottom: 0.5rem;
  }
  p {
    margin-top: 0;
    margin-bottom: 1rem;
  }
  a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
  }
  a:hover {
    color: #0056b3;
    text-decoration: underline;
  }
  h3 {
    margin-bottom: 0.5rem;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.2;
    color: inherit;
  }
  h3 {
    font-size: 1.75rem;
  }
  .container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
  }
  @media (min-width: 576px) {
    .container {
      max-width: 540px;
    }
  }
  @media (min-width: 768px) {
    .container {
      max-width: 720px;
    }
  }
  @media (min-width: 992px) {
    .container {
      max-width: 960px;
    }
  }
  @media (min-width: 1200px) {
    .container {
      max-width: 1170px;
    }
  }
  .row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
  }
  .col-md-4,
  .col-sm-12 {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
  }
  @media (min-width: 576px) {
    .col-sm-12 {
      flex: 0 0 100%;
      max-width: 100%;
    }
  }
  @media (min-width: 768px) {
    .col-md-4 {
      flex: 0 0 33.333333%;
      max-width: 33.333333%;
    }
  }
  .clearfix::after {
    display: block;
    clear: both;
    content: "";
  }
  @media print {
    *,
    ::after,
    ::before {
      text-shadow: none !important;
      box-shadow: none !important;
    }
    a:not(.btn) {
      text-decoration: underline;
    }
    h3,
    p {
      orphans: 3;
      widows: 3;
    }
    h3 {
      page-break-after: avoid;
    }
    .container {
      min-width: 992px !important;
    }
  }

  .fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  .fa-envelope-o:before {
    content: "\f003";
  }
  .fa-clock-o:before {
    content: "\f017";
  }
  .fa-phone:before {
    content: "\f095";
  }

  .ttm-bg {
    position: relative;
  }
  .ttm-bg-layer {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
  }
  .ttm-bg.ttm-bgimage-yes > .ttm-bg-layer {
    opacity: 0.9;
  }
  .bg-img7 {
    background-image: url(/img/resources/about-1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
  }
  .ttm-btn {
    display: inline-block;
    font-size: 16px;
    line-height: normal;
    padding: 11px 32px 11px 31px;
    background: transparent;
    border: 1px solid transparent;
    position: relative;
    font-weight: 600;
    overflow: hidden;
    z-index: 9;
    text-transform: capitalize;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
  }
  .ttm-btn.btn-inline {
    text-transform: capitalize;
    font-size: 15px;
    font-weight: 600;
    padding: 0;
    border: 1px solid transparent;
    background-color: transparent;
  }
  .ttm-btn.btn-inline.style2 {
    padding: 1px;
    font-weight: 600;
    font-size: 15px;
    text-decoration: underline;
  }

  a:focus {
    text-decoration: none;
  }
  a:focus,
  a:hover {
    color: #ff5e14;
    text-decoration: none;
  }
  a {
    outline: medium none;
    color: #ff5e14;
  }
  p {
    margin: 0 0 15px;
  }
  *::-moz-selection {
    background: #ff5e14;
    color: #fff;
    text-shadow: none;
  }
  ::-moz-selection {
    background: #ff5e14;
    color: #fff;
    text-shadow: none;
  }
  ::selection {
    background: #ff5e14;
    color: #fff;
    text-shadow: none;
  }
  h3 {
    font-family: "Titillium Web", Arial, Helvetica, sans-serif;
    margin-bottom: 15px;
    font-weight: 600;
    color: #020d26;
  }
  h3 {
    font-size: 30px;
    line-height: 35px;
  }
  .ttm-btn {
    transition: all 0.5s ease-in-out 0s;
  }
  a,
  .ttm-btn {
    transition: all 0.3s ease-in-out 0s;
  }
  .ttm-bgcolor-darkgrey,
  .ttm-bgcolor-darkgrey > .ttm-bg-layer {
    background-color: #1a6f04;
  }
  .ttm-bgcolor-darkgrey p,
  .ttm-bgcolor-darkgrey .widget i,
  .ttm-btn.btn-inline.style2 {
    color: #fff;
  }
  .footer {
    margin-top: 100px;
  }
  .footer .widget {
    margin: 40px 0 0;
    text-align: center;
  }
  .footer .first-footer {
    padding: 52px 0 55px;
  }
  .widget-footer .first-footer .widget p {
    margin: 0 0 12px;
  }
  .widget-footer .first-footer .widget .widget-title {
    font-size: 25px;
    line-height: 30px;
    font-weight: 500;
  }
  .widget-footer .first-footer .widget i {
    font-size: 45px;
    display: block;
    margin-bottom: 12px;
  }
  .widget-footer .first-footer .widget-area:not(:last-child):after {
    content: "";
    position: absolute;
    height: 100%;
    width: 1px;
    right: 0px;
    top: 50%;
    transform: translateX(0%) translateY(-50%);
    background-color: rgba(255, 255, 255, 0.17);
    display: inline-block;
  }
  .widget a {
    font-weight: 600;
  }

  a,
  a:hover,
  .ttm-bgcolor-darkgrey.first-footer .widget .widget-title,
  .ttm-btn.btn-inline.style2:hover {
    color: #fff;
  }
  @media only screen and (min-width: 1200px) {
    .first-footer .container .row > .widget-area .widget {
      margin: 16px 0 12px;
    }
  }
  @media only screen and (max-width: 1200px) and (min-width: 768px) {
    .footer .first-footer .widget {
      margin: 0;
    }
  }
  @media (max-width: 767px) {
    .footer .widget {
      margin: 30px 0 0;
    }
    .footer .first-footer .widget-area:first-child .widget {
      margin-top: 0;
    }
    .widget-footer .first-footer .widget-area:not(:last-child):after {
      display: none;
    }
  }
</style>

<div class="footer widget-footer clearfix mt-25">
  <div class="first-footer bg-img7 ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer" />
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 widget-area">
          <div class="widget widget-out-link clearfix">
            <i class="fa fa-phone" />
            <h3 class="widget-title">Have a question? call us now</h3>
            <p>
              Office 1: {app.phone1}
              <br />
              Office 2: {app.phone2}
            </p>
            <a class="ttm-btn btn-inline style2" href={route('app.contact_us')}>
              Contact Us
            </a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 widget-area">
          <div class="widget widget-out-link clearfix">
            <i class="fa fa-envelope-o" />
            <h3 class="widget-title">Need support? Drop us an email</h3>
            <p>
              {app.email}
              <br />
              {app.email2}
            </p>
            <InertiaLink
              class="ttm-btn btn-inline style2"
              href={route('app.contact_us')}>
              Fill Our Form
            </InertiaLink>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4 widget-area">
          <div class="widget widget-out-link clearfix">
            <i class="fa fa-clock-o" />
            <h3 class="widget-title">We are open on</h3>
            <p>
              Mon – Sun 24 hours
              <br />
              On Holidays – Open
            </p>
            <a class="ttm-btn btn-inline style2" href={route('app.services')}>
              View More
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
