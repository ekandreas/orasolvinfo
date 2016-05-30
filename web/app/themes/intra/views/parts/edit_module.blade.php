@if( current_user_can('edit_post', $module_id ) )
	<p>
		<br/>
		<a href="/wp/wp-admin/post.php?post={{ $module_id }}&action=edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Ändra innehållet i modulen "{{ get_the_title($module_id) }}"</a>
	</p>
@endif