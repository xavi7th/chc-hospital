<script>
    import route from "ziggy";
    export let title;
</script>

<style>
    .inner-header {
        padding: 0 !important;
    }
</style>

<section class="inner-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 sec-title colored text-center">
                <h2>{title}</h2>
                <ul class="breadcumb">
                    <li>
                        <a href={route('app.home')}>Home</a>
                    </li>
                    <li>
                        <i class="fa fa-angle-right" />
                    </li>
                    <li>
                        <span>{title}</span>
                    </li>
                </ul>
                <span class="decor">
                    <span class="inner" />
                </span>
            </div>
        </div>
    </div>
</section>
