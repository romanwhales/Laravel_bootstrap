{!! Form::open(array('route' => array('lists.destroy',$list->id),'method' =>'delete'))!!}
	<button type="submit">Delete List</button>
{!! Form::close()!!}