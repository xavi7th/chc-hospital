<script>
  import { page } from "@inertiajs/inertia-svelte";
  import Layout from "@p-shared/PublicPagesLayout";
  import LatestNews from "@p-shared/Partials/LatestNews";
  import ReachUs from "@p-pages/Team/ReachUs";
  import FlashMessage from "@p-shared/FlashMessage";
  import { onMount } from "svelte";

  $: ({ app, blogPost, categories, latestArticles } = $page.props);

  onMount(() => {
    jQuery("img[data-enlarge]").each(function() {
      var theImg = jQuery(this).attr("src");
      var $this = jQuery(this);
      $this.parent().css({
        "background-image": "url(" + theImg + ")",
        "background-size": "cover",
        "background-position": "center",
        "background-repeat": "no-repeat",
        "background-color": "whitesmoke",
        "max-width": "100%",
        height: $this.data("enlarge"),
        display: "block"
      });
      $this.remove();
    });
  });
</script>

<style>
  h3 {
    font-weight: 400;
    line-height: 1.4;
  }
  :global(p) {
    font-family: "Open Sans", sans-serif;
    letter-spacing: 1px;
    line-height: 30px;
    font-size: 14px;
    color: #777;
  }
  a {
    outline: none !important;
    color: #242424;
    text-decoration: none;
    -moz-transition: all 0.3s ease- 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
  }
  a:hover,
  a:focus {
    text-decoration: none !important;
  }
  ul {
    text-decoration: none;
    list-style: none;
    padding: 0px;
  }

  .nopadding {
    padding: 0px !important;
  }
  section {
    padding: 100px 0px;
    position: relative;
    background-color: #fff;
  }

  .light-grey {
    background-color: #fcfcfc !important;
  }
  aside {
    margin-bottom: 30px;
  }
  .blog-post {
    color: #162532;
    overflow: hidden;
    background: #fff;
    margin-bottom: 30px;
    box-shadow: 0 0 4px 0px rgba(0, 0, 0, 0.1);
  }
  .blog-post a {
    color: inherit;
    text-decoration: none;
  }
  .post-info a {
    margin-right: 20px;
  }
  .post-img {
    margin-bottom: 30px;
    overflow: hidden;
  }
  .post-img img {
    width: 100%;
    height: auto;
    -moz-transition: all 2s;
    -o-transition: all 2s;
    transition: all 2s;
  }
  .post-info {
    font-size: 14px;
    padding: 0 20px;
    font-weight: 600;
    text-transform: capitalize;
  }
  .post-title {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 15px;
    margin-top: 10px;
    padding: 0 20px;
    text-transform: capitalize;
    transition: all 0.4s ease 0s;
  }
  .blog-single {
    padding: 0 20px;
    position: relative;
    overflow: hidden;
  }
  .blog-single .post-title,
  .blog-single .post-info {
    padding: 0;
  }

  .blog-single .tagcloud {
    border-top: 1px solid #f1f1f1;
    padding: 20px 0;
  }
  .tagcloud i {
    margin-right: 20px;
  }
  .tagcloud a {
    color: #777 !important;
    margin-right: 10px;
  }

  .categories-list-page {
    padding-bottom: 0;
    margin-bottom: -50px;
  }

  .widget {
    background-color: #fff;
    margin-bottom: 30px;
    overflow: hidden;
    padding: 20px 30px;
    position: relative;
    border: 1px solid #f1f1f1;
  }
  .widget .widget-heading {
    background-color: transparent;
    padding-bottom: 10px;
    text-transform: capitalize;
    margin-bottom: 20px;
    font-size: 18px;
    font-weight: 600;
  }
  .widget-heading .title {
    padding-bottom: 15px;
    border-bottom: 2px solid #097703;
  }
  .widget ul li a span {
    float: right;
  }
  .widget .categories-module {
    background-color: #fff;
  }
  .widget .categories-module li {
    border-bottom: 1px solid #f1f1f1;
    display: block;
    padding-bottom: 13px;
    padding-top: 13px;
  }
  .widget .categories-module li a {
    color: #242424;
    font-size: 14px;
    text-transform: capitalize;
  }
  .widget .categories-module li a:hover {
    color: #097703;
  }
  .widget ul li:last-child {
    border-bottom: none;
    padding-bottom: 0;
  }
  .widget .related-post li {
    position: relative;
    overflow: hidden;
    padding-bottom: 20px;
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
  }
  .widget .related-post li a {
    color: #242424;
    margin-bottom: 5px;
    position: relative;
    overflow: hidden;
    display: block;
    font-size: 18px;
    font-weight: 600;
  }
  .widget .related-post li a:hover {
    color: #097703;
  }
  .widget .related-post li span {
    position: relative;
    overflow: hidden;
    margin-bottom: 5px;
    display: block;
    font-size: 14px;
    color: #242424;
  }
  .widget .related-post li span i {
    color: #097703;
    position: relative;
    margin-right: 10px;
    font-size: 14px;
  }
  @media (min-width: 768px) and (max-width: 1279px) {
    aside {
      margin-top: 30px;
    }
  }
  @media (min-width: 320px) and (max-width: 767px) {
    section {
      padding: 50px 0;
      position: relative;
    }
  }

  .fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -moz-osx-font-smoothing: grayscale;
  }

  .fa-tags:before {
    content: "\f02c";
  }
  .fa-map-marker:before {
    content: "\f041";
  }
  .fa-calendar:before {
    content: "\f073";
  }

  @font-face {
    font-family: "FontAwesome";
    src: url("/fonts/fontawesome-webfont.eot?v=4.5.0");
    src: url("/fonts/fontawesome-webfont.eot#iefix&v=4.5.0")
        format("embedded-opentype"),
      url("/fonts/fontawesome-webfont.woff2?v=4.5.0") format("woff2"),
      url("/fonts/fontawesome-webfont.woff?v=4.5.0") format("woff"),
      url("/fonts/fontawesome-webfont.ttf?v=4.5.0") format("truetype"),
      url("/fonts/fontawesome-webfont.svg?v=4.5.0#fontawesomeregular")
        format("svg");
    font-weight: normal;
    font-style: normal;
  }
</style>

<Layout title="Work With Us">
  <section class="categories-list-page light-grey">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
          <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="blog-post">
              <div class="post-img">
                <img
                  src={blogPost.img_url}
                  alt={blogPost.slug}
                  class="img-responsive" />
              </div>
              <div class="blog-single">
                <div class="post-info">
                  <a href="#home">{blogPost.human_date}</a>
                  <a href="#home">{blogPost.author}</a>
                </div>
                <h3 class="post-title">{blogPost.title}</h3>
                {@html blogPost.content}
                <div class="tagcloud">
                  <i class="fa fa-tags" />
                  <a href="#home">#{blogPost.category}</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12">
            <aside>
              <div class="widget">
                <div class="widget-heading">
                  <span class="title">Hot Categories</span>
                </div>
                <ul class="categories-module">
                  {#each categories as cat}
                    <li>
                      <a href={route('app.news.category', cat.category_slug)}>
                        {cat.category}
                        <!-- <span>(1021)</span> -->
                      </a>
                    </li>
                  {/each}
                </ul>
              </div>
              <div class="widget">
                <div class="widget-heading">
                  <span class="title">Latest Articles</span>
                </div>
                <ul class="related-post">
                  {#each latestArticles as post}
                    <li>
                      <a href={route('app.news.post', post.slug)}>
                        {post.title}
                      </a>
                      <span>
                        <i class="fa fa-map-marker" />
                        {post.author}
                      </span>
                      <span>
                        <i class="fa fa-calendar" />
                        {post.human_date}
                      </span>
                    </li>
                  {/each}
                </ul>
              </div>

            </aside>
          </div>
        </div>
      </div>
    </div>
  </section>

  <ReachUs {app} />

  <LatestNews />

</Layout>
