{load_presentation_object filename='eventMasterRegister' assign='obj'}
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="{base_url()}/images/wit-favicon.ico" type="image/x-icon" />
  <title>WiT | WIT GROWTH SUMMIT EVENT | Wit EVENT</title>
  <link rel="stylesheet" type="text/css" href="{base_url()}/styles/pastspecificevent.css?v={jsversion()}" />
</head>

<body>
  <div class="loader"></div>
  {include file='header.tpl'}
  <div style="margin-top: 7.7rem !important;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4 offset-sm-4 text-center">
          <img src="{base_url()}/images/event_partner_logo/wit_master_class_logo.png" width="150" height="150" alt="">
        </div>
        <div class="col-sm-12">
          <h4 class="text-center">Please Register your self for WiT Master Classes</h4>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row no-gutters">
        <div class="col-sm-12">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr class="text-center">
                  <th>Timing</th>
                  <th>Tech Focused</th>
                  <th>Personal Growth</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">12:00-12:45</td>
                  <td class="text-center bgfirst" rowspan=3>
                    <span class="badge float-right {if $obj->classesTotalCount[0].machine
                    < 40 }badge-success{else}badge-danger{/if}">{$obj->classesTotalCount[0].machine} / 40</span>
                    {if $obj->classesTotalCount[0].machine
                    < 40 } <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input secondsessionzero separateone"
                        name="masterclasses" id="machine"
                        value="Machine Learning & Deep Learning- STEPS TOWARDS TRUE AI" />
                      <label class="custom-control-label" for="machine"></label>
          </div>
          {/if}

          <p class="px-5 my-5 text-white">Machine Learning & Deep Learning<br> - STEPS TOWARDS TRUE AI</p>
          </td>
          <td class="text-center bgSecond" rowspan="2">
            <span class="badge float-right {if $obj->classesTotalCount[0].idealmentor
            < 40 }badge-success{else}badge-danger{/if}">{$obj->classesTotalCount[0].idealmentor} / 40</span>
            {if $obj->classesTotalCount[0].idealmentor
            < 40 } <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input secondsessionzero" name="masterclasses"
                id="idealmentor" value="Finding Your Ideal Mentor - What you need to know">
              <label class="custom-control-label" for="idealmentor"></label>
        </div>
        {/if}
        <p class="text-white mt-1">Finding Your Ideal Mentor - <br>What you need to know</p>
        </td>
        </tr>
        <tr>
          <td class="text-center">12:45-01:00</td>
        </tr>
        <tr>
          <td class="text-center"><br>01:00-01:30</td>
          <td class="text-center bgSecond">
            <span class="badge float-right {if $obj->classesTotalCount[0].speedmentoring
            < 40 }badge-success{else}badge-danger{/if}">{$obj->classesTotalCount[0].speedmentoring} / 40</span>
            {if $obj->classesTotalCount[0].speedmentoring
            < 40 } <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input separateoption" name="masterclasses"
                id="speedmentoring" value="Group Speed Mentoring">
              <label class="custom-control-label" for="speedmentoring"></label>
      </div>
      {/if}
      <p class="text-white mt-1">Group Speed Mentoring</p>
      </td>
      </tr>
      <tr class="text-center text-danger">
        <td>01:30-02:15</td>
        <td>45 Mins</td>
        <td>Lunch Break</td>
      </tr>
      <tr>
        <td class="text-center"><br>02:15-02:45</td>
        <td class="text-center bgfirst" rowspan="2">
          <span class="badge float-right {if $obj->classesTotalCount[0].datascience
          < 40 }badge-success{else}badge-danger{/if}">{$obj->classesTotalCount[0].datascience} / 40</span>
          {if $obj->classesTotalCount[0].datascience
          < 40 } <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input secondsessionone" name="masterclasses" id="datascience"
              value="Data Science: Beyond the Hype">
            <label class="custom-control-label" for="datascience"></label>
    </div>
    {/if}
    <p class="text-white mt-3">Data Science: Beyond the Hype</p>
    </td>
    <td class="text-center bgSecond" rowspan="2">
      <span class="badge float-right {if $obj->classesTotalCount[0].selfimage
      < 40 }badge-success{else}badge-danger{/if}">{$obj->classesTotalCount[0].selfimage} / 40</span>
      {if $obj->classesTotalCount[0].selfimage
      < 40 } <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input secondsessionone" name="masterclasses" id="selfimage"
          value="Creating a stronger self image">
        <label class="custom-control-label" for="selfimage"></label>
  </div>
  {/if}
  <p class="text-white mt-3">Creating a stronger self image</p>
  </td>
  </tr>
  <tr>
    <td class="text-center">02:45-03:00</td>
  </tr>
  <tr>
    <td class="text-center">03:00-03:30</td>
    <td class="text-center bgfirst" rowspan="3">
      <span class="badge float-right {if $obj->classesTotalCount[0].virtulreality
      < 40 }badge-success{else}badge-danger{/if}">{$obj->classesTotalCount[0].virtulreality} / 40</span>
      {if $obj->classesTotalCount[0].virtulreality
      < 40 } <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input secondsessionthird" name="masterclasses" id="virtulreality"
          value="Beyond Gaming : The reality of Virtual Reality">
        <label class="custom-control-label" for="virtulreality"></label>
        </div>
        {/if}
        <p class="text-white mt-3">Beyond Gaming : The reality of<br> Virtual Reality</p>
    </td>
    <td class="text-center bgSecond" rowspan="3">
      <span class="badge float-right {if $obj->classesTotalCount[0].highperformer
      < 40 }badge-success{else}badge-danger{/if}">{$obj->classesTotalCount[0].highperformer} / 40</span>
      {if $obj->classesTotalCount[0].highperformer
      < 40 } <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input secondsessionthird" name="masterclasses" id="highperformer"
          value="Transforming Self into a High Performer" data-temp="classsdkjnj">
        <label class="custom-control-label" for="highperformer"></label>
        </div>
        {/if}
        <p class="text-white mt-3">Transforming Self into a High Performer</p>
    </td>
    <!-- <td class="text-center bgfirst" rowspan="2">
      <span class="badge badge-light float-right">{$obj->classesTotalCount[0].fiveforfive} / 40</span>
      {if $obj->classesTotalCount[0].fiveforfive
      < 40 } <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input secondsessiontwo" name="masterclasses" id="fiveforfive"
          value="FIVE FOR FIVE: Top 5 trends important for business over the next 5 years">
        <label class="custom-control-label" for="fiveforfive"></label>
        </div>
        {/if}
        <p class="text-white">FIVE FOR FIVE: Top 5 trends important<br> for business over the next 5 years</p>
    </td> -->
    <!-- <td class="text-center bgSecond" rowspan="2">
      <span class="badge badge-light float-right">{$obj->classesTotalCount[0].techie} / 40</span>
      {if $obj->classesTotalCount[0].techie
      < 40 } <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input secondsessiontwo" name="masterclasses" id="techie"
          value="Your role in changing the 'TECHIE' stereotype">
        <label class="custom-control-label" for="techie"></label>
        </div>
        {/if}
        <p class="text-white">Your role in changing the<br> 'TECHIE' stereotype</p>
    </td> -->
  </tr>
  <tr>
    <td class="text-center">03:30-03:45</td>
  </tr>
  <tr>
    <td class="text-center">03:45-04:00</td>
  </tr>

  <!-- <tr class="text-center text-danger">
    <td>01:30-02:15</td>
    <td>45 Mins</td>
    <td>Lunch Break</td>
  </tr>
  <tr>
    <td class="text-center">02:15-02:45</td>
    <td class="text-center bgfirst" rowspan="3">
      <span class="badge badge-light float-right">{$obj->classesTotalCount[0].virtulreality} / 40</span>
      {if $obj->classesTotalCount[0].virtulreality
      < 40 } <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input secondsessionthird" name="masterclasses" id="virtulreality"
          value="Beyond Gaming : The reality of Virtual Reality">
        <label class="custom-control-label" for="virtulreality"></label>
        </div>
        {/if}
        <p class="text-white mt-3">Beyond Gaming : The reality of<br> Virtual Reality</p>
    </td>
    <td class="text-center bgSecond" rowspan="3">
      <span class="badge badge-light float-right">{$obj->classesTotalCount[0].agile} / 40</span>
      {if $obj->classesTotalCount[0].agile
      < 40 } <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input secondsessionthird" name="masterclasses" id="agile"
          value="The art of going fast - IS AGILE THE ANSWER">
        <label class="custom-control-label" for="agile"></label>
        </div>
        {/if}
        <p class="text-white mt-3">The art of going fast -<br>IS AGILE THE ANSWER</p>
    </td>
  </tr>
  <tr>
    <td class="text-center">02:45-03:00</td>
  </tr>
  <tr>
    <td class="text-center">03:00-03:30</td>
  </tr>
  <tr>
    <td class="text-center">03:30-03:45</td>
    <td class="text-center bgfirst" rowspan="2">
      <span class="badge badge-light float-right">{$obj->classesTotalCount[0].digitalproduct} / 40</span>
      {if $obj->classesTotalCount[0].digitalproduct
      < 40 } <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input secondsessionfour" name="masterclasses" id="digitalproduct"
          value="Building a Digital Consumer product">
        <label class="custom-control-label" for="digitalproduct"></label>
        </div>
        {/if}
        <p class="text-white mt-1">Building a Digital Consumer product</p>
    </td>
    <td class="text-center bgSecond" rowspan="2">
      <span class="badge badge-light float-right">{$obj->classesTotalCount[0].highperformer} / 40</span>
      {if $obj->classesTotalCount[0].highperformer
      < 40 } <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input secondsessionfour" name="masterclasses" id="highperformer"
          value="Transforming Self into a High Performer" data-temp="classsdkjnj">
        <label class="custom-control-label" for="highperformer"></label>
        </div>
        {/if}
        <p class="text-white mt-1">Transforming Self into a High Performer</p>
    </td>
  </tr>
  <tr>
    <td class="text-center">03:45-04:00</td>
  </tr> -->
  </tbody>
  </table>
  </div>
  <div class="col-sm-4 offset-sm-4 py-5">
    <div class="form-group">
      <label for="">Please Enter Your Email<span class="text-danger">*</span></label>
      <input type="text" class="form-control email" placeholder="Enter Email">
    </div>
    <div class="form-group mt-4">
      <button class="btn btn-block witBtn eventclassdata">Submit</button>
    </div>
  </div>
<!--  <div class="col-sm-4 offset-sm-4 text-center my-5">
    <a class="btn btn-secondary px-5 skiptoclass text-white">Skip</a>
  </div>-->
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>


  {include file ='footer.tpl'}
  <script src="{base_url()}/js/event_candidate_registration.js?v={jsversion()}"></script>
  <script src="{base_url()}/js/witsponsorclass.js?v={jsversion()}"></script>
  <script>
    $(document).ready(function () {
      $('input.secondsessionzero').on('change', function () {
        $('input.secondsessionzero').not(this).prop('checked', false);
      });
      $('input.secondsessionone').on('change', function () {
        $('input.secondsessionone').not(this).prop('checked', false);
      });
      $('input.secondsessiontwo').on('change', function () {
        $('input.secondsessiontwo').not(this).prop('checked', false);
      });
      $('input.secondsessionthird').on('change', function () {
        $('input.secondsessionthird').not(this).prop('checked', false);
      });
      $('input.secondsessionfour').on('change', function () {
        $('input.secondsessionfour').not(this).prop('checked', false);
      });
      $('.separateone').on('click', function () {
        $('.separateoption').prop('checked', false);
      });
      $('.separateoption').on('click', function () {
        $('.separateone').prop('checked', false);
      });
    });
  </script>
</body>

</html>