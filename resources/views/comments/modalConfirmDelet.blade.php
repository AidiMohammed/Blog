    <!-- Modal confirm delet comment-->
    <div class="modal fade" id="confirmDaletComment" tabindex="-1" aria-labelledby="confirmDaletCommentLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDaletCommentLabel">Are you sure ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <i style="color: rgb(221, 30, 30)" class="fa-solid fa-exclamation fa-10x mb-4"></i>
                        <h5>Do you want to delete the comment ?</h5>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                    <form method="POST" action="{{route('comments.destroy',['comment' => $comment->id])}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">DELTETE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>