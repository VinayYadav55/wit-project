{load_presentation_object filename='userDashboard' assign='obj'}
{assign var = 'userSessionDetail' value=$smarty.session.userDetails}
{assign var='candidateDetail' value=$obj->applicantDetails}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>upload image</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css">


  <link rel="stylesheet" href="https://unpkg.com/filepond/dist/filepond.min.css">
  <style>
  /**
 * FilePond Custom Styles
 */
.filepond--drop-label {
	color: #4c4e53;
}

.filepond--label-action {
	text-decoration-color: #babdc0;
}

.filepond--panel-root {
	border-radius: 2em;
	background-color: #edf0f4;
	height: 1em;
}

.filepond--item-panel {
	background-color: #595e68;
}

.filepond--drip-blob {
	background-color: #7f8a9a;
}

.mainImageUpload{
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  
  z-index: 1;

  
}
.overlayimageUpload{
  position: fixed;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  background-color:  rgba(0, 0, 0, 0.3);
}
.cutBtnn{
  position: fixed;
  top: 5%;
  right: 5%;
  z-index: 1;
  background-color: transparent;
  color: black;
  border: 1px solid black;
  border-radius: 50%;
  padding: 2px 10px 2px 10px;
}


  </style>
</head>
<body>
  <!--
The classic file input element we'll enhance to a file pond
-->
<div class="overlayimageUpload"></div>
<button class="cutBtnn">X</button>
<div class="container-fluid mainImageUpload">
  <div class="row">
    <div class="col-sm-4 offset-sm-4">
        <form action="" method="post">
            <input type="file" 
            class="filepond"
            name="filepond"
            multiple
            data-max-file-size="3MB"
            data-max-files="3" />
            </form>
      </div>
  </div>
</div>
<!-- file upload itself is disabled in this pen -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>

  <script src="https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.min.js"></script>

  <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js"></script>


  <script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js"></script>

  <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>

  <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
  <script>
  /*
We want to preview images, so we need to register the Image Preview plugin
*/
FilePond.registerPlugin(
	
	// encodes the file as base64 data
  FilePondPluginFileEncode,
	
	// validates the size of the file
	FilePondPluginFileValidateSize,
	
	// corrects mobile image orientation
	FilePondPluginImageExifOrientation,
	
	// previews dropped images
  FilePondPluginImagePreview
);

// Select the file input and use create() to turn it into a pond
FilePond.create(
	document.querySelector('input')
);
$('.cutBtnn').click(function(){
  window.close();
});
</script>

</body>
</html>