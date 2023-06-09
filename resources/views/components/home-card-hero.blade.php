<div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="flex justify-center">
        <img src={{ $imagesrc }} alt='Image of property' class='rounded' />
    </div>
    <div class="p-3">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $title }}
            </h5>
        </a>
        <p class="font-normal text-gray-700 dark:text-gray-400">
            {{ $description }}
        </p>
    </div>
</div>
