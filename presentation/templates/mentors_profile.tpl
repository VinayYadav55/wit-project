{load_presentation_object filename='userDashboard' assign='obj'}
{assign var = 'userSessionDetail' value=$smarty.session.userDetails}
{assign var='candidateDetail' value=$obj->applicantDetails}

{include file='dashheader.tpl'}
<script src="{base_url()}/js/mentors_folloes.js"></script>
<div class="docs-content-wrapper">
    <div class="container bg-white" style="position: sticky;top: 64px;z-index: 1;box-shadow: 0px 2px 1px 1px #ece4e4;">
        <div class="row">
            <div class="col-sm-12 bg-white py-2">
            <a href="#followedMentors" class="btn btn-sm" style="background-color: #345a00 !important;color:white !important;">Followed Mentors</a>
            <a href="#newmentor" class="btn btn-sm" style="color: #3f001e !important;">New Mentors</a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
        <div class="col-sm-8">
            <h6 class="text-success text-center" id="newmentor" >New Mentors, You may follow</h6>
        {foreach from=$obj->unFollowedMentorProfiles item='mentordata'}
        <div class="col-sm-12 mb-4 mentorListStyles py-4" >
        <div class="row">
            <div class="col-8">
                    <h6 class="text-capitalize">{$mentordata.first_name} {$mentordata.last_name}</h6>
                    <div><small><b>Gender:</b> {$mentordata.gender}</small></div>
                    <div><small><b>Email id:</b> {$mentordata.email_id}</small></div>
                    <div class="mt-3">
                    <a class="btn btn-sm btn-outline-primary"
                    href="{base_url()}/mentors_detailed_profile/mentors_id={$mentordata.id}">View Profile</a>
                    <a class="btn btn-sm btn-outline-primary followbyMentee" href="" id={$userSessionDetail.id}       mentorid={$mentordata.id}>Follow Mentor</a>
                </div>
            </div>
            <div class="col-4">
                    <div class="speakerImgDivMentor">
                            <div class="imageContainerSpeakerMentor">
                                <img src="{base_url()}/images/avtar.png" class="main-image-speaker-mentor rounded-circle" alt="" />
                     </div>
                 </div>
            </div>
        </div>
    </div>
{/foreach}
<hr class="w-75 bg-primary">
<h6 class="text-success text-center">Mentors, You have followed</h6>
{foreach from=$obj->followedMentorProfiles item='followmentordata'}
<div class="col-sm-12 mb-4 mentorListStyles py-4 " id="followedMentors">
        <div class="row">
            <div class="col-8">
                    <h6 class="text-capitalize">{$followmentordata.first_name} {$followmentordata.last_name}</h6>
                    <div><small><b>Gender:</b> {$followmentordata.gender}</small></div>
                    <div><small><b>Email id:</b> {$followmentordata.email_id}</small></div>
                    <div class="mt-3">
                    <a class="btn btn-sm btn-outline-primary" href="{base_url()}/mentors_detailed_profile">View Profile</a>
                    
                    <a class="btn btn-sm btn-outline-primary" href="">Message</a>
                    <button class="btn btn-sm btn-outline-primary followUnfollow" href="">Following <i class="far fa-check-circle"></i></button>
                </div>
            </div>
            <div class="col-4">
                    <div class="speakerImgDivMentor">
                            <div class="imageContainerSpeakerMentor">
                                <img src="{base_url()}/images/avtar.png" class="main-image-speaker-mentor rounded-circle" alt="" />
                     </div>
                 </div>
            </div>
        </div>
    </div>

{/foreach}

</div>
<div class="col-sm-4">

<div class="container  border border-dark mentorListStyles" style="position: sticky;top: 112px;">
    <div class="row">
        <div class="col-sm-12" style="overflow-y: scroll;height: 550px;">
            <h5 class="text-success text-center py-3">News Feed</h5>
            <hr>
            <h5 class="text-success text-center py-3">News Feed</h5>
            <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
            <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
            <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
            <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
            <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
            <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
            <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
            <hr>
        </div>
    </div>
</div>
</div>
</div>  
</div>
</div>
<script>
$(document).ready(function(){
    $('.followUnfollow').mouseenter(function(){
        $(this).html('Unfollow');
    });
    $('.followUnfollow').mouseleave(function(){
        $(this).html('Following').append(' <i class="far fa-check-circle"></i>');
    });
});
</script>