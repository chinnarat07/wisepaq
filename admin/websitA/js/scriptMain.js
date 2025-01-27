jQuery(function() {
    jQuery.ajax({
        url: 'navbar.html',
        dataType: 'html',
        success: function(data) {
            $('#navbar').html(data);
        },
        error: function(xhr, error){
            alert('error. see console for details');
            console.error(error);
        }
    });
    jQuery.ajax({
        url: 'footer.html',
        dataType: 'html',
        success: function(data) {
            $('#footer').html(data);
        },
        error: function(xhr, error){
            alert('error. see console for details');
            console.error(error);
        }
    });
    jQuery.ajax({
        url: 'indexSlider.html',
        dataType: 'html',
        success: function(data) {
            $('#indexSlider').html(data);
        },
        error: function(xhr, error){
            alert('error. see console for details');
            console.error(error);
        }
    });
    });


let slideIndex = 0;
showSlides();



