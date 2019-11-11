{load_presentation_object filename='userDashboard' assign='obj'}
{assign var = 'userSessionDetail' value=$smarty.session.userDetails}
{assign var='candidateDetail' value=$obj->applicantDetails}

{include file='dashheader.tpl'}
<div class="docs-content-wrapper">
    <div class="container bg-white" style="position: sticky;top: 64px;z-index: 1;box-shadow: 0px 2px 1px 1px #ece4e4;">
        <div class="row">
            <div class="col-sm-12 bg-white py-2">
            <a href="#yourfollowers" class="btn btn-sm btn-warning">Your Followers</a>
            <a href="#newrequest" class="btn btn-sm btn-warning">New Request</a>
            <a href="#newpending" class="btn btn-sm btn-warning">Pending Request</a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
        <div class="col-sm-8">
            <h6 class="text-success text-center" id="newrequest" >New Request</h6>
        {foreach from=$obj->dfdf item='mentordata'}
        <div class="col-sm-12 mb-4 mentorListStyles py-4" >
        <div class="row">
            <div class="col-8">
                    <h6 class="text-capitalize">{$mentordata.first_name} {$mentordata.last_name}</h6>
                    <div><small><b>Gender:</b> {$mentordata.gender}</small></div>
                    <div><small><b>Email id:</b> {$mentordata.email_id}</small></div>
                    <div class="mt-3">
                    <a class="btn btn-sm btn-default" href="{base_url()}/mentors_detailed_profile">View Profile</a>
                    <a class="btn btn-sm btn-default" href="">Follow</a>
                    <a class="btn btn-sm btn-default" href="">Message</a>
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
<h6 class="text-success text-center" id="yourfollowers">Your Followers</h6>
{foreach from=$obj->fdfdfdfdfdfd item='followmentordata'}
<div class="col-sm-12 mb-4 mentorListStyles py-4" >
        <div class="row">
            <div class="col-8">
                    <h6 class="text-capitalize">{$followmentordata.first_name} {$followmentordata.last_name}</h6>
                    <div><small><b>Gender:</b> {$followmentordata.gender}</small></div>
                    <div><small><b>Email id:</b> {$followmentordata.email_id}</small></div>
                    <div class="mt-3">
                    <a class="btn btn-sm btn-default" href="{base_url()}/mentors_detailed_profile">View Profile</a>
                    <a class="btn btn-sm btn-default" href="">Follow</a>
                    <a class="btn btn-sm btn-default" href="">Message</a>
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
<h6 class="text-success text-center" id="newpending">Pending Request</h6>
{foreach from=$obj->dfdfdfd item='followmentordata'}
<div class="col-sm-12 mb-4 mentorListStyles py-4 ">
        <div class="row">
            <div class="col-8">
                    <h6 class="text-capitalize">{$followmentordata.first_name} {$followmentordata.last_name}</h6>
                    <div><small><b>Gender:</b> {$followmentordata.gender}</small></div>
                    <div><small><b>Email id:</b> {$followmentordata.email_id}</small></div>
                    <div class="mt-3">
                    <a class="btn btn-sm btn-default" href="{base_url()}/mentors_detailed_profile">View Profile</a>
                    <a class="btn btn-sm btn-default" href="">Follow</a>
                    <a class="btn btn-sm btn-default" href="">Message</a>
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

<div class="container  border border-dark mentorListStyles" style="position: sticky;top: 120px;">
    <div class="row">
        <div class="col-sm-12" style="overflow-y: scroll;height: 500px;">
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
            <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
            <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
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
