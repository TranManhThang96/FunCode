<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modal-edit-category-label">Edit category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="form-edit-category">
                <input type="hidden" id="category-id" name="id" value="{{$category->id}}"/>
                @csrf
                <div class="form-group row">
                    <label for="input-category-name" class="col-sm-3 col-form-label">Category Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="input-category-name" name="name"
                               value="{{$category->name}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select-category-parent" class="col-sm-3 col-form-label">Parent</label>
                    <div class="col-sm-9">
                        <select class="custom-select custom-select-2 mr-sm-2 select-category-parent" name="parent_id">
                            <option selected value="{{\App\Enums\DBConstant::NO_PARENT}}">No Parent</option>
                            @if(isset($categories))
                                @foreach($categories as $cate)
                                    <option
                                        value="{{$cate['id']}}" {{$category->parent_id === $cate['id'] ? 'selected' : ''}}>{{$cate['label']}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="edit-category">Save changes</button>
        </div>
    </div>
</div>
