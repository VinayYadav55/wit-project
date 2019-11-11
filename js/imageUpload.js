$(document).ready(function(){
FilePond.registerPlugin(
FilePondPluginFileEncode,
FilePondPluginImageExifOrientation,
FilePondPluginImagePreview,
  FilePondPluginImageExifOrientation,
  FilePondPluginImagePreview,
  FilePondPluginImageCrop,
  FilePondPluginImageResize,
  FilePondPluginImageTransform
);

FilePond.create(
	document.querySelector('.filepond'),
	{
		labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
		imagePreviewHeight: 200,
		imageCropAspectRatio: '1:1',
		imageResizeTargetWidth: 200,
		imageResizeTargetHeight: 200,
		server:{
			process:(fieldName, file, metadata, load, error, progress, abort) => {
				
				const image = new Image();
				image.src = URL.createObjectURL(file);
				// document.body.appendChild(image);
				
				load();
			}
		}
	}
);
});