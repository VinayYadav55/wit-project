{load_presentation_object filename='mentorsProfile' assign='obj'}
{assign var = 'userSessionDetail' value=$smarty.session.userDetails}
{assign var='candidateDetail' value=$obj->applicantDetails}
{assign var='mentorProfileData' value=$obj->mentorData}
{assign var='menteeProfileData' value=$obj->followerData}
{include file='dashheader.tpl'}

{if $mentorProfileData.type=='Mentor'}
<div class="docs-content-wrapper">
     <div class="container p-3">
        <div class="col-sm-12">
        <div class="row">
            <div class="col-12 bgImageForCover">
                    <div class="speakerImgDiv">
                            <div class="imageContainerSpeaker">
                                <img src="{base_url()}/images/avtar.png" class="main-image-speaker rounded-circle" alt="" />
                     </div>
                 </div>
                <div class="text-center"> <h5>{$mentorProfileData.first_name} {$mentorProfileData.last_name}</h5></div>
                 <div class="text-center">
                     <span class="btn btn-primary btn-sm border border-dark p-2 bg-dark">Followers  <span class="badge badge-primary"> 150</span></span>
                     <button class="btn btn-sm btn-primary px-5 py-2">Follow</button>
                </div>
                <hr>
            </div>
            <div class="col-6 border border-top-0 border-bottom-0 border-left-0 border-dark"><div><b>Gender:</b> {$mentorProfileData.gender}</div>
            <div><b>Email id:</b> {$mentorProfileData.email_id}</div></div>
            <div class="col-6">
                <h6>About Mentors Data</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, minima odit provident nemo, ullam iste corporis fugiat necessitatibus harum accusantium recusandae sequi facere, optio laborum deleniti excepturi itaque quos reiciendis?</p>
            </div>
                    
           
        </div>
    </div>
</div>  
{else}
<div class="docs-content-wrapper">
        <div class="container p-3">
           <div class="col-sm-12">
           <div class="row">
               <div class="col-12 bgImageForCover">
                       <div class="speakerImgDiv">
                               <div class="imageContainerSpeaker">
                                   <img src="{base_url()}/images/avtar.png" class="main-image-speaker rounded-circle" alt="" />
                        </div>
                    </div>
                   <div class="text-center text-capitalize"> <h5>{$menteeProfileData[0].first_name} {$menteeProfileData[0].last_name}</h5></div>
                    <div class="text-center">
                        <span class="btn btn-primary btn-sm border border-dark p-2 bg-dark">Following<span class="badge badge-primary">205</span></span>
                   </div>
                   <hr>
               </div>
               <div class="col-12 py-4">
                <div class="row">
               <div class="col-6 border border-top-0 border-bottom-0 border-left-0 border-dark"><div><b>Gender:</b> {$menteeProfileData[0].gender}</div>
               <div><b>Email id:</b> {$menteeProfileData[0].email_id}</div>
               <div><b>Functional Area:</b> {$menteeProfileData[0].functional_area}</div>
               <div><b>Industry Type:</b> {$menteeProfileData[0].industry_type}</div>
            </div>
               <div class="col-6">
                   <h6>About Mentors</h6>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, minima odit provident nemo, ullam iste corporis fugiat necessitatibus harum accusantium recusandae sequi facere, optio laborum deleniti excepturi itaque quos reiciendis?</p>
               </div>
            </div>
        </div>
                       
              
           </div>
       </div>
   </div> 
{/if}
