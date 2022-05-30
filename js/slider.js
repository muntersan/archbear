const currentSlideEl = document.querySelector('.slider__current')
const slides = document.querySelectorAll('.swiper-slide')
const currentAnchorEl = document.querySelector('.slider__anchor')


const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    effect: 'fade',
    
  
  
    // Navigation arrows
    navigation: {
      nextEl: '.slider__arrow--right',
      prevEl: '.slider__arrow--left',
    },

    //change number in pagination
    on: {
        transitionEnd: function() {

            //set current index
            let currentIndex = this.realIndex +1

            if (currentIndex < 10) {
                currentIndex = "0" + currentIndex
            }

            currentSlideEl.innerHTML=currentIndex
            console.log(this.activeIndex)

            // change anchor
            const anchorName = slides[this.realIndex].querySelector('.anchor-name')

            currentAnchorEl.innerHTML = anchorName.innerHTML


        }
    }
  
  });


    const slideCounter = () => {

        const totalSlidesEl = document.querySelector('.slider__total')

        const slides = document.querySelector('.swiper-slide')

        let totalSlides = slides.length - 2

        if (totalSlides < 10) {
            totalSlides = "0" + totalSlides
        }

        totalSlidesEl.innerHTML=totalSlides
    }

slideCounter()


const projectSlider = new Swiper('.projects',{
    slidesPerView: 3,
    spaceBetween: 48,
    grabCursor: true,
    freeMode: {
        enabled:true,
    }
})
