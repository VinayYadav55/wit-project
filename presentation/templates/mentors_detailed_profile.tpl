{load_presentation_object filename='userDashboard' assign='obj'}
{assign var = 'userSessionDetail' value=$smarty.session.userDetails}
{assign var='candidateDetail' value=$obj->applicantDetails}
{$obj|@var_dump}
{include file='dashheader.tpl'}
<div class="docs-content-wrapper">
    <!-- <div class="container">
        {foreach from=$obj->unFollowedMentorProfiles item='mentordata'}
        <div class="col-sm-12 mb-4 mentorListStyles py-4">
        <div class="row">
            <div class="col-8">
                    <h5>{$mentordata.first_name} {$mentordata.last_name}</h5>
                    <p><b>Gender:</b> {$mentordata.gender}</p>
                    <p><b>Email id:</b> {$mentordata.email_id}</p>
                    <button class="btn btn-sm btn-primary">View Profile</button>
                    <button class="btn btn-sm btn-primary">Follow</button>
                    <button class="btn btn-sm btn-primary">Message</button>
            </div>
            <div class="col-4">
                    <div class="speakerImgDiv">
                            <div class="imageContainerSpeaker">
                                <img src="{base_url()}/images/avtar_women.jpg" class="main-image-speaker rounded-circle" alt="" />
                     </div>
                 </div>
            </div>
        </div>
    </div>
{/foreach}
</div>   -->

<div class="container">
  <div class="row">
    <div class="col-sm-10">
        <h5>Name: Sanjeev Kumar Gupta</h5>
         <div>Email Id: sanjeev@gmail.com</div> 
         <div>Email Id: sanjeev@gmail.com</div> 
         <div>Contact: +91-8585656525</div> 
         <div>Education: Phd.</div> 
         <div>Word Experience: 15Years</div> 
         <div>Company: Macafee</div> 
         <div>Current Employment: Director Engineer</div> 
  
    </div>
    <div class="col-sm-2"> <div class="speakerImgDiv">
        <div class="imageContainerSpeaker">
            <img src="{base_url()}/images/nishant_rao_coo.jpg" class="main-image-speaker rounded-circle" alt="" />
            <h5>Sanjeev Gupta</h5>
 </div></div>
  </div>
</div>
</div>
