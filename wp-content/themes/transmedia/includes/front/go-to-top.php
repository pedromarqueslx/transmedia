

<button onclick="topFunction()" id="gotoTop">

    <img src="http://www.ocm.ch/wp-content/uploads/2020/07/arrow-left.svg" style="rotate: 90deg; width: 10px; margin-top: -4px">

</button>

<script>
    //Get the button
    var mybutton = document.getElementById("gotoTop");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
