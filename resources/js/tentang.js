console.log("Tentang.js Loaded");

AOS.init();
let isActive = true;
document.getElementById('btnScroll').addEventListener('click', () => {
    const visiMisi = document.getElementById('visi-misi');
    visiMisi.classList.remove('hidden');
    setTimeout(() => {
        visiMisi.classList.add('opacity-100');
        visiMisi.classList.remove('opacity-0');   
        AOS.refresh();
        visiMisi.scrollIntoView({ behavior: 'smooth' });
        isActive = false;
    }, 5); 
});
window.addEventListener('scroll', () => {
    if (!isActive) {
        const binary = document.getElementById('binary-buddies');
        const visiMisi = document.getElementById('visi-misi');
        const rect = visiMisi.getBoundingClientRect();

        
            binary.classList.remove('hidden');
            setTimeout(() => {
                binary.classList.add('opacity-100');
                binary.classList.remove('opacity-0');
                AOS.refresh();
            }, 10);
            isActive = true; 
        }
    });


    const images = document.getElementById('imagesGanteng');
    const DataFoto = [
        "{{ asset('build/images/tokoh1.jpg') }}",
        "{{ asset('build/images/fotoarief.jpg') }}",
        "{{ asset('build/images/fotoarief.jpg') }}",
        "{{ asset('build/images/fotoarief.jpg') }}",
        "{{ asset('build/images/fotoarief.jpg') }}",
    ];

    let startIndex = 0;

    function wadidaw() {
        images.innerHTML = '';  
        for (let i = 0; i < 3; i++) {
            const index = (startIndex + i) % DataFoto.length;
            const img = document.createElement('img');
            img.src = DataFoto[index];
            img.className = 'rounded-full h-64 w-64 border-4 border-white shadow-md transition-all duration-500 ease-in-out';
            images.appendChild(img);
            if (i === 1) {
                img.classList.add('scale-110', 'ring-4', 'ring-[#5e6f52]');
            } else {
                img.classList.add('opacity-80');
            }
        }
    }

    function slebew(direction) {
        const step = 280;
        if (direction === 'left') {
            startIndex = (startIndex - 1 + DataFoto.length) % DataFoto.length;
        } else if (direction === 'right') {
            startIndex = (startIndex + 1) % DataFoto.length;
        }
        wadidaw();

        const imgs = images.querySelectorAll('img');

        imgs.forEach((img, index) => {
            img.style.transition = 'transform 0.5s ease-in-out';
            if (index === 0) {
                img.style.transform = 'translateX(-20px)';
            } else if (index === 1) {
                img.style.transform = 'translateX(0)';
            } else if (index === 2) {
                img.style.transform = 'translateX(20px)';
            }
        });

        setTimeout(() => {
            imgs.forEach((img) => {
                img.style.transition = 'transform 0s';
                img.style.transform = 'translateX(0)';
            });
        }, 500); // Waktu setelah animasi selesai
    }

    wadidaw();  