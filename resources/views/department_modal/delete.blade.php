
<div class="modal fade " id="confirmDelete{{$department->id}}" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Confirm Delete</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete {{$department->name}} ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {!! Form::open(['method' => 'DELETE','route' => ['departments.destroy', $department->id],'style'=>'display:inline' ])!!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger'] ) !!}
                {!! form::close() !!}

            </div>
        </div>
    </div>
</div>