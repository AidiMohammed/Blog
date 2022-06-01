    <!-- Modal confirm delet post-->
    <div class="modal fade" id="confirmDaletPost" tabindex="-1" aria-labelledby="confirmDaletPostLabe" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDaletPostLabe">Are you sure ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <i style="color: rgb(221, 30, 30)" class="fa-solid fa-exclamation fa-10x mb-4"></i>
                        <h5>Do you want to delete <strong>" {{$post->title}} "</strong>  ?</h5>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                    <form method="POST" action="{{route('posts.destroy',['post' => $post->id])}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">DELTETE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>