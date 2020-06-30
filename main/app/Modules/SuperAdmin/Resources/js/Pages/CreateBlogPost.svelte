<script>
  import { page, InertiaLink, remember } from "@inertiajs/inertia-svelte";
  import { Inertia } from "@inertiajs/inertia";
  import Layout from "@s-shared/SuperAdminLayout";
  import FlashMessage from "@p-shared/FlashMessage";
  import { onMount } from "svelte";
  import route from "ziggy";

  $: ({ app, flash, errors, categories, blogPost } = $page);

  let details = remember({}),
    pageLoaded = false;

  let attachFile = e => {
    details.post_img = e.target.files[0];
  };

  let createBlogPost = () => {
    if (jQuery(".summernote").summernote("isEmpty")) {
      ToastLarge.fire({
        title: "Pssst!",
        html: "Every news article needs a <b>content</b> to be read 🤷‍♂️.",
        icon: "warning"
      });
    } else {
      details.content = jQuery(".summernote").summernote("code");
      BlockToast.fire({
        title: "Please wait!",
        text: `Creating news article...`
      });

      let formData = new FormData();

      _.forEach(details, (val, key) => {
        formData.append(key, val);
      });

      Inertia.post(route("superadmin.create_blog_post"), formData, {
        headers: {
          "Content-Type": "multipart/form-data"
        },
        preserveState: true,
        preserveScroll: true
      }).then(() => {
        if (flash.success) {
          details = {};
          ToastLarge.fire({
            title: "Success",
            html: flash.success,
            icon: "success"
          });
        } else {
          swal.close();
        }
      });
    }
  };

  onMount(() => {
    setTimeout(() => {
      jQuery(".summernote").summernote({
        height: 300,
        toolbar: [
          ["style", ["bold", "italic", "underline", "clear"]],
          ["font", ["fontname"]],
          ["fontsize", ["fontsize"]],
          ["color", ["color"]],
          ["para", ["ul", "ol", "paragraph"]],
          ["height", ["height"]],
          ["table", ["table"]],
          ["insert", ["link", "picture"]],
          ["view", ["help"]]
        ]
      });
    }, 2000);

    return jQuery(".summernote").summernote("destroy");
  });
</script>

<style lang="scss">
  .timeline {
    &:after {
      left: 7px;
    }
    .timeline-item {
      width: 100%;
      min-width: 100%;
      padding-right: 0 !important;
      padding-left: 25px;

      .no-bg {
        background: transparent;
        box-shadow: none;
      }

      .timeline-point {
        right: auto;
        left: 0;
      }
    }
  }
</style>

<Layout title="Create Blog Post">
  <div class="content">
    <div class="document">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-9">
              <div class="fs-18 fw-600 text-center mb-30 text-title">
                Fill the form below to create a news article on the website
              </div>
              <form on:submit|preventDefault={createBlogPost}>
                <FlashMessage isGeneralError={true} />

                <div class="row mb-20">

                  <div class="col-md-3">
                    <div class="form-group" class:has-danger={errors.author}>
                      <label class="form-control-label" for="author">
                        Author
                      </label>
                      <input
                        type="text"
                        class="form-control"
                        class:form-control-danger={errors.author}
                        bind:value={details.author}
                        id="author" />
                      <FlashMessage msg={errors.author} />
                    </div>
                  </div>

                  <div class="col-md-9">
                    <div class="form-group" class:has-danger={errors.title}>
                      <label class="form-control-label" for="post-title">
                        Post Title
                      </label>
                      <input
                        type="text"
                        class="form-control"
                        class:form-control-danger={errors.title}
                        bind:value={details.title}
                        id="post-title" />
                      <FlashMessage msg={errors.title} />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group" class:has-danger={errors.category}>
                      <label class="form-control-label" for="category">
                        Category
                      </label>
                      <input
                        type="text"
                        class="form-control"
                        class:form-control-danger={errors.category}
                        bind:value={details.category}
                        id="category" />
                      <FlashMessage msg={errors.category} />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group" class:has-danger={errors.post_img}>
                      <label class="form-control-label" for="post-img">
                        Lead Image
                      </label>
                      <input
                        type="file"
                        class="form-control"
                        class:form-control-danger={errors.post_img}
                        on:change={attachFile}
                        id="post-img" />
                      <FlashMessage msg={errors.post_img} />
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="summernote" />
                    <FlashMessage msg={errors.content} />
                  </div>

                </div>

                <div class="form-group flex j-c-center mt-30">
                  <button class="btn btn-primary btn-shadow btn-round">
                    Create Article
                  </button>
                </div>
              </form>
            </div>
            <div class="col-md-3 p-0">
              <div class="card">
                <div class="card-title">
                  <h4>List of Existing Categories</h4>
                </div>
                <div class="card-body p-5">
                  <div class="timeline m-0 p-0 w-100p">
                    {#each categories as category, idx}
                      <div class="timeline-item m-0">
                        <div class="timeline-point">
                          <div
                            class="badge badge-primary badge-xxl badge-dot" />
                        </div>
                        <div class="timeline-content p-0 no-bg">
                          <div>
                            <h5 class="timeline-title">{category.category}</h5>
                          </div>
                        </div>
                      </div>
                    {:else}
                      <div class="timeline-item">
                        <div class="timeline-point">
                          <div
                            class="badge badge-primary badge-xxl badge-dot" />
                        </div>
                        <div class="timeline-content">
                          <div>
                            <p>Empty list</p>
                          </div>
                        </div>
                      </div>
                    {/each}

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</Layout>
