<!-- Modal element for publish/unpublish user confirmation -->
<div class="modal fade" id="publish" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- Print binded $title value to this element-->
                <h5 class="modal-title" id="exampleModalLabel">{{$title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Print binded $message value to this element-->
            <div class="modal-body">
                {{$message}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <!-- Print binded $action as this element onclick function -->
                <button type="button" class="btn btn-primary" onclick="{{$action}}">Yes</button>
            </div>
        </div>
    </div>
</div>