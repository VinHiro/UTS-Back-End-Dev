function previewImage() {
    document.getElementById("upload-foto").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("foto").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("upload-foto").src = oFREvent.target.result;
    };
  };