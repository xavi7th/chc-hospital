<style lang="scss">
  @media print {
    *,
    ::after,
    ::before {
      text-shadow: none !important;
      box-shadow: none !important;
    }
    a,
    a:visited {
      text-decoration: underline;
    }
    img {
      page-break-inside: avoid;
    }
    p {
      orphans: 3;
      widows: 3;
    }
  }
  *,
  ::after,
  ::before {
    box-sizing: border-box;
  }
  nav {
    display: block;
  }
  h1,
  h5,
  h6 {
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
  a {
    -ms-touch-action: manipulation;
    touch-action: manipulation;
  }
  h1,
  h5,
  h6 {
    margin-bottom: 0.5rem;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.2;
    color: inherit;
  }
  h1 {
    font-size: 2.5rem;
  }
  h5 {
    font-size: 1.25rem;
  }
  h6 {
    font-size: 1rem;
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
      max-width: 1140px;
    }
  }
  .row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
  }
  .col-lg-12,
  .col-lg-3,
  .col-md-6,
  .col-sm-6 {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
  }
  @media (min-width: 576px) {
    .col-sm-6 {
      -ms-flex: 0 0 50%;
      flex: 0 0 50%;
      max-width: 50%;
    }
  }
  @media (min-width: 768px) {
    .col-md-6 {
      -ms-flex: 0 0 50%;
      flex: 0 0 50%;
      max-width: 50%;
    }
  }
  @media (min-width: 992px) {
    .col-lg-3 {
      -ms-flex: 0 0 25%;
      flex: 0 0 25%;
      max-width: 25%;
    }
    .col-lg-12 {
      -ms-flex: 0 0 100%;
      flex: 0 0 100%;
      max-width: 100%;
    }
  }
  .pagination {
    display: -ms-flexbox;
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem;
  }
  .page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
  }
  .page-item:last-child .page-link {
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
  }
  .page-link {
    position: relative;
    display: block;
    padding: 0.5rem 0.75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #ddd;
  }
  .page-link:focus,
  .page-link:hover {
    color: #0056b3;
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #ddd;
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
  .fa-phone:before {
    content: "\f095";
  }
  .fa-twitter:before {
    content: "\f099";
  }
  .fa-facebook:before {
    content: "\f09a";
  }
  .fa-linkedin:before {
    content: "\f0e1";
  }
  .fa-instagram:before {
    content: "\f16d";
  }
  .fa-skype:before {
    content: "\f17e";
  }

  .img-fluid {
    max-width: 100% !important;
    height: auto;
  }
  ul {
    list-style: none;
    margin: 0;
    padding: 0;
    color: #535353;
  }
  a {
    color: #37404d;
    text-decoration: none;
  }
  a:hover {
    text-decoration: none;
    color: #535353;
  }
  p {
    font-size: 14px;
    line-height: 26px;
    color: #535353;
  }
  h1,
  h5,
  h6 {
    color: #37404d;
    font-family: "Poppins", sans-serif;
  }
  .content-area-2 {
    padding: 100px 0 70px;
  }
  .facebook:hover {
    color: #3b589e !important;
  }
  .twitter:hover {
    color: #56d7fe !important;
  }
  .linkedin:hover {
    color: #1c82ca !important;
  }
  .instagram:hover {
    color: #fb3958 !important;
  }
  a {
    transition: all 0.3s ease-in-out;
  }
  .main-title {
    text-align: center;
    margin-bottom: 50px;
  }
  .main-title h1 {
    font-weight: 500;
    color: #37404d;
    font-size: 34px;
  }
  .agent-3 {
    margin-bottom: 30px;
    background: #fff;
    box-shadow: 0 0 35px rgba(0, 0, 0, 0.1);
  }
  .agent-3 .agent-photo {
    position: relative;
  }
  .agent-3 .agent-details {
    padding: 25px;
  }
  .agent-3 .agent-details p {
    padding-left: 25px;
    position: relative;
    font-size: 13px;
    margin-bottom: 0;
    line-height: 30px;
  }
  .agent-3 .agent-details p a {
    color: #535353;
  }
  .agent-3 .agent-details p i {
    position: absolute;
    left: 0;
    line-height: 30px;
  }
  .agent-3 .agent-details h5 {
    margin-bottom: 15px;
  }
  .agent-3 .agent-details h5 a {
    font-size: 18px;
  }
  .agent-3 .agent-details h6 {
    font-size: 12px;
    color: #535353;
    text-transform: uppercase;
    margin-bottom: 10px;
    font-weight: 500;
  }
  .agent-3 .agent-photo .social-list {
    width: 100%;
    position: absolute;
    bottom: 0;
    padding: 15px 20px 10px;
    border-radius: 0;
    background: rgba(0, 0, 0, 0.7);
    text-align: center;
  }
  .agent-3 .agent-photo .social-list ul li {
    display: inline-block;
  }
  .agent-3 .agent-photo .social-list ul li a {
    margin: 0 10px;
    color: #fff;
  }
  .pagination-box {
    margin-bottom: 25px;
  }
  .pagination {
    padding-left: 0;
    border-radius: 4px;
  }
  .pagination > li > a {
    border-radius: 0;
    margin: 0 5px 5px;
    width: 40px;
    height: 40px;
    text-align: center;
    padding: 0;
    line-height: 40px;
    border: none;
  }
  .pagination > li > a {
    color: #212529;
    font-size: 20px;
    background: #fff;
    box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.1);
  }
  .pagination > li > .active {
    color: #fff;
    box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.1);
  }
  .pagination > li > a:hover {
    color: #fff;
  }
  .page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .page-item:last-child .page-link {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  @media (max-width: 1200px) {
    .main-title {
      margin-bottom: 40px;
    }
  }
  @media (max-width: 992px) {
    .content-area-2 {
      padding: 80px 0 50px;
    }
    .main-title {
      margin-bottom: 30px;
    }
    .main-title h1 {
      font-size: 30px;
    }
  }
  @media (max-width: 768px) {
    .content-area-2 {
      padding: 60px 0 30px;
    }
    .main-title {
      margin-bottom: 25px;
    }
    .main-title h1 {
      font-size: 25px;
    }
  }

  .pagination > li > .active {
    background: #1a6f04;
  }
  .pagination > li > a:hover {
    background: #1a6f04;
  }

  @font-face {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 400;
    src: local("Poppins Regular"), local("Poppins-Regular"),
      url(https://fonts.gstatic.com/s/poppins/v9/pxiEyp8kv8JHgFVrJJbecnFHGPezSQ.woff2)
        format("woff2");
    unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8,
      U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
  }
  @font-face {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 400;
    src: local("Poppins Regular"), local("Poppins-Regular"),
      url(https://fonts.gstatic.com/s/poppins/v9/pxiEyp8kv8JHgFVrJJnecnFHGPezSQ.woff2)
        format("woff2");
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
      U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 400;
    src: local("Poppins Regular"), local("Poppins-Regular"),
      url(https://fonts.gstatic.com/s/poppins/v9/pxiEyp8kv8JHgFVrJJfecnFHGPc.woff2)
        format("woff2");
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA,
      U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212,
      U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 500;
    src: local("Poppins Medium"), local("Poppins-Medium"),
      url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLGT9Z11lFd2JQEl8qw.woff2)
        format("woff2");
    unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8,
      U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
  }
  @font-face {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 500;
    src: local("Poppins Medium"), local("Poppins-Medium"),
      url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLGT9Z1JlFd2JQEl8qw.woff2)
        format("woff2");
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
      U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 500;
    src: local("Poppins Medium"), local("Poppins-Medium"),
      url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLGT9Z1xlFd2JQEk.woff2)
        format("woff2");
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA,
      U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212,
      U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 700;
    src: local("Poppins Bold"), local("Poppins-Bold"),
      url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLCz7Z11lFd2JQEl8qw.woff2)
        format("woff2");
    unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8,
      U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
  }
  @font-face {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 700;
    src: local("Poppins Bold"), local("Poppins-Bold"),
      url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLCz7Z1JlFd2JQEl8qw.woff2)
        format("woff2");
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
      U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 700;
    src: local("Poppins Bold"), local("Poppins-Bold"),
      url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLCz7Z1xlFd2JQEk.woff2)
        format("woff2");
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA,
      U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212,
      U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 800;
    src: local("Poppins ExtraBold"), local("Poppins-ExtraBold"),
      url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLDD4Z11lFd2JQEl8qw.woff2)
        format("woff2");
    unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8,
      U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
  }
  @font-face {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 800;
    src: local("Poppins ExtraBold"), local("Poppins-ExtraBold"),
      url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLDD4Z1JlFd2JQEl8qw.woff2)
        format("woff2");
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
      U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 800;
    src: local("Poppins ExtraBold"), local("Poppins-ExtraBold"),
      url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLDD4Z1xlFd2JQEk.woff2)
        format("woff2");
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA,
      U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212,
      U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 900;
    src: local("Poppins Black"), local("Poppins-Black"),
      url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLBT5Z11lFd2JQEl8qw.woff2)
        format("woff2");
    unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8,
      U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
  }
  @font-face {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 900;
    src: local("Poppins Black"), local("Poppins-Black"),
      url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLBT5Z1JlFd2JQEl8qw.woff2)
        format("woff2");
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
      U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 900;
    src: local("Poppins Black"), local("Poppins-Black"),
      url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLBT5Z1xlFd2JQEk.woff2)
        format("woff2");
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA,
      U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212,
      U+2215, U+FEFF, U+FFFD;
  }
  .bg-grey {
    background-color: #f3f7f9;
  }

  .agent-photo {
    height: 200px;
    img {
      object-fit: cover;
      height: 200px;
    }
  }
</style>

<div class="agent content-area-2 bg-grey">
  <div class="container">
    <div class="main-title">
      <h1>Style 3</h1>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="agent-3">
          <div class="agent-photo">
            <img
              src="/img/team-members/team-1.png"
              alt="avatar-5"
              class="img-fluid" />
            <div class="social-list">
              <ul>
                <li>
                  <a href="#" class="facebook">
                    <i class="fa fa-facebook" />
                  </a>
                </li>
                <li>
                  <a href="#" class="twitter">
                    <i class="fa fa-twitter" />
                  </a>
                </li>
                <li>
                  <a href="#" class="instagram">
                    <i class="fa fa-instagram" />
                  </a>
                </li>
                <li>
                  <a href="#" class="linkedin">
                    <i class="fa fa-linkedin" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="agent-details">
            <h6>MD/CEO</h6>
            <h5>
              <a href="agent-detail.html">Martin Smith</a>
            </h5>
            <div class="contact">
              <p>
                <a href="mailto:info@themevessel.com">
                  <i class="fa fa-envelope-o" />
                  info@themevessel.com
                </a>
              </p>
              <p>
                <a href="tel:+554XX-634-7071">
                  <i class="fa fa-phone" />
                  +55 4XX-634-7071
                </a>
              </p>
              <p>
                <a href="#">
                  <i class="fa fa-skype" />
                  sales.carshop
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="agent-3">
          <div class="agent-photo">
            <img
              src="/img/team-members/team-6.jpg"
              alt="avatar-6"
              class="img-fluid" />
            <div class="social-list">
              <ul>
                <li>
                  <a href="#" class="facebook">
                    <i class="fa fa-facebook" />
                  </a>
                </li>
                <li>
                  <a href="#" class="twitter">
                    <i class="fa fa-twitter" />
                  </a>
                </li>
                <li>
                  <a href="#" class="instagram">
                    <i class="fa fa-instagram" />
                  </a>
                </li>
                <li>
                  <a href="#" class="linkedin">
                    <i class="fa fa-linkedin" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="agent-details">
            <h6>HR Director</h6>
            <h5>
              <a href="agent-detail.html">John Pitarshon</a>
            </h5>
            <div class="contact">
              <p>
                <a href="mailto:info@themevessel.com">
                  <i class="fa fa-envelope-o" />
                  info@themevessel.com
                </a>
              </p>
              <p>
                <a href="tel:+554XX-634-7071">
                  <i class="fa fa-phone" />
                  +55 4XX-634-7071
                </a>
              </p>
              <p>
                <a href="#">
                  <i class="fa fa-skype" />
                  sales.carshop
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="agent-3">
          <div class="agent-photo">
            <img
              src="/img/team-members/team-2.png"
              alt="avatar-7"
              class="img-fluid" />
            <div class="social-list">
              <ul>
                <li>
                  <a href="#" class="facebook">
                    <i class="fa fa-facebook" />
                  </a>
                </li>
                <li>
                  <a href="#" class="twitter">
                    <i class="fa fa-twitter" />
                  </a>
                </li>
                <li>
                  <a href="#" class="instagram">
                    <i class="fa fa-instagram" />
                  </a>
                </li>
                <li>
                  <a href="#" class="linkedin">
                    <i class="fa fa-linkedin" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="agent-details">
            <h6>Admin Manager</h6>
            <h5>
              <a href="agent-detail.html">Maria Blank</a>
            </h5>
            <div class="contact">
              <p>
                <a href="mailto:info@themevessel.com">
                  <i class="fa fa-envelope-o" />
                  info@themevessel.com
                </a>
              </p>
              <p>
                <a href="tel:+554XX-634-7071">
                  <i class="fa fa-phone" />
                  +55 4XX-634-7071
                </a>
              </p>
              <p>
                <a href="#">
                  <i class="fa fa-skype" />
                  sales.carshop
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="agent-3">
          <div class="agent-photo">
            <img
              src="/img/team-members/team-3.jpg"
              alt="avatar-8"
              class="img-fluid" />
            <div class="social-list">
              <ul>
                <li>
                  <a href="#" class="facebook">
                    <i class="fa fa-facebook" />
                  </a>
                </li>
                <li>
                  <a href="#" class="twitter">
                    <i class="fa fa-twitter" />
                  </a>
                </li>
                <li>
                  <a href="#" class="instagram">
                    <i class="fa fa-instagram" />
                  </a>
                </li>
                <li>
                  <a href="#" class="linkedin">
                    <i class="fa fa-linkedin" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="agent-details">
            <h6>Support Manager</h6>
            <h5>
              <a href="agent-detail.html">Karen Paran</a>
            </h5>
            <div class="contact">
              <p>
                <a href="mailto:info@themevessel.com">
                  <i class="fa fa-envelope-o" />
                  info@themevessel.com
                </a>
              </p>
              <p>
                <a href="tel:+554XX-634-7071">
                  <i class="fa fa-phone" />
                  +55 4XX-634-7071
                </a>
              </p>
              <p>
                <a href="#">
                  <i class="fa fa-skype" />
                  sales.carshop
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="agent-3">
          <div class="agent-photo">
            <img
              src="/img/team-members/team-4.jpg"
              alt="avatar-9"
              class="img-fluid" />
            <div class="social-list">
              <ul>
                <li>
                  <a href="#" class="facebook">
                    <i class="fa fa-facebook" />
                  </a>
                </li>
                <li>
                  <a href="#" class="twitter">
                    <i class="fa fa-twitter" />
                  </a>
                </li>
                <li>
                  <a href="#" class="instagram">
                    <i class="fa fa-instagram" />
                  </a>
                </li>
                <li>
                  <a href="#" class="linkedin">
                    <i class="fa fa-linkedin" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="agent-details">
            <h6>Support Manager</h6>
            <h5>
              <a href="agent-detail.html">Karen Paran</a>
            </h5>
            <div class="contact">
              <p>
                <a href="mailto:info@themevessel.com">
                  <i class="fa fa-envelope-o" />
                  info@themevessel.com
                </a>
              </p>
              <p>
                <a href="tel:+554XX-634-7071">
                  <i class="fa fa-phone" />
                  +55 4XX-634-7071
                </a>
              </p>
              <p>
                <a href="#">
                  <i class="fa fa-skype" />
                  sales.carshop
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="agent-3">
          <div class="agent-photo">
            <img
              src="/img/team-members/team-5.jpg"
              alt="avatar-10"
              class="img-fluid" />
            <div class="social-list">
              <ul>
                <li>
                  <a href="#" class="facebook">
                    <i class="fa fa-facebook" />
                  </a>
                </li>
                <li>
                  <a href="#" class="twitter">
                    <i class="fa fa-twitter" />
                  </a>
                </li>
                <li>
                  <a href="#" class="instagram">
                    <i class="fa fa-instagram" />
                  </a>
                </li>
                <li>
                  <a href="#" class="linkedin">
                    <i class="fa fa-linkedin" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="agent-details">
            <h6>Office Manager</h6>
            <h5>
              <a href="agent-detail.html">Maria Blank</a>
            </h5>
            <div class="contact">
              <p>
                <a href="mailto:info@themevessel.com">
                  <i class="fa fa-envelope-o" />
                  info@themevessel.com
                </a>
              </p>
              <p>
                <a href="tel:+554XX-634-7071">
                  <i class="fa fa-phone" />
                  +55 4XX-634-7071
                </a>
              </p>
              <p>
                <a href="#">
                  <i class="fa fa-skype" />
                  sales.carshop
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="agent-3">
          <div class="agent-photo">
            <img
              src="/img/team-members/team-6.jpg"
              alt="avatar-11"
              class="img-fluid" />
            <div class="social-list">
              <ul>
                <li>
                  <a href="#" class="facebook">
                    <i class="fa fa-facebook" />
                  </a>
                </li>
                <li>
                  <a href="#" class="twitter">
                    <i class="fa fa-twitter" />
                  </a>
                </li>
                <li>
                  <a href="#" class="instagram">
                    <i class="fa fa-instagram" />
                  </a>
                </li>
                <li>
                  <a href="#" class="linkedin">
                    <i class="fa fa-linkedin" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="agent-details">
            <h6>Creative Director</h6>
            <h5>
              <a href="agent-detail.html">John Pitarshon</a>
            </h5>
            <div class="contact">
              <p>
                <a href="mailto:info@themevessel.com">
                  <i class="fa fa-envelope-o" />
                  info@themevessel.com
                </a>
              </p>
              <p>
                <a href="tel:+554XX-634-7071">
                  <i class="fa fa-phone" />
                  +55 4XX-634-7071
                </a>
              </p>
              <p>
                <a href="#">
                  <i class="fa fa-skype" />
                  sales.carshop
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="agent-3">
          <div class="agent-photo">
            <img
              src="/img/team-members/team-4.jpg"
              alt="avatar-12"
              class="img-fluid" />
            <div class="social-list">
              <ul>
                <li>
                  <a href="#" class="facebook">
                    <i class="fa fa-facebook" />
                  </a>
                </li>
                <li>
                  <a href="#" class="twitter">
                    <i class="fa fa-twitter" />
                  </a>
                </li>
                <li>
                  <a href="#" class="instagram">
                    <i class="fa fa-instagram" />
                  </a>
                </li>
                <li>
                  <a href="#" class="linkedin">
                    <i class="fa fa-linkedin" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="agent-details">
            <h6>Web Developer</h6>
            <h5>
              <a href="agent-detail.html">Martin Smith</a>
            </h5>
            <div class="contact">
              <p>
                <a href="mailto:info@themevessel.com">
                  <i class="fa fa-envelope-o" />
                  info@themevessel.com
                </a>
              </p>
              <p>
                <a href="tel:+554XX-634-7071">
                  <i class="fa fa-phone" />
                  +55 4XX-634-7071
                </a>
              </p>
              <p>
                <a href="#">
                  <i class="fa fa-skype" />
                  sales.carshop
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="pagination-box">
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="agent-grid-2.html">
                  <span aria-hidden="true">«</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="agent-grid.html">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="agent-grid-2.html">2</a>
              </li>
              <li class="page-item">
                <a class="page-link active" href="agent-grid-3.html">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="agent-grid-3.html">
                  <span aria-hidden="true">»</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
