<div class="dropdown">
<a href="javascript:void(0);" onclick="showModal(this)" class="dropbtn" data-target="dropcustomer">&#8285;</a>
<div id="dropcustomer" class="dropdown-content">
<a href="{{ route('customers.create') }}">{{ __('messages.route_customer_create') }}</a>
<a href="">Orders...</a>
<a href="">Statistik...</a>
</div>
</div>