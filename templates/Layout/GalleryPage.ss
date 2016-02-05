<div id="links">
    <div class="row">
        <% loop PaginatedImages %>
	    	<div class="col-xs-6 col-sm-4 col-md-3">
	    		<a href="$Filename" data-gallery>
	    		   $SetSize(250,250)
	    		</a>
	    	</div>
        <% end_loop %>
    </div>
</div>

<% include Pagination %>

<% include GalleryModal %>