    AOS.init();
    document.getElementById('btnProfil').addEventListener('click',()=>{
        const Profil = document.getElementById('profil');
        Profil.classList.remove('hidden');
        setTimeout(() => {
            Profil.classList.add('opacity-100');
            Profil.classList.remove('opacity-0');
            AOS.refresh();
            Profil.scrollIntoView({behavior:'smooth'});
    }, 10);
   });
   document.getElementById('btnProfileClose').addEventListener('click',()=>{
      const Profil = document.getElementById('profil');
      Profil.classList.remove('opacity-100');
      Profil.classList.add('opacity-0');
      setTimeout(() => {
            Profil.classList.add('hidden');
            AOS.refresh();
            Profil.scrollIntoView({behavior:'smooth'});
    }, 500);
   })