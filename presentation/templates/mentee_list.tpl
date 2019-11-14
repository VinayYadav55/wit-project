{load_presentation_object filename='userDashboard' assign='obj'}
{assign var = 'userSessionDetail' value=$smarty.session.userDetails}
{assign var='candidateDetail' value=$obj->applicantDetails}

{include file='dashheader.tpl'}
<script type="text/javascript" src="{base_url()}/js/menteelist.js?v={jsversion()}"></script>
<div class="docs-content-wrapper">
    <div class="container mt-2">
        <div class="row">
            <div class="col-8">
                <ul class="nav nav-pills mb-3  py-2 px-5 someStyleinList" id="pills-tab" role="tablist"
                    style="position: sticky;top: 64px;z-index: 1;">
                    <li class="nav-item someStyleinListone">
                        <a class="nav-link active someStyleinListtwo requests" id="pills-home-tab" data-toggle="pill"
                            href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">New
                            Request</a>
                    </li>
                    <li class="nav-item someStyleinListone">
                        <a class="nav-link someStyleinListtwo followers" id="pills-Mentee-tab" data-toggle="pill"
                            href="#pills-Mentee" role="tab" aria-controls="pills-Mentee" aria-selected="false">Your
                            Mentee</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <h6 class="text-success text-center" id="newmentor">New Request</h6>
                        <div class="requestList">
                            {include file='followers.tpl'}
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-Mentee" role="tabpanel" aria-labelledby="pills-Mentee-tab">
                        <h6 class="text-success text-center">Your Mentee</h6>
                    </div>
                </div>
            </div>
            <div class="col-4 border border-secondary">
                <div class="container" style="position: sticky;top: 112px;">
                    <div class="row">
                        <div class="col-12" style="overflow-y: scroll;height: 550px;">
                            <h5 class="text-success text-center py-3">News Feed</h5>
                            <hr>
                            <h5 class="text-success text-center py-3">News Feed</h5>
                            <hr>
                            <h5 class="text-success text-center py-3">News Feed</h5>
                            <hr>
                            <h5 class="text-success text-center py-3">News Feed</h5>
                            <hr>
                            <h5 class="text-success text-center py-3">News Feed</h5>
                            <hr>
                            <h5 class="text-success text-center py-3">News Feed</h5>
                            <hr>
                            <h5 class="text-success text-center py-3">News Feed</h5>
                            <hr>
                            <h5 class="text-success text-center py-3">News Feed</h5>
                            <hr>
                            <h5 class="text-success text-center py-3">News Feed</h5>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.followUnfollow').mouseenter(function () {
            $(this).html('Unfollow');
        });
        $('.followUnfollow').mouseleave(function () {
            $(this).html('Following').append(' <i class="far fa-check-circle"></i>');
        });
    });
</script>