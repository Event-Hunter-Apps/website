
const image_upload = document.querySelector("#image_upload");

var uploaded_image = "";

image_upload.addEventListener("change", function(){
    const reader = new FileReader();
    reader.addEventListener("load", ()=>{
        uploaded_image = reader.result;
        // document.querySelector("#preview-tambah-wisata").style.backgroundImage = `url(${uploaded_image})`;
        document.querySelector("#tempat-img").src = uploaded_image;
    });
    reader.readAsDataURL(this.files[0]);
})