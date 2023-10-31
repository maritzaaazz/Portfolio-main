@extends('auth.layouts')

@section('content')

@include('components.navbar')


{{-- Hero Section Start --}}
<section id="home" class="pt-0">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2">
                <h1 class="text-base font-semibold text-primary md:text-xl">Hello Everyone 👋, I am <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl">Maritza Angel</span></h1>
                <h2 class="font-medium text-slate-500 text-lg mb-5 lg:text-2xl">College Student & <span class="text-dark">Businesswoman</span></h2>
                <p class="font-medium text-slate-400 mb-10 leading-relaxed">A woman who is studying <span class="text-dark font-bold">Software Engineering</span></p>

                <a href="#" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Let's be Friends!</a>
            </div>
            <div class="w-full self-end px-4 lg:w-1/2">
                <div class="relative mt-10 lg:mt-9 lg:right-0">
                    <img src="images/fotoangel.png" alt="Maritza Angel" class="max-w-full mx-auto animate-fade-in" />
                    <span class="absolute -bottom-5 -z-10 left-1/2 -translate-x-1/2 md:scale-125">
                        <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#5081F0" d="M36.3,-52.7C47.1,-42.2,55.7,-31.6,61,-19C66.2,-6.4,67.9,8.1,62.9,19.5C57.9,30.8,46.1,39,34.5,44.4C22.9,49.7,11.4,52.3,-3.2,56.7C-17.9,61.1,-35.7,67.4,-48.3,62.4C-60.9,57.4,-68.3,41,-68.1,25.8C-67.9,10.7,-60.1,-3.1,-56.3,-19.4C-52.5,-35.6,-52.7,-54.2,-44,-65.3C-35.2,-76.5,-17.6,-80.2,-2.4,-76.9C12.8,-73.6,25.6,-63.2,36.3,-52.7Z" transform="translate(100 100) scale(1.1)" />
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Hero Section End --}}

    {{-- About Section Start --}}
    <section id="about" class="pt-36 pb-32 dark:bg-dark">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-primary text-lg">About Me</h4>
                    <h2 class="font-bold text-dark text-3xl mb-5 max-w-md dark:text-white">A young woman</h2>
                    <p class="font-medium text-base text-secondary max-w-xl">Currently pursuing my education in the Computer Science program at Gadjah Mada University (UGM). I am highly enthusiastic about acquiring knowledge and self-development in the field of information technology.             In addition to my academic pursuits, I actively engage in various student organizations and committees on campus. I believe that extracurricular activities are a great way to sharpen my social, leadership, and teamwork skills. Throughout my time at UGM, I have been part of several organizations and committees that focus on personal development, community service, and technological advancement.
                    I am passionate about continuous learning, growth, and making a positive impact on both my local community and the wider world.</p>
                </div>
                <div class="w-full px-4 lg:w-1/2 mt-7">
                    <h3 class="font-bold text-dark text-3xl mb-4 max-w-md dark:text-white">Let's be Friend!</h3>
                    <p class="font-medium text-base text-secondary max-w-xl">Even though I have mbti INTJ which means an introvert, let's try to make friends and connect with me! Click the icon for more!</p>
                    <div class="flex items-center mt-4">
                        <a href="https://www.linkedin.com/in/maritza-angel-799519249?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white transition ease-in-out duration-300">
                            <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/maritzaaazz" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white transition ease-in-out duration-300">
                            <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>
                        <a href="https://github.com/maritzaaazz" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white transition ease-in-out duration-300">
                            <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>
                        <a href="http://line.me/ti/p/~maritzaaaz" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white transition ease-in-out duration-300">
                            <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LINE</title><path d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63h2.386c.346 0 .627.285.627.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63.346 0 .628.285.628.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.348 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.282.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314"/></svg>
                        </a>
                        <a href="maritzaangel04@gmail.com" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white transition ease-in-out duration-300">
                            <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Gmail</title><path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- About Section End --}}
<!-- Portofolio Section Start -->
<section id="portfolio" class="pt-36 pb-16 bg-slate-100 dark:bg-slate-800">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2 uppercase">Portfolio</h4>
                <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">Latest Project</h2>
                <p class="font-medium text-secondary md:text-lg">Portfolio is a curated collection of one's work, showcasing their skills, accomplishments, and experiences.</p>
            </div>
        </div>

        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto ">
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden dark:shadow-slate-700">
                    <img src="images/portfolio/port1.png" alt="Portfolio1" width="w-full"/>
                </div>
                <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">Portfolio 1</h3>
                <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque magni, totam adipisci inventore sint incidunt.</p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden dark:shadow-slate-700">
                    <img src="images/portfolio/port2.png" alt="Portfolio2" width="w-full"/>
                </div>
                <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">Portfolio 2</h3>
                <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque magni, totam adipisci inventore sint incidunt.</p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden dark:shadow-slate-700">
                    <img src="images/portfolio/port3.png" alt="Portfolio3" width="w-full"/>
                </div>
                <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">Portfolio 3</h3>
                <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque magni, totam adipisci inventore sint incidunt.</p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden dark:shadow-slate-700">
                    <img src="images/portfolio/port4.png" alt="Portfolio4" width="w-full"/>
                </div>
                <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">Portfolio 4</h3>
                <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque magni, totam adipisci inventore sint incidunt.</p>
            </div>
        </div>
    </div>
</section>
<!-- Portofolio Section End -->

        <!-- Clients Section Start -->
        <section id="clients" class="pt-36 pb-32 bg-slate-800 dark:bg-slate-300">
            <div class="container">
                <div class="w-full px-4">
                    <div class="mx-auto text-center mb-16">
                        <h4 class="font-semibold text-lg text-primary mb-2 uppercase">Clients</h4>
                        <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-dark">We have worked together</h2>
                        <p class="font-medium text-slate-400 md:text-lg dark:text-slate-500">Collaborating with companies is the key to success in combining resources and expertise to achieve common goals.</p>
                    </div>
                </div>
                <div class="w-full px-4">
                    <div class="flex flex-wrap justify-center items-center">
                        <a href="google.com" target="_blank" class="max-w-[100px] mx-4 py-4 opacity-60 grayscale transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                            <img src="{{ asset('/images/clients/google.svg') }}" alt="Google">
                        </a>
                        <a href="gojek.com" target="_blank" class="max-w-[120px] mx-4 py-4 opacity-60 grayscale transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                            <img src="{{ asset('/images/clients/gojek.svg') }}" alt="Gojek">
                        </a>
                        <a href="grab.com" target="_blank" class="max-w-[120px] mx-4 py-4 opacity-60 grayscale transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                            <img src="{{ asset('/images/clients/grab.svg') }}" alt="Grab">
                        </a>
                        <a href="tokped.com" target="_blank" class="max-w-[120px] mx-4 py-4 opacity-60 grayscale transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                            <img src="{{ asset('/images/clients/tokopedia.svg') }}" alt="Tokopedia">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients Section Start -->
    
        <!-- Blog Section Start -->
        <section id="blog" class="pt-36 pb-32 bg-slate-100 dark:bg-dark">
            <div class="container">
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h4 class="font-semibold text-lg text-primary mb-2 uppercase">Blog</h4>
                        <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">Latest <Article></Article></h2>
                        <p class="font-medium text-secondary md:text-lg">A blog is an online platform that enables individuals or entities to share information, perspectives, and diverse content with an online audience.</p>
                    </div>
                </div>
    
                <div class="flex flex-wrap">
                    <div class="w-full px-4 lg:w-1/2 xl:w-1/3 justify-center">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-800 dark:shadow-slate-700">
                            <img src="images/blog2.jpg" alt="Programming" class="w-full">
                            <div class="py-8 px-6">
                                <h3>
                                    <a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate dark:text-white">Tips for Learning Programming</a>
                                </h3>
                                <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus eligendi, similique quia molestiae tenetur quisquam dicta, ab nihil impedit sequi aliquam? A nisi tempora quis incidunt architecto itaque earum omnis?</p>
                                <a href="#" class="font-medium text-sm bg-primary py-2 px-4 rounded-lg text-white hover:opacity-80">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-1/2 xl:w-1/3 justify-center">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-800 dark:shadow-slate-700">
                            <img src="images/blog.png" alt="Uiux" class="w-full">
                            <div class="py-8 px-6">
                                <h3>
                                    <a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate dark:text-white">Tips for Becoming a BussinesWoman</a>
                                </h3>
                                <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus eligendi, similique quia molestiae tenetur quisquam dicta, ab nihil impedit sequi aliquam? A nisi tempora quis incidunt architecto itaque earum omnis?</p>
                                <a href="#" class="font-medium text-sm bg-primary py-2 px-4 rounded-lg text-white hover:opacity-80">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-1/2 xl:w-1/3 justify-center">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-800 dark:shadow-slate-700">
                            <img src="https://source.unsplash.com/360x200?programming" alt="Programming" class="w-full">
                            <div class="py-8 px-6">
                                <h3>
                                    <a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate dark:text-white">Tips and Trick</a>
                                </h3>
                                <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus eligendi, similique quia molestiae tenetur quisquam dicta, ab nihil impedit sequi aliquam? A nisi tempora quis incidunt architecto itaque earum omnis?</p>
                                <a href="#" class="font-medium text-sm bg-primary py-2 px-4 rounded-lg text-white hover:opacity-80">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section End -->
    
        <!-- Contact Section Start -->
        <div class="section pt-36 pb-32 dark:bg-slate-800" id="contact">
            <div class="container">
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h4 class="font-semibold text-lg text-primary mb-2 uppercase">Contact</h4>
                        <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">Contact Us<Article></Article></h2>
                        <p class="font-medium text-secondary md:text-lg">Contact Us: Reach out to us for any inquiries or assistance.</p>
                    </div>
                </div>
                <form class="w-full lg:w-2/3 lg:mx-auto">
                    <div class="w-full mb-8 px-4">
                        <label for="name" class="text-base text-primary font-bold">Name</label>
                        <input type="text" id="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"/>
                    </div>
                    <div class="w-full mb-8 px-4">
                        <label for="email" class="text-base text-primary font-bold">Email</label>
                        <input type="email" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"/>
                    </div>
                    <div class="w-full mb-8 px-4">
                        <label for="messege" class="text-base text-primary font-bold">Messege</label>
                        <textarea type="messege" id="messege" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"></textarea>
                    </div>
                    <div class="w-full px-4">
                        <button class="text-base font-semibold w-full text-white bg-primary py-3 px-8 rounded-full hover:opacity-80
                        hover:shadow-lg transition duration-300">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Contact Section End -->
    
        <!-- Footer Start -->
        <footer class="bg-dark pt-24 pb-12">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                        <h2 class="font-bold text-4xl text-white mb-5">angellmaputrii</h2>
                        <h3 class="font-bold text-2xl mb-2">Contact Us</h3>
                        <p>Maritza Angelina Az Zahra</p>
                        <p>Kos Hijau Blimbingsari</p>
                        <p>Yogyakarta, Indonesia</p>
                    </div>
                    <div class="w-full px-4 mb-12 md:w-1/3">
                        <h3 class="font-semibold text-xl text-white mb-5">Blog</h3>
                        <ul class="text-slate-300">
                            <li>
                                <a href="#blog" class="inline-block text-base hover:text-primary mb-2">Programming</a>
                            </li>
                            <li>
                                <a href="#blog" class="inline-block text-base hover:text-primary mb-2">Bussines</a>
                            </li>
                            <li>
                                <a href="#blog" class="inline-block text-base hover:text-primary mb-2">Trick</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full px-4 mb-12 md:w-1/3">
                        <h3 class="font-semibold text-xl text-white mb-5">Link</h3>
                        <ul class="text-slate-300">
                            <li>
                                <a href="#home" class="inline-block text-base hover:text-primary mb-2">Home</a>
                            </li>
                            <li>
                                <a href="#about" class="inline-block text-base hover:text-primary mb-2">About</a>
                            </li>
                            <li>
                                <a href="#portfolio" class="inline-block text-base hover:text-primary mb-2">Portfolio</a>
                            </li>
                            <li>
                                <a href="#clients" class="inline-block text-base hover:text-primary mb-2">Clients</a>
                            </li>
                            <li>
                                <a href="#blog" class="inline-block text-base hover:text-primary mb-2">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full pt-10 border-t border-slate-800">
                    <div class="flex items-center justify-center mb-5">
                        <a href="https://www.linkedin.com/in/maritza-angel-799519249?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white transition ease-in-out duration-300">
                            <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/maritzaaazz" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white transition ease-in-out duration-300">
                            <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>
                        <a href="https://github.com/maritzaaazz" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white transition ease-in-out duration-300">
                            <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>
                        <a href="http://line.me/ti/p/~maritzaaaz" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white transition ease-in-out duration-300">
                            <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LINE</title><path d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63h2.386c.346 0 .627.285.627.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63.346 0 .628.285.628.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.348 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.282.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314"/></svg>
                        </a>
                        <a href="maritzaangel04@gmail.com" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white transition ease-in-out duration-300">
                            <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Gmail</title><path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z"/></svg>
                        </a>
                    </div>
                    <div>
                        <p class="font-medium text-xs text-slate-500 text-center ">Created by <a href="https:/linkedin.com/in/tantowi-shah-hanif-756398138/" target="_blank" class="text-primary font-bold">Maritza Angel</a>, using <a href="https:/tailwindcss.com" target="_blank" class="font-bold text-sky-500">Tailwind CSS</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

@endsection