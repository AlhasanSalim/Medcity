@csrf
<!-- Form Method Spoofing -->
<input type="hidden" name="_method" value="delete">
<!-- or using directive bt @method('delete/put/patch')-->
<button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
