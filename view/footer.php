<div class="row mb footer">
            By longthph53584
        </div>
    </div>
    <script>
        // Initialize the slide index
        let slideIndex = 0;

        // Show the initial slide
        showSlides(slideIndex);

        // Function to change slides by a specific number
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Function to display the current slide
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        // Function to display the correct slide and update dots
        function showSlides(n) {
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");

            // Wrap around the index if it goes out of bounds
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }

            // Hide all slides
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            // Remove "active" class from all dots
            for (let i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }

            // Show the current slide and add "active" class to the corresponding dot
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

        // Auto play slides
        function autoPlaySlides() {
            let slides = document.getElementsByClassName("mySlides");

            // Hide all slides
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            // Increment slideIndex and reset if it exceeds the number of slides
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }

            // Display the current slide
            slides[slideIndex - 1].style.display = "block";

            // Automatically change slide every 5 seconds
            setTimeout(autoPlaySlides, 5000);
        }

        // Start the auto play
        autoPlaySlides();

    </script>
</body>
</html>