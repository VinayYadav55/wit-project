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

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
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
            <h6 class="text-center Heading py-2">Mentor Form</h6>
            <form action="#">
              <div class="form-group">
                <label for="uname">Name:</label>
                <input
                  type="text"
                  class="form-control"
                  id="uname"
                  placeholder="Enter Name"
                  name="uname"
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
              <div class="form-group">
                  <label for="experience">Year of experience:</label>
                  <select id="experience" class="form-control">
                    <option selected>Select</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
                </div>

              <div class="form-group">
                <label for="pwd">Contact:</label>
                <input
                  type="text"
                  class="form-control"
                  id="contact"
                  placeholder="Enter Contact"
                  name="contact"
                  required
                />
              </div>
              <div class="form-group form-check">
                <label class="form-check-label">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    name="remember"
                    required
                  />
                  Term & Condition.
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">
                    Check this checkbox to continue.
                  </div>
                </label>
              </div>
              <div class="text-center">
                <a
                  href="?mentorprofile=true"
                  type="submit"
                  class="text-center btn witBtn px-3"
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
