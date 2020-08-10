<script>
    import { page, InertiaLink } from "@inertiajs/inertia-svelte";
    import { Inertia } from "@inertiajs/inertia";
    import Layout from "@p-shared/PublicPagesLayout";
    import LatestNews from "@p-shared/Partials/LatestNews";
    import ReachUs from "@p-pages/Team/ReachUs";
    import FlashMessage from "@p-shared/FlashMessage";
    import route from "ziggy";

    $: ({ app, errors, flash, jobListings } = $page);

    let uploadCV = () => {
        BlockToast.fire({
            text: "Uploading CV...."
        });

        let formData = new FormData();
        _.forEach(details, (val, key) => {
            formData.append(key, val);
        });
        Inertia.post(
            route("app.upload_cv"),
            formData,
            {
                headers: {
                    "Content-Type": "multipart/form-data"
                }
            },
            {
                preserveState: true,
                preserveScroll: true
            }
        ).then(() => {
            if (flash.success) {
                details.cv = null;
                details = {};
                ToastLarge.fire({
                    title: "Successful!",
                    html: flash.success,
                    timer: 10000
                });
            } else {
                swal.close();
            }
        });
    };
    let attachFile = e => {
        details.cv = e.target.files[0];
    };

    let viewFullJobDescription = listing => {
        console.log(listing);
        swal.fire({
            icon: "info",
            title: listing.job_title,
            html: listing.job_description,
            customClass: {
                confirmButton: "button-primary button-winona btn-xxs"
            }
        });
    };

    let details = {};
</script>

<style lang="scss">
    *,
    ::after,
    ::before {
        box-sizing: border-box;
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
    img {
        vertical-align: middle;
        border-style: none;
    }
    h3 {
        margin-bottom: 0.5rem;
        font-family: "Work Sans", -apple-system, BlinkMacSystemFont, "Segoe UI",
            Roboto, "Helvetica Neue", Arial, sans-serif;
        font-weight: 400;
        line-height: 1.1;
        color: #29293a;
        font-size: 36px;
    }
    article,
    section {
        display: block;
    }
    .job-description {
        position: relative;
        overflow: hidden;
        --lh: 2rem;
        line-height: var(--lh);
        --max-lines: 6;
        height: calc(var(--lh) * var(--max-lines));

        p {
            margin-top: 0;
        }
    }

    .job-description::after {
        content: "";
        text-align: right;
        position: absolute;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 3.2em;
        background: linear-gradient(
            to bottom,
            rgba(255, 255, 255, 0),
            #f5f6fa 50%
        );
    }

    .btn-xxs {
        font-size: 1rem !important;
        padding: 1em 2.5em !important;
        border-radius: 3px !important;
    }

    h4 {
        margin-top: 0;
        margin-bottom: 0.5rem;
    }
    ul {
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
    h4 {
        margin-bottom: 0.5rem;
        font-family: "Work Sans", -apple-system, BlinkMacSystemFont, "Segoe UI",
            Roboto, "Helvetica Neue", Arial, sans-serif;
        font-weight: 400;
        line-height: 1.1;
        color: #29293a;
    }
    h4 {
        font-size: 24px;
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
    .col-lg-4,
    .col-lg-6,
    .col-md-10,
    .col-md-6,
    .col-xl-5,
    .col-xl-6 {
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
        .col-md-6 {
            -webkit-box-flex: 0;
            flex: 0 0 50%;
            max-width: 50%;
        }
    }
    @media (min-width: 992px) {
        .col-lg-6 {
            -webkit-box-flex: 0;
            flex: 0 0 50%;
            max-width: 50%;
        }
        .col-lg-4 {
            -webkit-box-flex: 0;
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }
    }
    @media (min-width: 1200px) {
        .col-xl-5 {
            -webkit-box-flex: 0;
            flex: 0 0 41.66667%;
            max-width: 41.66667%;
        }
        .col-xl-6 {
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
        .flex-lg-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            flex-direction: row-reverse !important;
        }
        .justify-content-lg-between {
            -webkit-box-pack: justify !important;
            justify-content: space-between !important;
        }
    }
    .text-center {
        text-align: center !important;
    }
    a:focus {
        outline: 0 !important;
    }
    :focus {
        outline: 0;
    }
    p {
        margin: 0;
    }
    h3 {
        margin-top: 0;
        margin-bottom: 0;
        color: #252227;
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
    a {
        transition: all 0.3s ease-in-out;
    }
    a,
    a:active,
    a:focus,
    a:hover {
        text-decoration: none;
    }
    a,
    a:active,
    a:focus {
        color: #097703;
    }
    a:hover {
        color: darken(#097703, 8);
    }
    img {
        display: inline-block;
        max-width: 100%;
        height: auto;
    }
    .img-responsive {
        width: 100%;
        height: 100%;
        object-fit: cover;
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
        font-family: Oswald, -apple-system, BlinkMacSystemFont, "Segoe UI",
            Roboto, "Helvetica Neue", Arial, sans-serif;
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
        background-color: #097703;
        border-color: #097703;
    }
    .button.button-primary:active,
    .button.button-primary:hover {
        color: #fff;
        background-color: darken(#097703, 8);
        border-color: darken(#097703, 8);
    }
    .button-winona {
        position: relative;
        overflow: hidden;
        display: inline-block;
        vertical-align: middle;
        text-align: center;
    }
    .button-winona .content-dubbed,
    .button-winona .content-original {
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
    * + p {
        margin-top: 16px;
    }
    h3 + p {
        margin-top: 18px;
    }
    * + .button {
        margin-top: 25px;
    }
    @media (min-width: 768px) {
        * + p {
            margin-top: 20px;
        }
        * + .button {
            margin-top: 34px;
        }
    }
    @media (min-width: 992px) {
        h3 + p {
            margin-top: 24px;
        }
    }
    @media (min-width: 1200px) {
        * + .button {
            margin-top: 40px;
        }
        h3 + p {
            margin-top: 30px;
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
    a:focus {
        outline: 0 !important;
    }
    :focus {
        outline: 0;
    }
    p {
        margin: 0;
    }
    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    ul li {
        display: block;
    }
    h3,
    h4 {
        margin-top: 0;
        margin-bottom: 0;
        color: #252227;
    }
    h4 a {
        color: inherit;
    }
    h4 a:hover {
        color: #097703;
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
    h4 {
        font-size: 18px;
        line-height: 1.5;
        letter-spacing: 0;
    }
    @media (min-width: 1200px) {
        h4 {
            font-size: 24px;
            line-height: 1.33333;
        }
    }
    a {
        transition: all 0.3s ease-in-out;
    }
    a,
    a:active,
    a:focus,
    a:hover {
        text-decoration: none;
    }
    a,
    a:active,
    a:focus {
        color: #097703;
    }
    a:hover {
        color: darken(#097703, 8);
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
    .button {
        position: relative;
        overflow: hidden;
        display: inline-block;
        padding: 13px 35px;
        font-size: 14px;
        line-height: 1.25;
        border: 2px solid;
        border-radius: 6px;
        font-family: Oswald, -apple-system, BlinkMacSystemFont, "Segoe UI",
            Roboto, "Helvetica Neue", Arial, sans-serif;
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
        background-color: #097703;
        border-color: #097703;
    }
    .button.button-primary:active,
    .button.button-primary:hover {
        color: #fff;
        background-color: darken(#097703, 8);
        border-color: darken(#097703, 8);
    }
    .button-winona {
        position: relative;
        overflow: hidden;
        display: inline-block;
        vertical-align: middle;
        text-align: center;
    }
    .button-winona .content-dubbed,
    .button-winona .content-original {
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
    .career-classic {
        text-align: left;
    }
    .career-classic-divider {
        border-bottom: 1px solid #aeb1be;
    }
    .career-classic-list {
        transform: translate3d(0, -10px, 0);
        margin-bottom: -10px;
        margin-left: -20px;
        margin-right: -20px;
    }
    .career-classic-list > * {
        margin-top: 10px;
        padding-left: 20px;
        padding-right: 20px;
    }
    .career-classic-list > li {
        display: inline-block;
        vertical-align: middle;
        white-space: nowrap;
    }
    .career-classic-list > li > * {
        display: inline-block;
        vertical-align: middle;
    }
    .career-classic-list > li > * + * {
        margin-left: 8px;
    }
    .career-classic-list .icon {
        font-size: 1.25em;
        color: #097703;
    }
    * + .career-classic-divider {
        margin-top: 10px;
    }
    * + .career-classic-list {
        margin-top: 15px;
    }
    @media (max-width: 575.98px) {
        .career-classic {
            max-width: 360px;
            margin-left: auto;
            margin-right: auto;
        }
    }
    @media (min-width: 768px) {
        * + .career-classic-divider {
            margin-top: 20px;
        }
        * + .career-classic-list {
            margin-top: 20px;
        }
    }
    * + p {
        margin-top: 16px;
    }
    * + .row {
        margin-top: 30px;
    }
    * + .button {
        margin-top: 25px;
    }
    h3 + .row {
        margin-top: 35px;
    }
    .row + .button-lg {
        margin-top: 30px;
    }
    @media (min-width: 768px) {
        * + p {
            margin-top: 20px;
        }
        * + .button {
            margin-top: 34px;
        }
        * + .row {
            margin-top: 40px;
        }
        .row + .button-lg {
            margin-top: 45px;
        }
    }
    @media (min-width: 992px) {
        h3 + .row {
            margin-top: 55px;
        }
    }
    @media (min-width: 1200px) {
        * + .button {
            margin-top: 40px;
        }
    }
    @media (min-width: 1600px) {
        h3 + .row {
            margin-top: 75px;
        }
        .row + .button-lg {
            margin-top: 70px;
        }
    }
    .row-45 {
        margin-bottom: -45px;
    }
    .row-45:empty {
        margin-bottom: 0;
    }
    .row-45 > * {
        margin-bottom: 45px;
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
    .bg-gray-100 {
        background: #f5f6fa;
        margin-bottom: -100px !important;
    }
    [class*="bg-"] {
        background-size: cover;
        background-position: center center;
    }
    .btn-xs {
        padding: 10px 20px !important;
        font-size: 1em !important;
        margin-top: 15px !important;
        font-size: 1em;
        margin-top: 15px;
        margin-left: auto;
        margin-right: 0;
        display: block;
        width: 35%;
    }
    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }
    section {
        display: block;
    }
    h3 {
        margin-top: 0;
        margin-bottom: 0.5rem;
    }
    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }
    button {
        border-radius: 0;
    }
    button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color;
    }
    button,
    input {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }
    button,
    input {
        overflow: visible;
    }
    button {
        text-transform: none;
    }
    [type="submit"],
    button {
        -webkit-appearance: button;
    }
    [type="submit"]::-moz-focus-inner,
    button::-moz-focus-inner {
        padding: 0;
        border-style: none;
    }
    h3 {
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
    .col-lg-7,
    .col-md-8,
    .col-sm-10,
    .col-xl-6 {
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }
    @media (min-width: 576px) {
        .col-sm-10 {
            -webkit-box-flex: 0;
            flex: 0 0 83.33333%;
            max-width: 83.33333%;
        }
    }
    @media (min-width: 768px) {
        .col-md-8 {
            -webkit-box-flex: 0;
            flex: 0 0 66.66667%;
            max-width: 66.66667%;
        }
    }
    @media (min-width: 992px) {
        .col-lg-7 {
            -webkit-box-flex: 0;
            flex: 0 0 58.33333%;
            max-width: 58.33333%;
        }
    }
    @media (min-width: 1200px) {
        .col-xl-6 {
            -webkit-box-flex: 0;
            flex: 0 0 50%;
            max-width: 50%;
        }
    }
    .form-inline {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        flex-flow: row wrap;
        -webkit-box-align: center;
        align-items: center;
    }
    .justify-content-center {
        -webkit-box-pack: center !important;
        justify-content: center !important;
    }
    .text-center {
        text-align: center !important;
    }
    @media print {
        *,
        ::after,
        ::before {
            text-shadow: none !important;
            box-shadow: none !important;
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
    button:focus {
        outline: 0 !important;
    }
    button::-moz-focus-inner {
        border: 0;
    }
    :focus {
        outline: 0;
    }
    button,
    input {
        outline: 0;
    }
    p {
        margin: 0;
    }
    form {
        margin-bottom: 0;
    }
    h3 {
        margin-top: 0;
        margin-bottom: 0;
        color: #252227;
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
    .wow-outer span {
        display: block;
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
        font-family: Oswald, -apple-system, BlinkMacSystemFont, "Segoe UI",
            Roboto, "Helvetica Neue", Arial, sans-serif;
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
        background-color: #097703;
        border-color: #097703;
    }
    .button.button-primary:active,
    .button.button-primary:hover {
        color: #fff;
        background-color: darken(#097703, 8);
        border-color: darken(#097703, 8);
    }
    .button-winona {
        position: relative;
        overflow: hidden;
        display: inline-block;
        vertical-align: middle;
        text-align: center;
    }
    .button-winona .content-dubbed,
    .button-winona .content-original {
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
    .rd-form {
        position: relative;
        text-align: left;
    }
    .rd-form .button {
        min-height: 48px;
    }
    * + .rd-form {
        margin-top: 20px;
    }
    .form-wrap {
        position: relative;
    }
    .form-wrap.has-error .form-input {
        border-color: #097703;
    }
    .form-input {
        display: block;
        width: 100%;
        min-height: 48px;
        padding: 11px 19px;
        font-size: 16px;
        font-weight: 400;
        line-height: 1.5;
        color: #252227;
        background-color: #fff;
        background-image: none;
        border-radius: 6px;
        -webkit-appearance: none;
        transition: 0.3s ease-in-out;
        border: 1px solid #c5c6cd;
    }
    .form-input:focus {
        outline: 0;
    }
    :global(.form-validation) {
        position: absolute;
        right: 15px;
        top: 0;
        z-index: 11;
        font-family: Oswald, -apple-system, BlinkMacSystemFont, "Segoe UI",
            Roboto, "Helvetica Neue", Arial, sans-serif;
        margin-top: 3px;
        font-size: 10px;
        line-height: 12px;
        letter-spacing: 0;
        color: #ec1616;
        transition: 0.3s;
        transform: scale3d(1, 1, 1);
    }
    :global(.form-validation:empty) {
        transform: scale3d(1, 0, 1);
    }
    .form-inline {
        display: flex;
        flex-wrap: wrap;
        align-items: stretch;
        text-align: center;
        margin-bottom: -8px;
    }
    .form-inline > * {
        margin-bottom: 8px;
    }
    .form-inline > * {
        margin-top: 0;
        margin-right: -6px;
    }
    .form-inline .form-wrap {
        flex: 20 0;
        min-width: 220px;
    }
    .form-inline .form-input {
        border-color: #fff;
    }
    .form-inline .form-button {
        flex-grow: 1;
        flex-basis: 100%;
        min-height: 48px;
    }
    .form-inline .form-button .button {
        width: 100%;
        min-height: inherit;
    }
    @media (min-width: 576px) {
        .form-inline .button {
            display: block;
        }
    }
    * + p {
        margin-top: 16px;
    }
    h3 + p {
        margin-top: 18px;
    }
    * + form.form-inline {
        margin-top: 18px;
    }
    @media (min-width: 768px) {
        * + p {
            margin-top: 20px;
        }
    }
    @media (min-width: 992px) {
        h3 + p {
            margin-top: 24px;
        }
    }
    @media (min-width: 1200px) {
        * + .rd-form {
            margin-top: 40px;
        }
        h3 + p {
            margin-top: 30px;
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
    .bg-gray-100 {
        background: #f5f6fa;
    }
    [class*="bg-"] {
        background-size: cover;
        background-position: center center;
    }
    .slideInUp {
        animation-name: slideInUp;
    }
    .wow-outer {
        position: relative;
        overflow: hidden;
    }
    .wow {
        backface-visibility: hidden;
    }
    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
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
</style>

<svelte:head>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css" />

</svelte:head>
<Layout title="Work With Us">

    <section class="section section-lg">
        <div class="container">
            <div
                class="row row-50 justify-content-center
                justify-content-lg-between flex-lg-row-reverse">
                <div class="col-md-12">
                    <h3 class="text-center">Working at {app.name}</h3>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-5">
                    <p class="mb-3">
                        At Capitol Hill Clinic / Hospital, we recognize that our
                        staff are central to our success. We are therefore
                        committed to recruiting and retaining high caliber staff
                        with passion and drive, who we know will exceed our
                        clients' expectations. While communications experience
                        is an asset in our sector, we also invite speculative
                        applications from talented, driven professionals, whom
                        we will train and mentor to ensure that they achieve
                        their full potential. Regular performance reviews and
                        bonuses recognize individuals for going above and beyond
                        the hospital's expectations. This, together with our
                        competitive salaries, ensures that any highly motivated
                        individual will excel in our friendly, fast-paced
                        working environment. If you would like to become a part
                        of our devoted and caring team while receiving a
                        comprehensive wage and benefits package that meets the
                        needs of our employees and their families on a personal
                        and individual basis, submit your CV below.
                    </p>
                    <InertiaLink
                        class="button button-lg button-primary button-winona
                        btn-xs"
                        style="padding: 10px 20px; font-size: 1em ; margin-top:
                        15px;"
                        href={route('app.about_us')}>
                        <div class="content-original">Learn more</div>
                        <div class="content-dubbed">About Us</div>
                    </InertiaLink>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-6">
                    <img
                        class="img-responsive"
                        src="/img/capitol-hill-hospitals-career.jpg"
                        alt="capitol hill hospital warri work with us"
                        width="570"
                        height="368" />
                </div>
            </div>
        </div>
    </section>

    <section class="section section-lg bg-gray-100 text-center">
        <div class="container">
            <h3>Available Vacancies</h3>
            <div class="row row-45">
                {#each jobListings as listing}
                    <div class="col-md-6 col-lg-4">
                        <article class="career-classic">
                            <h4 class="career-classic-title">
                                <a href="#home">{listing.job_title}</a>
                            </h4>
                            <div class="career-classic-divider" />
                            <ul class="career-classic-list">
                                <li>
                                    <span class="icon mdi mdi-calendar-clock" />
                                    <span>{listing.contract_type}</span>
                                </li>
                                <li>
                                    <span class="icon mdi mdi-map-marker" />
                                    <span>{listing.job_location}</span>
                                </li>
                            </ul>
                            <p class="job-description">
                                {@html listing.job_description}
                            </p>
                        </article>
                        <div class="form-button">
                            <button
                                class="button button-primary button-winona
                                btn-xxs"
                                on:click={viewFullJobDescription(listing)}
                                type="submit">
                                <div class="content-original">View More</div>
                                <div class="content-dubbed">
                                    View Full Details
                                </div>
                            </button>
                        </div>
                    </div>
                {/each}

            </div>
        </div>
    </section>

    <section class="section section-lg bg-gray-100 upload-cv">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-8 col-lg-7 col-xl-6">
                    <h3 class="wow-outer text-center">
                        <span
                            class="wow slideInUp"
                            style="visibility: visible; animation-name:
                            slideInUp;">
                            Send us your CV
                        </span>
                    </h3>

                    <FlashMessage isGeneralError={true} />

                    <form
                        class="rd-form rd-mailform form-inline"
                        on:submit|preventDefault={uploadCV}>

                        <div
                            class="form-wrap "
                            class:has-error={errors.full_name}>
                            <input
                                bind:value={details.full_name}
                                class="form-input form-control-has-validation"
                                type="text"
                                placeholder="Full Name" />

                            <FlashMessage msg={errors.full_name} />

                        </div>
                        <div class="form-wrap" class:has-error={errors.phone}>
                            <input
                                bind:value={details.phone}
                                class="form-input form-control-has-validation"
                                type="text"
                                placeholder="Phone Number" />

                            <FlashMessage msg={errors.phone} />
                        </div>
                        <div
                            class="form-wrap "
                            class:has-error={errors.position}>
                            <input
                                bind:value={details.position}
                                class="form-input form-control-has-validation"
                                type="text"
                                placeholder="Interested Position" />

                            <FlashMessage msg={errors.position} />
                        </div>
                        <div class="form-wrap has-error">
                            <input
                                on:change={attachFile}
                                class="form-input form-control-has-validation"
                                type="file" />
                            <FlashMessage msg={errors.cv} />

                        </div>
                        <div class="form-button">
                            <button
                                class="button button-primary button-winona"
                                type="submit">
                                <div class="content-original">
                                    Join Our Family
                                </div>
                                <div class="content-dubbed">Submit your CV</div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <ReachUs {app} />

    <LatestNews />

</Layout>
