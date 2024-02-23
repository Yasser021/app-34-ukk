   <!-- Modal -->
   <div class="modal fade" id="addreview" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
       aria-labelledby="staticBackdropLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
               <div class="modal-header">
                   <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Review</h1>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <form action="{{ route('review.store') }}" method="POST">
                       @csrf
                       <div class="mt-3">
                           <select class="form-select py-3" aria-label="Default select example" name="id_buku">
                               <option selected disabled>Pick A Book</option>
                               @foreach ($buku as $item)
                                   <option value="{{ $item->id_buku }}">{{ $item->title }}</option>
                               @endforeach
                           </select>
                           <input type="number" name="rating" id="col" class="form-control py-3 mt-3"
                               placeholder="give rating">
                               <textarea name="review" id="" style="height: 100px" class="form-control mt-3" placeholder="Give Ur Review"></textarea>
                           {{-- <div class="form-floating">
                               <textarea class="form-control mb-3" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px" name="review"></textarea>
                               <label for="floatingTextarea">Give Ur Review About This Book</label>
                           </div> --}}
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