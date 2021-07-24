<form method="POST" action="{{route('update',[$user->id])}}" class="ajax_update" name="updateForm">
    @csrf
    <label for="nameUpdate">Name</label>
    <input type="text" name="name" class="form-control" id="nameUpdate" aria-describedby="name">
    <label for="lastnameUpdate">Last name</label>
    <input type="text" name="lastname" class="form-control" id="lastnameUpdate" aria-describedby="name" >
    <label for="numberUpdate">Phone Number</label>
    <input type="text" name="number" class="form-control" id="numberUpdate" aria-describedby="name" >
    <br>
    <button type="submit"  data-bs-dismiss="modal" class="btn btn-primary updateSbm" >Update</button>
</form>
