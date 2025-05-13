AOS.init();
        document.getElementById('reportClick').addEventListener('click', () => {
            const Report = document.getElementById('reportbtn');
            Report.classList.remove('hidden');
            setTimeout(() => {
                Report.classList.add('opacity-100');
                Report.classList.remove('opacity-0');
                AOS.refresh();
                Report.scrollIntoView({
                    behavior: 'smooth'
                });
            }, 10);
        });