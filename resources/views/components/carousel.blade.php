@props(['images' => ['image1.jpg', 'image2.jpg', 'image3.jpg']]) <!-- Список зображень -->

<div class="w-full overflow-hidden whitespace-nowrap relative bg-black text-white text-2xl py-2" x-data="marquee()"
    @mouseenter="stopMarquee" @mouseleave="startMarquee">
    <div class="flex whitespace-nowrap will-change-transform" x-ref="marquee">
        <!-- Зображення будуть додаватись через JavaScript -->
    </div>
</div>

<script>
    function marquee() {
        return {
            images: @json($images), // Массив зображень
            speed: 0.3,
            pos: 0,
            marqueeInterval: null,
            init() {
                let marquee = this.$refs.marquee;
                let container = marquee.parentElement;

                // Створення елементів зображень
                this.images.forEach(imageSrc => {
                    let img = document.createElement('img');
                    img.src = imageSrc;
                    img.classList.add('px-2', 'h-full'); // Додаємо клас для відступів і висоти
                    marquee.appendChild(img);
                });

                let firstImage = marquee.querySelector('img');
                let width = firstImage.offsetWidth;
                let repeatCount = Math.ceil(container.offsetWidth / width) + 2;

                // Дублюємо зображення для безперервного руху
                for (let i = 0; i < repeatCount; i++) {
                    this.images.forEach(imageSrc => {
                        let img = document.createElement('img');
                        img.src = imageSrc;
                        img.classList.add('px-2', 'h-full');
                        marquee.appendChild(img);
                    });
                }

                this.startMarquee();
            },
            startMarquee() {
                // Функція для початку анімації
                if (this.marqueeInterval) return; // Якщо анімація вже працює, не запускаємо знову

                const animate = () => {
                    this.pos -= this.speed;
                    let marquee = this.$refs.marquee;
                    let container = marquee.parentElement;
                    let width = marquee.querySelector('img').offsetWidth;

                    if (this.pos <= -width) this.pos = 0;

                    marquee.style.transform = `translateX(${this.pos}px)`;
                    this.marqueeInterval = requestAnimationFrame(animate);
                };
                animate();
            },
            stopMarquee() {
                // Зупинка анімації
                if (this.marqueeInterval) {
                    cancelAnimationFrame(this.marqueeInterval);
                    this.marqueeInterval = null;
                }
            }
        }
    }
</script>
