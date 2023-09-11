<x-layout>
    <div class="belfordContainer m-6">
        <h2 class="text-3xl text-gray-500 font-semibold text-center  p-4">Belford and Lewis Borrow Pits</h2>
        <div class="flex flex-wrap max-w-5xl m-auto  justify-center lg:justify-between">
            <div class="slideshowContainer max-w-2xl ">
                <figure>
                    <img src="/img/Lewis-1.jpg" alt="Belford Img">
                </figure>
                <div x-data="slideshow()" x-init="init()">
                    <div class="slideshow">
                        <template x-for="(slide, index) in slides" :key="index">
                            <div x-show="index === currentIndex" class="slide">
                                <!-- Place your slide content here -->
                                <img :src="slide.image" :alt="slide.title">
                                <h3 x-text="slide.title"></h3>
                            </div>
                        </template>
                    </div>
                    <div class="thumbnails">
                        <template x-for="(slide, index) in slides" :key="index">
                            <img
                                :src="slide.image"
                                :alt="slide.title"
                                @click="goToSlide(index)"
                                :class="{ 'active': index === currentIndex }"
                            >
                        </template>
                    </div>
                </div>
            </div>
            <article class=" max-w-xs p-4 lg:p-0 flex flex-col">
                <p class="pb-12 text-gray-500">
                    Both Belford and Lewis Borrow Pits share the same entrance off GA SR 204 just West of Bush Road at 1056 Fort Argyle Road, Savannah, Georgia. Current materials consist of Structural Fill, Granular Sand, Septic Drain Field Sand and Topsoil. Some Clays are still available but in limited quantities. Currently (7-1-23) we have approximatel 2.500,000 cubic vards available in Belford and approximately 800,000 cubic yards in Lewis. We accept clean, uncontaminated earth materials such as muck for disposal. View Sample Gradation
                </p>
                <button class="bg-blue px-6 py-2 text-white self-center">VIEW GRADATION REPORTS</button>
            </article>
        </div>
    </div>
</x-layout>
