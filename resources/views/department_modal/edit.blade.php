<div id="EditDepartment{{$department->id}}" class="modal fade" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center">Edit department</h4>
            </div>
            <div class="modal-body">


                {!! Form::model($department, ['method' => 'PATCH', 'route' => ['departments.update', $department->id]]) !!}


                <div class="form-group">

                    {!! form::label('name', 'Department Name:') !!}
                    {!! form::text('name', null, ['class' => 'form-control']) !!}

                    <br/>
                    <div class="form-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        {!! Form::submit('EDIT', ['class' => 'btn btn-success'] ) !!}
                    </div>
                    {!! form::close() !!}

                </div>
            </div>
        </div>
    </div>

