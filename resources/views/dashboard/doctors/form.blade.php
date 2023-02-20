<div class="form-group">
    <label for="exampleInputEmail1">Doctors`s name</label>
    <input type="text" name="name" value="{{$doctor->name ?? ""}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Doctor name" style="width: 800px">
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" value="{{$doctor->phone ?? ""}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone number" style="width: 800px">
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Biograph</label>
    <textarea name="biograph" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Biograph" style="width: 800px">{{$doctor->biograph ?? ""}}</textarea>
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Speciality</label>
    <input type="text" name="speciality" value="{{$doctor->speciality ?? ""}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Speciality" style="width: 800px">
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Degrees</label>
    <input type="text" name="degrees" value="{{$doctor->degrees ?? ""}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Degrees" style="width: 800px">
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Office</label>
    <input type="text" name="office" value="{{$doctor->office ?? ""}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Office" style="width: 800px">
</div>

<div class="form-group">
    <label for="exampleInputEmail1">University</label>
    <input type="text" name="university" value="{{$doctor->university ?? ""}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter University" style="width: 800px">
</div>

<button type="submit" class="btn btn-primary">Submit</button>

