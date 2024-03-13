<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
     <form action="/make-album" method="POST">
       <div class="modal-content">
         <div class="modal-header">
           <h1 class="modal-title fs-5" id="staticBackdropLabel">Buat Album</h1>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body container">
           <label for="AlbumName">Nama Album</label>
           <input class="form-control" type="text" name="album_name" id="AlbumName" placeholder="Nama Album">
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
           @csrf
           <input type="submit" class="btn text-light" style="background-color: black" value="Buat">
         </div>
     </form>
     </div>
   </div>
   </div>