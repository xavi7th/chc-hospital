<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import { Inertia } from "@inertiajs/inertia";
  import Layout from "@p-shared/PublicPagesLayout";
  import LatestNews from "@p-shared/Partials/LatestNews";
  import ReachUs from "@p-pages/Team/ReachUs";
  import FlashMessage from "@p-shared/FlashMessage";
  import route from "ziggy";
  import { onMount } from "svelte";

  $: ({ app, errors, flash, blogPosts, categories, latestArticles } = $page);

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

<style lang="scss">
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
  h3 {
    font-weight: 400;
    line-height: 1.4;
  }
  p {
    letter-spacing: 1px;
    line-height: 30px;
    font-size: 14px;
    color: #777;
  }
  a {
    outline: none !important;
    color: #242424;
    text-decoration: none;
    transition: all 0.3s ease 0s;
    &:hover {
      text-decoration: none !important;
    }
    &:focus {
      text-decoration: none !important;
    }
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
  .pagination-box {
    position: relative;
    overflow: hidden;
    text-align: center;
  }
  .pagination {
    margin: 0;
    > li {
      > a {
        padding: 10px 15px;
        color: #242424;
        font-size: 16px;
        border: none;
        margin-right: 10px;
        margin-bottom: 10px;
        border: 1px solid #f1f1f1;
        &:hover {
          background-color: #097703 !important;
          color: #fff;
          border: 1px solid #097703;
        }
      }
    }
    > li.active {
      > a {
        background-color: #097703;
        border: 1px solid #097703;
        font-weight: 600;
      }
    }
    > .active {
      > a {
        background-color: #097703;
        border: 1px solid #097703;
        &:focus {
          background-color: #097703;
          border: 1px solid #097703;
        }
        &:hover {
          background-color: #097703;
          border: 1px solid #097703;
        }
      }
    }
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
    a {
      color: inherit;
      text-decoration: none;
    }
  }
  .post-info {
    a {
      margin-right: 20px;
    }
    font-size: 14px;
    padding: 0 20px;
    font-weight: 600;
    text-transform: capitalize;
  }
  .post-img {
    margin-bottom: 30px;
    overflow: hidden;
    a {
      width: 100%;
      transition: all 2s;

      &::after {
        content: "";
        display: block;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.0015);
        transition: all 300ms ease;
      }
      &:hover {
        &::after {
          background-color: rgba(0, 0, 0, 0.5);
        }
      }
    }
  }
  .post-title {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 15px;
    margin-top: 10px;
    padding: 0 20px;
    text-transform: capitalize;
    transition: all 0.4s ease 0s;
    a {
      &:hover {
        color: #097703;
      }
    }
  }
  .post-excerpt {
    font-size: 14px;
    line-height: 26px;
    margin-bottom: 30px;
    padding: 0 20px;
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
    .widget-heading {
      background-color: transparent;
      padding-bottom: 10px;
      text-transform: capitalize;
      margin-bottom: 20px;
      font-size: 18px;
      font-weight: 600;
    }
    ul {
      li {
        a {
          span {
            float: right;
          }
        }
        &:last-child {
          border-bottom: none;
          padding-bottom: 0;
        }
      }
    }
    .categories-module {
      background-color: #fff;
      li {
        border-bottom: 1px solid #f1f1f1;
        display: block;
        padding-bottom: 13px;
        padding-top: 13px;
        a {
          color: #242424;
          font-size: 14px;
          text-transform: capitalize;
          &:hover {
            color: #097703;
          }
        }
      }
    }
    .related-post {
      li {
        position: relative;
        overflow: hidden;
        padding-bottom: 20px;
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        a {
          color: #242424;
          margin-bottom: 5px;
          position: relative;
          overflow: hidden;
          display: block;
          font-size: 18px;
          font-weight: 600;
          &:hover {
            color: #097703;
          }
        }
        span {
          position: relative;
          overflow: hidden;
          margin-bottom: 5px;
          display: block;
          font-size: 14px;
          color: #242424;
          i {
            color: #097703;
            position: relative;
            margin-right: 10px;
            font-size: 14px;
          }
        }
      }
    }
  }
  .widget-heading {
    .title {
      padding-bottom: 15px;
      border-bottom: 2px solid #097703;
    }
  }
  .fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
  }
  .fa-map-marker {
    &:before {
      content: "\f041";
    }
  }
  .fa-calendar {
    &:before {
      content: "\f073";
    }
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
</style>

<Layout title="News Articles">

  <section class="categories-list-page light-grey">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
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
          <div class="col-md-8 col-sm-12 col-xs-12">
            <div
              id="posts-masonry"
              class="posts-masonry"
              style="position: relative;">

              {#each blogPosts as post, idx}
                <div class="col-md-6 col-sm-6 col-xs-12" style="">
                  <div class="blog-post">
                    <div class="post-img">
                      <a href={post.img_url}>
                        <img
                          src={post.thumb_url}
                          data-enlarge="300"
                          alt=""
                          class="img-responsive" />
                      </a>
                    </div>
                    <div class="post-info">
                      <a href="#home">{post.human_date}</a>
                      <a href="#home">{post.author}</a>
                    </div>
                    <h3 class="post-title">
                      <a href={route('app.news.post', post.slug)}>
                        {post.title}
                      </a>
                    </h3>
                    <p class="post-excerpt">
                      {@html post.summary}
                    </p>
                  </div>
                </div>
                {#if (idx + 1) % 2 == 0}
                  <div class="clearfix" />
                {/if}
              {/each}

            </div>
            <!-- <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
              <div class="pagination-box clearfix">
                <ul class="pagination">
                  <li>
                    <a href="#home" aria-label="Previous">
                      <span aria-hidden="true">�</span>
                    </a>
                  </li>
                  <li class="active">
                    <a href="#home">1</a>
                  </li>
                  <li>
                    <a href="#home">2</a>
                  </li>
                  <li>
                    <a href="#home">3</a>
                  </li>
                  <li>
                    <a href="#home">4</a>
                  </li>
                  <li>
                    <a href="#home">5</a>
                  </li>
                  <li>
                    <a href="#home" aria-label="Next">
                      <span aria-hidden="true">�</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <ReachUs {app} />

  <LatestNews />

</Layout>
