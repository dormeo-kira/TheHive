<?php  
include_once 'databaseconnect.php';
session_start();  

if(isset($_POST["login"])){  
  if(empty($_POST["username"]) || empty($_POST["password"])){  
  echo '<script>alert("Both Fields are required")</script>';}  
  else {  
  $username = mysqli_real_escape_string($conn, $_POST["username"]);  
  $password = mysqli_real_escape_string($conn, $_POST["password"]);  
  $query = "SELECT * FROM accounts WHERE username = '$username'";  
  $result = mysqli_query($conn, $query);  
  if(mysqli_num_rows($result) > 0){  
  while($row = mysqli_fetch_array($result))  
  {  
  if(password_verify($password, $row["password"])){  
  //return true;  
  $_SESSION["username"] = $username;  
  header("location:entry.php");  }  
  else{  
  //return false;  
  echo '<script>alert("Wrong User Details")</script>';}}}  
  else{echo '<script>alert("Wrong User Details")</script>';}}}
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@500;700&family=Lobster&display=swap" rel="stylesheet"/>
    
    <title>Alba Iulia | Facultati</title>
    <link rel="icon" type="image/png" href="LogoTheHive.png">
    <link rel="stylesheet" href="css/bootstrap.css">
	
  <link rel="stylesheet" href="style_postcard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
  <body style="
  background-image: url('BG.png');
  
                overflow-y:scroll;">
    

    <div class="nav-container">
        <nav>
            <ul class="mobile-nav">
                <li>
                    <div class="menu-icon-container">
                        <div class="menu-icon">
                            <span class="line-1"></span>
                            <span class="line-2"></span>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="link-logo"></a> <spann></spann><spann></spann><spann></spann><spann></spann>
                </li>
                

                <li>
                    <a href="" class="link-bag"></a> <spann></spann><spann></spann><spann></spann><spann></spann>
                </li>
            </ul>

            <ul class="desktop-nav">
                <li>
                    <a href="index.html" class="link-logo"></a>
                </li>
        
                <lit>
                    <a href="#">About</a> <spann></spann><spann></spann><spann></spann><spann></spann>
                </lit>
                <lit>
                    <a href="#">Contact</a> <spann></spann><spann></spann><spann></spann><spann></spann>
                </lit>
                <lit>
                    <a href="login.php">Login</a> <spann></spann><spann></spann><spann></spann><spann></spann>
                </lit>
                <lit>
                    <a href="register.php">Register</a> <spann></spann><spann></spann><spann></spann><spann></spann>
                </lit>
                
               
                <li>
                    <a href="#" class="link-bag"></a>
                    
                </li>
            </ul>
        </nav>

        <!-- End of navigation menu items -->


   
    	<div class="overlay"></div>
    </div>
    <section class="dark">
	<div class="container-fluid" style="margin-left:18%;
                                      margin-right:-60%;">

		<h1 class="h1 text-center" id="pageHeaderTitle">FACULTATI ALBA IULIA</h1>
		<article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.uab.ro/">
				<img class="postcard__img" src="https://scontent.ftce2-1.fna.fbcdn.net/v/t39.30808-6/275613257_2033753116792589_8644907205764982215_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=SyLlq0MttfsAX8UcWGk&_nc_ht=scontent.ftce2-1.fna&oh=00_AT_wSkbGiuqZwq_-3lvlRd2XqMrBXMixHuysgHkPrdlJtg&oe=62898C35" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="http://stiinteeconomice.uab.ro/">Facultatea de Stiinte Economice</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de ??tiin??e Economice reprezint?? o structur?? didactico-??tiin??ific?? ??i administrativ?? a Universit????ii ???1 Decembrie 1918" Alba Iulia, av??nd rolul de a coordona procesul de ??nv??????m??nt ??i cercetare la specializ??ri din cadrul aceluia??i profil sau profile conexe.
??n cadrul facult????ii i??i desf????oar?? activitatea, ca unitate de baz?? a facult????ii, cu caracter eminamente didactico-??tiin??ific, Departamentul de Administrarea Afacerilor ??i Marketing ??i Departamentul de Finan??e-Contabilitate.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Business</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     4 ani</li>
					<li class="tag__item play blue">
						<a href="http://stiinteeconomice.uab.ro/"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.uab.ro/">
				<img class="postcard__img" src="https://scontent.ftce2-1.fna.fbcdn.net/v/t39.30808-6/275613257_2033753116792589_8644907205764982215_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=SyLlq0MttfsAX8UcWGk&_nc_ht=scontent.ftce2-1.fna&oh=00_AT_wSkbGiuqZwq_-3lvlRd2XqMrBXMixHuysgHkPrdlJtg&oe=62898C35" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="http://stiinteexacte.uab.ro/">Facultatea de Stiinte Exacte si Ingineresti</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de ??tiin??e Exacte ??i Inginere??ti este parte integrat?? a Universit????ii 1 Decembrie 1918, din Alba Iulia, fiind ??i cea mai t??n??r?? dintre facult????ile ce formeaz?? comunitatea academic?? albaiulian??. Facultatea s-a n??scut ca r??spuns la necesit????ile evidente din plan local ??i regional, cu privire la informatizarea, tehnologizarea ??i dezvoltarea de solu??ii viabile ??n domeniul ??tiin??elor inginere??ti. Viziunea, misiunea ??i obiectivele  reflect?? angajamentul nostru fa???? de universitate ??i comunitate. Prin obiectivele propuse, ne dorim s?? devenim prima op??iune pentru elevii, studen??ii, mediul de afaceri ??i industria din regiune.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Inginerie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="http://stiinteexacte.uab.ro/"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://www.uab.ro/">
				<img class="postcard__img" src="https://scontent.ftce2-1.fna.fbcdn.net/v/t39.30808-6/275613257_2033753116792589_8644907205764982215_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=SyLlq0MttfsAX8UcWGk&_nc_ht=scontent.ftce2-1.fna&oh=00_AT_wSkbGiuqZwq_-3lvlRd2XqMrBXMixHuysgHkPrdlJtg&oe=62898C35" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="http://istoriefilologie.uab.ro/">Facultatea de Istorie ??i Filologie</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">??n cadrul Universit????ii ???1 Decembrie 1918" din Alba Iulia, institu??ie cu misiune de ??nv??????m??nt ??i cercetare ??nfiin??at?? ??n anul 1991, func??ioneaz?? ??i Facultatea de Istorie ??i Filologie, cultiv??nd, la Alba Iulia, domeniul ??tiin??elor Umaniste - Filologie ??i Istorie, ??ntr-un spa??iu definitoriu pentru tot ceea ce ??nseamn?? spiritualitatea noastr?? na??ional??. Primele programe ??n domeniul Filologie func??ioneaz?? din anul 1992, diversific??nd aria preocup??rilor din activit????ile de ??nv??????m??nt ??i cercetare. Specializ??rile din domeniile Istorie ??i Filologie, sunt, a??adar, cele mai vechi din Universitate. Ele beneficiaz?? din plin de bog????ia ??i valoarea tezaurului cultural acumulat ??i conservat ??n ora??ul Marii Uniri, consacr??nd institu??ional, la nivel universitar, semnifica??ia special?? pe care Alba Iulia o are pentru istoria na??ional??.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte Umaniste</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="http://istoriefilologie.uab.ro/"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://www.uab.ro/">
				<img class="postcard__img" src="https://scontent.ftce2-1.fna.fbcdn.net/v/t39.30808-6/275613257_2033753116792589_8644907205764982215_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=SyLlq0MttfsAX8UcWGk&_nc_ht=scontent.ftce2-1.fna&oh=00_AT_wSkbGiuqZwq_-3lvlRd2XqMrBXMixHuysgHkPrdlJtg&oe=62898C35" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="http://drept.uab.ro/">Facultatea de Drept si Stiinte Sociale</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Drept si Stiinte Sociale este o institutie de ??nv??????m??nt superior ??i cercetare cu caracter public, integrata sistemului national de ??nvatamant superior, care functioneaza ??n baza Constitutiei Romaniei, a Legii ??nvatamantului ??i Legii 88/1993, a Cartei universitare ??i regulamentelor proprii de func??ionare, elaborate potrivit legii. Facultatea de Drept si Stiin??e Sociale a fost ??nfiintat?? ??n anul 2003, prin Hotararea Guvernului Romaniei nr. 1082 /11.09.2003, publicata ??n Monitorul Oficial al Romaniei, partea I, nr. 687 / 30.09.2003.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte Juridice</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="http://drept.uab.ro/"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.uab.ro/">
				<img class="postcard__img" src="https://scontent.ftce2-1.fna.fbcdn.net/v/t39.30808-6/275613257_2033753116792589_8644907205764982215_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=SyLlq0MttfsAX8UcWGk&_nc_ht=scontent.ftce2-1.fna&oh=00_AT_wSkbGiuqZwq_-3lvlRd2XqMrBXMixHuysgHkPrdlJtg&oe=62898C35" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="http://fto.ro/nou/">Facultatea de Teologie Ortodoxa</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Teologie Ortodox?? din cadrul Universit????ii ???1 Decembrie 1918??? este o institu??ie de stat public?? de ??nv??????m??nt superior ??i cercetare ??n domeniul teologiei. Aceasta este integrat?? ??n sistemul na??ional de ??nv??????m??nt superior ??i func??ioneaz?? ??n baza prevederilor Constitu??iei Rom??niei, a Legii nr. 84/1995 privind ??nv??????m??ntul, a Legii nr. 128/ privind Statutul personalului didactic, a Cartei Universitare ??i a regulamentului propriu de func??ionare.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Teologie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="http://fto.ro/nou/"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>

	</div>


  
</section>
   		 <div class="container-md">
		</div>


    	<div class="intro">
      	<div class="intro-logo">
        <h1 class="hide">
          <span class="logo"><img class="logo-intro" src="LogoTheHive.png" alt="logo">
        </span>
          </h1>
      	</div>
    </div>
    <div class="slider"></div>



   


    <script type="text/javascript">
        document.addEventListener("mousemove", parallax);
        function parallax(e){
          document.querySelectorAll(".object").forEach(function(move){
  
            var moving_value = move.getAttribute("data-value");
            var x = (e.clientX * moving_value) / 250;
            var y = (e.clientY * moving_value) / 250;
  
            move.style.transform = "translateX(" + x + "px) translateY(" + y + "px)";
          });
        }
        </script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
      integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
      crossorigin="anonymous"
    ></script>
    

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>


    <script src="./app.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>