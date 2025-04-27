<section class="py-7 lg:py-24 relative xl:mr-0 lg:mr-5 mr-0">
    <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
        <div class="w-full justify-start items-center xl:gap-12 gap-10 grid lg:grid-cols-2 grid-cols-1">
            <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                <div class="w-full flex-col justify-center items-start gap-8 flex">
                    <div class="flex-col justify-start lg:items-start items-center gap-4 flex">
                        <div
                            class="text-white bg-purple-gradient px-4 py-2 rounded-full text-base font-bold leading-relaxed">
                            WELCOME TO
                        </div>
                        <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                            <h2
                                class="text-purple-gradient text-4xl font-extrabold font-manrope leading-normal lg:text-start text-center">
                                BEM TRILOGI {{ date('Y') }}</h2>
                            <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center">
                                BEM TRILOGY is a student organization that carries out the executive functions of the Trilogy University. We strive to be active, responsive, and constructive through various actions, devotion, and services.</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row gap-4">
                    <button
                        class="sm:w-fit w-full group px-3.5 py-2 bg-indigo-50 hover:bg-indigo-100 rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] transition-all duration-700 ease-in-out justify-center items-center flex">
                        <span
                            class="px-1.5 text-indigo-600 text-sm font-medium leading-6 group-hover:-translate-x-0.5 transition-all duration-700 ease-in-out">Read
                            More</span>
                        <svg class="group-hover:translate-x-0.5 transition-all duration-700 ease-in-out"
                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                            fill="none">
                            <path d="M6.75265 4.49658L11.2528 8.99677L6.75 13.4996" stroke="#4F46E5" stroke-width="1.6"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div x-data="{ videoModalIsOpen: false }">
                        <button x-on:click="videoModalIsOpen = true, $refs.video.play()" type="button"
                            class="inline-flex items-center gap-2 whitespace-nowrap rounded-full bg-purple-gradient border border-purplegbg-purple-gradient p-3 text-center text-sm font-medium tracking-wide text-white transition hover:bg-purple-gradient focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purplegbg-purple-gradient active:bg-purple-gradient">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd"
                                    d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z"
                                    clip-rule="evenodd" />
                            </svg>

                        </button>
                        <div x-cloak x-show="videoModalIsOpen" x-transition.opacity.duration.200ms
                            x-trap.inert.noscroll="videoModalIsOpen"
                            x-on:keydown.esc.window="videoModalIsOpen = false, $refs.video.pause()"
                            x-on:click.self="videoModalIsOpen = false, $refs.video.pause()"
                            class="fixed inset-0 z-30 flex items-center justify-center bg-black/20 p-4 backdrop-blur-md lg:p-8"
                            role="dialog" aria-modal="true" aria-labelledby="videoModalTitle">
                            <!-- Modal Dialog -->
                            <div x-show="videoModalIsOpen"
                                x-transition:enter="transition ease-out duration-300 delay-200"
                                x-transition:enter-start="opacity-0 translate-y-8"
                                x-transition:enter-end="opacity-100 translate-y-0" class="max-w-2xl w-full relative">
                                <!-- Close Button -->
                                <button type="button" x-show="videoModalIsOpen"
                                    x-on:click="videoModalIsOpen = false, $refs.video.pause()"
                                    x-transition:enter="transition ease-out duration-200 delay-500"
                                    x-transition:enter-start="opacity-0 scale-0"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    class="absolute -top-12 right-0 flex items-center justify-center rounded-full bg-surface-alt p-1.5 text-on-surface-strong hover:opacity-75 active:opacity-100 dark:bg-surface-dark-alt dark:text-on-surface-dark-strong"
                                    aria-label="close modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                        stroke="currentColor" fill="none" stroke-width="1.4" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                                <!-- Video -->
                                <video x-ref="video" class="w-full max-w-2xl rounded-radius aspect-video" controls>
                                    <track default kind="captions" srclang="en" src="path to your .vtt file" />
                                    <source src="https://penguinui.s3.amazonaws.com/component-assets/peng.webm"
                                        type="video/webm">
                                    <source src="https://penguinui.s3.amazonaws.com/component-assets/peng.mp4"
                                        type="video/mp4">
                                    Your browser does not support HTML video.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:justify-start justify-center items-start flex">
                <div
                    class="sm:w-[564px] w-full sm:h-[446px] h-full sm:bg-purple-100 rounded-3xl sm:border border-purple-200 relative">
                    <img class="sm:mt-5 sm:ml-5 w-full h-full rounded-3xl object-cover"
                        src="{{ asset('images/images/homepage/foto_bareng3.jpg') }}" alt="about Us image" />
                </div>
            </div>
        </div>
    </div>
</section>