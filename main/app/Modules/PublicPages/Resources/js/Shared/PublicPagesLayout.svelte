<script>
  import PageLoader from "@p-shared/PageLoader";
  import Header from "@p-shared/Partials/Header";
  import PageTitle from "@p-shared/Partials/PageTitle";
  import Footer from "@p-shared/Partials/Footer";
  import { fade } from "svelte/transition";
  import { afterUpdate, onMount, tick, beforeUpdate } from "svelte";
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import { toCurrency } from "@p-shared/utils";
  import { Inertia } from "@inertiajs/inertia";
  import route from "ziggy";

  let isLoaded = false,
    pageLoaded = false;

  $: ({ errors, auth, isInertiaRequest } = $page);

  let getRandomInt = max => {
    return Math.floor(Math.random() * Math.floor(max));
  };

  let deleteTrans = trans => {
    swal
      .fire({
        title: "Are you sure?",
        text: "User account will be permanently deleted",
        icon: "question",
        showCloseButton: false,
        allowOutsideClick: () => !swal.isLoading(),
        allowEscapeKey: false,
        showCancelButton: true,
        focusCancel: true,
        cancelButtonColor: "#d33",
        confirmButtonColor: "#725ec3",
        confirmButtonText: "Yes, carry on!",
        showLoaderOnConfirm: true,
        preConfirm: () => {
          return Inertia.delete(
            route("superadmin.transaction.delete", trans.id)
          )
            .then(() => {
              if (_.size(errors) === 0) {
                return true;
              } else {
                console.log(errors);
                throw new Error(errors);
              }
            })
            .catch(error => {
              swal.showValidationMessage(`Request failed: ${error}`);
            });
        }
      })
      .then(result => {
        if (result.dismiss && result.dismiss == "cancel") {
          swal.fire(
            "Canceled!",
            "You canceled the action. Nothing was changed",
            "info"
          );
        }
      });
  };

  let handleLogin = e => {
    let emailField = e.target.getElementsByTagName("input")[0];
    let passwordField = e.target.getElementsByTagName("input")[1];
    emailField.setCustomValidity("");

    if (e.target.checkValidity() === false) {
      e.stopPropagation();
      e.target.classList.add("was-validated");
      errors = {
        email: [emailField.validationMessage],
        password: [passwordField.validationMessage]
      };
      return;
    } else {
      BlockToast.fire({ text: "Accessing your dashboard..." });
      e.target.classList.remove("was-validated");
      Inertia.post(route("app.login"), details).then(() => {
        swal.close();
        if (_.size(errors) === 0 && !flash.error) {
          // location.reload();
        } else {
          e.target.classList.add("was-validated");
          emailField.setCustomValidity("There are errors on your form");
        }
      });
    }
  };

  let details = {};
  let files;

  let attachFile = e => {
    /**
     * Check the sample pages for the way they built their text inputy file component
     */
    details.id_card = e.target.files[0];
  };

  let uploadProofOfPayment = () => {
    BlockToast.fire({
      text: "Sending proof of payment..."
    });
    let formData = new FormData();

    formData.append("_method", "PUT");
    _.forEach(details, (val, key) => {
      formData.append(key, val);
    });

    Inertia.post(route("appuser.investment.upload_pop"), formData, {
      headers: {
        "Content-Type": "multipart/form-data"
      }
    }).then(() => {
      // swal.close();
      if (flash.success) {
        files = null;
        details.id_card = null;
        Toast.fire({
          title: "Successful!",
          text: "Proof uploaded successfully"
        });
      } else {
        swal.close();
      }
    });
  };

  let makeDepositRequest = () => {
    BlockToast.fire({
      text: "Processing investment request..."
    });
    Inertia.post(route("appuser.investment.deposit"), details).then(() => {
      details.depositAmt = null;
      swal.close();
    });
  };

  new Date($page.auth.user.created_at).toDateString();

  afterUpdate(() => {
    isLoaded = true;
    // let bodyElem = document.querySelector("body");
    // bodyElem.classList.add("skin-blue", "sidebar-mini");
    // bodyElem.classList.remove("login-page");
  });

  beforeUpdate(() => {
    if (has_pop) {
      Inertia.replace(route("appuser.investment"));
    }
  });

  console.log($page);

  export let title, has_pop;
</script>

<svelte:head>
  <title>{title}</title>
</svelte:head>

{#if !pageLoaded && !isInertiaRequest}
  <PageLoader />
{:else if !pageLoaded && isInertiaRequest}
  <PageLoader transparent={true} />
{/if}

{#if !route().current('app.login.show')}
  <Header />
{/if}

{#if !route().current('app.home') && !route().current('app.login.show')}
  <PageTitle {title} />
{/if}

<div class="What do you know">
  <slot />
</div>
{#if !route().current('app.login.show')}
  <Footer />
{/if}

{#if isLoaded}
  <script src="/js/public-vendor.js">

  </script>
{/if}
