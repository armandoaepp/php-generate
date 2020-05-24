(function (document) {

  img_preview = document.querySelectorAll("[data-file-img=\"images\"]");

  if (img_preview) {
    for (var i = 0; i < img_preview.length; i++) {

      input_image = img_preview[i];

      //AGREGAMOS EL EVENTOS
      input_image.addEventListener('change', function () {

        identificador = this.dataset.id;

        var preview = document.querySelector("[data-img-preview=\"" + identificador + "\"]");
        console.log(this.files);
        if (preview) {
          preview.innerHTML = "";

          if (this.files) {
            [].forEach.call(this.files, readAndPreview);
          }

        }

        function readAndPreview(file) {

          // Make sure `file.name` matches our extensions criteria
          if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
            return alert(file.name + " is not an image");
          }

          var reader = new FileReader();

          reader.onload = function (event) {
            var image = new Image();
            image.title = file.name;
            image.src = this.result;
            // image.height = 100;

            // Eliminar extension
            let file_name = file.name;
            let n_sep_ext = file_name.lastIndexOf(".");
            let value_text = file_name.slice(0, n_sep_ext)

            html_preview = `<div class="preview-item-image">
                              <input type="text" class="form-control" name="desc_images[]" value="${value_text}" >
                            </div>` ;

            $($.parseHTML(html_preview)).prepend(image).appendTo(preview);

          }

          reader.readAsDataURL(file);

        }


      });
    }


  }


})(document);