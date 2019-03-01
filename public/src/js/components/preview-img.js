(function (document) {

  function previewImages() {

    // var preview = document.querySelector('#preview');
    var preview = document.querySelector("[data-img-preview=\"preview\"]");

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
      } // else...

      var reader = new FileReader();

      reader.addEventListener("load", function () {
        var image = new Image();
        image.height = 100;
        image.title = file.name;
        image.src = this.result;
        preview.appendChild(image);
      });

      reader.readAsDataURL(file);

    }

  }

  img_preview = document.querySelector("[data-file-img=\"images\"]");
  if (img_preview) {
    img_preview.addEventListener("change", previewImages);
  }

})(document);