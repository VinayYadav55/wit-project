{include file='dashheader.tpl'}
  <div class="docs-content-wrapper">
    <div class="container-fluid">
      <div class="container">
        <div class="row py-5 my-5">
          <div class="col-sm-4 offset-sm-4 py-5 my-5 bg-light " style="border: 1px solid #c5c5c5;">
            <form action="{base_url()}/resumeUploaded" method="post" enctype="multipart/form-data">
              <h4 class="py-4">UPDATE RESUME</h4>
              <div class="form-group">
                <input type="file" name="myfile[]" multiple="" class="form-control-file border" required> <br>
              </div>
              <button type="submit" class="btn btn-primary" name="save">Upload</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  {include file='dashfooter.tpl'}