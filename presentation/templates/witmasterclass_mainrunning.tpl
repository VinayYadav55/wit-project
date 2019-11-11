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
                  <td class="text-center bgfirst">
                    <span class="badge float-right {if $obj->classesTotalCount[0].dressupwithdata
                        < 40 }badge-success{else}badge-danger{/if}">{$obj->classesTotalCount[0].dressupwithdata} /
                      40</span>
                    {if $obj->classesTotalCount[0].dressupwithdata
                    < 40 } <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input secondsessiontwo" name="masterclasses"
                        id="dressupwithdata" value="DRESS UP WITH DATA">
                      <label class="custom-control-label" for="dressupwithdata"></label>
          </div>
          {/if}
          <p class="text-white mt-3">DRESS UP WITH DATA !<br>
            ( Kuntal Malia, Co-founder at
            StyleNook)</p>
          </td>
          <td class="text-center bgSecond">
            <span class="badge float-right {if $obj->classesTotalCount[0].selfimage
                < 40 }badge-success{else}badge-danger{/if}">{$obj->classesTotalCount[0].selfimage} / 40</span>
            {if $obj->classesTotalCount[0].selfimage
            < 40 } <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input secondsessiontwo" name="masterclasses" id="selfimage"
                value="CREATING A STRONGER SELF IMAGE" />
              <label class="custom-control-label" for="selfimage"></label>
        </div>
        {/if}
        <p class="text-white mt-3">CREATING A STRONGER SELF IMAGE<br>
          (Aadil Bandukwala, TitleChief Evangelist &<br> Vice President Marketing,
          Belong.co)</p>
        </td>
        </tr>
        <tr>
          <td class="text-center">12:45-01:15</td>
          <td class="text-center bgfirst" rowspan="3">
            <span class="badge float-right {if $obj->classesTotalCount[0].buildingproduct
                    < 40 }badge-success{else}badge-danger{/if}">{$obj->classesTotalCount[0].buildingproduct} /
              40</span>
            {if $obj->classesTotalCount[0].buildingproduct
            < 40 } <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input secondsessionzero separateone" name="masterclasses"
                id="buildingproduct" value="BUILDING A DIGITAL CONSUMER PRODUCT" />
              <label class="custom-control-label" for="buildingproduct"></label>
      </div>
      {/if}

      <p class="px-5 my-5 text-white">BUILDING A DIGITAL CONSUMER
        PRODUCT<br><br>
        (Chaitanya Peddi, Cofounder and
        Product Head at Darwinbox)</p>
      </td>
      <td class="text-center bgSecond">
        <span class="badge float-right {if $obj->classesTotalCount[0].nextlevelcareer
            < 40 }badge-success{else}badge-danger{/if}">{$obj->classesTotalCount[0].nextlevelcareer} / 40</span>
        {if $obj->classesTotalCount[0].nextlevelcareer
        < 40 } <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input secondsessionzero" name="masterclasses"
            id="nextlevelcareer" value="DO YOU HAVE WHAT IT TAKES? TAKING YOUR CAREER TO THE NEXT LEVEL">
          <label class="custom-control-label" for="nextlevelcareer"></label>
    </div>
    {/if}
    <p class="text-white mt-1">DO YOU HAVE WHAT IT TAKES?<br> TAKING YOUR CAREER TO THE NEXT LEVEL<br>
      (Lynne Highway, HR Director for Services &<br> Functions at RBS)</p>
    </td>
    </tr>
    <tr>
      <td class="text-center" rowspan="2">01:15-01:45</td>
    </tr>
    <tr>

      <td class="text-center bgSecond">
        <span class="badge float-right {if $obj->classesTotalCount[0].idealmentor
            < 40 }badge-success{else}badge-danger{/if}">{$obj->classesTotalCount[0].idealmentor} / 40</span>
        {if $obj->classesTotalCount[0].idealmentor
        < 40 } <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input separateoption" name="masterclasses" id="idealmentor"
            value="FINDING YOUR IDEAL MENTOR - WHAT YOU NEED TO KNOW">
          <label class="custom-control-label" for="idealmentor"></label>
  </div>
  {/if}
  <p class="text-white mt-1">FINDING YOUR IDEAL MENTOR - <br>WHAT YOU NEED TO KNOW<br>
    (Shweta Kumar, CEO, ODA)</p>
  </td>
  </tr>
  <tr class="text-center text-danger">
    <td>01:45-02:15</td>
    <td>30 Mins</td>
    <td>Lunch Break</td>
  </tr>
  <tr>
    <td class="text-center"><br>02:15-02:40</td>
    <td class="text-center bgfirst" rowspan="4">
      <span class="badge float-right {if $obj->classesTotalCount[0].machine
          < 40 }badge-success{else}badge-danger{/if}">{$obj->classesTotalCount[0].machine} / 40</span>
      {if $obj->classesTotalCount[0].machine
      < 40 } <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input secondsessionone" name="masterclasses" id="machine"
          value="MACHINE LEARNING & DEEP LEARNING - STEPS TOWARDS TRUE AI">
        <label class="custom-control-label" for="machine"></label>
        </div>
        {/if}
        <p class="text-white mt-3">MACHINE LEARNING & DEEP
          LEARNING - STEPS TOWARDS TRUE AI<br><br>
          (Sudipta Banerjee, CTO of Wynk
          music, Airtel TV)</p>
    </td>
    <td class="text-center bgSecond" rowspan="4">
      <span class="badge float-right {if $obj->classesTotalCount[0].speedmentoring
          < 40 }badge-success{else}badge-danger{/if}">{$obj->classesTotalCount[0].speedmentoring} / 40</span>
      {if $obj->classesTotalCount[0].speedmentoring
      < 40 } <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input secondsessionone" name="masterclasses" id="speedmentoring"
          value="GROUP SPEED MENTORING">
        <label class="custom-control-label" for="speedmentoring"></label>
        </div>
        {/if}
        <p class="text-white mt-3">GROUP SPEED MENTORING<br><br>
          (Manas Mishra, CoFounder, Altitudes)<br>
          (Juhee Sinha, Personal brand and Image consultant)<br>
          (Mayank Verma, Facilitator & Performance Coach)<br>
          (Shweta Kumar, CEO, ODA)<br>
          (Amit Tyagi, Director at CDAS Hospital)</p>
    </td>
  </tr>
  <tr>
    <td class="text-center">02:40-02:50</td>
  </tr>
  <tr>
    <td class="text-center">02:50-03:10</td>
  </tr>
  <tr>
    <td class="text-center">03:10-03:20</td>
  </tr>
  <tr>
    <td class="text-center">03:20-04:00</td>
    <td class="text-center bgfirst" rowspan="3">
      <span class="badge float-right {if $obj->classesTotalCount[0].formtwotable
          < 40 }badge-success{else}badge-danger{/if}">{$obj->classesTotalCount[0].formtwotable} / 40</span>
      {if $obj->classesTotalCount[0].formtwotable
      < 40 } <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input secondsessionthird" name="masterclasses" id="formtwotable"
          value="FROM FARM TO TABLE – STEM@FMCG">
        <label class="custom-control-label" for="formtwotable"></label>
        </div>
        {/if}
        <p class="text-white mt-3">FROM FARM TO TABLE – STEM@FMCG<br><br>

          ( Ms. Priyanka Virmani, Head –
          Regulatory &<br> Scientific Affairs, Nestlé
          South Asia)</p>
    </td>
    <td class="text-center bgSecond" rowspan="3">
      <span class="badge float-right {if $obj->classesTotalCount[0].mindmap
          < 40 }badge-success{else}badge-danger{/if}">{$obj->classesTotalCount[0].mindmap} / 40</span>
      {if $obj->classesTotalCount[0].mindmap
      < 40 } <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input secondsessionthird" name="masterclasses" id="mindmap"
          value="MIND MAPPING FOR LADY PROFESSIONALS">
        <label class="custom-control-label" for="mindmap"></label>
        </div>
        {/if}
        <p class="text-white mt-3">MIND MAPPING FOR LADY PROFESSIONALS<br><br>
          (Dharmendra Rai, Mumbai’s First Mind Map Trainer)</p>
    </td>
  </tr>
  <tr>
    <td class="text-center">04:00-04:10</td>
  </tr>

  </tbody>
  </table>
  </div>
  <div class="col-sm-4 offset-sm-4 py-5">
    <div class="form-group">
      <label for="">Please Enter Your Email<span class="text-danger">*</span></label>
      <input type="text" class="form-control email" placeholder="Enter Email">
    </div>
    <div class="form-group mt-4">
      <button class="btn btn-block witBtn masterclassdata">Submit</button>
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
  <script src="{base_url()}/js/witmasterclass.js?v={jsversion()}"></script>
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