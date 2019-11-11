{load_presentation_object filename='userDashboard' assign='obj'}
{assign var = 'userSessionDetail' value=$smarty.session.userDetails}
{assign var='candidateDetail' value=$obj->applicantDetails}

   
    {include file='dashheader.tpl'}
    <input type="hidden" baseUrl={base_url()} class="baseUrl">
    <input type="hidden" userId={$userSessionDetail.id} class="usedId">
    <div class="docs-content-wrapper">
       {if $userSessionDetail.type==='Candidate'}
        <div class="container-fluid"  style="background-color: #ececec; height:90vh; padding:100px;">
            <div class="row py-5">
              
            </div>
        </div>
        
        {/if}
        {if $userSessionDetail.type==='Mentor'}
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="text-success text-center">Mentor Dashboard</h4>
                </div>
            </div>
        </div>

        {/if}
    </div>


    {include file='dashfooter.tpl'}