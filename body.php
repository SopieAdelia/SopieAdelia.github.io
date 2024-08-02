<?php include"body.php";
?>

<section class="section" id="Home">
        <div class="section_container">
            <div class="content">
                <p class="subtitle">HELLO</p>
                <h1 class="title">
                    <!-- I'm <span>Sopie Adelia</span> <br> a <span>Software Development Student</span> -->
                    i'm <span>Sopie Adelia <br> a </span>Software Development Student
                </h1>
                <h2>YUHLEZ Software House</h2>
                <p class="description">
                    Selamat datang di portofolio saya! Saya Adelia, seorang pelajar SMK jurusan PPLG dengan
                    pengalaman dalam desain, pengembangan web, dan pengembangan aplikasi mobile. Saya bersemangat
                    untuk terus belajar dan mengembangkan keterampilan saya di dunia teknologi.
                </p>
                <div class="action_btns">
                    <button class="hire_me">Hire Me</button>
                    <button class="portofolio">portofolio</button>
                </div>
            </div>
            <div class="image">
                <img src="assets/women hijabi2.jpeg" alt="profile">
            </div>
        </div>
</section>

<section class="About" id="About">
        <div class="section_container about_container">
            <div class="about_image">
                <img src="assets/women hijabi2.jpeg" alt="profile_about">
            </div>
            <div class="about_content">
                <h2 class="section_title">About <span>Me</span></h2>
                <p class="section_subtitle">Aspiring Developer!</p>
                <p class="about_details">Sebagai seorang pelajar di jurusan PPLG. Selama di sekolah, saya telah
                    mengembangkan berbagai proyek baik secara mandiri maupun team seperti desain di Figma, pembuatan
                    web profil sekolah, dan aplikasi belajar aksara Jawa berbasis mobile. Saya memiliki minat besar
                    dalam pengembangan web dan aplikasi, dan saya selalu berusaha untuk meningkatkan keterampilan
                    saya dalam bidang ini.
                </p>
                <button class="btn_about">More About</button>
            </div>
        </div>
    </section>

    <section class="project" id="Portofolio">
        <!-- <div class="section_container project_container"> -->
        <h3 class="section_subtitle">Portofolio</h3>
        <p class="section_title"><span>Latest</span> Project</p>
        <div class="card_container">
            <div class="card">
                <img src="assets/portofolio web.jpg" alt="">
                <div class="card_content">
                    <h4>Web Profile Sekolah</h4>
                    <p>Sebuah web informatif yang dirancang dalam sebuah team, web ini untuk memperkenakan profil
                        sekolah, manampilkan informasi akademik, kegiatan, dan berita dengan desain
                        responsif dan interaktif </p>
                </div>
            </div>
            <div class="card">
                <img src="assets/portofolio figma.jpeg" alt="">
                <div class="card_content">
                    <h4>Desain Figma</h4>
                    <p>Prototipe desain UI/UX untuk web resep masakan, yang menampilkan antarmuka pengguna yang intuitif
                        dan estetis, dirancang dengan alat desain figma</p>
                </div>
            </div>
            <div class="card">
                <img src="assets/portofolio apk.jpeg" alt="">
                <div class="card_content">
                    <h4>Aplikasi Pembelajaran Aksara Jawa</h4>
                    <p>Aplikasi mobile untuk membantu pengguna mempelajari aksara jawa dengan berisikan materi beserta
                        contoh dan latihan atau tes, dirancang untuk pemula </p>
                </div>
            </div>
        </div>
    </section>

    <?php require"footer.php";
?>