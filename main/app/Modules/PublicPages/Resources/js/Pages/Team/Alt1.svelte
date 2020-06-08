<style>
  *,
  *::before,
  *::after {
    box-sizing: border-box;
  }
  article,
  figure,
  section {
    display: block;
  }
  h3,
  h5 {
    margin-top: 0;
    margin-bottom: 0.5rem;
  }
  p {
    margin-top: 0;
    margin-bottom: 1rem;
  }
  a {
    color: #4854ed;
    text-decoration: none;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
  }
  a:hover {
    color: #1523d4;
    text-decoration: underline;
  }
  figure {
    margin: 0 0 1rem;
  }
  img {
    vertical-align: middle;
    border-style: none;
  }
  h3,
  h5 {
    margin-bottom: 0.5rem;
    font-family: "Work Sans", -apple-system, BlinkMacSystemFont, "Segoe UI",
      Roboto, "Helvetica Neue", Arial, sans-serif;
    font-weight: 400;
    line-height: 1.1;
    color: #29293a;
  }
  h3 {
    font-size: 36px;
  }
  h5 {
    font-size: 20px;
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
      max-width: 1200px;
    }
  }
  .row {
    display: -webkit-box;
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
  }
  .col-md-10,
  .col-lg-6 {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
  }
  @media (min-width: 768px) {
    .col-md-10 {
      -webkit-box-flex: 0;
      flex: 0 0 83.33333%;
      max-width: 83.33333%;
    }
  }
  @media (min-width: 992px) {
    .col-lg-6 {
      -webkit-box-flex: 0;
      flex: 0 0 50%;
      max-width: 50%;
    }
  }
  .justify-content-center {
    -webkit-box-pack: center !important;
    justify-content: center !important;
  }
  @media (min-width: 992px) {
    .justify-content-lg-start {
      -webkit-box-pack: start !important;
      justify-content: flex-start !important;
    }
  }
  .text-center {
    text-align: center !important;
  }
  @media print {
    *,
    *::before,
    *::after {
      text-shadow: none !important;
      box-shadow: none !important;
    }
    a:not(.btn) {
      text-decoration: underline;
    }
    img {
      page-break-inside: avoid;
    }
    p,
    h3 {
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

  .mdi {
    display: inline-block;
    font: normal normal normal 24px/1 "Material Design Icons";
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -webkit-transform: translate(0, 0);
    transform: translate(0, 0);
  }
  .mdi-phone:before {
    content: "\f4e1";
  }

  a:focus {
    outline: none !important;
  }
  *:focus {
    outline: none;
  }
  p {
    margin: 0;
  }
  figure {
    margin-bottom: 0;
  }
  h3,
  h5 {
    margin-top: 0;
    margin-bottom: 0;
    color: #252227;
  }
  h5 a {
    color: inherit;
  }
  h5 a:hover {
    color: #1a6f04;
  }
  h3 span {
    display: inline-block;
  }
  h3 {
    font-size: 24px;
    line-height: 1.3;
    letter-spacing: 0;
  }
  @media (min-width: 768px) {
    h3 {
      font-size: 30px;
      line-height: 1.4;
    }
  }
  @media (min-width: 1200px) {
    h3 {
      font-size: 36px;
      line-height: 1.33333;
    }
  }
  h5 {
    font-size: 16px;
    line-height: 1.5;
    letter-spacing: 0.01em;
  }
  @media (min-width: 768px) {
    h5 {
      font-size: 20px;
      line-height: 1.4;
    }
  }
  .wow-outer span {
    display: block;
  }
  a {
    transition: all 0.3s ease-in-out;
  }
  a,
  a:focus,
  a:active,
  a:hover {
    text-decoration: none;
  }
  a,
  a:focus,
  a:active {
    color: #1a6f04;
  }
  a:hover {
    color: #7f1b16;
  }
  a[href*="tel"] {
    white-space: nowrap;
  }
  img {
    display: inline-block;
    max-width: 100%;
    height: auto;
  }
  .icon {
    display: inline-block;
    font-size: 16px;
    line-height: 1;
  }
  .icon::before {
    position: relative;
    display: inline-block;
    font-weight: 400;
    font-style: normal;
    speak: none;
    text-transform: none;
  }
  .icon-md {
    font-size: 1.5em;
  }
  .button {
    position: relative;
    overflow: hidden;
    display: inline-block;
    padding: 13px 35px;
    font-size: 14px;
    line-height: 1.25;
    border: 2px solid;
    border-radius: 6px;
    font-family: "Oswald", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
      "Helvetica Neue", Arial, sans-serif;
    font-weight: 500;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    white-space: nowrap;
    text-overflow: ellipsis;
    text-align: center;
    cursor: pointer;
    vertical-align: middle;
    user-select: none;
    transition: 0.25s cubic-bezier(0.2, 1, 0.3, 1);
  }
  .button.button-primary,
  .button.button-primary:focus {
    color: #fff;
    background-color: #1a6f04;
    border-color: #1a6f04;
  }
  .button.button-primary:hover,
  .button.button-primary:active {
    color: #fff;
    background-color: #0b3101;
    border-color: #0b3101;
  }
  .button-winona {
    position: relative;
    overflow: hidden;
    display: inline-block;
    vertical-align: middle;
    text-align: center;
  }
  .button-winona .content-original,
  .button-winona .content-dubbed {
    vertical-align: middle;
    transition: transform 0.3s cubic-bezier(0.2, 1, 0.3, 1),
      opacity 0.3s cubic-bezier(0.2, 1, 0.3, 1);
  }
  .button-winona .content-original {
    display: block;
  }
  .button-winona .content-dubbed {
    position: absolute;
    width: 100%;
    top: 50%;
    left: 0;
    opacity: 0;
    transform: translate3d(0, 0, 0);
  }
  .button-winona:hover .content-original {
    opacity: 0;
    transform: translate3d(0, -30%, 0);
  }
  .button-winona:hover .content-dubbed {
    opacity: 1;
    transform: translate3d(0, 0, 0) translateY(-50%);
  }
  .button-lg {
    padding: 14px 35px;
    font-size: 15px;
    line-height: 1.5;
  }
  @media (min-width: 576px) {
    .button-lg {
      font-size: 16px;
      padding-left: 55px;
      padding-right: 55px;
    }
  }
  .profile-creative {
    display: flex;
    margin-left: -15px;
    text-align: left;
    color: #74757f;
  }
  .profile-creative > * {
    margin-left: 15px;
  }
  .profile-creative-figure {
    position: relative;
    overflow: hidden;
    max-width: 80px;
    flex-shrink: 0;
  }
  .profile-creative-image {
    width: 100%;
    border-radius: 6px;
  }
  .profile-creative-main {
    flex-grow: 1;
  }
  .profile-creative-title {
    color: #1a6f04;
  }
  .profile-creative-title a:hover {
    color: #0b3101;
  }
  .profile-creative-position {
    color: #aeb1be;
  }
  .profile-creative-contacts {
    color: #aeb1be;
  }
  .profile-creative-contacts a {
    color: inherit;
  }
  .profile-creative-contacts a:hover {
    color: #1a6f04;
  }
  * + .profile-creative-position {
    margin-top: 0;
  }
  * + .profile-creative-contacts {
    margin-top: 15px;
  }
  @media (min-width: 576px) {
    .profile-creative {
      margin-left: -30px;
    }
    .profile-creative > * {
      margin-left: 30px;
    }
    .profile-creative-figure {
      max-width: 22%;
    }
  }
  @media (min-width: 768px) {
    .profile-creative-figure {
      max-width: 29%;
    }
    .profile-creative-main {
      padding-right: 30px;
    }
    * + .profile-creative-contacts {
      margin-top: 22px;
    }
  }
  @media (min-width: 992px) and (max-width: 1199.98px) {
    .profile-creative {
      margin-left: -20px;
    }
    .profile-creative > * {
      margin-left: 20px;
    }
    .profile-creative-figure {
      max-width: 25%;
    }
    .profile-creative-main {
      padding-right: 10px;
    }
  }
  * + p {
    margin-top: 16px;
  }
  * + .row {
    margin-top: 30px;
  }
  * + .button-outer {
    margin-top: 25px;
  }
  h3 + .row {
    margin-top: 35px;
  }
  @media (min-width: 768px) {
    * + p {
      margin-top: 20px;
    }
    * + .button-outer {
      margin-top: 34px;
    }
    * + .row {
      margin-top: 40px;
    }
  }
  @media (min-width: 992px) {
    h3 + .row {
      margin-top: 55px;
    }
  }
  @media (min-width: 1200px) {
    * + .button-outer {
      margin-top: 40px;
    }
  }
  @media (min-width: 1600px) {
    h3 + .row {
      margin-top: 75px;
    }
  }
  .row-50 {
    margin-bottom: -50px;
  }
  .row-50:empty {
    margin-bottom: 0;
  }
  .row-50 > * {
    margin-bottom: 50px;
  }
  @media (min-width: 1600px) {
    .row-xxl-70 {
      margin-bottom: -70px;
    }
    .row-xxl-70:empty {
      margin-bottom: 0;
    }
    .row-xxl-70 > * {
      margin-bottom: 70px;
    }
  }
  .section-lg {
    padding: 50px 0;
  }
  @media (min-width: 768px) {
    .section-lg {
      padding: 72px 0;
    }
  }
  @media (min-width: 1600px) {
    .section-lg {
      padding: 120px 0;
    }
  }
  .object-inline {
    white-space: nowrap;
  }
  .object-inline > * {
    display: inline-block;
    min-width: 20px;
    vertical-align: top;
    white-space: normal;
  }
  .object-inline > * + * {
    margin-left: 11px;
  }
  .wow-outer .object-inline span {
    display: inline-block;
  }
  .slideInUp {
    animation-name: slideInUp;
  }
  .slideInLeft {
    animation-name: slideInLeft;
  }
  .wow-outer {
    position: relative;
    overflow: hidden;
  }
  .wow {
    backface-visibility: hidden;
  }
  /*! CSS Used keyframes */
  @keyframes slideInUp {
    0% {
      transform: translate3d(0, 100%, 0);
      visibility: visible;
    }
    100% {
      transform: translate3d(0, 0, 0);
    }
  }
  @keyframes slideInLeft {
    0% {
      transform: translate3d(-100%, 0, 0);
      visibility: visible;
    }
    100% {
      transform: translate3d(0, 0, 0);
    }
  }
  /*! CSS Used fontfaces */
  @font-face {
    font-family: "Work Sans";
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/worksans/v7/QGYsz_wNahGAdqQ43Rh_c6DptfpA4cD3.woff2)
      format("woff2");
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
      U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
  }
  @font-face {
    font-family: "Work Sans";
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/worksans/v7/QGYsz_wNahGAdqQ43Rh_cqDptfpA4cD3.woff2)
      format("woff2");
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
      U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: "Work Sans";
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/worksans/v7/QGYsz_wNahGAdqQ43Rh_fKDptfpA4Q.woff2)
      format("woff2");
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA,
      U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212,
      U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: "Work Sans";
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/worksans/v7/QGYsz_wNahGAdqQ43Rh_c6DptfpA4cD3.woff2)
      format("woff2");
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
      U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
  }
  @font-face {
    font-family: "Work Sans";
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/worksans/v7/QGYsz_wNahGAdqQ43Rh_cqDptfpA4cD3.woff2)
      format("woff2");
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
      U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: "Work Sans";
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/worksans/v7/QGYsz_wNahGAdqQ43Rh_fKDptfpA4Q.woff2)
      format("woff2");
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA,
      U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212,
      U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: "Work Sans";
    font-style: normal;
    font-weight: 800;
    src: url(https://fonts.gstatic.com/s/worksans/v7/QGYsz_wNahGAdqQ43Rh_c6DptfpA4cD3.woff2)
      format("woff2");
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
      U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
  }
  @font-face {
    font-family: "Work Sans";
    font-style: normal;
    font-weight: 800;
    src: url(https://fonts.gstatic.com/s/worksans/v7/QGYsz_wNahGAdqQ43Rh_cqDptfpA4cD3.woff2)
      format("woff2");
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
      U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: "Work Sans";
    font-style: normal;
    font-weight: 800;
    src: url(https://fonts.gstatic.com/s/worksans/v7/QGYsz_wNahGAdqQ43Rh_fKDptfpA4Q.woff2)
      format("woff2");
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA,
      U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212,
      U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: "Oswald";
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752FD8Gl-1PK62t.woff2)
      format("woff2");
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F,
      U+FE2E-FE2F;
  }
  @font-face {
    font-family: "Oswald";
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752HT8Gl-1PK62t.woff2)
      format("woff2");
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
  }
  @font-face {
    font-family: "Oswald";
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752Fj8Gl-1PK62t.woff2)
      format("woff2");
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
      U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
  }
  @font-face {
    font-family: "Oswald";
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752Fz8Gl-1PK62t.woff2)
      format("woff2");
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
      U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: "Oswald";
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752GT8Gl-1PKw.woff2)
      format("woff2");
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA,
      U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212,
      U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: "Oswald";
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752FD8Gl-1PK62t.woff2)
      format("woff2");
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F,
      U+FE2E-FE2F;
  }
  @font-face {
    font-family: "Oswald";
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752HT8Gl-1PK62t.woff2)
      format("woff2");
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
  }
  @font-face {
    font-family: "Oswald";
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752Fj8Gl-1PK62t.woff2)
      format("woff2");
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
      U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
  }
  @font-face {
    font-family: "Oswald";
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752Fz8Gl-1PK62t.woff2)
      format("woff2");
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
      U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: "Oswald";
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752GT8Gl-1PKw.woff2)
      format("woff2");
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA,
      U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212,
      U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: "Oswald";
    font-style: normal;
    font-weight: 500;
    src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752FD8Gl-1PK62t.woff2)
      format("woff2");
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F,
      U+FE2E-FE2F;
  }
  @font-face {
    font-family: "Oswald";
    font-style: normal;
    font-weight: 500;
    src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752HT8Gl-1PK62t.woff2)
      format("woff2");
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
  }
  @font-face {
    font-family: "Oswald";
    font-style: normal;
    font-weight: 500;
    src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752Fj8Gl-1PK62t.woff2)
      format("woff2");
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
      U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
  }
  @font-face {
    font-family: "Oswald";
    font-style: normal;
    font-weight: 500;
    src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752Fz8Gl-1PK62t.woff2)
      format("woff2");
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
      U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: "Oswald";
    font-style: normal;
    font-weight: 500;
    src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752GT8Gl-1PKw.woff2)
      format("woff2");
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA,
      U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212,
      U+2215, U+FEFF, U+FFFD;
  }
</style>

<svelte:head>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" />
</svelte:head>

<section class="section section-lg text-center">
  <div class="container">
    <h3 class="wow-outer">
      <span
        class="wow slideInUp"
        style="visibility: visible; animation-name: slideInUp;">
        Style 2
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
              Dr. Lucky founded our hospital in 1995 with a vision to help Lorem
              ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur
              recusandae et sit maiores sunt veritatis atque voluptate placeat
              quod obcaecati animi ipsum corrupti amet at, eos laudantium esse
              illo in.
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
              Brian is responsible for providing financial guidance Lorem ipsum
              dolor sit amet consectetur, adipisicing elit. Sint nam deserunt
              provident esse illo voluptates, nisi saepe, repellat sit ex
              consequatur sequi dolore ipsa sed quasi, consectetur officiis?
              Dolorum, corporis!
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
              Marie is an acknowledged professional Lorem ipsum, dolor sit amet
              consectetur adipisicing elit. Ea modi obcaecati fugit repellat
              repudiandae eum inventore alias, animi facere sapiente minus sunt,
              facilis exercitationem et autem quis similique. Aliquid, quasi.
            </p>
          </div>
        </article>
      </div>
    </div>
    <div class="wow-outer button-outer">
      <a
        class="button button-lg button-primary button-winona wow slideInUp"
        href="#"
        style="visibility: visible; animation-name: slideInUp;">
        <div class="content-original">View all Team</div>
        <div class="content-dubbed">View all Team</div>
      </a>
    </div>
  </div>
</section>
