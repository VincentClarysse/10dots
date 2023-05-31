@extends ('layout.layout')

@section('content')

<h1>Edit your details</h1></br>

<div class="form-container">
    <form action="/submit_job" id="updateForm" method="POST" enctype="multipart/form-data">
      @csrf
      
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name"><br><br>

    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name"><br><br>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone"><br><br>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address"><br><br>

    <label for="country">Country:</label>
    <input type="text" id="country" name="country"><br><br>

    <label for="city">City:</label>
    <input type="text" id="city" name="city"><br><br>

    <label for="job_title">Job Title:</label>
    <input type="text" id="job_title" name="job_title"><br><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description"></textarea><br><br>

    <label for="min_price">Minimum Price:</label>
    <input type="number" id="min_price" name="min_price"><br><br>

    <label for="max_price">Maximum Price:</label>
    <input type="number" id="max_price" name="max_price"><br><br>

    <label for="image_url">Upload Image:</label>
    <input type="file" id="image_url" name="image_url"><br><br>

    <input type="submit" value="Edit">
    </form>
  </div>