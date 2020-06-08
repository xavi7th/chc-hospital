<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import Layout from "@p-shared/PublicPagesLayout";
  import LatestNews from "@p-shared/Partials/LatestNews";
  import ReachUs from "@p-pages/Team/ReachUs";
  import Alt1 from "@p-pages/Team/Alt1";
  import Alt2 from "@p-pages/Team/Alt2";
  import route from "ziggy";
  $: ({ app } = $page);
</script>

<style>
  *,
  ::after,
  ::before {
    box-sizing: border-box;
  }
  section {
    display: block;
  }
  [tabindex="-1"]:focus {
    outline: 0 !important;
  }
  h2,
  h5 {
    margin-top: 0;
    margin-bottom: 0.5rem;
  }
  p {
    margin-top: 0;
    margin-bottom: 1rem;
  }
  ul {
    margin-top: 0;
    margin-bottom: 1rem;
  }
  strong {
    font-weight: bolder;
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
  img {
    vertical-align: middle;
    border-style: none;
  }
  h2,
  h5 {
    margin-bottom: 0.5rem;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.2;
    color: inherit;
  }
  h2 {
    font-size: 2rem;
  }
  h5 {
    font-size: 1.25rem;
  }
  .img-fluid {
    max-width: 100%;
    height: auto;
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
  .col-lg-12,
  .col-lg-5,
  .col-lg-7,
  .col-md-12,
  .col-md-6,
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
    .col-md-6 {
      flex: 0 0 50%;
      max-width: 50%;
    }
    .col-md-12 {
      flex: 0 0 100%;
      max-width: 100%;
    }
  }
  @media (min-width: 992px) {
    .col-lg-5 {
      flex: 0 0 41.666667%;
      max-width: 41.666667%;
    }
    .col-lg-7 {
      flex: 0 0 58.333333%;
      max-width: 58.333333%;
    }
    .col-lg-12 {
      flex: 0 0 100%;
      max-width: 100%;
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
    img {
      page-break-inside: avoid;
    }
    h2,
    p {
      orphans: 3;
      widows: 3;
    }
    h2 {
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
  .fa-twitter:before {
    content: "\f099";
  }
  .fa-facebook:before {
    content: "\f09a";
  }
  .fa-pinterest:before {
    content: "\f0d2";
  }
  .fa-google-plus:before {
    content: "\f0d5";
  }
  .fa-linkedin:before {
    content: "\f0e1";
  }
  .fa-youtube-play:before {
    content: "\f16a";
  }
  .fa-dribbble:before {
    content: "\f17d";
  }
  .fa-vimeo:before {
    content: "\f27d";
  }

  [class*=" ti-"] {
    font-family: "themify";
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  .ti-plus:before {
    content: "\e61a";
  }
  .ti-mobile:before {
    content: "\e621";
  }
  .ti-email:before {
    content: "\e75a";
  }

  .ttm-row {
    padding: 90px 0;
  }
  .section-title {
    margin-bottom: 24px;
    position: relative;
  }
  .section-title h2.title {
    font-family: "Titillium Web", Arial, Helvetica, sans-serif;
    font-weight: 300;
    font-size: 45px;
    line-height: 50px;
    padding-bottom: 51px;
    margin-bottom: 0px;
  }
  h2.title strong {
    font-weight: 600 !important;
    width: 100%;
    display: block;
  }
  .heading-seperator {
    position: relative;
  }
  .heading-seperator span:after {
    content: "";
    left: 53%;
    position: absolute;
    bottom: 28px;
    width: 17px;
    margin-left: 0;
    border-bottom-width: 3px;
    border-bottom-color: #cacaca;
    border-bottom-style: solid;
  }
  .heading-seperator span:after {
    right: auto;
    left: 63px;
  }
  .heading-seperator:after {
    border-bottom-color: #1a6f04;
  }
  .heading-seperator:after {
    content: "";
    left: 50%;
    position: absolute;
    bottom: 28px;
    width: 59px;
    margin-left: -37px;
    border-bottom-width: 3px;
    border-bottom-style: solid;
  }
  .heading-seperator:after {
    left: 0;
    margin-left: 0;
  }
  .featured-item {
    position: relative;
  }
  .featured-item .content-post {
    padding: 25px;
    position: relative;
    text-align: left;
    background-color: #fff;
    -webkit-box-shadow: 0 0 11px 0 rgba(6, 22, 58, 0.14);
    -moz-box-shadow: 0 0 11px 0 rgba(6, 22, 58, 0.14);
    box-shadow: 0 0 11px 0 rgba(6, 22, 58, 0.14);
  }
  .featured-item .content-post .category {
    font-size: 13px;
    color: #fff;
  }
  .featured-item img {
    position: relative;
    overflow: hidden;
  }
  .featured-item .content-post .content-post-desc {
    background-color: #fff;
    margin: 10px 10px;
    padding: 13px 0 12px;
    margin-top: -60px;
  }
  .content-post h5.title-post {
    font-size: 22px;
    font-weight: 400;
    margin-bottom: 0;
    line-height: 34px;
  }
  .content-post p.category {
    color: #b3b7c3;
    font-size: 13px;
    margin-top: -6px;
  }
  .ttm-social-links-wrapper .social-icons li {
    margin: 0 3px 10px 0px;
  }
  .ttm-social-links-wrapper .social-icons li a {
    margin-top: 15px;
    border-radius: 50%;
    border: 1px solid transparent;
    width: 29px;
    height: 29px;
    line-height: 29px;
    font-size: 13px;
    margin-right: 5px;
    text-align: center;
    background-color: #e5e8e9;
  }
  .ttm-social-links-wrapper .social-icons li a {
    margin: 0 2px;
    display: block;
  }
  .ttm-social-links-wrapper {
    border-top: 1px solid #edeff1;
    margin: 0 15px;
    padding-top: 14px;
  }
  .ttm-box-view-overlay {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-color: rgba(2, 13, 38, 0.8);
    opacity: 0;
    transition: all 0.5s ease 0s;
  }
  .featured-item:hover .ttm-box-view-overlay {
    height: 100%;
    opacity: 1;
  }
  .ttm-box-view-overlay .featured-iconbox a {
    width: 40px;
    height: 40px;
    line-height: 40px;
    display: inline-block;
    border-radius: 50%;
    font-size: 18px;
    transition: unset;
  }
  .ttm-box-view-overlay .featured-iconbox a i {
    display: block;
    height: 40px;
    line-height: 40px;
    border-radius: 50%;
    text-align: center;
    transition: all 0.3s ease 0s;
  }
  .featured-team-item .ttm-box-view-overlay {
    height: 0;
    top: 0;
  }
  .featured-team-item:hover .ttm-box-view-overlay {
    height: 100%;
    opacity: 1;
  }
  .featured-team-item .featured-img-left a {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    line-height: 40px;
    color: #fff;
    text-align: center;
    font-size: 19px;
    display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    transition: all 0.3s ease;
    opacity: 0;
    margin-top: 0;
  }
  .featured-team-item:hover .featured-img-left .ttm-box-view-overlay {
    opacity: 1;
    transform: scale(1);
  }
  .featured-team-item .featured-img-left a {
    opacity: 1;
  }
  .featured-team-item {
    overflow: hidden;
    position: relative;
    -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.08);
    -moz-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.08);
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.08);
    border: 6px solid #fff;
  }
  .featured-team-item.style2 {
    border: 0;
    margin: 15px 0;
    padding: 15px;
    background-color: #fff;
  }
  .featured-img-left {
    padding-left: 0;
    padding-right: 0;
  }
  .featured-team-item
    .featured-img-right.ttm-post-content
    .content-post.content-team-post {
    padding: 15px 25px 0;
    text-align: left;
    background-color: inherit;
    box-shadow: inherit;
  }
  .featured-item
    .featured-img-right.ttm-post-content
    .content-post
    .content-post-desc {
    margin: 0;
    padding: 0;
  }
  .ttm-team-details-list {
    padding: 0;
    margin: 0;
  }
  .ttm-team-details-list li {
    position: relative;
    padding: 3px 0 3px 25px;
    font-size: 15px;
    line-height: 24px;
    display: block;
  }
  .ttm-team-list-title i {
    position: absolute;
    left: -33px;
    top: 4px;
    text-align: center;
    width: 30px;
    display: block;
    text-indent: 0;
    font-size: 16px;
  }
  .content-post.content-team-post .ttm-social-links-wrapper ul li a {
    margin: 0 2px;
    display: block;
    color: rgba(44, 44, 44, 0.6);
  }
  .ttm-social-links-wrapper {
    border: 0;
    padding: 0;
    margin: 21px 0 0;
  }
  .ttm-team-details-list .ttm-team-list-title {
    margin-right: 8px;
    position: relative;
    color: #0a0c0e;
    font-weight: 600;
    float: left;
  }
  .featured-img-left:hover .ttm-box-view-overlay {
    opacity: 1;
    transform: scale(1);
  }
  .featured-img-left .ttm-box-view-overlay {
    position: absolute;
    left: 0;
    bottom: 0;
    right: 0;
    text-align: center;
    opacity: 0;
    background-color: rgba(2, 13, 38, 0.8);
    height: 100%;
    width: 100%;
    cursor: pointer;
    transform: scale(0);
    transition: all 0.3s ease;
  }

  section {
    display: block;
  }
  a:focus {
    text-decoration: none;
  }
  a:focus,
  a:hover {
    color: #1a6f04;
    text-decoration: none;
  }
  a {
    outline: medium none;
    color: #1a6f04;
  }
  ul {
    padding: 0;
    margin: 0;
    list-style: none;
  }
  strong {
    font-weight: 700;
  }
  p {
    margin: 0 0 15px;
  }
  *::-moz-selection {
    background: #1a6f04;
    color: #fff;
    text-shadow: none;
  }
  ::-moz-selection {
    background: #1a6f04;
    color: #fff;
    text-shadow: none;
  }
  ::selection {
    background: #1a6f04;
    color: #fff;
    text-shadow: none;
  }
  ul {
    margin: 16px 0;
    padding: 0 0 0 25px;
  }
  h2,
  h5 {
    font-family: "Titillium Web", Arial, Helvetica, sans-serif;
    margin-bottom: 15px;
    font-weight: 600;
    color: #020d26;
  }
  h2 {
    font-size: 35px;
    line-height: 40px;
  }
  h5 {
    font-size: 18px;
    line-height: 20px;
    font-weight: 400;
  }
  img,
  span {
    transition: all 0.5s ease-in-out 0s;
  }
  a,
  .social-icons li > a {
    transition: all 0.3s ease-in-out 0s;
  }
  body .site-main {
    padding-top: 82px;
    background-color: #fff;
    position: relative;
    z-index: 9;
  }
  .pt-70 {
    padding-top: 70px !important;
  }
  .pb-50 {
    padding-bottom: 50px !important;
  }
  .mb-35 {
    margin-bottom: 35px !important;
  }
  h2.title strong,
  .section-title h2.title {
    color: #020d26;
  }
  .featured-iconbox a i,
  .content-post.content-team-post .ttm-social-links-wrapper ul li a:hover {
    color: #fff;
  }
  .featured-iconbox a:hover i {
    background-color: #fff;
  }
  .ttm-bgcolor-grey {
    background-color: #f3f7f9;
  }
  .social-icons {
    list-style: none;
    margin: 0;
    padding: 0;
    font-size: 15px;
    padding-top: 0;
    padding-bottom: 0;
  }
  .social-icons li {
    display: inline-block;
    padding-left: 2px;
    border: none;
  }

  a,
  a:hover,
  .ttm-textcolor-skincolor,
  .ttm-team-list-title i,
  .featured-iconbox a:hover i,
  .content-post.content-team-post p.category {
    color: #1a6f04;
  }
  .featured-iconbox a i,
  .content-post.content-team-post .ttm-social-links-wrapper ul li a:hover {
    background-color: #1a6f04;
  }
  .heading-seperator:after {
    border-bottom-color: #1a6f04;
  }

  @media all and (max-width: 1199px) {
    .ttm-row .container {
      max-width: 100%;
    }
    .ttm-row .container {
      padding: 0;
    }
    .ttm-row .container > .row {
      margin: 0;
    }
  }
  @media (max-width: 991px) {
    .ttm-row {
      padding: 50px 0 !important;
    }
    .featured-team-item
      .featured-img-right.ttm-post-content
      .content-post.content-team-post {
      padding: 21px 1px 0;
      text-align: left;
    }
  }
  @media (max-width: 767px) {
    .section-title h2.title {
      font-size: 35px;
      line-height: 40px;
    }
  }
</style>

<svelte:head>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.min.css" />
</svelte:head>

<Layout title="Our Team">

  <div class="site-main">

    <section class="ttm-row pt-70 pb-50 ttm-bgcolor-grey clearfix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title mb-35 clearfix">
              <h2 class="title">
                <strong>Style 1</strong>
              </h2>
              <p class="text-center">
                Our people at {app.name} are most valuable assets. They are the
                faces of our organization. They are the individuals who see your
                project from start to finish and work together to ensure the end
                result is everything you hoped for and much more!.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="featured-item featured-team-item style2 row">
              <div class="col-lg-5 col-md-12 featured-img-left">
                <div class="ttm-item-view-leftimage">
                  <div class="featured-thumbnail">
                    <img
                      class="img-fluid"
                      src="/img/team-members/team-1.png"
                      alt="team-1" />
                  </div>
                  <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                    <div class="featured-iconbox">
                      <a href="#">
                        <i class="ti ti-plus" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="col-lg-7 col-md-12 featured-img-right ttm-post-content">
                <div class="content-post content-team-post">
                  <div class="content-post-desc">
                    <h5 class="title-post">
                      <a href="#">Oliver Murat</a>
                    </h5>
                    <p class="category">MD/CEO</p>
                    <ul class="ttm-team-details-list">
                      <li>
                        <div
                          class="ttm-team-list-title ttm-textcolor-skincolor">
                          <i class="ti ti-mobile" />
                          Phone :
                        </div>
                        <div class="ttm-team-list-value">
                          <a href="tel:+234 002 00145" tabindex="0">
                            +234 002 00145
                          </a>
                        </div>
                      </li>
                      <li>
                        <div
                          class="ttm-team-list-title ttm-textcolor-skincolor">
                          <i class="ti ti-email" />
                          Email :
                        </div>
                        <div class="ttm-team-list-value">
                          <a href="mailto:info@example.com" tabindex="0">
                            info@example.com
                          </a>
                        </div>
                      </li>
                    </ul>
                    <div class="ttm-social-links-wrapper">
                      <ul class="social-icons">
                        <li>
                          <a href="#" tabindex="-1">
                            <i class="fa fa-twitter" />
                          </a>
                        </li>
                        <li>
                          <a href="#" tabindex="-1">
                            <i class="fa fa-youtube-play" />
                          </a>
                        </li>
                        <li>
                          <a href="#" tabindex="-1">
                            <i class="fa fa-facebook" />
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="featured-item featured-team-item style2 row">
              <div class="col-lg-5 col-md-12 featured-img-left">
                <div class="ttm-item-view-leftimage">
                  <div class="featured-thumbnail">
                    <img
                      class="img-fluid"
                      src="/img/team-members/team-6.jpg"
                      alt="team 2" />
                  </div>
                  <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                    <div class="featured-iconbox">
                      <a href="#">
                        <i class="ti ti-plus" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="col-lg-7 col-md-12 featured-img-right ttm-post-content">
                <div class="content-post content-team-post">
                  <div class="content-post-desc">
                    <h5 class="title-post">
                      <a href="#">Frank Honest</a>
                    </h5>
                    <p class="category">Chief Operations Officer</p>
                    <ul class="ttm-team-details-list">
                      <li>
                        <div
                          class="ttm-team-list-title ttm-textcolor-skincolor">
                          <i class="ti ti-mobile" />
                          Phone :
                        </div>
                        <div class="ttm-team-list-value">
                          <a href="tel:+234 002 00145" tabindex="0">
                            +234 002 00145
                          </a>
                        </div>
                      </li>
                      <li>
                        <div
                          class="ttm-team-list-title ttm-textcolor-skincolor">
                          <i class="ti ti-email" />
                          Email :
                        </div>
                        <div class="ttm-team-list-value">
                          <a href="mailto:info@example.com" tabindex="0">
                            info@example.com
                          </a>
                        </div>
                      </li>
                    </ul>
                    <div class="ttm-social-links-wrapper">
                      <ul class="social-icons">
                        <li>
                          <a href="#" tabindex="-1">
                            <i class="fa fa-facebook" />
                          </a>
                        </li>
                        <li>
                          <a href="#" tabindex="-1">
                            <i class="fa fa-twitter" />
                          </a>
                        </li>
                        <li>
                          <a href="#" tabindex="-1">
                            <i class="fa fa-linkedin" />
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="featured-item featured-team-item style2 row">
              <div class="col-lg-5 col-md-12 featured-img-left">
                <div class="ttm-item-view-leftimage">
                  <div class="featured-thumbnail">
                    <img
                      class="img-fluid"
                      src="/img/team-members/team-5.jpg"
                      alt="team 3" />
                  </div>
                  <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                    <div class="featured-iconbox">
                      <a href="#">
                        <i class="ti ti-plus" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="col-lg-7 col-md-12 featured-img-right ttm-post-content">
                <div class="content-post content-team-post">
                  <div class="content-post-desc">
                    <h5 class="title-post">
                      <a href="#">Natalie Williams</a>
                    </h5>
                    <p class="category">HR Manager</p>
                    <ul class="ttm-team-details-list">
                      <li>
                        <div
                          class="ttm-team-list-title ttm-textcolor-skincolor">
                          <i class="ti ti-mobile" />
                          Phone :
                        </div>
                        <div class="ttm-team-list-value">
                          <a href="tel:+234 002 00145" tabindex="0">
                            +234 002 00145
                          </a>
                        </div>
                      </li>
                      <li>
                        <div
                          class="ttm-team-list-title ttm-textcolor-skincolor">
                          <i class="ti ti-email" />
                          Email :
                        </div>
                        <div class="ttm-team-list-value">
                          <a href="mailto:info@example.com" tabindex="0">
                            info@example.com
                          </a>
                        </div>
                      </li>
                    </ul>
                    <div class="ttm-social-links-wrapper">
                      <ul class="social-icons">
                        <li>
                          <a href="#" tabindex="-1">
                            <i class="fa fa-facebook" />
                          </a>
                        </li>
                        <li>
                          <a href="#" tabindex="-1">
                            <i class="fa fa-twitter" />
                          </a>
                        </li>
                        <li>
                          <a href="#" tabindex="-1">
                            <i class="fa fa-linkedin" />
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="featured-item featured-team-item style2 row">
              <div class="col-lg-5 col-md-12 featured-img-left">
                <div class="ttm-item-view-leftimage">
                  <div class="featured-thumbnail">
                    <img
                      class="img-fluid"
                      src="/img/team-members/team-2.png"
                      alt="team 4" />
                  </div>
                  <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                    <div class="featured-iconbox">
                      <a href="#">
                        <i class="ti ti-plus" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="col-lg-7 col-md-12 featured-img-right ttm-post-content">
                <div class="content-post content-team-post">
                  <div class="content-post-desc">
                    <h5 class="title-post">
                      <a href="#">Kirk Mathison</a>
                    </h5>
                    <p class="category">Director, Clinical Services</p>
                    <ul class="ttm-team-details-list">
                      <li>
                        <div
                          class="ttm-team-list-title ttm-textcolor-skincolor">
                          <i class="ti ti-mobile" />
                          Phone :
                        </div>
                        <div class="ttm-team-list-value">
                          <a href="tel:+234 002 00145" tabindex="0">
                            +234 002 00145
                          </a>
                        </div>
                      </li>
                      <li>
                        <div
                          class="ttm-team-list-title ttm-textcolor-skincolor">
                          <i class="ti ti-email" />
                          Email :
                        </div>
                        <div class="ttm-team-list-value">
                          <a href="mailto:info@example.com" tabindex="0">
                            info@example.com
                          </a>
                        </div>
                      </li>
                    </ul>
                    <div class="ttm-social-links-wrapper">
                      <ul class="social-icons">
                        <li>
                          <a href="#" tabindex="-1">
                            <i class="fa fa-dribbble" />
                          </a>
                        </li>
                        <li>
                          <a href="#" tabindex="-1">
                            <i class="fa fa-pinterest" />
                          </a>
                        </li>
                        <li>
                          <a href="#" tabindex="-1">
                            <i class="fa fa-vimeo" />
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="featured-item featured-team-item style2 row">
              <div class="col-lg-5 col-md-12 featured-img-left">
                <div class="ttm-item-view-leftimage">
                  <div class="featured-thumbnail">
                    <img
                      class="img-fluid"
                      src="/img/team-members/team-3.jpg"
                      alt="team 5" />
                  </div>
                  <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                    <div class="featured-iconbox">
                      <a href="#">
                        <i class="ti ti-plus" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="col-lg-7 col-md-12 featured-img-right ttm-post-content">
                <div class="content-post content-team-post">
                  <div class="content-post-desc">
                    <h5 class="title-post">
                      <a href="#">Sally Star</a>
                    </h5>
                    <p class="category">Director, Clinical Services 2</p>
                    <ul class="ttm-team-details-list">
                      <li>
                        <div
                          class="ttm-team-list-title ttm-textcolor-skincolor">
                          <i class="ti ti-mobile" />
                          Phone :
                        </div>
                        <div class="ttm-team-list-value">
                          <a href="tel:+234 002 00145" tabindex="0">
                            +234 002 00145
                          </a>
                        </div>
                      </li>
                      <li>
                        <div
                          class="ttm-team-list-title ttm-textcolor-skincolor">
                          <i class="ti ti-email" />
                          Email :
                        </div>
                        <div class="ttm-team-list-value">
                          <a href="mailto:info@example.com" tabindex="0">
                            info@example.com
                          </a>
                        </div>
                      </li>
                    </ul>
                    <div class="ttm-social-links-wrapper">
                      <ul class="social-icons">
                        <li>
                          <a href="#" tabindex="-1">
                            <i class="fa fa-twitter" />
                          </a>
                        </li>
                        <li>
                          <a href="#" tabindex="-1">
                            <i class="fa fa-youtube-play" />
                          </a>
                        </li>
                        <li>
                          <a href="#" tabindex="-1">
                            <i class="fa fa-google-plus" />
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="featured-item featured-team-item style2 row">
              <div class="col-lg-5 col-md-12 featured-img-left">
                <div class="ttm-item-view-leftimage">
                  <div class="featured-thumbnail">
                    <img
                      class="img-fluid"
                      src="/img/team-members/team-4.jpg"
                      alt="team 6" />
                  </div>
                  <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                    <div class="featured-iconbox">
                      <a href="#">
                        <i class="ti ti-plus" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="col-lg-7 col-md-12 featured-img-right ttm-post-content">
                <div class="content-post content-team-post">
                  <div class="content-post-desc">
                    <h5 class="title-post">
                      <a href="#">Ronaldo Dev</a>
                    </h5>
                    <p class="category">Head, Business Development</p>
                    <ul class="ttm-team-details-list">
                      <li>
                        <div
                          class="ttm-team-list-title ttm-textcolor-skincolor">
                          <i class="ti ti-mobile" />
                          Phone :
                        </div>
                        <div class="ttm-team-list-value">
                          <a href="tel:+234 002 00145" tabindex="0">
                            +234 002 00145
                          </a>
                        </div>
                      </li>
                      <li>
                        <div
                          class="ttm-team-list-title ttm-textcolor-skincolor">
                          <i class="ti ti-email" />
                          Email :
                        </div>
                        <div class="ttm-team-list-value">
                          <a href="mailto:info@example.com" tabindex="0">
                            info@example.com
                          </a>
                        </div>
                      </li>
                    </ul>
                    <div class="ttm-social-links-wrapper">
                      <ul class="social-icons">
                        <li>
                          <a href="#" tabindex="-1">
                            <i class="fa fa-facebook" />
                          </a>
                        </li>
                        <li>
                          <a href="#" tabindex="-1">
                            <i class="fa fa-twitter" />
                          </a>
                        </li>
                        <li>
                          <a href="#" tabindex="-1">
                            <i class="fa fa-youtube-play" />
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

  </div>

  <Alt1 />

  <Alt2 />

  <ReachUs {app} />

  <LatestNews />

</Layout>
