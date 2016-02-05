<div class="pagination-links">
    <!-- Gallery Images Pagination -->
    <% if $PaginatedImages.MoreThanOnePage %>
      <ul class="pagination pagination-sm">

      <% if $PaginatedImages.NotFirstPage %>
        <li>
          <a href="$PaginatedImages.PrevLink" class="prev" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
      <% end_if %>   

      <% loop $PaginatedImages.PaginationSummary %>
        <% if $CurrentBool %>
          <li class="active"><a href="#">$PageNum <span class="sr-only">(current)</span></a></li>
          <% else %>
            <% if $Link %>
              <li><a href="$Link">$PageNum</a></li>
              <% else %>
              <span>...</span>
            <% end_if %>
        <% end_if %>
      <% end_loop %>

      <% if $PaginatedImages.NotLastPage %>
        <li>
          <a href="$PaginatedImages.NextLink" class="next" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      <% end_if %>

    </ul>
    <% end_if %>
</div>
