<!DOCTYPE html>
<html lang="en">

<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147066526-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-147066526-1');
  </script>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="{base_url()}/images/wit-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="{base_url()}/styles/upcomingevents.css?v={jsversion()}" />

  <title>WiT | UPCOMING EVENTS</title>
</head>

<body>
  {include file='header.tpl'}
  <div class="upcomingEventsTopStyles">
    <div class="container-fluid bg-img-for-events-page">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 py-5">
            <h1 class="text-center Heading py-5 text-white">Upcoming Events</h1>
            <hr style="background-color: white;" />
          </div>
        </div>
      </div>

      <div class="container-fluid  pb-5 mb-5">
        <div class="container">
          <div class="row">
            <div
              class="col-sm-12  mt-5 p-3 p-sm-5 colRadius bg-white newsForDiv border border-warning border-top-0 border-right-0 border-bottom-0 ">
                <h1>Coming Soon...</h1>
            <!--  <div class="row ">
                <div class="col-md-4 col-12">
                  <img src="images/wit_event_sep_2019.png" alt="" style="height: auto; width:100%;" />
                </div>
                <div class="py-2 py-sm-0 col-md-8">
                  <h1 class=" text-center subHeading mb-3 mt-3">
                    WomenInTech(WiT) Growth Summit <br />
                    (Date- 16th Oct, 2019)
                  </h1>
                  <hr />
                  <p class="aboutTxtBound">
                    WomenInTech Growth Summit is one of a kind platform curated with a focus on women in STEM. The
                    Platform is the perfect opportunity for organisations to meet with talented women in the field of
                    STEM.
                  </p>
                  <p>Delegates can grow their network and meet STEM experts from the industry to expand their knowledge
                  </p>
                  <a href="{base_url()}/wit_growth_summit_2019" class="btn witBtn float-right bigBtn px-3">
                    FIND MORE</a>
                </div>
              </div>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {include file= 'footer.tpl'}
</body>

</html>

































<!-- // ******************************************************************* -->
<!-- {load_presentation_object filename='upcomingEvents' assign='obj'}
<!DOCTYPE html>
<html lang="en">
  <head> -->
<!-- Required meta tags -->
<!-- <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    /> -->

<!-- Bootstrap CSS -->
<!-- <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="styles/upcomingevents.css" />

    <title>Upcoming Events</title>
  </head>
  <body>
    
    <div class="container-fluid eventsContainer">
      <p class="subHeading justify-content-center">UPCOMING EVENTS</p>
      <div class="container-fluid cont">
        <div class="column">
          {foreach from=$obj->upcomingEvents item=eventDetails}
          <div class="col-md-12 singleEventContainer">
            <div class="row">
              <div class="col-md-2 p-0">
                <div class="imageContainer">
                  <img src="images/mentor.jpg" class="img-fluid eventImage" />
                </div>
              </div>
              <div class="col-md-10 pr-0">
                <div class="column">
                  <div class="col-md-12">
                    <div class="eventName">
                      <a href="#">{$eventDetails.event_name}</a>
                    </div>
                    <div class="eventType">
                      <p class="eventText">{$eventDetails.event_type}</p>
                      <div class="eventDescription">
                        {$eventDetails.event_description}
                      </div>
                      <div class="eventDate">
                        DATE: <span>{$eventDetails.event_date}</span>
                      </div>
                      <div class="startTime">
                        START TIME:<span>{$eventDetails.event_time}</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 pr-0">
                    <div class="row">
                      <div class="col-md-10"></div>
                      <div class="col-md-2 px-0">
                        <div class="col-md-12 col-sm-12 col-lg-12 px-0">
                          <button
                            class="findOutMoreBtn btn  btn-md btn-sm btn-lg"
                          >
                            FIND OUT MORE
                            <span class="rightArrow"></span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {/foreach}
        </div>
      </div>
    </div> -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html> -->