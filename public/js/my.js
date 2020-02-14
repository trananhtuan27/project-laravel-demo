$(document).ready(function () {
    $('#hide-image').click(function () {
        $('.image-product').toggle();
    });

    $('#size-image').change(function () {
        let sizeImage = $(this).val();
        let elementImage = $('.image-thumbnail-product');
       if (sizeImage > 0){
           elementImage.each(function (index ,item) {
             item.width = sizeImage * 50;
           })
       } else {
           alert('error');
       }

    })
});
