<form action="{{ route('doctor.restore', $doctor->id) }}" method="post">
    @csrf
    <!-- Form Method Spoofing -->
    <input type="hidden" name="_method" value="put">
    <!-- or using directive bt @method('delete/put/patch')-->
    <button type="submit" class="btn btn-sm btn-outline-info">restore</button>
</form>
