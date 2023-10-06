<div class="min-h-fit" style="background: rgba(255, 171, 3, 0.967)">
    <br>
    <div class="container mx-auto p-3 py-10">
        <div class="text-center">
            <h1 class="text-black font-bold leading-tight text-3xl md:text-4xl lg:text-5xl">PAWS</h1>
            <h1 class="text-white font-bold leading-tight text-3xl md:text-4xl lg:text-5xl">VETERINARY CLINIC</h1>
            <h5 class="text-black leading-tight text-lg md:text-xl lg:text-2xl">We take care of your pets</h5>
        </div>
    </div>
    <br><br>
    <div class="container mx-auto p-5">
        <div class="flex gap-8 align-center justify-center">
            <div class="md:w-1/4">
                <div class="md:pt-5 md:mt-5">
                    <p class="font-bold text-dark flex align-center justify-center gap-5 text-xl my-5">
                        <i class="bi bi-heart-pulse font-bold p-4 px-5 rounded-full bg-orange-950 text-white ml-3"></i>
                        <span class="mt-4">Examination</span>

                    </p>
                    <p class="font-bold text-dark flex align-center justify-center gap-5 text-xl my-5">
                        <i
                            class="bi-scissors text-sm md:text-base font-bold p-4 px-5 rounded-full bg-orange-950 text-white"></i>
                        <span class="mt-4">Groomings</span>

                    </p>
                    <p class="font-bold text-dark flex align-center justify-center gap-5 text-xl my-5">
                        <i
                            class="bi-shop text-sm md:text-base font-bold p-4 px-5 rounded-full bg-orange-950 text-white"></i>
                        <span class="mt-4">Accessories</span>

                    </p>
                </div>
            </div>
            <div>
                <img src="img/homepicture-removebg-preview.png" style="height: 300px;" alt="Dog Picture"
                    class="w-full mx-auto hidden md:block">
            </div>
            <div class="md:w-1/4">
                <div class="md:pt-5 md:mt-5">
                    <p class="font-bold text-dark flex align-center justify-center gap-5 text-xl my-5">
                        <i
                            class="bi-activity text-sm md:text-base font-bold p-4 px-5 rounded-full bg-orange-950 text-white"></i>
                        <span class="mt-4">Admissions</span>
                    </p>
                    <p class="font-bold text-dark flex align-center justify-center gap-5 text-xl my-5">
                        <i
                            class="bi-eyedropper text-sm md:text-base font-bold p-4 px-5 rounded-full bg-orange-950 text-white"></i>
                        <span class="mt-4">Vaccination</span>

                    </p>
                    <p class="font-bold text-dark flex align-center justify-center gap-5 text-xl my-5">
                        <i
                            class="bi-thermometer-high text-sm md:text-base font-bold p-4 px-5 rounded-full bg-orange-950 text-white"></i>
                        <span class="mt-4">Diagnostics</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br> <br>
</div>
<div>
    <div class="slideshow-container">
        <div class="mySlides fade" id="services">
            <div class="numbertext">1 / 3</div>
            <img src="img/check-up.jpg" style="width:100%" class="w-full">
            <div class="text">
                <h1 class="text-5xl font-bold text-block">PET CHECK-UP</h1>
                <h2 class="text-3xl text-block font-bold">Assess your pet's general health.</h2>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="img/vaccine.jpg" style="width:100%" class="w-full">
            <div class="text">
                <h1 class="text-5xl font-bold text-block">PET VACCINATION</h1>
                <h2 class="text-3xl text-block font-bold">Protect your pets against devastating and
                    life-threatening
                    diseases.</h2>
            </div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="img/grooming.jpg" style="width:100%" class="w-full">
            <div class="text">
                <h1 class="text-5xl font-bold text-block">PET GROOMING</h1>
                <h2 class="text-3xl text-block font-bold">Ensure your pet's comfort.</h2>
            </div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>

    <div style="text-align:center" class="bg-slate-900 p-5">
        <span class="dot" onclick="currentSlide(1)"></span>&nbsp;
        <span class="dot" onclick="currentSlide(2)"></span>&nbsp;
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</div>
<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    setInterval(() => {
        slideIndex++;
        if (slideIndex > 3) slideIndex = 1;
        currentSlide(slideIndex)
    }, 5000);

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>
