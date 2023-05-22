<div class="min-h-screen ml-6 sm:ml-6 w-1/2 h-max flex flex-col justify-center">
    <div class="text-start flex flex-col">
        <p class="mt-6 mb-12 text-2xl leading-8 text-white">
            Casas | Apartamentos | Condomínios
        </p>
        <h5 class="text-4xl font-bold tracking-tight text-white sm:text-4xl">
            A maneira mais fácil <br />de encontrar o seu lar.
        </h5>
    </div>
    <div class="mt-24">
        <div class="flex justify-between">
            <h5 class="text-4xl font-bold tracking-tight text-white sm:text-3xl">
                Melhores ofertas
            </h5>
            <a href="">
                <Image src={{ Vite::asset('resources/assets/icons/Arrowicon.png') }} height=30 width=30
                    alt="Arrow Icon" />
            </a>
        </div>
        <div class="grid grid-flow-col gap-2">
            <x-home-card-hero title="2/4 em Salvador" description="Apartamento em Salvador" applications={31}
                imagesrc="https://cdn.pixabay.com/photo/2016/06/24/10/47/house-1477041_1280.jpg" />
            <x-home-card-hero title="3/4 no RJ" description="Apartamento em Salvador" applications={31}
                imagesrc="https://cdn.pixabay.com/photo/2015/10/20/18/57/furniture-998265_1280.jpg" />
            <x-home-card-hero title="1/4 em São Paulo" description="Apartamento em Salvador" applications={31}
                imagesrc="https://cdn.pixabay.com/photo/2017/09/09/18/25/living-room-2732939_1280.jpg" />
        </div>
    </div>
</div>
