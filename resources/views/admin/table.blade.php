@include('Table::components.text',['text' => $value->phone ?? ''])
@include('Table::components.link',['text' => $value->name ?? 'Không xác định', 'url' => $value->current_page ?? '#'])
@include('Table::components.edit_array',[
						'name' => 'active_status',
						'value' => $value->active_status, 
						'options' => [0 => 'Chờ xử lý', 1 => 'Đã gọi khách'],
					])
