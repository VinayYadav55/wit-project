{load_presentation_object filename='mentorsProfile' assign='obj'}
{assign var = 'userSessionDetail' value=$smarty.session.userDetails}
{assign var='candidateDetail' value=$obj->applicantDetails}
{assign var='mentorProfileData' value=$obj->mentorData}
{include file='dashheader.tpl'}
<!-- <script src="{base_url()}/js/mentors_folloes.js"></script> -->
<div class="docs-content-wrapper">
     <div class="container p-3">
        <div class="col-sm-12">
        <div class="row">
            <div class="col-12">
                    <div class="speakerImgDiv">
                            <div class="imageContainerSpeaker">
                                <img src="{base_url()}/images/avtar.png" class="main-image-speaker rounded-circle" alt="" />
                     </div>
                 </div>
                <div class="text-center"> <h5>{$mentorProfileData.first_name} {$mentorProfileData.last_name}</h5></div>
                 <div class="text-center">
                     <span class="btn btn-primary btn-sm border border-dark p-2 bg-dark">Followers  <span class="badge badge-primary"> 150</span></span>
                     <a class="btn btn-sm btn-outline-primary" href="javascript:void();" 
                     id={$userSessionDetail.id}  mentorid={$mentorProfileData.id}>Follow Mentor</a>
                     <!-- <button class="btn btn-sm btn-primary px-5 py-2">Unfollow</button> -->
                </div>
                <hr>
            </div>
            <div class="col-6 border border-top-0 border-bottom-0 border-left-0 border-dark"><div><b>Gender:</b> {$mentorProfileData.gender}</div>
            <div><b>Email id:</b> {$mentorProfileData.email_id}</div></div>
            <div class="col-6">
                <h6>About Mentors</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, minima odit provident nemo, ullam iste corporis fugiat necessitatibus harum accusantium recusandae sequi facere, optio laborum deleniti excepturi itaque quos reiciendis?</p>
            </div>
                    
           
        </div>
    </div>
</div>  
