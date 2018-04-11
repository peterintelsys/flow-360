<form method="POST" action="/customers/searchresult">
	@csrf
		
	<div class="flexgrid grid-2-fix">
	<div>
	<label>{{ __('messages.search_customer') }}</label>
	<input type="search" name="search">
	</div>
	<div>
	<label style="visibility: hidden;">test</label>
	<input type="submit" class="search" value="{{ __('messages.search_button') }}">
	
</div>
	</div>
</form>