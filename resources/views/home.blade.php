@extends('layout-front.main')
@section('container')


<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__480.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://www.pixel4k.com/wp-content/uploads/2019/03/sunset-mountains-hill-4k_1551644657.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://c0.wallpaperflare.com/preview/246/815/779/4k-wallpaper-clouds-dawn-desktop-background.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://c4.wallpaperflare.com/wallpaper/215/215/815/4k-norway-mountains-fog-wallpaper-thumb.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://c4.wallpaperflare.com/wallpaper/624/555/676/rolling-hills-grassland-wilderness-sky-wallpaper-preview.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
<div class="title">
    <h1 class="font-bold mb-6 mt-6 text-4xl tracking-tight text-center">Kategori Kami</h1>
</div>
<div class="kategori row mb-10">
    <div class="column max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="margin-left:4.5%;">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Show More
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
    <div class="column max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ml-10 mr-10">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Show More
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
    <div class="column max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Show More
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
</div>

<div class="row-artikel">
    <hr class="mb-4">
    <div class="title">
        <h3 class="text-3xl text-center mb-4">New Posts Article</h3>
    </div>
    <div class="column-content ml-14 mr-14 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-6">
        <div class="image-content">
            <img src="https://awsimages.detik.net.id/community/media/visual/2020/04/02/48f3165b-cdb0-4450-b8a4-6cb281c6adcd.jpeg?w=700&q=90" alt="" class="rounded-lg">
        </div>
        <div class="content">
            <h3 class="text-2xl mb-6">Title disini</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae accusamus tempore aut aspernatur saepe minima maiores quis accusantium in praesentium veritatis consectetur, distinctio beatae deleniti, magni quidem minus voluptatem voluptatum qui non dicta harum hic labore veniam. Doloremque et quam dolore officia vero sunt quis laudantium quibusdam, fugit architecto mollitia.</p>
            <a href="#" class="mt-6 float-right inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
            </a>
        </div>
    </div>
    <div class="column-content ml-14 mr-14 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-6">
        <div class="image-content">
            <img src="https://awsimages.detik.net.id/community/media/visual/2020/04/02/48f3165b-cdb0-4450-b8a4-6cb281c6adcd.jpeg?w=700&q=90" alt="" class="rounded-lg">
        </div>
        <div class="content">
            <h3 class="text-2xl mb-6">Title disini</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae accusamus tempore aut aspernatur saepe minima maiores quis accusantium in praesentium veritatis consectetur, distinctio beatae deleniti, magni quidem minus voluptatem voluptatum qui non dicta harum hic labore veniam. Doloremque et quam dolore officia vero sunt quis laudantium quibusdam, fugit architecto mollitia.</p>
            <a href="#" class="mt-6 float-right inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
            </a>
        </div>
    </div>
    <div class="column-content ml-14 mr-14 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-6">
        <div class="image-content">
            <img src="https://awsimages.detik.net.id/community/media/visual/2020/04/02/48f3165b-cdb0-4450-b8a4-6cb281c6adcd.jpeg?w=700&q=90" alt="" class="rounded-lg">
        </div>
        <div class="content">
            <h3 class="text-2xl mb-6">Title disini</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae accusamus tempore aut aspernatur saepe minima maiores quis accusantium in praesentium veritatis consectetur, distinctio beatae deleniti, magni quidem minus voluptatem voluptatum qui non dicta harum hic labore veniam. Doloremque et quam dolore officia vero sunt quis laudantium quibusdam, fugit architecto mollitia.</p>
            <a href="#" class="mt-6 float-right inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
            </a>
        </div>
    </div>
</div>




<style>
    .content{
        width: 60%;
        float: left;
        padding-left: 3%;
    }
    .image-content{
        width: 30%;
        float: left;
    }
    .image-content img{
        max-width:100%;
        height:auto;
    }
    .column-content::after{
        content: "";
        display: table;
        clear: both;
    }
    .column {
        float: left;
        width: 30%;
        padding: 10px;
    }
    .row::after {
        content: "";
        display: table;
        clear: both;
    }
</style>
@endsection
