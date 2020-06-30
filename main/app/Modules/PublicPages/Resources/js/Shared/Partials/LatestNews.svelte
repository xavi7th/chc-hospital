<script>
  import axios from "axios";
  import { truncateString } from "@p-shared/utils";
  import moment from "moment";

  let articles = [];
  let randomPage = Math.floor(Math.random() * (+25 - +1)) + +1;
  axios
    .get(
      `https://content.guardianapis.com/search?show-fields=thumbnail,body&q=(hospital AND nigeria)&page-size=3&page=${randomPage}&api-key=c32411c3-597d-41db-907c-660d17ed905d`
    )
    .then(({ data: { response: { results } } }) => {
      articles = results;
    });
</script>

<section class="blog-home sec-padding">
  <div class="container">
    <div class="sec-title text-center">
      <h2>Latest News</h2>
      <p>Stay updated on the latest news</p>
      <span class="decor">
        <span class="inner" />
      </span>
    </div>
    <div class="row">
      {#each articles as newsItem}
        <div class="col-md-4 col-sm-6">
          <div class="single-blog-post">
            <div class="img-box">
              <img src={newsItem.fields.thumbnail} alt="" />

            </div>
            <div class="content-box">
              <div class="date-box">
                <div class="inner">
                  <div class="date">
                    <b>{new Date(newsItem.webPublicationDate).getDate()}</b>
                    {moment(newsItem.webPublicationDate).format('MMM')}
                  </div>

                </div>
              </div>
              <div class="content">
                <a href={newsItem.webUrl} target="_blank">
                  <h3>{newsItem.webTitle}</h3>
                </a>
                <p>
                  {truncateString(newsItem.fields.body, 150)}
                  <span>
                    <a href={newsItem.webUrl} target="_blank">read more</a>
                  </span>
                </p>

              </div>
            </div>
          </div>
        </div>
      {/each}

    </div>
  </div>
</section>
