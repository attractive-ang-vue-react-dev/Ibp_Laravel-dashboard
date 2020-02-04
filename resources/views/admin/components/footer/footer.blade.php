</body>
<!--====== jquery js ======-->
<script src="{{ URL::asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

<!--====== Bootstrap js ======-->
<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
<!--====== Plugins js ======-->
<script src="{{ URL::asset('assets/js/slick.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

<!--====== Main js ======-->
<script src="{{ URL::asset('assets/js/main.js') }}"></script>

<script>
    var btn = document.getElementById('tbThree-tab');
    btn.onclick = function() {
        var form = document.forms;
        if (form[0].elements.email.value.length > 7) {
            jQuery('#tbTwo-tab').addClass('active');
            jQuery('#tbOne-tab').removeClass('active');
            jQuery("#tbTwo").toggleClass('active show');
            jQuery("#tbOne").removeClass('active show');
        }


    }

    function updateImagesview(id, files) {

        console.log(files);
        for (const file of files) {
            jQuery('#' + id).append(
                '<div class="photo-wrap">' +
                '<a href="#" class="dell">' +
                '<img src="{{ URL::asset("assets/img/delete.png") }}" alt="">' +
                '</a>' +
                '<img src="' + window.URL.createObjectURL(file) + '" alt="">' +
                '</div>');
        }

    }



    function updateImagesviewEdit(id, files) {

        console.log(files);
        files.forEach(file => {
            console.log(file + ' ..... ');
            var path = '/storage/products/' + file;
            if (file == '') {

            } else {

                jQuery('#' + id).append(
                    '<div class="photo-wrap">' +
                    '<a href="#" class="dell">' +
                    '<img src="{{ URL::asset("assets/img/delete.png") }}" alt="">' +
                    '</a>' +
                    '<img src="' + path + '")" alt="">' +
                    '</div>');
            }

        });

    }

    function updateCategories(value) {

        var input_value = document.getElementsByName("product_categories")[0];

        console.log(!input_value.value.includes(value + ","));
        console.log(!input_value.value.includes("," + value));
        if (input_value.value.includes(value + ",") || input_value.value.includes("," + value)) {} else {
            input_value.value += value + ",";
            var category_box = document.getElementById('category-box');
            category_box.innerHTML = category_box.innerHTML + '<a class="fal fa-times" onclick="removeValue(\'product_categories\','+value+',this)">' + categories[value] + '</a>';
        }
    }

    function updateCertificates(value) {

        var input_value = document.getElementsByName("product_certifications")[0];

        console.log(!input_value.value.includes(value + ","));
        console.log(!input_value.value.includes("," + value));
        if (input_value.value.includes(value + ",") || input_value.value.includes("," + value)) {} else {
            input_value.value += value + ",";
            var certificate_box = document.getElementById('certificate-box');
            certificate_box.innerHTML = certificate_box.innerHTML + '<a class="fal fa-times" onclick="removeValue(\'product_certifications\','+value+',this)">' + certificates[value] + '</a>';
        }
    }

    function removeValue(target,value,trigger) {
        var element =   document.getElementById(target);
        element.value = element.value.replace(value+',','');

        trigger.remove()

    }
</script>

<script src="{{ URL::asset('assets/js/intlTelInput.js') }}"></script>

<script>
  var input = document.querySelector("#phone_number");
  window.intlTelInput(input);
</script>
