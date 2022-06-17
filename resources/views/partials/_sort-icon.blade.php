@if($sortBy !== $field)
<i class="text-muted ti-arrows-vertical"></i>
@elseif($sortDirection == 'asc')
<i class="color:rgbs(38, 38, 236, 0.774)" class="ti-angle-up"></i>
@else 
<i class="color:rgbs(38, 38, 236, 0.774)" class="ti-angle-down"></i>
@endif