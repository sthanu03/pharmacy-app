<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


.btn{
    background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 30px;
}
.btn:hover{
    color: #036b45;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Add New Customer Form</h3>

<div>
  <form method="post" action="">
    <label for="fullname">Full Name</label>
    <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>

    <label for="address">Address</label>
    <input type="text" id="address" name="address" placeholder="Address" required>

    <label for="phone">Phone Number</label>
    <input type="text" id="phone" name="phone" placeholder="Phone Number" required>
  
    <a href="{{ url('admin/customers/list') }}" class="btn btn-primary">Add Customer</a>
  </form>
</div>

</body>
</html>


