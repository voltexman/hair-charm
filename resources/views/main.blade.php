@extends('layouts.base')

@section('content')
    <section class="snap-start lg:h-screen bg-charm-dark-400 flex flex-col">
        <div class="grow flex flex-col lg:flex-row lg:items-center mx-auto lg:max-w-6xl px-5 py-10 lg:p-0 gap-10 lg:gap-60">
            <div class="text-3xl lg:text-4xl font-[Boldonse] uppercase text-charm-cream-200 tracking-wider leading-12 flex">
                <span class="self-center">Our<br>Products</span>
                <img src="{{ Vite::asset('resources/images/icons/female-long-hair-with-ponytails-light.svg') }}"
                    class="ms-auto h-full w-35" alt="">
            </div>
            <div class="hidden lg:flex flex-col gap-y-2.5">
                <div class="font-[Lora] text-white text-lg">
                    If your business is hair extension, if you use tape hair, if you have to order ready-made product
                    and if you are not completely satisfied with its quality, then this video is for you.
                </div>
                <a href="{{ route('products.training') }}"
                    class="rounded-full me-auto bg-white text-black px-5 py-2.5 mt-5 uppercase">Training</a>
            </div>
        </div>
        <x-product-section.list class="border-y-6 border-charm-cream-300 overflow-hidden">
            <x-product-section.item class="z-10"
                image="https://www.hair-charm.com/templates/jblank/images/bg/blocks/virgin-slavic-hair.jpg"
                :link="route('products.virgin-slavic-hair')">
                <x-slot:title>
                    Vigrin Russian Hair Wholesale
                </x-slot>
                <x-slot:caption>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum neque ea necessitatibus ad quam odit
                    dolore nihil consectetur voluptates porro quo debitis exercitationem praesentium libero quisquam
                    ducimus, soluta deserunt illum!
                </x-slot>
            </x-product-section.item>

            <x-product-section.item class="z-9"
                image="https://www.hair-charm.com/templates/jblank/images/bg/blocks/wefts.jpg" :link="route('products.wefts')">
                <x-slot:title>
                    Wefts
                </x-slot>
                <x-slot:caption>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum neque ea necessitatibus ad quam odit
                    dolore nihil consectetur voluptates porro quo debitis exercitationem praesentium libero quisquam
                    ducimus, soluta deserunt illum!
                </x-slot>
            </x-product-section.item>

            <x-product-section.item class="z-8"
                image="https://www.hair-charm.com/templates/jblank/images/bg/blocks/tape-hair.jpg" :link="route('products.tape-hair')">
                <x-slot:title>
                    Tape Hair
                </x-slot>
                <x-slot:caption>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum neque ea necessitatibus ad quam odit
                    dolore nihil consectetur voluptates porro quo debitis exercitationem praesentium libero quisquam
                    ducimus, soluta deserunt illum!
                </x-slot>
            </x-product-section.item>

            <x-product-section.item class="z-7"
                image="https://www.hair-charm.com/templates/jblank/images/bg/blocks/pre-bonded-hair.jpg" :link="route('products.pre-bonded-hair')">
                <x-slot:title>
                    Pre Bonded Hair
                </x-slot>
                <x-slot:caption>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum neque ea necessitatibus ad quam odit
                    dolore nihil consectetur voluptates porro quo debitis exercitationem praesentium libero quisquam
                    ducimus, soluta deserunt illum!
                </x-slot>
            </x-product-section.item>

            <x-product-section.item class="z-6"
                image="https://www.hair-charm.com/templates/jblank/images/bg/blocks/clip-ins.jpg" :link="route('products.clip-ins')">
                <x-slot:title>
                    Clip-Ins
                </x-slot>
                <x-slot:caption>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur assumenda voluptas maiores sed
                    temporibus, non ab repellendus quis laborum aliquam similique repudiandae harum officiis magni ut
                    obcaecati iusto animi ex!
                </x-slot>
            </x-product-section.item>

            <x-product-section.item class="z-5"
                image="https://www.hair-charm.com/templates/jblank/images/bg/blocks/Bleached-Russian-hair.jpg"
                :link="route('products.bleached-russian-hair')">
                <x-slot:title>
                    Bleached Russian Hair
                </x-slot>
                <x-slot:caption>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ex quod veritatis repudiandae
                    autem, a quaerat culpa sit nihil animi ratione magnam ipsum dolor, sint corporis obcaecati fugiat
                    repellendus possimus.
                </x-slot>
            </x-product-section.item>

            <x-product-section.item class="z-4"
                image="https://www.hair-charm.com/templates/jblank/images/bg/blocks/super-double-drawn-russian-hair.jpg"
                :link="route('products.super-double-drawn-russian-hair')">
                <x-slot:title>
                    Super Double Drawn Russian Hair
                </x-slot>
                <x-slot:caption>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum neque ea necessitatibus ad quam odit
                    dolore nihil consectetur voluptates porro quo debitis exercitationem praesentium libero quisquam
                    ducimus, soluta deserunt illum!
                </x-slot>
            </x-product-section.item>

            <x-product-section.item class="z-3"
                image="https://www.hair-charm.com/templates/jblank/images/bg/blocks/clip-ins.jpg" :link="route('products.gray-russian-hair-wholesale')">
                <x-slot:title>
                    Gray Russian Hair Wholesale
                </x-slot>
                <x-slot:caption>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo est eligendi, voluptatibus ab excepturi
                    cupiditate omnis eos quidem dicta a veniam odio, iusto culpa ex mollitia deserunt expedita ea?
                    Beatae?
                </x-slot>
            </x-product-section.item>
        </x-product-section.list>

        <div class="flex lg:hidden bg-charm-dark-300 flex-col gap-y-2.5 px-5 py-10">
            <div class="font-[Lora] text-white text-lg">
                If your business is hair extension, if you use tape hair, if you have to order ready-made product
                and if you are not completely satisfied with its quality, then this video is for you.
            </div>
            <a href="{{ route('products.training') }}"
                class="rounded-full me-auto bg-white text-black px-5 py-2.5 mt-5 uppercase">Training</a>
        </div>
    </section>

    <section class="snap-start lg:h-screen bg-charm-dark-400 flex flex-col justify-center items-center">
        <div class="grid lg:grid-cols-5 px-5 py-20 lg:p-0 mx-auto lg:max-w-6xl gap-10 lg:gap-40">
            <div class="lg:col-span-3 text-2xl lg:text-3xl lg:text-5xl text-white">
                Slavic hair is the most popular type of hair in the world. Millions of customers in Europe and the
                United States dream of Russian hair extensions.
            </div>
            <div class="lg:col-span-2 text-2xl lg:text-3xl text-white font-black">
                <p class="text-white/70">Where can you get true <span class="text-white">Russian hair</span>,
                    which will last year after year?</p>
                <img src="{{ Vite::asset('resources/images/icons/woman-hair-extended-in-front-of-the-head-light.svg') }}"
                    class="h-35 -my-5" alt="">
                <p class="text-white/70 text-3xl lg:text-4xl">Let us tell
                    <span class="text-white">your</span> our <span class="text-white">secret</span>!
                </p>
            </div>
        </div>
    </section>

    <section
        class="snap-start lg:h-screen relative bg-charm-cream-100 grid lg:grid-cols-2 gap-y-10 justify-center items-center overflow-hidden pt-20 lg:p-0">
        <div class="px-5 lg:px-30">
            <div class="mb-2.5 rounded-full tracking-widest text-xs uppercase font-black">
                About<br>Charm hair<br>company
            </div>

            <h2 class="text-3xl lg:text-4xl text-black uppercase drop-shadow-lg mb-10">
                Russian hair extensions suppliers.
            </h2>
            <p class="font-[Lora] font-semibold text-lg text-black/90">
                <span class="bg-black/80 px-1.5 py-0.5 text-white uppercase">Charm Hair</span> is one of the leaders in
                market for selling REAL <b>raw virgin hair</b>. Our employees make various products from them.
                We are based in Ukraine, work directly with donors and collect "Slavic hair", which we inspect to ensure
                the best quality possible. If you need a direct <b>Russian hair extensions supplier</b> of quality
                goods, without second-hand dealers, then our company is exactly what you were looking for.
            </p>
            <p class="font-[Lora] font-semibold text-lg text-black/90">
                We are professionals and have high qualifications and years of experience, regularly cooperate with
                leading European companies and master new advanced techniques of working with material. Customers around
                the world have already appreciated quality of our work. We work with customers from England, France,
                Italy, Poland, USA and many other countries.
            </p>
        </div>
        <div class="h-full">
            <img src="https://www.hair-charm.com/images/carousel/25589686_185101428738842_1008241013_n.jpg"
                class="object-cover size-full" alt="">
        </div>
    </section>

    <section class="snap-start lg:h-screen bg-charm-cream-100 flex flex-col lg:flex-row overflow-hidden">
        <div
            class="font-[Boldonse] w-full lg:w-20 p-5 lg:px-10 bg-charm-dark-400 flex items-center text-white uppercase tracking-wide lg:tracking-widest flex-none lg:[writing-mode:vertical-lr]">
            There are a lot of the advantages of cooperation with our company. Let’s see the most importan:
        </div>
        <div class="grid lg:grid-cols-3 lg:grid-rows-2 lg:grow">
            <div class="order-2">
                <img src="https://www.hair-charm.com/images/main/krug/1_img.jpg" class="object-cover size-full"
                    alt="">
            </div>
            <div
                class="relative font-[Lora] font-semibold text-lg self-center px-5 py-10 lg:px-10 2xl:p-20 uppercase font-medium order-1">
                <div
                    class="hidden lg:block absolute -left-7 bottom-1/2 -translate-y-1/2 border-14 border-transparent border-e-charm-cream">
                </div>
                <span class="underline font-semibold">One of the most important</span> pluses is working only with
                non-mixed strands. Our principle - "one person - one bulk hair". Therefor, we achieve a homogeneous
                structure of material, our goods are exclusively remy hair extensions. As a result, we get a combed
                quality cut hair that fully complies with the world standards and is ready to hair extension or
                manufacture products.
            </div>
            <div class="order-4">
                <img src="https://www.hair-charm.com/images/main/krug/2_img.jpg" class="object-cover size-full"
                    alt="">
            </div>
            <div
                class="relative font-[Lora] font-semibold text-lg self-center px-5 py-10 lg:px-15 2xl:p-30 uppercase font-medium order-3">
                <div
                    class="hidden lg:block absolute -right-7 bottom-1/2 translate-y-1/2 border-14 border-transparent border-s-charm-cream">
                </div>
                <span class="underline font-semibold">Second important</span>
                point is using only natural materials when processing. Employees disinfect strands and prepare
                for sale with our own technology, without using silicone and other harmful ingredients. For this reason,
                your hairstyle will look attractive for many years.
            </div>
            <div class="order-6">
                <img src="https://www.hair-charm.com/images/main/krug/3_img.jpg" class="object-cover size-full"
                    alt="">
            </div>
            <div
                class="relative font-[Lora] font-semibold text-lg self-center px-5 py-10 lg:px-15 2xl:p-30 uppercase font-medium order-5">
                <div
                    class="hidden lg:block absolute left-1/2 -top-1/2 -translate-y-1/2 -translate-x-1/2 border-14 border-transparent border-b-charm-cream">
                </div>
                <span class="underline font-semibold">Third</span>, what separates us from other companies? It is
                material that is collected from donors. It must intact, healthy, with perfect structure. Subsequently,
                you get a product that does not have damaged scales and looks real on the client's head.
            </div>
        </div>
    </section>

    <section class="snap-start lg:h-screen bg-charm-cream-100 grid lg:grid-cols-2 gap-y-10 pt-20 lg:pt-0">
        <div class="self-center px-5 lg:px-30 2xl:px-50">
            <h2 class="text-2xl lg:text-4xl uppercase drop-shadow-lg mb-10">
                Main virgin shades.<br>Exclusive blond
            </h2>
            <div class="font-[Lora] text-lg font-medium mb-10">
                A great advantage of our company is a wide choice of various shades of strands. There is an opportunity
                to choose from the main virgin shades - this is:
            </div>
            <div class="flex justify-between pb-2.5 border-b border-dashed border-gray-300">
                <span class="text-2xl text-gray-700 font-black">5/0</span>
                <span class="font-[Oswald] text-2xl text-charm-dark-200 uppercase">dark brown</span>
            </div>
            <div class="flex justify-between py-2.5 border-b border-dashed border-gray-300">
                <span class="text-2xl text-gray-700 font-black">6/0</span>
                <span class="font-[Oswald] text-2xl text-charm-dark-200 uppercase">medium brown</span>
            </div>
            <div class="flex justify-between py-2.5 border-b border-dashed border-gray-300">
                <span class="text-2xl text-gray-700 font-black">7/0</span>
                <span class="font-[Oswald] text-2xl text-charm-dark-200 uppercase">light brown</span>
            </div>
            <div class="flex justify-between py-2.5 border-b border-dashed border-gray-300">
                <span class="text-2xl text-gray-700 font-black">8/0</span>
                <span class="font-[Oswald] text-2xl text-charm-dark-200 uppercase">dark blond</span>
            </div>
            <div class="flex justify-between pt-2.5">
                <span class="text-2xl text-gray-700 font-black">9/0</span>
                <span class="font-[Oswald] text-2xl text-charm-dark-200 uppercase">blond</span>
            </div>
            <div class="text-sm lg:text-base font-black uppercase text-gray-700 mt-10">
                In addition, we offer light blonde hair for extensions (#10), prepared using our own production -
                healthy, <span class="bg-black/80 px-1.5 py-1 text-white uppercase">no silicone</span>.
            </div>
        </div>
        <div class="">
            <img src="https://www.hair-charm.com/images/main/table/right_table.jpg.pagespeed.ce.lJg--Wmxhb.jpg"
                class="object-cover size-full" alt="">
        </div>
    </section>

    <section class="snap-start lg:h-screen bg-charm-dark-400 flex flex-col justify-center items-center py-20 lg:p-0">
        <div class="lg:max-w-6xl mx-auto grid lg:grid-cols-5 px-5 lg:p-0 gap-10">
            <div class="lg:col-span-2">
                <h2 class="text-3xl lg:text-4xl text-white uppercase drop-shadow-lg mb-10">
                    Hair extensions manufacture
                </h2>

                <div class="font-[Oswald] text-white/50 leading-6 lg:leading-8 tracking-wide uppercase text-xl font-bold">
                    <x-marker variant="light">Charm Hair</x-marker>
                    company not only sells first-class materials, but also independently produces products from it.
                    We are confident that you will be able to appreciate our
                    <span class="text-white">wigs and ponytails, wefts</span>, which are created by machine or
                    handtied,
                    hair on barrettes and ribbons, individual strands for hair extension.
                </div>
            </div>

            <div
                class="font-[Lora] lg:col-span-3 border-t-8 lg:border-s-8 lg:border-t-0 border-white pt-10 lg:pt-0 lg:ps-10 text-white/90 text-xl lg:text-3xl">
                The entire production process takes place at our manufacture facilities. For production of goods, we
                have created our own hair extensions manufacture, which meets the highest quality standards and meets
                all correct and fair regulations. The best equipment, from miniature sewing needles to professional
                machines, which allows us to create a truly exclusive product! We are ready to offer clients our amazing
                bundles and many other interesting products - full lace wigs, lace closure, lace front wigs, topper made
                with silk, mono top...
            </div>
        </div>
    </section>

    <section class="snap-start lg:h-screen bg-charm-cream-100 flex justify-center items-center py-20 lg:-0">
        <div class="lg:max-w-6xl mx-auto grid lg:grid-cols-5 px-5 lg:p-0 gap-10">
            <div class="lg:col-span-2">
                <h2 class="text-3xl lg:text-4xl uppercase drop-shadow-lg mb-10">
                    Wholesale.<br> Virgin Russian hair
                </h2>

                <div class="font-[Oswald] text-black/60 leading-6 lg:leading-8 tracking-wide uppercase text-xl font-bold">
                    In our salon it is possible to choose any type of material, length and structure
                    <span class="text-black">(wavy, straight, curly hair)</span>. We work both in retail and wholesale.
                    For wholesale buyers who purchase goods from one kilogram, there are always excellent discounts and
                    special conditions for order.
                </div>
            </div>
            <div
                class="font-[Lora] lg:col-span-3 border-t-8 lg:border-s-8 lg:border-t-0 border-black pt-10 lg:pt-0 lg:ps-10 text-black text-xl lg:text-3xl">
                There is always current stock from 14 to 32 inches, which you can be ordered at any time. For ordering
                goods from 40 inches, you just need to create a preliminary request, and we will execute it as soon as
                possible. Ordering <span class="font-normal">wholesale</span> goods, you get quality cuts from 16 to 28
                inches <span class="font-normal italic">(set includes all the lengths of 16, 18 ... 26 and 28
                    inches)</span> of different natural shades. For purchasing strands with one specific color and exact
                length, you just need to order product at retail, telling us all the necessary requirements. Our
                employees will help you to choose goods they match your needs.
            </div>
        </div>
    </section>

    <section class="snap-start lg:h-screen bg-charm-dark-400 flex justify-center items-center py-20 lg:py-0">
        <div class="lg:max-w-6xl lg:mx-auto grid lg:grid-cols-5 px-5 lg:p-0 gap-10">
            <div class="lg:col-span-2">
                <h2 class="text-3xl lg:text-4xl text-white uppercase drop-shadow-lg mb-10">
                    About delivery<br>and payment
                </h2>

                <div class="font-[Oswald] text-white/50 leading-6 lg:leading-8 tracking-wide uppercase text-xl font-black">
                    {{ env('APP_NAME') }} has been working for a long time in the industry of
                    <span class="text-white">Russian hair</span>, payment and delivery of goods are
                    always accurate and trustworthy. You can pay for using bank transfer or by using the
                    <span class="text-white">Western Union</span> payment system. Delivery is made by fast courier
                    service. It is possible to track your order <span class="text-white">at any time</span>.
                </div>
            </div>

            <div
                class="font-[Lora] lg:col-span-3 border-t-8 lg:border-s-8 lg:border-t-0 border-white pt-10 lg:pt-0 lg:ps-10 text-white/90 lg:font-light text-xl lg:text-2xl">
                <p>We send paid goods next day after receiving your payment, if it is available at the moment. To
                    clarify this question you can always by contacting us by phone +380931501651
                    <span class="font-normal italic">(we use Viber and WhatsApp)</span> or email
                    infohaircharm@gmail.com. If you have a large order and we need time to produce it, we will certainly
                    inform you about lead time of your order. Usually, we ship products within 3-5 days from the date of
                    payment.
                </p>
                <p>If you are searching of a reliable supplier of human hair
                    <span class="font-normal italic">(Russian virgin)</span> you need {{ env('APP_NAME') }}. Long-term
                    practice, international trade experience and individual approach to each client are those qualities
                    that our customers value at first. In our hair shop you can buy real Slavic hair that meets the
                    highest requirements and exclude the possibility of fakes. We hope that our company will become your
                    reliable partner. Also hope mutually beneficial cooperation will bring you a lot of positive
                    emotions!
                </p>
            </div>
        </div>
    </section>
@endsection
