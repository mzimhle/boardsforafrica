<!-- Start Content Table -->
<div class="content_table">
    <form name="htmlForm" id="htmlForm" action="/admin/enquiries/html.php" method="post">
    
    <table id="grid_table" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th>Added</th>
		<th>Reference</th>
        <th>Full name</th>
		<th>Email</th>
		<th>Subject</th>
       </tr>
	   <caption>Table: Enquiries</caption>
      {foreach from=$enquiryItems item=item}
      <tr>
        <td align="left" class="alt">{$item.enquiry_added|date_format}</td>		
		<td align="left" class="alt">{$item.enquiry_reference}</td>		
        <td align="left" class="alt"><a href="/admin/enquiries/details.php?reference={$item.pk_enquiry_id}">{$item.enquiry_name}</a></td>	
		<td align="left" class="alt">{$item.enquiry_email}</td>
		<td align="left" class="alt">{$item.enquiry_subject}</td>
      </tr>
      {foreachelse}
    	<tr>
        	<td colspan="9">There are no current items in the system.</td>
        </tr>
      {/foreach}     
    </table>
     </form>
 </div>
 <!-- End Content Table -->
<div class="clr"></div><br />
{if $paginator->firstPageInRange neq $paginator->lastPageInRange}
 <!-- Start Pagination -->
<div class="paging">
     <ul class="pagination">
		   {if $paginator->current gt 1 }
			<li class="paginate_prev"><a href="javascript:void(0);" onclick="send_filter({$paginator->previous});">&laquo; Previous</a></li>
			{/if}
			 {foreach from=$paginator->pagesInRange item=page}
        		<li {if $page eq $paginator->current} class="active" {/if}><a href="javascript:void(0);" onclick="send_filter({$page});">{$page}</a></li>
       		{/foreach}
			{if $paginator->current lt $paginator->lastPageInRange}
			<li class="paginate_next"><a href="javascript:void(0);" onclick="send_filter({$paginator->next});">Next &raquo;</a></li>
			{/if}
	</ul>
</div>      
{/if}
<div class="clear"></div>