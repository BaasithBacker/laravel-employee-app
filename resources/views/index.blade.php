@extends("themes")

@section("content")
<div class="container">
</div>
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
</div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<h2>ADD EMPLOYEE</h2>
<table class="table">
<tr>
    <td>Emp-name</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Emp-code</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Designation</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Salary</td>
    <td><input type="text" class="form-control"></td>   
</tr>
<tr>
    <td>DOB</td>
    <td><input type="date" class="form-control"></td>
</tr>
<tr>
    <td>Place</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Pincode</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Phone-No</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-outline-success">Submit</button></td>
</tr>
</table>
</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
</div>
</div>
</div>
@endsection