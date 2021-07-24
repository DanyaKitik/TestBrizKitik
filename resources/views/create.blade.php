<form method="POST" action="{{route('create')}}" class="ajax_create" name="createForm" >
    @csrf
    <label for="nameCreate">Name</label>
    <input type="text" name="name" class="form-control" id="nameCreate" aria-describedby="name">
    <label for="lastnameCreate">Last name</label>
    <input type="text" name="lastname" class="form-control" id="lastnameCreate" aria-describedby="name" >
    <label for="numberCreate">Phone Number</label>
    <input type="text" name="number" class="form-control" id="numberCreate" aria-describedby="name" >
    <br>
    <button type="submit"  data-bs-dismiss="modal" class="btn btn-primary create" >Create</button>
</form>
