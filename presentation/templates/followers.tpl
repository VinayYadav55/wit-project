<div class="vinay">
	{foreach from=$obj->mentorFollowersRequest item="pendingRequest"}
	<div class="col-sm-12 mb-4 mentorListStyles py-4" >
			<div class="row">
					<div class="col-8">
									<h6 class="text-capitalize">{$pendingRequest.first_name} {$pendingRequest.last_name}</h6>
									<div><small><b>Gender:</b> {$pendingRequest.gender}</small></div>
									<div><small><b>Email id:</b> {$pendingRequest.email_id}</small></div>
									<div class="mt-3">
									<a class="btn btn-sm btn-outline-primary"
									href="{base_url()}/mentors_detailed_profile/request_id={$pendingRequest.id}">View Profile</a>
									
									<a class="btn btn-sm btn-outline-primary acceptrequest" href="javascript:void();" id={$userSessionDetail.id} 
									requestid={$pendingRequest.id} >Accept Request</a>
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

<script>

</script>