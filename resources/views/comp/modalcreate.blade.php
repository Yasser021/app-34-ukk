   <!-- Modal -->
   <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
       aria-labelledby="staticBackdropLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
               <div class="modal-header">
                   <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Category</h1>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <form action="{{ route('kategori.store') }}" method="POST">
                       @csrf
                       <div class="form-floating mb-3">
                           <input type="Text" name="kategori" class="form-control" id="floatingInput"
                               placeholder="Input Category">
                           <label for="floatingInput">Category</label>
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-success">Save</button>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
