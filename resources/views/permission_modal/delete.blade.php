<div class="modal fade" id="confirmDelete{{$permission->id}}"  tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Confirm Delete</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete {{$permission->name}} ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                {!! Form::open(['method' => 'DELETE', 'route' => ['permission.destroy', $permission->id],'style' => 'display:inline' ]) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
