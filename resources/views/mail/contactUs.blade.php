<div style="width: 100%; display:block;">
<h2>{{ trans('labels.back') }}</h2>
<p>
	<strong>
   	{{ trans('labels.HiAdmin') }}!
   	</strong><br><br>
    
	Tên: {{ $data['name'] }}<br>
	Tuổi: {{ $data['email'] }}<br><br>
	Điện thoại: {{ $data['phone'] }}<br><br>
	
	{{ $data['message'] }}<br><br>
	<strong>{{ trans('labels.Sincerely') }},</strong><br>
	{{ trans('labels.ecommerceAppTeam') }}
</p>
</div>