<?php
/*
Template Name: Signup Template
*/

get_header(); ?>

<div class="template-signup">
    <div class="wrapper" style="background-image: url(<?= get_theme_file_uri('./assets/images/page-bg.jpg') ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image" style="background-image: url(<?= get_theme_file_uri('./assets/images/signup-bg.jpg') ?>)">
                    <div class="text">
                        <p class="text-white">Ciptakan Pengalaman Baru Bersama Kami<br><i>SLTN.co.id</i></p>
                    </div>
                </div>
                <div class="col-md-6 right">

                <img class="img" src="<?= get_theme_file_uri('./assets/images/icon.jpeg') ?>" alt="">

                <div class="input-box">
                    <header style="position: relative; top: -1rem;">Buat Akun Baru</header>
                    <div class="input-field">
                        <input type="text" class="input" id="name" required autocomplete="off">
                        <label for="name">Nama Lengkap</label>
                    </div>
                    <div class="input-field">
                        <input type="text" class="input" id="email" required autocomplete="off">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" class="input" id="password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="input-field">
                        <input type="password" class="input" id="password2" required>
                        <label for="password2">Ulangi Password</label>
                    </div>
                    <div class="checkbox-field d-flex align-items-center" style="margin-bottom: 1rem;">
                    <input type="checkbox" class="checkbox" id="chex" required autocomplete="off" style="margin: .7rem .em .7rem .7rem;">
                        <p style="font-size: .8rem;" id="chex">Saya setuju dengan <a href="#">kebijakan privasi</a></p>
                        </div>
                    <div class="input-field">
                        <input type="submit" class="submit" value="Daftar">
                    </div>
                    <div class="signin">
                        <span>Sudah punya akun? <a href="#">Masuk</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>