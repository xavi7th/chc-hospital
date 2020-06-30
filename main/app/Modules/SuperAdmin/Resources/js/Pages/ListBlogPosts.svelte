<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import { Inertia } from "@inertiajs/inertia";
  import Layout from "@s-shared/SuperAdminLayout";
  import FlashMessage from "@p-shared/FlashMessage";
  import route from "ziggy";

  $: ({ app, status, flash } = $page);

  export let blogPosts = [];

  let deleteBlogPost = id => {
    swalPreconfirm
      .fire({
        confirmButtonText: "Carry on!",
        text: "This will permanently delete this news article from the site",
        preConfirm: () => {
          return Inertia.delete(route("superadmin.delete_blog_post", id));
        }
      })
      .then(val => {
        if (undefined === status) {
          if (val.isDismissed) {
            Toast.fire({
              title: "Canceled",
              icon: "info",
              position: "center"
            });
          } else if (flash.success) {
            ToastLarge.fire({
              title: "Success",
              html: `News article has been deleted`,
              position: "bottom",
              icon: "success",
              timer: 10000
            });
          }
        }
      });
  };
</script>

<style lang="scss">
  :global(.btn-xs) {
    margin-left: auto;
    margin-right: 0;
    display: inline-block;
  }
</style>

<Layout title="View Blog Posts">
  <div class="document">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="timeline">
              {#each blogPosts as post, idx}
                <div class="timeline-item" class:timeline-item-right={idx % 2}>
                  <div class="timeline-point">
                    <div class="badge badge-primary badge-xxl badge-dot" />
                  </div>
                  <div class="timeline-detail">
                    <span>
                      {new Date(post.created_at).toDateString()} - {new Date(post.created_at).toLocaleTimeString()}
                    </span>
                  </div>
                  <div class="timeline-content">
                    <div>
                      <img
                        src={post.thumb_url}
                        alt="lead post img"
                        class="img-responsive" />
                      <h4 class="timeline-title">{post.title}</h4>
                    </div>
                    <InertiaLink
                      href={route('superadmin.blog_post', post.id)}
                      class="btn btn-success btn-w-sm btn-xs">
                      View
                    </InertiaLink>
                    <button
                      type="button"
                      class="btn btn-danger btn-outline btn-bold btn-w-sm btn-xs"
                      on:click={deleteBlogPost(post.id)}>
                      Delete
                    </button>
                  </div>
                </div>
              {:else}
                <div class="timeline-item">
                  <div class="timeline-point">
                    <div class="badge badge-primary badge-xxl badge-dot" />
                  </div>
                  <div class="timeline-detail">
                    <span>{new Date().toDateString()}</span>
                  </div>
                  <div class="timeline-content">
                    <div>
                      <p class="timeline-title">
                        THERE ARE NO NEWS ARTICLES AT THE MOMENT
                      </p>
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
</Layout>
