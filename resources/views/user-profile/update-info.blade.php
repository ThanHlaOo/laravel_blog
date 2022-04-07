<!-- Modal -->
<div class="modal fade" id="updateInfoModal" style="z-index: 2005;" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateInfoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateInfoModalLabel">Update User Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
      </div>
      <div class="modal-body">
        <form action="{{ route('profile.update.info') }}" method="post" id="infoUpdate">
                    @csrf
                    <div class="mb-3">
                        <label>
                            <i class="me-1 feather-phone"></i>
                            Your Phone
                        </label>
                        <input type="text" name="phone" class="form-control" value="{{ auth()->user()->phone }}" >
                        @error("phone")
                        <small class="font-weight-bold text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label >
                            <i class="me-1 feather-map"></i>
                            Address
                        </label>
                        <textarea name="address" class="form-control" rows="5" >{{ auth()->user()->address }}</textarea>
                        @error("address")
                        <small class="font-weight-bold text-danger">{{ $message }}</small>
                        @enderror
                    </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="infoUpdate" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>

<script>
    
    var myModal = new bootstrap.Modal(document.querySelector("#updateInfoModal"), {});
    document.onreadystatechange = function () {
      myModal.show();
    };
      // setInterval(function (){
    //     $("#updateInfoModal").modal("show");
    //     console.log("update info");
    // },5000);

</script>