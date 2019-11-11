{load_presentation_object filename='userDashboard' assign='obj'}
{assign var = 'userSessionDetail' value=$smarty.session.userDetails}
{assign var='candidateDetail' value=$obj->applicantDetails}

   
    {include file='dashheader.tpl'}
     <div class="docs-content-wrapper">
   <h1>mentor dashbaord</h1>
   </div>