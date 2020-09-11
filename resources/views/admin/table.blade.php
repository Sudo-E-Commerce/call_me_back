@include('Table::components.text',['text' => $value->phone ?? ''])
<td>
	<a href="{{$value->current_page ?? '#' ??'javascript:;'}}" target="_blank">{{$value->name ?? 'Không xác định'}}</a>
</td>
@include('Table::components.edit_array',[
						'name' => 'active_status',
						'value' => $value->active_status, 
						'options' => [0 => 'Chờ xử lý', 1 => 'Đã gọi khách'],
					])
