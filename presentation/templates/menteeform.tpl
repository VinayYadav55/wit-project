<!DOCTYPE html>
<html lang="en">
  <head>
          <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147066526-1"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){
     dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-147066526-1');
</script>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" type="text/css" href="styles/mentoring.css?v={jsversion()}" />

  
    <title>Home|WIT</title>
    <style>
      .btnn {
        background-color: #e52b50 !important;
        color: white !important;
      }
    </style>
  </head>
  <body>
    {include file='header.tpl'}
    <div class="container-fluid">
      <div class="container">
        <div class="row my-5 ">
          <div class="col-md-2"></div>
          <div class="col-md-6" style="bacground-color: #f6f6f6">
            <h6 class="Heading text-center py-2 ">Mentee Form</h6>
            <form action="#">
              <div class="form-group">
                <label for="name">Name:</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="Enter Name"
                  name="name"
                  required
                />
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  placeholder="Enter Email"
                  name="email"
                  required
                />
              </div>
              <!-- // <div class="form-group">
              //   <label for="catagory">Category:</label>
              //   <input
              //     type="text"
              //     class="form-control"
              //     id="catagory"
              //     placeholder="Enter catagory"
              //     name="catagory"
              //     required
              //   />
              // </div> -->
              <!-- <div class="form-group">
                <label for="experience">Year of Experience:</label>
                <input
                  type="number"
                  class="form-control"
                  id="experience"
                  placeholder="Enter catagory"
                  name="experience"
                  required
                />
              </div> -->

              <div class="form-group">
                <label for="contact">Contact:</label>
                <input
                  type="text"
                  class="form-control"
                  id="contact"
                  placeholder="Enter contact"
                  name="contact"
                  required
                />
              </div>
              <div class="form-group">
                <label for="address">Address:</label>
                <input
                  type="text"
                  class="form-control"
                  id="address"
                  placeholder="Flat number, Near xyz, abc building, street etc..."
                  name="address"
                  required
                />
              </div>
              <div class="form-group ">
                <label for="inputState">State:</label>
                <select id="inputState" class="form-control">
                  <option selected>Select State</option>
                  <option>DELHI</option>
                  <option>HARYANA</option>
                  <option>MADHYA PRADESH</option>
                  <option>KARNATAKA</option>
                  <option>MAHARASHTA</option>
                </select>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputState">City:</label>
                  <select id="inputState" class="form-control">
                    <option selected>Select City</option>
                    <option>INDORE</option>
                    <option>DELHI</option>
                    <option>GURGAON</option>
                  </select>
                </div>
                <!-- <div class="form-group">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity" />
              </div> -->
                <div class="form-group col-md-6">
                  <label for="inputZip">Zip:</label>
                  <input type="text" class="form-control" id="inputZip" />
                </div>
              </div>
              <div class="form-group form-check">
                <label class="form-check-label">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    name="remember"
                    required
                  />
                  Term & Condition
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">
                    Check this checkbox to continue.
                  </div>
                </label>
              </div>
              <div class="text-center">
                <a
                  href="?menteeprofile=true"
                  type="submit"
                  class="text-center btn  witBtn px-3"
                >
                  Submit
                </a>
              </div>
            </form>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </div>
    <!-- second part -->

    {include file='footer.tpl'}
  </body>
</html>
