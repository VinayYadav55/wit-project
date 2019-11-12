
<div>
<div class="vinay">
	{$obj->mentorFollowersRequest|@var_dump}
	{foreach from=$obj->mentorFollowersRequest item="pendingRequest"}
	<div>Name:{$pendingRequest.first_name} {$pendingRequest.last_name}</div>
	{/foreach}
</div>
<div>